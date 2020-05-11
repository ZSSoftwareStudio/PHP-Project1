<?php
    include('config.php');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM `users` WHERE `username` = '$name' AND `email` = '$email' AND `password` = '$password' ";
    $query = mysqli_query($conn, $sql);
    if(mysqli_num_rows($query) > 0){
        setcookie("user", $name, time() + (86400 * 30));
        header("location:home.php");
    }else{
        echo "<script>alert('Login Credentials are incorrect!');</script>";
        header("location:index.php");
    }
?>
