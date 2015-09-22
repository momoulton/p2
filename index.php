<?php
#error_reporting(-1); # Report all PHP errors
#ini_set('display_errors', 1);
?>


<!DOCTYPE html>
<html>
<head>
  <title>xkcd Passwords</title>
  <link rel="stylesheet" href="style.css" type="text/css">
  <?php require 'logic.php'; ?>
</head>

<body>
  <h1>A Very Literary xkcd Password Generator</h1>
  <p>The web comic xkcd proposed a method of generating passwords which are easy for people to remember and hard for machines to guess. This app generates xkcd passwords for those with bookish sensibilities.</p>
  <h3><?php  for ($i = 0; $i < count($display); $i++) {
    echo $display[$i] . " ";
  }
  ?></h3>
  <div id="error"><?php echo $error; ?></div>
  <br>
  <form method="GET" action="index.php" >
    How many words? (0-9) <input type="text" name="words" maxlength="1">
    <br><br>
    How many numbers? (0-9) <input type="text" name="nums" maxlength="1">
    <br><br>
    How many special characters? (0-9) <input type="text" name="specials" maxlength="1">
    <br><br>
    Which book?
    <br>
    <input type="radio" name="book" value="Pride and Prejudice" checked>Pride and Prejudice (Austen)
    <br>
    <input type="radio" name="book" value="Jane Eyre">Jane Eyre (Bront&#xEB;)
    <br>
    <input type="radio" name="book" value="Middlemarch">Middlemarch (Eliot)
    <br>
    <input type="radio" name="book" value="Great Expectations">Great Expectations (Dickens)
    <br><br>
    <input type='submit' value='Generate a password'>
  </form>
  <br>
  <img src='images/password_strength.png' alt='xkcd cartoon on passwords'/>
</body>

</html>
