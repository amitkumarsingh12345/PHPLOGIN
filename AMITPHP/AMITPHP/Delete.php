<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <style>
      .App{
    display: flex;
    justify-content: center;
    align-items: center;
    padding-top: 10px;
    margin-top: 7%;
}
.formdata {
    font-family: sans-serif;
    display: inline-block;
    font-size: large;
    line-height: 20px;
    padding: 40px 40px;
    border: 2px solid darkgoldenrod;
}
.formdata input{
    width: 400px;
    height: 30px;
    outline: none;
    border-color: darkgoldenrod;
    text-indent: 20px;
    font-size: 20px;
    margin-bottom: 15px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
.formdata button{
    border-color: darkgoldenrod;
    font-size: 20px;
    width: 400px;
    height: 30px;
    background-color: darkgoldenrod;
    color: white;
    border: none;
    margin-top: 10px;
    cursor: pointer;
}
.formdata button:hover{
    background-color: transparent;
    border: 2px solid darkgoldenrod;
    color: black;
}
   </style>
</head>
</html>



<?php
 include('./Footer.php');
   include('./Header.php');
   if(isset($_GET['delet'])) {
      include('./conn.php');
      $conn->query("delete from registration where Id='$_GET[delet]'");
      header('location:Update.php');
   } else if(isset($_GET['edit'])) {
      include('./conn.php');
      $data = $conn->query("SELECT User_Name,Password,Email FROM registration
      where Id='$_GET[edit]'")->fetch_all();
     
      $updateid = $_GET['edit'];
      $name = $data[0][0];
      $password = $data[0][1];
      $email = $data[0][2];

      echo "<div class='App'>
      <form action='./Edit.php' method='get' class='formdata'>
          <p class='username'>User Name</p>
             <input type='text' value='$name' name='username' value/>
           <p class='password'>Password</p>
              <input type='password' value='$password' name='userpassword'/>   
           <p class='email'>Email</p>
               <input type='email' value='$email' name='useremail'/> 
           <p>
                <button type='submit' name='clicked' value='$updateid'>Update</button>  
           </p>         
      </div>
  </div>";
   }
?>