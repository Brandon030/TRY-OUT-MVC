<?php
require_once 'model/Logic.php';
class Controller{
	
	public function __construct() {
		$this->Logic = new Logic();
	}

	public function handleRequest()
	{
		try {
			$op = isset($_REQUEST['op'])?$_REQUEST['op']:NULL;
			switch ($op) {
				case 'createMenuItem':
				$this->collectCreateMenuItem();
				break;
				case 'reads':
				$this->collectReadContacts();
				break;
				case 'bestelling':
				$this->collectReadBestelling($_REQUEST['id']);
				break;
				case 'readDrinken':
				$this->collectReadDrinken();
				break;
				case 'readEten':
				$this->collectReadEten();
				break;
				case 'readReserveringen':
				$this->collectReadReserveringen();
				break;
				case 'readMenuItem':
				$this->collectReadMenuItem($_REQUEST['id']);
				break;
				case 'update':
				$this->collectUpdateContact();
				break;
				case 'updateBestelling':
				$this->collectUpdateBestelling($_REQUEST['id'], $_REQUEST['tid'], $_REQUEST['mic'],$_REQUEST['mp']);
				break;
				case 'deleteDrink':
				$this->collectDeleteDrink($_REQUEST['id']);
				break;
				case 'deleteEten':
				$this->collectDeleteEten($_REQUEST['id']);
				break;
				case 'deleteReservering':
				$this->collectDeleteReservering($_REQUEST['id']);
				break;
				case 'deleteBestelling':
				$this->collectDeleteBestelling($_REQUEST['id']);
				break;
				default:
				$this->collectHome();
				break;
			}			
		} catch (ValidationException $e) {
				$errors = $e->getErrors();

		}
		
	}

	public function collectCreateMenuItem(){
		$this->Logic->createMenuItem();
		include 'view/createMenuItem.php';
	}

	public function collectReadContacts(){
		$contacts = $this->Logic->readContacts();
		include 'view/reads.php';
	}

	public function collectReadDrinken(){
		$drinken = $this->Logic->readDrinken();
		include 'view/overzichtDrinken.php';
	}

	public function collectReadEten(){
		$drinken = $this->Logic->readEten();
		include 'view/overzichtEten.php';
	}
	public function collectReadReserveringen(){
		$reserveringen = $this->Logic->readReserveringen();
		include 'view/overzichtReserveringen.php';
	}
	public function collectReadBestelling($id){
		$bestelling = $this->Logic->readBestellingEnMenu($id);
		include 'view/bestelling.php';
	}

	public function collectReadMenuItem($id){
		$menuitem = $this->Logic->readMenuItem($id);
		include 'view/menuUpdateForm.php';
	}
	
	public function collectUpdateBestelling($id, $tid, $mic, $mp){
		$this->Logic->updateBestelling($id, $tid, $mic, $mp);
		include 'view/updateBestelling.php';
	}		

	public function collectDeleteDrink($id){
		$this->Logic->deleteMenuItem($id);
		include 'view/deleteDrink.php';
	}

	public function collectDeleteEten($id){
		$this->Logic->deleteMenuItem($id);
		include 'view/deleteFood.php';
	}

	public function collectDeleteReservering($id){
		$this->Logic->deleteReservering($id);
		include 'view/deleteReservering.php';
	}

	public function collectDeleteBestelling($id){
		$this->Logic->deleteBestelling($id);
		include 'view/deleteBestelling.php';
	}

	public function collectHome(){
		include './view/home.php';
	}

	public function __destruct(){

	}

}

?>