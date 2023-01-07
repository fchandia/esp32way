<?php

if(isset($_GET["bid"])) {
   $bid = $_GET["bid"];
   $tim = $_GET["tim"];
   $lat = $_GET["lat"];
   $lon = $_GET["lon"];
   $vfa = $_GET["vfa"];
   $ifa = $_GET["ifa"];
   $vpa = $_GET["vpa"];
   $ipa = $_GET["ipa"];
   $vfh = $_GET["vfh"];
   $vfl = $_GET["vfl"];
   $ifh = $_GET["ifh"];
   $ifl = $_GET["ifl"];
   $vph = $_GET["vph"];
   $vpl = $_GET["vpl"];
   $iph = $_GET["iph"];
   $ipl = $_GET["ipl"];
   $di1 = $_GET["di1"];
   $di2 = $_GET["di2"];
   $di3 = $_GET["di3"];
   
  // get value from HTTP GET
/*  http://boyas.desarrollaplus.net/meas.php?bid=boy123&tim=2022-11-17_16:35:20&lat=-32.1234&lon=-72.1234&vfa=24000&ifa=10000&vpa=24000&ipa=10000&vfh=25000&vfl=15000&ifh=9000&ifl=500&vph=25000&vpl=1500&iph=5000&ipl=100&di1=1&di2=0&di3=1      */

   $servername = "www.desarrollaplus.net";
   $username = "desarro7_boyer";
   $password = "boyasANID2022";
   $dbname = "desarro7_boyas";

   // Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);
   // Check connection
   if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
   }

   $sql = "INSERT INTO telemetry (boyaid, meastime, gpslat, gpslon, vbattfanal, ibattfanal, vsolarcharg, isolarcharg, vmaxfanal, vminfanal, imaxfanal, iminfanal, vmaxsolar, vminsolar, imaxsolar, iminsolar, din1, din2, din3) VALUES ('" . $bid . "', '" . $tim . "', '" . $lat . "', '" . $lon . "', '" . $vfa . "', '" . $ifa . "', '" . $vpa . "', '" . $ipa . "', '" . $vfh . "', '" . $vfl . "', '" . $ifh . "', '" . $ifl . "', '" . $vph . "', '" . $vpl . "', '" . $iph . "', '" . $ipl . "', '" . $di1 . "', '" . $di2 . "', '" . $di3 . "')";

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