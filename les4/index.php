
<?php
$navigation = [
    'index' => 'Home',
    'about' => 'Over ons',
    'portfolio' => 'Portfolio',
    'contat' => 'Contacteer ons'
];
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset ="UTF-8">
    <titel> Home </titel>
</head>
<body>
<?php
$html = "<ul>";
$current = $_SERVER ['PHP_SELF'];
echo $current;
foreach($navigation as $url => $titel) {
    if($current == "".$url.".php") {
        $html .= "<li class='active>
                                <a href='{$url}.php'>{$titel}</a>
                                </li>";
    } else {
        $html .= "<li>
                                <a href ='{$url}.php'>{$titel}</a>
                                </li>";
    }

}
$html .="<ul>";
echo $html;
?>
</body>
</html>