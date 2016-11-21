<form method="get" action="<?php $_SERVER['PHP_SELF']?>" >
    zoekresultaat : <input type="text" name="zoekRsl">
    <input type="submit">
</form>

<?php

if($_SERVER['REQUEST_METHOD'] == "GET"){
    $zoek = $_GET['zoekRsl'];
    if(!empty($_GET['zoekRsl'])){
        echo "{$zoek}<br>";
    }

    else {
        echo "geef uw zoek resultaat in <br>";
    }}

?>

<br><form method="post" action="<?php $_SERVER['PHP_SELF']?>" >
    naam : <input type="text" name="vnaam">
    vnaam


    <input type="submit">
</form>


