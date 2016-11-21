<?php
    $cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",0,5),
    array("Land Rover",17,15)
    );    

    $cars_table = '';
    foreach ($cars as $key => $car) {

        $class = '';
        if ($car[1] == 0) {
            $class .= 'danger';
        }

        if ($key%2) {
            $class .= 'success';
        }

        $total = $car[1] + $car[2];
        $cars_table .= '<tr class="' . $class . '"><td>' . $car[0] . '</td><td>' . $car[1] . '</td><td>' . $car[2] . '</td><td>' . $total . '</td></tr>';
    }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cars</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h2>Cars</h2>

<table class="table">
<tr>
    <th>Car</th>
    <th>Stock</th>
    <th>Sale</th>
    <th>Total</th>
</tr>
    <?php echo $cars_table; ?>  
</table>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>

