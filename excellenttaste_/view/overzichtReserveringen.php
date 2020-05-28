<?php include 'header.php'; ?>
<div style="width: 50%;">
<table class="table table-striped" style="text-align:center;">
	<th scope="col">reservering_id</th>
	<th scope="col">datum</th>
	<th scope="col">tijd</th>
	<th scope="col">tafel</th>
	<th scope="col">klantnaam</th>
	<th scope="col">aantal_k</th>
	<th scope="col"></th>
	<?php
foreach ($reserveringen as $k) {

	echo "<tr>
			<td>".$k['reservering_id'] ."</td>
			<td>". $k['datum']."</td>
			<td>".$k['tijd']."</td>
			<td><a href='?op=bestelling&id=".$k['reservering_id']."'><span style='border: 4px dotted;'>".$k['tafel']."</span></a></td>
			<td>".$k['klantnaam']."</td>
			<td>".$k['aantal_k']."</td>
			<td><a href='?op=deleteReservering&id=".$k['reservering_id']."'><button class='btn btn-dark'>verwijder</button></a></td>
			</tr>";
}
?>
</table>
</div>
<?php include 'footer.php'; ?>