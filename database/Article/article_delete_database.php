<?php
session_start();
include('../../login_database.php');
include('../connection_database.php');

if(isset($_SESSION['id_article'])){
    $delete_article = $bdd->prepare('DELETE FROM article WHERE id_article = :id_article');
    $delete_article->bindParam(':id_article', $_SESSION['id_article']);
    $delete_article->execute();

    $delete_comment = $bdd->prepare('DELETE FROM comment WHERE id_article = :id_article');
    $delete_comment->bindParam(':id_article', $_SESSION['id_article']);
    $delete_comment->execute();
    header('Location: ../../index.php');
}else{
    header('Location: ../../index.php');
}

?>