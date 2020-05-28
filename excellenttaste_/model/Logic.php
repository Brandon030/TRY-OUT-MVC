<?php
require_once 'model/DataHandler.php';

class Logic {

	public function __construct() {
		$this->DataHandler = new Datahandler('localhost','mysql' ,'jersdb' ,'root' ,'');
	}

	public function createMenuItem(){
		if(isset($_POST['form-submitted'])){

            $sgc = $_POST['subgerechtcode'];
            $mic = $_POST['menuitemcode'];
            $naam = $_POST['menuitemnaam'];
            $prijs = $_POST['prijs'];

            $sql = "INSERT INTO menuitem(`subgerechtcode`, `menuitemcode`, `menuitemnaam`, `prijs`) VALUES
            ('".$sgc."','".$mic."','".$naam."','".$prijs."')";
        $this->DataHandler->createData($sql); 

		}
	}

	public function readContacts(){
		$sql = 'SELECT * FROM bestelling';
		$results = $this->DataHandler->readsData($sql); 
		return $results;
	}

	public function readDrinken(){
		$sql = 'SELECT * FROM menuitem WHERE subgerechtcode = "wadr" OR subgerechtcode = "bier" OR subgerechtcode = "frdr"';
		$results = $this->DataHandler->readsData($sql);
		$drinken = $results->fetchall(PDO::FETCH_ASSOC);
		return $drinken;

	}

	public function readEten(){
		$sql = 'SELECT * FROM menuitem WHERE subgerechtcode = "hoge" OR subgerechtcode = "voge" OR subgerechtcode = "nage"';
		$results = $this->DataHandler->readsData($sql);
		$eten = $results->fetchall(PDO::FETCH_ASSOC);
		return $eten;

	}

	public function readReserveringen(){
		$sql = 'SELECT * FROM `reservering` INNER JOIN klant on reservering.klant_id = klant.klant_id';
		$results = $this->DataHandler->readsData($sql);
		$reserveringen = $results->fetchall(PDO::FETCH_ASSOC);
		return $reserveringen;

	}

	public function readMenuItem($id){
		$sql = 'SELECT * FROM menuitem WHERE menuItemCode = "'.$id.'"';
		$results = $this->DataHandler->readData($sql);
		$item = $results->fetch(PDO::FETCH_ASSOC);
		return $item;

	}

	public function updateBestelling($id, $tid, $mic, $mp){
		$sql="INSERT INTO bestelling (`tafel`,`datum`,`tijd`, `reservering_id`, `menuitemcode`, `aantal`, `prijs`) VALUES
		('".$tid."',
		CURRENT_DATE,
		CURRENT_TIME,
		'".$id."',
		'".$mic."',
		aantal+1,
		'".$mp."')";
		$this->DataHandler->updateData($sql);
	}

	public function deleteMenuItem($id){
		$sql = 'DELETE FROM menuitem where menuitemcode = "'.$id.'"';
		$this->DataHandler->deleteData($sql);
	}

	public function deleteReservering($id){
		$sql = 'DELETE FROM reservering where reservering_id = "'.$id.'"';
		$this->DataHandler->deleteData($sql);
	}

	public function deleteBestelling($id){
		$sql = 'DELETE FROM bestelling where bestelling_id = "'.$id.'"';
		$this->DataHandler->deleteData($sql);
	}

	public function readBestellingEnMenu($id){
		$sql = "SELECT bestelling.`tafel`, bestelling.`bestelling_id`,bestelling.`reservering_id`,bestelling.`menuitemcode` as menucodebestelling,bestelling.`aantal`,bestelling.`prijs` as bestelprijs, menuitem.menuitemcode,menuitem.menuitemnaam as menunaam,menuitem.prijs menuprijs,menuitem.subgerechtcode FROM bestelling
LEFT JOIN menuitem ON bestelling.menuitemcode = menuitem.menuitemcode
UNION
SELECT bestelling.`tafel`, bestelling.`bestelling_id`,bestelling.`reservering_id`,bestelling.`menuitemcode` as menucodebestelling,bestelling.`aantal`,bestelling.`prijs` as bestelprijs, menuitem.menuitemcode,menuitem.menuitemnaam as menunaam,menuitem.prijs as menuprijs,menuitem.subgerechtcode FROM bestelling
right JOIN menuitem ON bestelling.menuitemcode = menuitem.menuitemcode ORDER BY subgerechtcode
WHERE bestelling_id=".$id."
";
		$results = $this->DataHandler->readData($sql);
		// $results2 = $this->DataHandler->readsData($sql2);
		$bestellingen = $results->fetchall(PDO::FETCH_ASSOC);
		// $menuitems = $results2->fetchall(PDO::FETCH_ASSOC);
		return $bestellingen;
	}

}
