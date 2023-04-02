<?php
session_start();

$connection = mysqli_connect("localhost:8080", "root", "", "adminpanel");

if (isset($_POST['registerbtn'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];

    if ($password === $cpassword) {
        $query = "INSERT INTO register (username,email,password) values('$username','$email','$password')";
        $query_run = mysqli_query($connection, $query);

        if ($query_run) {
            //echo save
            $_SESSION['success'] = "Admin Profile Added";
            header('Location: register.php');
        } else {
            //echo not save
            $_SESSION['status'] = "Admin Profile Not Added";
            header('Location: register.php');
        }
    } else {
        $_SESSION['status'] = "Password Not Match";
            header('Location: register.php');
    }
}
