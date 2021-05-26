<?php
session_start();
include('../../login_database.php');
include('../connection_database.php');

$select_id_user = $bdd->prepare('SELECT id_user FROM user WHERE username = :username');
$select_id_user->bindParam(':username', $_SESSION['username']);
$select_id_user->execute();

$fetch_id_user = $select_id_user->fetch();

$create_article = $bdd->prepare('INSERT INTO articles(id_user,title,smallDesc,content,categorie) VALUES(:id_user,:title,:smallDesc,:content,:categorie)');
$create_article->bindParam(':id_user',$fetch_id_user['id_user']);
$create_article->bindParam(':title', $_POST['title']);
$create_article->bindParam(':smallDesc', $_POST['smallDesc']);
$create_article->bindParam(':content', $_POST['content']);
$create_article->bindParam(':categorie', $_POST['categorie']);
$create_article->execute();

?>