<?php
$navagation = [
    'index.php' => 'Home',
    'create.php' => 'Create',
    'posts.php' => 'Posts',
];
foreach ($navagation as $key => $value)
{
    $attr = '';
    if( $key == $current )
    {
        $attr = ' class="active"';
    }
    $navbar .= '<li' . $attr . '><a href=" '. $key . '">' . $value . '</a></li>';
}

?>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">CMP</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <?php echo $navbar; ?>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>