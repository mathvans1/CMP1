<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
    nav ul li { float: left; list-style-type: none; }
    nav ul li a { padding: 5px 10px;
        display: block; background: #DDD; color: #333; text-decoration: none; }
    nav ul li.current a { background: #FFF; color: #000; }
    </style>
</head>
<body>

<?php 
    $zoekterm = '';
    if(isset($_GET['q'])){
        $zoekterm = $_GET['q'];
    }
?>


<form method="get">
<input type="text" name="q" placeholder="Zoekterm" value="<?php echo $zoekterm; ?>">
<button type="submit">Zoek</button>

<?php
if($zoekterm){
    echo '<h1>Resultaten voor ' . $zoekterm . '</h1>';
}
?>


</form>

</body>
</html>

