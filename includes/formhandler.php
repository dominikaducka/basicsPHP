<?php

//operators
 // var_dump($_SERVER["REQUEST_METHOD"]);
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
  $firstname = htmlspecialchars( $_POST["firstname"]);
  $lastname = htmlspecialchars( $_POST["lastname"]);
  $pets = htmlspecialchars( $_POST["favpet"]);

  if (empty($firstname)) {
    exit();
    header("Location: ../index.php");
  }

  echo "These are the data, that user submitted: ";
  echo"<br>";
  echo $firstname;
  echo "<br>";
  echo $lastname;
  echo "<br>";
  echo $pets;

  header("Location: ../index.php");
 } else {
  header("Location: ../index.php")
 }