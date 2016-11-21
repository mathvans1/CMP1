<?php require_once 'header.php';?>
  <body>
<?php
$current = 'posts.php';
require_once 'navigatie.php';


?>
    <div class="container">

      <div class="starter-template">
        <?php
           require_once 'connectie.php';

            $sql = "SELECT * FROM posts";

            try{
             $rows = $db->query($sql);
              foreach($rows as $row){
             echo "<div id='posts'>". "Titel: " .$row['titel']."<br>". "Bericht: " . $row['bericht']."<br>". "Auteur: " .$row['auteur']."</div>";
          }
          }
          catch(PDOException $e){
             echo "You faild " .$e;
    }
      ?>
</div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php require_once 'footer.php';?>