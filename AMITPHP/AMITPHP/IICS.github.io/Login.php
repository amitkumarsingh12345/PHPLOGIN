<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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
            <p class='email'>Email</p>
                <input type='email' name="useremail"/> 
             <p class='password'>Password</p>
                <input type='password' name="userpassword"/>   
             <p>
                  <button>Login</button>  
             </p>      
        </form>
    </div>
</body>
</html>

<?php
   if(isset($_POST['useremail'])) {
        setcookie("user","");
        $email = $_POST['useremail'];
        $UserPasword = $_POST['userpassword'];
        include('./conn.php');
        $table = $conn->query("SELECT *FROM registration WHERE Password='$UserPasword' AND Email='$email' ")->fetch_all();
        if(count($table)>0) {
            session_start();
            $_SESSION['user'] = $table[0][1];
            header('location:index.php');

            $cookie = [
                'UserPasword' => $UserPasword,
                'UserEmail' => $UserEmail
            ];
           $val = json_encode($cookie);
           setcookie("user",$val);
        } else {
            echo "<h3 class='UserExist'>This Acount Not Exist? Please Sign up Acount</h3>  <a href='SignUp.php' id='sign-up' name='sign-up'>Sign up</a>";
        }  
   }
   include('./Footer.php');
?>