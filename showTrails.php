<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
    // Create connection
    $conn = mysqli_connect('localhost', 'root', '', 'einstieg');
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    echo "Connected successfully <br> ";


   $sql = "SELECT * FROM trails";
   $result = mysqli_query($conn, $sql);

   if (mysqli_num_rows($result) > 0) {
     echo "<table>
       <tr>
         <th> id </th>
         <th> Titel </th>
         <th> Beschreibung </th>
         <th> PLZ </th>
         <th> Stadt </th>
       </tr>";
     // output data of each row, mysqli_fetch_assoc ruft die nächste Zeile auf
     while($row = mysqli_fetch_assoc($result)) {
       echo "<tr>
         <td>" . $row["id"] . "</td>
         <td>" . $row["title"] . "</td>
         <td>" . $row["description"] . "</td>
         <td>" . $row["plz"] . "</td>
         <td>" . $row["city"] . "</td>
       ";
     }
     echo "</table>";
   } else {
     echo "0 results";
   }

   mysqli_close($conn);

  }
?>
