<?php 
$show_output = false;
$messages = [];

$name = '';
$email = '';
$message = '';

if(isset($_POST['send'])) {
    
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';

    if($name != '' && $email != '' && filter_var($email, FILTER_VALIDATE_EMAIL) !== false) {
        $show_output = true;
    }
    else {
        $messages[] = "Niet alle velden zijn correct ingevuld!";
    }

} 
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h2>Form</h2>

<?php 
    if( count($messages) ) {
        echo '<div class="alert alert-warning">', implode($messages, '<br>'), '</div>';
    }
?>

<?php if($show_output) : ?>

    Naam: <?= $name; ?><br>
    E-mail: <?= $email; ?><br>
    Bericht: <?= $message; ?>

<?php else: ?>

    <form method="post" class="form">
        Naam<br/>
        <input type="text" name="name" class="form-control" value="<?= $name; ?>"><br/>
        E-mail<br/>
        <input type="email" name="email" class="form-control" value="<?= $email; ?>"><br/>
        Bericht<br/>
        <textarea name="message" class="form-control"><?= $message; ?></textarea>
        <br/>
        <button type="submit" name="send" class="btn btn-primary">Verstuur</button>
    </form>
<?php endif; ?>

</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>

