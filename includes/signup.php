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
    //Check of er een juist emailadres is ingevuld
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signup.php?error=invalidmail&username=".$username);
        exit();
    }
    //Check of username de juiste tekens bevat
    else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../signup.php?error=invalidname&mail=".$email);
        exit();

    }
}