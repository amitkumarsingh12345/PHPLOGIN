<?php
   if(isset($_GET['clicked'])) {
         include('./conn.php');
         $newname = $_GET['username'];
         $newpassword = $_GET['userpassword'];
         $newemail = $_GET['useremail'];
         $id = $_GET['clicked'];

         $conn->query("UPDATE registration SET 
         User_Name = '$newname',          
         Password = '$newpassword',
         Email = '$newemail'
         WHERE Id=$id");
         header('location:Update.php');
   }
?>