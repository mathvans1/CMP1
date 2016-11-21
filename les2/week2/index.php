<?php
$current = 'index';

if(isset($_GET['current'])){
    $current = strtolower(trim($_GET['current']));
}

$navigation = [
    'index' => 'Home', 
    'about' => 'Over ons', 
    'portfolio' => 'Portfolio', 
    'contact' => 'Contacteer ons',
    ];

$navbar = '';  
foreach ($navigation as $key => $value)
{
    $attr = '';
    if( $key == $current )
    {
        $attr = ' class="current"';
    }
    $navbar .= '<li' . $attr . '><a href="index.php?current=' . $key . '">' . $value . '</a></li>';
}

?><!DOCTYPE html>
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
<nav>
    <ul>
    <?php echo $navbar; ?>
    </ul>
</nav>

</body>
</html>

