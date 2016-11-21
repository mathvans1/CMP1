<?php
require 'connectie.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Dada</title>
</head>
<body>

<?php
echo 'test';
?>

<form action="insertform.php" method="post">
    <p>Familienaam: <input type="text" name="fnaam"> </p>
    <p> Voornaam: <input type="text" name="vnaam"> </p>
    <p> Email: <input type="text" name="email"> </p>
    <p> bericht: <textarea rows="4" cols="50" name="bericht"></textarea> </p>
    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $familienaam = $_POST['fnaam'];
    $voornaam = $_POST['vnaam'];
    $email = $_POST['email'];
    $bericht = $_POST['bericht'];

    try {
        $sql= "INSERT INTO geg (familienaam, naam, email, comments)
                       VALUES ('$familienaam', '$voornaam', '$email', '$bericht')
                       ";
        $db->query($sql);
        echo "laatst toegevoegde id: " . $db->LastInsertId();
    }catch(PDOException $e){
        echo "error:" . $e->getMessage();
    }
}
