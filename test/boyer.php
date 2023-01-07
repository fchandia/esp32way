<!DOCTYPE html>
<html><body>
<?php
//VISUALIZATION WEBPAGE FOR ALL TELEMETRY DATA ON WEBDB ORDER BY LAST DATETIME FIRST LIMITED QTTY = 10

$servername = "www.desarrollaplus.net";
//your Database name
$dbname = "desarro7_boyas";
//Database user
$username = "desarro7_boyer";
//Database user password
$password = "boyasANID2022";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//Select all data oder by last to oldest timestamp
$sql = "SELECT *  FROM telemetry ORDER BY meastime DESC LIMIT 10";

//PRINT ALL TELEMETRY DATA ON HTML TABLE

echo '<table cellspacing="5" cellpadding="5">
      <tr> 
        <td>meastime</td>
        <td>boyaid</td>
        <td>gpslat</td>
        <td>gpslon</td> 
        <td>vbattfanal</td>
        <td>ibattfanal</td>
        <td>vsolarcharg</td>
        <td>isolarcharg</td>
        <td>vmaxfanal</td>
        <td>vminfanal</td>
        <td>imaxfanal</td>
        <td>iminfanal</td>
        <td>vmaxsolar</td>
        <td>vminsolar</td>
        <td>imaxsolar</td>
        <td>iminsolar</td>
        <td>din1</td>
        <td>din2</td>
        <td>din3</td>
        <td>alarmdins</td>
      </tr>';
 
if ($result = $conn->query($sql)) {
    while ($row = $result->fetch_assoc()) {
        $row_meastime = $row["meastime"];
        $row_boyaid = $row["boyaid"];
        $row_gpslat = $row["gpslat"];
        $row_gpslon = $row["gpslon"];
        $row_vbattfanal = $row["vbattfanal"];
        $row_ibattfanal = $row["ibattfanal"];
        $row_vsolarcharg = $row["vsolarcharg"];
        $row_isolarcharg = $row["isolarcharg"];
        $row_vmaxfanal = $row["vmaxfanal"];
        $row_vminfanal = $row["vminfanal"];
        $row_imaxfanal = $row["imaxfanal"];
        $row_iminfanal = $row["iminfanal"];
        $row_vmaxsolar = $row["vmaxsolar"];
        $row_vminsolar = $row["vminsolar"];
        $row_imaxsolar = $row["imaxsolar"];
        $row_iminsolar = $row["iminsolar"];
        $row_din1 = $row["din1"];
        $row_din2 = $row["din2"];
        $row_din3 = $row["din3"];
        $row_alarmdins = $row["alarmdins"];
        
        // Uncomment to set timezone to - 1 hour (you can change 1 to any number)
        //$row_reading_time = date("Y-m-d H:i:s", strtotime("$row_reading_time - 1 hours"));
      
        // Uncomment to set timezone to + 4 hours (you can change 4 to any number)
        //$row_reading_time = date("Y-m-d H:i:s", strtotime("$row_reading_time + 4 hours"));
      
        echo '<tr> 
                <td>' . $row_meastime . '</td>
                <td>' . $row_boyaid . '</td>
                <td>' . $row_gpslat . '</td>
                <td>' . $row_gpslon . '</td> 
                <td>' . $row_vbattfanal . '</td>
                <td>' . $row_ibattfanal . '</td>
                <td>' . $row_vsolarcharg . '</td>
                <td>' . $row_isolarcharg . '</td>
                <td>' . $row_vmaxfanal . '</td>
                <td>' . $row_vminfanal . '</td>
                <td>' . $row_imaxfanal . '</td>
                <td>' . $row_iminfanal . '</td>
                <td>' . $row_vmaxsolar . '</td>
                <td>' . $row_vminsolar . '</td>
                <td>' . $row_imaxsolar . '</td>
                <td>' . $row_iminsolar . '</td>
                <td>' . $row_din1 . '</td>
                <td>' . $row_din2 . '</td>
                <td>' . $row_din3 . '</td>
                <td>' . $row_alarmdins . '</td>
                
              </tr>';
    }
    $result->free();
}

$conn->close();
?> 
</table>
</body>
</html>