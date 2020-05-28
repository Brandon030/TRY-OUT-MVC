<?php include 'header.php'; ?>
<body>
    <form method="POST" style="margin: 20px;">

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="datum">Datum</label>
          <input name="datum" type="date" class="form-control" id="datum">
        </div>
        <div class="form-group col-md-4">
          <label for="tijd">Tijd</label>
          <input name="tijd" type="time" class="form-control" id="tijd">
        </div>
        <div class="form-group col-md-2">
          <label for="tafel">Tafel</label>
          <input name="tafel" type="number" class="form-control" id="tafel">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="klantnaam">Naam</label>
          <input name="klantnaam" type="text" class="form-control" id="klantnaam">
        </div>
        <div class="form-group col-md-4">
          <label for="telefoon">Telefoonnummer</label>
          <input name="telefoon" type="text" class="form-control" id="telefoon">
        </div>
      <div class="form-group col-md-2">
          <label for="aantal">Aantal</label>
          <input name="aantal" type="number" class="form-control" id="aantal">
      </div>

      </div>
      <div class="form-group">
        <label for="allergieen">Allergieën</label>
        <input name="allergieen" type="text" class="form-control" id="allergieen">
      </div>



      <div class="form-group col-md-6">
        <label for="opmerkingen">Opmerkingen</label>
        <textarea name="opmerkingen" class="form-control" id="opmerkingen" rows="3"></textarea>
          <label for="status">Status</label>
          <input name="status" type="number" class="form-control" id="status">
      </div>

     <input type="submit" name="send" class="btn btn-primary">

    </form>
</body>
<?php include 'footer.php'; ?>