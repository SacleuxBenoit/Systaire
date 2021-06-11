<?php
session_start();
include('../login_database.php');
include('../database/connection_database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style_components/components_header.css">
    <link rel="stylesheet" href="../css/style_article.css">
    <title>Document</title>
</head>
<body>
    <?php
        include('../components/header.php');

        $get_article = $bdd->prepare('SELECT title,content,categorie FROM articles WHERE title = :title');
        $get_article->bindParam(':title', $_GET['title']);
        $get_article->execute();

        $display_article = $get_article->fetch();
    ?>

    <div>
        <p><h2><?php echo $display_article['title']?></h2></p>
        <p><?php echo $display_article['content']?></p>
    </div>
</body>
</html>