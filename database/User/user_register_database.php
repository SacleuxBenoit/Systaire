<?php
session_start();
include('../../login_database.php');
include('../connection_database.php');

$_SESSION['username'] = $_POST['RegisterPseudo'];

if(!empty($_POST['RegisterPseudo']) && !empty($_POST['RegisterPass'])){
    $pass_hash = password_hash($_POST['RegisterPass'], PASSWORD_DEFAULT);
    $user_info = $bdd->prepare('INSERT INTO user(username,pass) VALUES(:RegisterPseudo, :pass)');
    $user_info->bindParam(':RegisterPseudo', $_POST['RegisterPseudo']);
    $user_info->bindParam(':pass', $pass_hash);
    $user_info->execute();
    
    $user_id = $bdd->prepare('SELECT id_user FROM user WHERE username = :username');
    $user_id->bindParam(':username', $_POST['RegisterPseudo']);
    $user_id->execute();

    header('Location: ../../index.php');
}else
{
    header('Location: ../../index.php');
}

?>