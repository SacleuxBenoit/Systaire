<?php
session_start();
include('../../login_database.php');
include('../connection_database.php');

$select_id_user = $bdd->prepare('SELECT id_user FROM user WHERE username = :username');
$select_id_user->bindParam(':username', $_SESSION['username']);
$select_id_user->execute();

$fetch_id_user = $select_id_user->fetch();

if(!empty($_POST['title']) && !empty($_POST['smallDesc']) && !empty($_POST['content']) && !empty($_POST['categorie'])){
    $create_article = $bdd->prepare('INSERT INTO articles(id_user,title,smallDesc,content,categorie,createdAT) VALUES(:id_user,:title,:smallDesc,:content,:categorie,NOW())');
    $create_article->bindParam(':id_user',$fetch_id_user['id_user']);
    $create_article->bindParam(':title', $_POST['title']);
    $create_article->bindParam(':smallDesc', $_POST['smallDesc']);
    $create_article->bindParam(':content', $_POST['content']);
    $create_article->bindParam(':categorie', $_POST['categorie']);
    $create_article->execute();
    
    header('Location: ../../index.php');
}else{
    header('Location: ../../layouts/create_articles.php');
}


?>