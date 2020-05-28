<?php include 'header.php'; ?>
<div style="width: 50%;">
<table class="table table-striped">
	<th scope="col">subcode</th>
	<th scope="col">menucode</th>
	<th scope="col">naam</th>
	<th scope="col">prijs</th>
	<th scope="col"><a href="./view/createMenuItemForm.php" style="font-size: 1.2em">+</a></th>
	<th scope="col"></th>
	<?php
foreach ($drinken as $k) {

	echo "<tr>
			<td>".$k['subgerechtcode'] ."</td>
			<td>". $k['menuitemcode']."</td>
			<td>".$k['menuitemnaam']."</td>
			<td>".$k['prijs']."</td>
			<td><a href='?op=readMenuItem&id=".$k['menuitemcode']."'><button class='btn btn-dark'>edit</button></a></td>
			<td><a href='?op=deleteDrink&id=".$k['menuitemcode']."'><button class='btn btn-dark'>verwijder</button></a></td>
			</tr>";
		}

?>
</table>
</div>
<?php include 'footer.php'; ?>