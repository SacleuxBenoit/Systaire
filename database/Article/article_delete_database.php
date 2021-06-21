<?php
session_start();
include('../../login_database.php');
include('../connection_database.php');

$delete_article = $bdd->prepare('DELETE FROM article WHERE id_article = :id_article');
$delete_article->bindParam(':id_article', $_SESSION['id_article']);
$delete_article->execute();
?>