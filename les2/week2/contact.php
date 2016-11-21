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

<?php  if(isset($_POST['send'])) {

    echo $_POST['firstname'] . '<br>';
    echo $_POST['lastname'] . '<br>';
    echo $_POST['email'] . '<br>';
    echo $_POST['password'] . '<br>';
    echo $_POST['message'] . '<br>';

} else { ?>

    <form method="post">
    Voornaam<br/>
    <input type="text" name="firstname" ><br/>
    Naam<br/>
    <input type="text" name="lastname" ><br/>
    E-mail<br/>
    <input type="email" name="email" ><br/>
    Wachtwoord<br/>
    <input type="password" name="password" ><br/>
    Bericht<br/>
    <textarea name="message"></textarea>
    <br/>
    <button type="submit" name="send">Verstuur</button>

<?php } ?>


</form>

</body>
</html>

