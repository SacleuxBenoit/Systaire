<?php
session_start();
include('../login_database.php');
include('../database/connection_database.php');
$_SESSION['username'] = $_POST['SettingsPseudo'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style_components/components_header.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Systaire - SETTINGS</title>
</head>
<body>
    <?php
        include('../components/header.php');
    ?>
    <form action="../database/User/user_settings_database.php" method="post">
        <p>
            <label for="changeUsername">change username :</label>
            <input type="text" name="changeUsername" id="changeUsername">
        </p>

        <p>
            <input type="submit" value="Submit">
        </p>
    </form>
</body>
</html>