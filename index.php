<?php
session_start();
include('./login_database.php');
include('./database/connection_database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style_index.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        include('./components/header.php');

        $get_article = $bdd->query('SELECT * FROM articles LIMIT 10');
        $get_article->execute();

        while($display_article = $get_article->fetch()){
            ?>
                <div class="article">
                    <p><h2><?php echo $display_article['title'] ?></h2></p>
                    <p><?php echo $display_article['smallDesc']?></p>
                </div>
            <?php
        }
    ?>
</body>
</html>