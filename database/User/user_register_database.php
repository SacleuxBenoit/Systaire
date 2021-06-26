<?php
session_start();
include('../../login_database.php');
include('../connection_database.php');

$find_username = $bdd->prepare('SELECT username FROM user WHERE username = :username');
$find_username->bindParam(':username', $_POST['RegisterPseudo']);
$find_username->execute();
$verify_username = $find_username->fetch();

if(!$verify_username && !empty($_POST['RegisterPseudo']) && !empty($_POST['RegisterPass']) && $search_user['username'] !== $_POST['RegisterPseudo']){
    $pass_hash = password_hash($_POST['RegisterPass'], PASSWORD_DEFAULT);
    $user_info = $bdd->prepare('INSERT INTO user(username,pass) VALUES(:RegisterPseudo, :pass)');
    $user_info->bindParam(':RegisterPseudo', $_POST['RegisterPseudo']);
    $user_info->bindParam(':pass', $pass_hash);
    $user_info->execute();
    
    $_SESSION['username'] = $_POST['RegisterPseudo'];
    header('Location: ../../index.php');
}else
{
    header('Location: ../../index.php');
}

?>