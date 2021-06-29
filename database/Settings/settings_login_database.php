<?php
session_start();
include('../../login_database.php');
include('../connection_database.php');

$_SESSION['username'] = $_POST['SettingsPseudo'];

$user_login = $bdd->prepare('SELECT * FROM user WHERE username = :username');
$user_login->bindParam(':username', $_POST['SettingsPseudo']);
$user_login->execute();
$data_user = $user_login->fetch();
 
if(isset($_POST['SettingsPseudo'])){
    if($_POST['SettingsPseudo'] == $data_user['username'] && password_verify($_POST['SettingsPass'],$data_user['pass'])){
        $_SESSION['username'] = $_POST['SettingsPseudo'];
        $_SESSION['id_user'] = $data_user['id'];
        header('Location: ../../layouts/settings.php');
    }else{
        header('Location: ../../layouts/login_createAccount.php');
   }
 }

 ?> 