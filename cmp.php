<?php

if(isset($_GET["iD"])) {
   $iD = $_GET["iD"];
   $tC = $_GET["tC"];
   $uS = $_GET["uS"];
   $kG = $_GET["kG"];
   
  // get value from HTTP GET
/*http://composys.desarrollaplus.net/WR.php?iD=1&tC=1&uS=user&kG=1&cD=2021-11-17_16:35:20*/

   $servername = "www.desarrollaplus.net";
   $username = "desarro7_develop";
   $password = "CompoESP32";
   $dbname = "desarro7_compost";

   // Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);
   // Check connection
   if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
   }

   $sql = "INSERT INTO composter (compoid, compotemp, compouser, compokg) VALUES ('" . $iD . "', '" . $tC . "', '" . $uS . "', '" . $kG . "')";

   if ($conn->query($sql) === TRUE) {
      echo 0;
   } else {
      echo "Error: " . $sql . " => " . $conn->error;
   }

   $conn->close();
} else {
   echo 1;
}
?>