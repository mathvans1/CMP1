<?php
$host = "localhost";
$dbname = "db_cmp1";
$username = "root";
$pass = "root";

$dns = "mysql:host={$host};dbname={$dbname}";

try{
    $db = new PDO($dns, $username, $pass);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Great succes";
}catch(PDOException $e){
    echo "Errormessage: ". $e;
};
