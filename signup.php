<?php
require "index.php";
?>

<main>
<h1>Signup</h1>
    <?php
    if (isset($_GET['error'])) {
        if ($_GET['error'] == 'emptyfields') {
            echo '<p>Fill in all fields!</p>';
        }
        else if ($_GET['error'] == 'invalidmail') {
            echo '<p>Fill in a valid e-mail!</p>';
        }
        else if ($_GET['error'] == 'invalidname') {
            echo '<p>Fill in a valid username!</p>';
        }
        else if ($_GET['error'] == 'passwordcheck') {
            echo '<p>Passwords do not match</p>';
        }
        else if ($_GET['error'] == 'usertaken') {
            echo '<p>This username is already taken</p>';
        }
        else if ($_GET['error'] == 'success') {
            echo '<p>Signup successfull</p>';
        }
    }
    ?>
    <form action="includes/signup.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="text" name="mail" placeholder="E-mail">
        <input type="password" name="pwd" placeholder="Password">
        <input type="password" name="pwd-repeat" placeholder="Repeat Password">
        <button type="submit" name="signup-submit">Signup</button>
    </form>
</main>