<?php
   $host = "localhost";
   $username = "root";
   $password = null;
   $database = "college";

   $conn = new mysqli($host,$username,$password,$database);
   $result = $conn->connect_error?"Some Error: ".$conn->connect_error:"DB Connected !!";
?>

  
















