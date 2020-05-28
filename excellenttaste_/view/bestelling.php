<?php include 'view/header.php'; ?>
<div class="contentblocks">

<table class="table table-striped" style="text-align:center;">
	<th scope="col">productnaam</th>
	<th scope="col">aantal</th>
	<th scope="col">prijs</th>
	<th scope="col"></th>

	<?php
	foreach ($bestelling as $k) {
	echo "<tr>
			<td>".$k['menucodebestelling'] ."</td>
			<td>". $k['aantal']."</td>
			<td>".$k['bestelprijs']."</td>
			<td><a href='?op=deleteBestelling&id=".$k['bestelling_id']."'><button>verwijder</button></a></td>
			</tr>";
}

	?>


</table>
</div>

<div class="contentblocks">

	<table class="table table-striped" style="text-align:center;">
		<th scope="col">menuitemcode</th>
		<th scope="col">menunaam</th>
		<th scope="col">prijs</th>
		<th scope="col"></th>

		<?php
		foreach ($bestelling as $k) {
		echo "<tr>
				<td>".$k['subgerechtcode'] ."</td>
				<td>".$k['menuitemcode'] ."</td>
				<td><a href='?op=updateBestelling&id=".$_REQUEST['id']."&mic=".$k['menuitemcode']."&tid=2&mp=".$k['menuprijs']."'>". $k['menunaam']."</a></td>
				<td>".$k['menuprijs']."</td>
				</tr>";
	}

		?>
	</table>
</div>
<?php include 'view/footer.php'; ?>