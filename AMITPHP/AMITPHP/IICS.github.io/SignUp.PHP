<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Sign up</title>
     <link rel="stylesheet" type="text/css" href="SignUp.css">

     <style>
        .UserExist {
             color: red;
             text-align: center;
             display: inline-block;
             margin-left: 35%;
         }
     </style>

     <?php
        include('./Header.php');
     ?>
</head>
<body>
   <div class="App">
        <form action="#" method="post" class='formdata'>
            <p class='username'>User Name</p>
               <input type='text' name="username"/>
             <p class='password'>Password</p>
                <input type='password' name="userpassword"/>   
             <p class='email'>Email</p>
                 <input type='email' name="useremail"/> 
             <p>
                  <button>SignUp</button>  
             </p>         
        </div>
    </div>
</body>
</html>


<?php
    if(isset($_POST['username'])) {
        setcookie("user","");
        include('./Header.php');
        include('./conn.php');
        $UserName = $_POST['username'];
        $UserPasword = $_POST['userpassword'];
        $UserEmail =  $_POST['useremail'];
        
        $findUser = $conn->query("SELECT *FROM registration WHERE User_Name='$UserName' AND Password='$UserPasword' AND Email='$UserEmail'")->fetch_all();
        if(count($findUser)>0) {
           echo "
               <h3 class='UserExist'>This Acount Already Exist? Please Login Acount</h3>  <a href='Login.php' id='login' name='login'>Login</a>
           ";
        } else {
            $user = $conn->query("INSERT INTO registration(User_Name,Password,Email)value('$UserName','$UserPasword','$UserEmail')");
            header('location:Login.php');
        }
    }
    include('./Footer.php');
?>


