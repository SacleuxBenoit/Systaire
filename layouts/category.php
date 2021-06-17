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
    <link rel="stylesheet" href="../css/style_category.css">
    <title>Document</title>
</head>
<body>
    <?php
        include('../components/header.php');

        $select_article = $bdd->prepare('SELECT * FROM articles WHERE categorie = :categorie');
        $select_article->bindParam(':categorie', $_GET['categorie']);
        $select_article->execute();

        while($display_article = $select_article->fetch()){
            ?>
                <div class="article">
                    <p><h2><a href="./article.php?title=<?php echo $display_article['title']?>"><?php echo $display_article['title'] ?></a></h2></p>
                    <p><?php echo $display_article['smallDesc']?></p>

                    <a href="./article.php?title=<?php echo $display_article['title']?>">see more</a> 

                </div>
            <?php
        }
    ?>
</body>
</html>