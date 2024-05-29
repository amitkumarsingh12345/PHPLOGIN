<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Header.css">
</head>
<body>
    <div class="header">
        <div class="navbar">
            <div class="nav-item"><a href='index.php' id='home' name='home'>Home</a></div>
            <div class="nav-item"><a href='SignUp.php' id='sign-up' name='sign-up'>Sign up</a></div>
            <div class="nav-item"><a href='Login.php' id='login' name='login'>Login</a></div>
            <div class="nav-item"><a href='Update.php' id='update' name='update'>Update</a></div>
        </div>
    </div>
</body>

<script>
    console.log(document.cookie);
    if(!document.cookie) {
        document.querySelector('#home').style.display = 'none';
        document.querySelector('#update').style.display = 'none';
    } else {
        document.querySelector('#home').style.display = 'inlineBlock';
        document.querySelector('#update').style.display = 'inlineBlock';
    }
</script>
</html>