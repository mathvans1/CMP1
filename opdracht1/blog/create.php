<?php require_once 'header.php';?>
  <body>
<?php
$current = 'create.php';
require_once 'navigatie.php';

require_once 'connectie.php';?>
  <div class="container">

    <div class="starter-template">
    <form action="create.php" method="post">
      <div class="form-group">
        <label for="titel">Titel</label>
        <input type="text" name="titelf" class="form-control" id="titel" placeholder="Uw titel graag">
      </div>

      <div class="form-group">
        <label for="bericht">Bericht</label>
        <textarea name="berichtf" class="form-control" placeholder="Geef u kut bericht eens" rows="3"></textarea>
      </div>

      <div class="form-group">
        <label for="auteur">Auteur</label>
        <input type="text" name="auteurf" class="form-control" id="auteur" placeholder="Wie schreef dit bericht?">
      </div>


      <button  type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>


    </div>

  </div><!-- /.container -->


  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php require_once 'footer.php';?>
<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
  $titel = $_POST['titelf'];
  $bericht = $_POST['berichtf'];
  $auteur = $_POST['auteurf'];

  try {
    $sql= "INSERT INTO posts (titel, bericht, auteur)
                       VALUES ('$titel', '$bericht', '$auteur')
                       ";
    echo "laatst toegevoegde id: " . $db->LastInsertId();
    $db->query($sql);
  }catch(PDOException $e){
    echo "error:" . $e->getMessage();
  }
}?>
