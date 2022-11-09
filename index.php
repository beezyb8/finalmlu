<?php 
    define('__CONFIG__', true);
    require_once "inc/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="css/HOMEPAGE"> -->
    <!-- Need CSS THIS WILL BE HOMEPAGE -->
</head>
<body>
    <?php 
        echo "Hello World, today is: ";
        echo date("Y m d");
    ?>
    <a href="login.php">Login</a>
    <a href="register.php">Register</a>
    <?php require_once "inc/footer.php"; ?>
</body>
</html>