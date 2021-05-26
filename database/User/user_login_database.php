<?php
session_start();
include('../../login_database.php');
include('../connection_database.php');

$_SESSION['username'] = $_POST['username'];

$user_login = $bdd->prepare('SELECT * FROM user WHERE username = :username');
$user_login->bindParam(':username', $_POST['LoginPseudo']);
$user_login->execute();
$donnees = $user_login->fetch();
 
if(isset($_POST['LoginPseudo'])){
    if($_POST['LoginPseudo'] == $donnees['username'] && password_verify($_POST['LoginPass'],$donnees['pass'])){
        $_SESSION['username'] = $_POST['LoginPseudo'];
        $_SESSION['id_user'] = $donnees['id'];
        header('Location: ../../index.php');
    }else{
        header('Location: ../../layouts/login_createAccount.php');
   }
 }

 ?> 