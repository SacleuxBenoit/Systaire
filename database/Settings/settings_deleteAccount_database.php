<?php
session_start();
include('../../login_database.php');
include('../connection_database.php');

$delete_account = $bdd->prepare('DELETE FROM user WHERE username =:username');
$delete_account->bindParam(':username', $_SESSION['username']);
$delete_account->execute();
header('location: ../../index.php');
?>