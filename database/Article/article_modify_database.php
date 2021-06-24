<?php
session_start();
include('../../login_database.php');
include('../connection_database.php');

$update_article = $bdd->prepare('UPDATE article SET title = :modifyTitle, smallDesc =:modifySmallDesc, content =:modifyContent, categorie =:modifyCategorie, updatedAT = NOW() WHERE title =:title');
$update_article->bindParam(':modifyTitle', $_POST['modifyTitle']);
$update_article->bindParam(':modifySmallDesc', $_POST['modifySmallDesc']);
$update_article->bindParam(':modifyContent', $_POST['modifyContent']);
$update_article->bindParam(':modifyCategorie', $_POST['modifyCategorie']);
$update_article->bindParam(':title', $_SESSION['title']);
$update_article->execute();
header('Location: ../../index.php');
?>