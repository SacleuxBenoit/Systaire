<?php
session_start();
include('../../login_database.php');
include('../connection_database.php');

$find_user = $bdd->prepare('SELECT username FROM user WHERE username =:username');
$find_user->bindParam(':username', $_POST['changeUsername']);
$find_user->execute();

$user_found = $find_user->fetch();

if(!$user_found){
    $change_username = $bdd->prepare('UPDATE user SET username = :newUsername WHERE username = :username');
    $change_username->bindParam(':newUsername', $_POST['changeUsername']);
    $change_username->bindParam(':username', $_SESSION['username']);
    $change_username->execute();

    $_SESSION['username'] = $_POST['changeUsername'];

    header('Location: ../../index.php');
}else{
    header('Location: ../../layouts/settings.php');
}

?>