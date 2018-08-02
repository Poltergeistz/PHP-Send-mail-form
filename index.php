<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link href="style.css" rel="stylesheet" type="text/stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.3.3/dist/semantic.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <title>PHP email send</title>
</head>
<body>
<div class="ui green inverted menu">
  <a class="active item">
    <i class="home icon"></i> PHP send email form
  </a>
  </div>
<div class="ui container">
<h2 class="ui header">Spam Machine</h2>
<div class="ui segment">
<h4 class="ui header"> Votre message </h4>
<!-- Form -->
<form action="/sent.php" method="POST">

<!-- Grid -->
<div class="ui grid">
<!-- Column One -->
  <div class="six wide column">
  <div class="field">
<label>Email : </label>
<div class="ui input">
  <input placeholder="Votre e-mail..." type="email" name="email" id="email">
</div>
</div>
</div>
<!-- Column Two -->
  <div class="six wide column">
  <div class"field">
<label>Objet du mail : </label>
  <div class="ui input">
  <input placeholder="Objet du mail..." type="text" name="object" id="object">
</div>
</div>
  </div>
  <!-- Grid End -->
  </div>
<div class="ui form">
  <div class="field">
  <div class="ui horizontal divider"></div>
  <label>Envoyez moi un message ici :</label>
  <!-- Buttons -->
  <div class="ui top attached green label">
  <div class="ui icon buttons">
  <button class="ui basic button"><i class="align left icon"></i></button>
  <button class="ui basic button"><i class="align center icon"></i></button>
  <button class="ui basic button"><i class="align right icon"></i></button>
  <button class="ui basic button"><i class="align justify icon"></i></button>
  <button class="ui basic button"><i class="bold icon"></i></button>
  <button class="ui basic button"><i class="italic icon"></i></button>
  <button class="ui basic button"><i class="underline icon"></i></button>
</div>
</div> 
    <textarea maxlength="500" name="message" placeholder="Votre message ici. 500 characters max" style="resize: none; margin-top: 0.5em;"></textarea>
  </div>
<input class="ui button" type="submit" name="envoyer">
<div class="ui icon buttons">
  <button class="ui button"><i class="linkify icon"></i></button>
  <button class="ui button"><i class="smile outline icon"></i></button>
  <button class="ui button"><i class="paperclip icon"></i></button>
</div>
</div>

</form>
<!-- Form end -->
</div>
<?php 
$email = $_POST['email'];
$object = $_POST['object'];
$message = $_POST['message'];
mail($email,$object,$message);
?>
<?php
// $email 
function validateEmail($email) {

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // invalid emailaddress
    echo "Adresse email incorrecte !";
}
echo "Message envoyé";
}
?>

<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.3.3/dist/semantic.min.js"></script>
</body>
</html>