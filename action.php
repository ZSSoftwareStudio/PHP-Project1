<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user_email = "Zarifprogrammer@gmail.com";
    $user_password = "12345";

    if($email==$user_email && $password == $user_password){
        setcookie("user", $name, time() + (86400 * 30));
        header("location:home.php");
    }else{
        header("location:index.php");
    }

    
?>