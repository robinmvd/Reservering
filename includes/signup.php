<?php

//check of gebruiker op de sumbit knop heeft geklikt
if (isset($_POST['signup-submit'])) {

    require "connection.php";

    $username = $_POST['username'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];

    //check of alle velden zijn ingevuld
    if (empty($username) || empty($email)|| empty($password)|| empty($passwordRepeat)) {
        header("Location: ../signup.php?error=emptyfields&username=".$username."&mail=".$email);
        exit();
    }
}