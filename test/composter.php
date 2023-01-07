<!DOCTYPE html>
<html><body>
<?php

if(isset($_GET["days"])) {
   $days = $_GET["days"];
   
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

$sql = "SELECT id, MAX(lastuse) FROM composimple WHERE lastuse >= DATE_SUB(CURRENT_TIMESTAMP(),INTERVAL $days DAY) GROUP BY id ORDER BY lastuse DESC  ";

echo '<table cellspacing="5" cellpadding="5">
      <tr> 
        <td>COMPOSTERA</td>
        <td>ÚLTIMO_USO</td>
      </tr>';
 
if ($result = $conn->query($sql)) {
    while ($row = $result->fetch_assoc()) {
        $row_id = $row["id"];
        $row_lastuse = $row["MAX(lastuse)"];
        
        // Uncomment to set timezone to - 1 hour (you can change 1 to any number)
        //$row_reading_time = date("Y-m-d H:i:s", strtotime("$row_reading_time - 1 hours"));
      
        // Uncomment to set timezone to + 4 hours (you can change 4 to any number)
        //$row_reading_time = date("Y-m-d H:i:s", strtotime("$row_reading_time + 4 hours"));
      
        echo '<tr> 
                <td>' . $row_id . '</td>
                <td>' . $row_lastuse . '</td>
              </tr>';
    }
    $result->free();
}

$conn->close();
} else {
   echo 1;
}
?> 
</table>
</body>
</html>