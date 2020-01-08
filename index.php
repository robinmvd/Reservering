<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css">
    <title></title>
</head>

    <nav class="top-nav">
        <a  class="home-icon" href="index.php"><img src="img/home.png" alt="home"></a>
    </nav>


    <div class="log-msg">
        <p>
            <?= isset($_SESSION['userId']) ? 'you are logged in!' : 'you are logged out!' ?>
        </p>
    </div>

    <div class="login-out">
        <?php if (isset($_SESSION['userId'])) { ?>
            <form class="logout-form" action="includes/logout.php" method="post">
                <button  class="primary-btn" type="submit" name="logout-submit">Logout</button>
            </form>
        <?php } else { ?>
            <form  class="login-form" action="includes/login.php" method="post">
                <input  class="primary-input-field" type="text" name="mail" placeholder="Username/Email...">
                <input class="primary-input-field" type="password" name="pwd" placeholder="Password">
                <button class="primary-btn" type="submit" name="login-submit">Login</button>
                <a  class="signup-btn" href="signup.php">Signup</a>
            </form>
        <?php } ?>
    </div>
</html>





