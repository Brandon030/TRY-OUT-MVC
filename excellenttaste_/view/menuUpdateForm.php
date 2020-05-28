<body>
	<form action="index.php?" method="POST" style="margin: 20px;">
	  <div class="form-row">
	    <div class="form-group col-md-6">
	      <label for="subgerechtcode">subgerecht code</label>
	      <input name="subgerechtcode" type="text" class="form-control" id="name" value="<?= $menuitem['subgerechtcode'] ?>">
	    </div>

	    <div class="form-group col-md-2">
	      <label for="menuitemcode">menuitem code</label>
	      <input name="menuitemcode" type="text" class="form-control" id="voorletter" value="<?= $menuitem['menuitemcode'] ?>">
	    </div>

	    <div class="form-group col-md-2">
	      <label for="menuitemnaam">naam van item</label>
	      <input name="menuitemnaam" type="text" class="form-control" id="voorvoegsel" value="<?= $menuitem['menuitemnaam'] ?>">
	    </div>

	  <div class="form-group">
	    <label for="prijs">prijs</label>
	    <input name="prijs" type="text" class="form-control" id="woonplaats" value="<?= $menuitem['prijs'] ?>">
	  </div>

	  <button name="send" type="submit" class="btn btn-primary">Opslaan</button>
	</form>
</body>
