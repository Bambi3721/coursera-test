<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
    $conn = mysqli_connect('localhost', 'root', '', 'einstieg');
    if(mysqli_connect_errno()){
      echo "failed to connect to MySQL: " . mysqli_connect_error();
    }
    if (isset($_POST['title']) && isset($_POST['description']) && isset($_POST['plz']) && isset($_POST['city'])){
      $title = $_POST['title'];
      $description = $_POST['description'];
      $plz = $_POST['plz'];
      $city = $_POST['city'];

      $sql = "INSERT INTO 'trails' ('title', 'description', 'plz', 'city') VALUES ('$title', '$description', '$plz', '$city')";

      $query = mysqli_query($conn, $sql);
      if($query){
        echo "Entry successfull";
      } else {
        echo "Error Occurred";
      }
    }
  }
?>
