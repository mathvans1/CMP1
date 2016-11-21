<?php
require_once 'connection.php';

$sql = "SELECT * FROM studenten";

try{
    $rows = $db->query($sql);
    foreach($rows as $row){
        echo $row['voornaam']."<br>";
    }
}
catch(PDOException $e){
    echo "You faild " .$e;
}

