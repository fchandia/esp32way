<!DOCTYPE html>
<html><body>
<?php

$servername = "www.desarrollaplus.net";

// REPLACE with your Database name
$dbname = "desarro7_compost";
// REPLACE with Database user
$username = "desarro7_composter";
// REPLACE with Database user password
$password = "CompoESP32";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM composter WHERE compodate >= CURDATE() ORDER BY compodate DESC";

echo '<table cellspacing="5" cellpadding="5">
      <tr> 
        <td>KgCompost</td>
        <td>CompostºC</td>
        <td>CompoUser</td>
        <td>CompoID</td> 
        <td>CompoFecha</td>
      </tr>';
 
if ($result = $conn->query($sql)) {
    while ($row = $result->fetch_assoc()) {
        $row_compokg = $row["compokg"];
        $row_compotemp = $row["compotemp"];
        $row_compouser = $row["compouser"];
        $row_compoid = $row["compoid"];
        $row_compodate = $row["compodate"];
        
        // Uncomment to set timezone to - 1 hour (you can change 1 to any number)
        //$row_reading_time = date("Y-m-d H:i:s", strtotime("$row_reading_time - 1 hours"));
      
        // Uncomment to set timezone to + 4 hours (you can change 4 to any number)
        //$row_reading_time = date("Y-m-d H:i:s", strtotime("$row_reading_time + 4 hours"));
      
        echo '<tr> 
                <td>' . $row_compokg . '</td>
                <td>' . $row_compotemp . '</td>
                <td>' . $row_compouser . '</td>
                <td>' . $row_compoid . '</td> 
                <td>' . $row_compodate . '</td>
              </tr>';
    }
    $result->free();
}

$conn->close();
?> 
</table>
</body>
</html>