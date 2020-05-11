<?php
    include('config.php');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * from `users` WHERE `username`='$name' and `email` == '$email' and `password` == '$password';";
    $query = mysqli_query($conn, $sql);
    if(mysqli_num_rows($query) > 0){
        setcookie("user", $name, time() + (86400 * 30));
        header("location:home.php");
    }else{
        echo "<script>alert('Login Credentials are incorrect!');</script>"
        header("location:index.php");
    }
?>
