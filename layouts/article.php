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
    <link rel="stylesheet" href="../css/style_components/components_header.css">
    <link rel="stylesheet" href="../css/style_article.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        include('../components/header.php');
        $select_article = $bdd->prepare('SELECT * FROM articles WHERE title = :title');
        $select_article->bindParam(':title', $_GET['title']);
        $select_article->execute();

        $fetch_article = $select_article->fetch();
    ?>

    <h1><?php echo $fetch_article['title']?></h1>

    <p>
        <?php echo $fetch_article['content']?>
    </p>
</body>
</html>