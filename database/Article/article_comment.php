<?php
session_start();
include('../../login_database.php');
include('../connection_database.php');

if(!isset($_SESSION['username'])){
    header('Location: ../../index.php');
}
// get id of current user

$select_user = $bdd->prepare('SELECT id_user FROM user WHERE username = :username');
$select_user->bindParam(':username', $_SESSION['username']);
$select_user->execute();

$get_id_user = $select_user->fetch();

// insert comment to database

if(!empty($_POST['comment'])){
    $insert_comment = $bdd->prepare('INSERT INTO comment(id_user,id_article,comment,createdAT) VALUES(:id_user,:id_article,:comment,NOW())');
    $insert_comment->bindParam(':id_user',$get_id_user['id_user']);
    $insert_comment->bindParam(':id_article', $_SESSION['id_article']);
    $insert_comment->bindParam(':comment', $_POST['comment']);
    $insert_comment->execute();
    header('Location: ../../index.php');
}else{
    header('Location: ../../index.php');
}

?>