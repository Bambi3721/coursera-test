<?php

  if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
    $conn = mysqli_connect('localhost', 'root', '', 'einstieg');

    if (!$conn) {
      die("Database connection failed: " . mysqli_connect_error());
    }

    echo "Connected successfully <br> ";

    if (isset($_POST['title']) && isset($_POST['description']) && isset($_POST['plz']) && isset($_POST['city'])){
      $title = $_POST['title'];
      $description = $_POST['description'];
      $plz = test_plz($_POST['plz']);
      $city = $_POST['city'];


      $sql = "INSERT INTO trails (title, description, plz, city) VALUES ('$title', '$description', '$plz', '$city')";

      if(mysqli_query($conn, $sql)){
        echo "Der Trail mit dem Titel $title wurde erfolgreich gespeichert.";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

      mysqli_close($conn);
    }
  }

  function test_plz($plz){
    if($plz > 9999 && $plz < 100000){
      return $plz;
    }else {
      exit("$plz ist keine gültige Postleitzahl");
    }
  }

?>
