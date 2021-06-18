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
        $select_article = $bdd->prepare('SELECT * FROM article WHERE title = :title');
        $select_article->bindParam(':title', $_GET['title']);
        $select_article->execute();

        $fetch_article = $select_article->fetch();

        $_SESSION['id_article'] = $fetch_article['id_article'];
    ?>

    <h1><?php echo $fetch_article['title']?></h1>

    <p>
        <?php echo $fetch_article['content']?>
    </p>

    <?php
        if(!empty($_SESSION['username'])){
    ?>
        <div class="divComment">
            <form action="../database/Article/article_comment.php" method="post">
                <p>
                    <label for="comment">your comment :</label>
                    <input type="text" name="comment" id="comment">
                </p>

                <p>
                    <input type="submit" value="Submit">
                </p>

            </form>
        </div>
    <?php
        }else{
        ?>
            <div class="divComment">
                <p>pour écrire un commentaire vous devez vous <u><a href="./login_createAccount.php">connecter</a></u></p>
            </div>
        <?php
        }
    ?>

</body>
</html>