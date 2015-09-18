<?php
error_reporting(-1); # Report all PHP errors
ini_set('display_errors', 1);
?>


<!DOCTYPE html>
<html>
<head>
  <title>xkcd Passwords</title>
  <?php require 'logic.php'; ?>
</head>

<body>
  <h1>A Very Literary xkcd Password Generator</h1>
  <p>The web comic xkcd proposed a method of generating passwords that are easy for people and hard for machines. This app generates xkcd passwords for those with bookish sensibilities.</p>
  <form>
    How many words? (1-9) <input type="text" name="words" maxlength="1">
    <br>
    How many numbers? (0-9) <input type="text" name="nums" maxlength="1">
    <br>
    How many special characters? (0-9) <input type="text" name="specials" maxlength="1">
    <br>
    Which book?
    <br>
    <input type="radio" name="book" value="Pride and Prejudice (Austen)" checked>Pride and Prejudice (Austen)
    <br>
    <input type="radio" name="book" value="Jane Eyre (Brontë)">Jane Eyre (Brontë)
    <br>
    <input type="radio" name="book" value="Middlemarch (Eliot)">Middlemarch (Eliot)
    <br>
    <input type="radio" name="book" value="Greak Expectations (Dickens)">Greak Expectations (Dickens)
    <br>
  </form>
  <img src='images/password_strength.png' alt='xkcd cartoon on passwords'/>
</body>

</html>
