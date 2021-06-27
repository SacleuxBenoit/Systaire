<?php
session_start();
include('../login_database.php');
include('../database/connection_database.php');

$find_username = $bdd->prepare('SELECT username FROM user WHERE username = :username');
$find_username->bindParam(':username', $_POST['SettingsPseudo']);
$find_username->execute();
$verify_username = $find_username->fetch();

if(!$verify_username['username']){
    header('Location: ../index.php');
}else{
    $_SESSION['username'] = $_POST['SettingsPseudo'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style_body.css">
    <link rel="stylesheet" href="../css/style_components/components_header.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Systaire - SETTINGS</title>
</head>
<body>
    <?php
        include('../components/header.php');
    ?>
    <div class="container">
        <form action="../database/Settings/settings_rename_database.php" method="post">
            <p>
                <label for="changeUsername">change username :</label>
                <input type="text" name="changeUsername" id="changeUsername">
                <input type="submit" value="Submit">
            </p>
        </form>

        <form action="../database/Settings/settings_changePassword.php" method="post">
            <p>
                <label for="changePassword">change password :</label>
                <input type="text" name="changePassword" id="changePassword">
            </p>

            <p>
                <label for="confirmPassword">confirm password :</label>
                <input type="text" name="confirmPassword" id="confirmPassword">
                <input type="submit" value="Submit">
            </p>
        </form>
    </div>
</body>
</html>