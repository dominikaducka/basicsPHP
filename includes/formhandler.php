<?php

 // var_dump($_SERVER["REQUEST_METHOD"]);
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $pet = $_POST["favpet"];
  $pet_name = $_POST["petname"];

  if (empty($firstname)) {
    header("Location: ../index.php?success=false");
    exit();
  }

  try {
      require_once "dbh.inc.php";

      $query = "INSERT INTO users (firstname, lastname, pet_id) VALUES
      (:firstname, :lastname, :pet_id);";

      $stmt = $pdo->prepare($query);

      $stmt->bindParam(":firstname", $firstname);
      $stmt->bindParam(":lastname", $lastname);
      $stmt->bindParam(":pet_id", $pet_id);

      $stmt->execute([]);
      
      $pdo = null;
      $stmt = null;
      
      header("Location: ../index.php?success=true");
      die();
  } catch (PDOException $e) {
      die("Query failed: " . $e->getMessage());
  };

  header("Location: ../index.php?success=true");
 } else {
    header("Location: ../index.php");
 };