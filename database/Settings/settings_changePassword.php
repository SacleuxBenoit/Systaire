<?php
session_start();
include('../../login_database.php');
include('../connection_database.php');

$pass_hash = password_hash($_POST['changePassword'], PASSWORD_DEFAULT);

if(!empty($_POST['changePassword']) && $_POST['changePassword'] == $_POST['confirmPassword']){
    $change_password = $bdd->prepare('UPDATE user SET pass =:pass WHERE username =:username');
    $change_password->bindParam(':pass', $pass_hash);
    $change_password->bindParam(':username', $_SESSION['username']);
    $change_password->execute();
    header('Location: ../../layouts/settings.php');
}else{
    header('Location: ../../layouts/settings.php');
}

?>