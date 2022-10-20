<?php
session_start();

if($_SESSION['login'] !== true) {
    header('Location:/Session/member.php');
    exit();
}

$error = "";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if($_POST['username'] == 'eko' && $_POST['password' == 'eko']){
        //sucess
        $_SESSION['login'] = true;
        $_SESSION['username'] = 'eko';
        header('Location:/Session/member.php');
    }else{
        // gagal
        $error = "Login Gagal";
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if($error !=""){ ?>
        <h2><?php $error ?></h2>
    <?php } ?>

    <h2>Login Fisrt</h2>
    <form action="/Session/login.php" method="post">
        <label for="username">Username : 
            <input type="text" name="username">
        </label>
        <br/>
        <label for="password">Password :
            <input type="text" name="Password">
        </label>
        <br>
        <input type="button" value="Submit">
    </form>
</body>
</html>