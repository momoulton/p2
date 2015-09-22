<?php
  $numwords = $_GET['words'];
  $numdigits = $_GET['nums'];
  $numspecs = $_GET['specials'];
  $book = $_GET['book'];
  $display = array();
  $error = "";

  $digits = array('1', '2', '3', '4', '5', '6', '7', '8', '9');
  $specials = array('!', '@', '#', '$', '%', '?', '&', '*');

  if (!empty($numwords) AND (!is_numeric($numwords) OR $numwords < 0 OR $numwords > 9)) {
    $error = "Error: please enter a valid integer 1-9 for the number of words";
  }
  elseif (!empty($numdigits) AND (!is_numeric($numdigits) OR $numdigits < 0 OR $numdigits > 9)) {
    $error= "Error: please enter a valid integer 0-9 for the number of numbers";
  }
  elseif (!empty($numspecs) AND (!is_numeric($numspecs) OR $numspecs < 0 OR $numspecs > 9)) {
    $error = "Error: please enter a valid integer 0-9 for the number of special characters";
  }
  else {
    if ($book = "Pride and Prejudice") {
      $text = file('pride.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    }
    elseif ($book = "Jane Eyre") {
      $text = file('eyre.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    }
    elseif ($book = "Great Expectations") {
      $text = file('expectations.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    }
    else {
      $text = file('middlemarch.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    }
    if (!empty($numdigits)) {
      for ($i=0; $i < $numdigits; $i++) {
        $numchoice = rand(0,count($digits)-1);
        array_push($display, $digits[$numchoice]);
      }
    }
    if (!empty($numspecs)) {
      for ($i=0; $i < $numspecs; $i++) {
        $specchoice = rand(0,count($specials)-1);
        array_push($display, $specials[$specchoice]);
      }
    }
    if (!empty($numwords)) {
      for ($i=0; $i < $numwords; $i++) {
        $textchoice = rand(0,count($text)-1);
        array_push($display, $text[$textchoice]);
      }
    }
    shuffle($display);
  }
 ?>
