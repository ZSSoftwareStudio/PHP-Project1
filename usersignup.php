<?php
    include('config.php');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    echo $name . $email . $password;
    $sql = "INSERT INTO `users` (`username`, `email`, `password`) VALUES ('$name', '$email', '$password');";
    if(mysqli_query($conn, $sql)){
        setcookie("user", $name, time() + (86400 * 30));
        header("location:home.php");
    }
    
?>