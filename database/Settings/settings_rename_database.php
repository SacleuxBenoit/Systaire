<?php
session_start();
include('../../login_database.php');
include('../connection_database.php');

$change_username = $bdd->prepare('UPDATE user SET username = :newUsername WHERE username = :username');
$change_username->bindParam(':newUsername', $_POST['changeUsername']);
$change_username->bindParam(':username', $_SESSION['username']);
$change_username->execute();
header('Location: ../../index.php');
?>