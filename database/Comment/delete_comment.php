<?php
session_start();
include('../../login_database.php');
include('../connection_database.php');

if(isset($_GET['id_comment'])){
    $delete_comment = $bdd->prepare('DELETE FROM comment WHERE id_comment =:id_comment');
    $delete_comment->bindParam('id_comment', $_GET['id_comment']);
    $delete_comment->execute();
    header('Location: ../../index.php');
}else{
    header('Location: ../../index.php');
}

?>