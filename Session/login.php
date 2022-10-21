<?php 
    session_start();
    
    if($_SESSION['login'] == true){
    header('Location:/session/member.php');
    exit();
}

    $error = "";
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if($_POST['username'] == 'budi' && $_POST['password'] == 'budi'){
            //sucess
            $_SESSION['login'] = true;
            $_SESSION['username'] = 'budi';
            header('Location : /session/member.php');
            exit();
        }else{
            //gagal
            $error = "LOGIN GAGAL";
        }
    }
?>



<html>
    <body>
        <?php if($error != ""){?>
            <h2><?= $error ?></h2>
        <?php }?>

        <h1>Register</h1>
        <form action="/session/login.php" method="post">
        <label for="username">Username :
            <input type="text" name="username">
        </label>
        <br/>

        <label for="password">Password :
            <input type="text" name="password">
        </label>
        <br>
        <input type="submit" value="Login">
        </form>
    </body>
</html>
