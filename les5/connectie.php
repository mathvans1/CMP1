<?php
$host = "localhost";
$dbname = "cmp1_les5";
$username = "root";
$pass = "root";

$dns = "mysql:host={$host};dbname={$dbname}";

try{
    $db = new PDO($dns, $username, $pass);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "conncetion database succesful";
    echo '</br>';
}catch(PDOException $e){
    echo "Errormessage: ". $e;
};
