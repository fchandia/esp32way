<?php

if(isset($_GET["g0"])) {
   $g0 = $_GET["g0"];
   $g1 = $_GET["g1"];
   $g2 = $_GET["g2"];
   $g3 = $_GET["g3"];
   
 // get value from HTTP GET
/* http://lowcostcontrol-production.up.railway.app/gpRW.php?g0=1&g1=1&g2=1&g3=1 */

   $servername = "containers-us-west-142.railway.app";
   $username = "root";
   $password = "6EtdzqGS5rdglKSBzCPL";
   $dbport = "6774";
   $dbname = "esp32";

   // Create connection
   $conn = new mysqli($servername.':'.$dbport, $username, $password, $dbname);
   // Check connection
   if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
   }

   $sql = "UPDATE gpios SET (.'$g0'., .'$g1'., .'$g2'., .'$g3'.)";

   if ($conn->query($sql) === TRUE) {
      echo 0;
   } else {
      echo "Error: " . $sql . " => " . $conn->error;
   }

   $conn->close();
} else {
   echo 89;
}
?>
