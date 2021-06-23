<?php
session_start();
include('../login_database.php');
include('../database/connection_database.php');
if(!isset($_GET['title'])){
    header('Location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style_components/components_header.css">
    <link rel="stylesheet" href="../css/style_article.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Systaire - ARTICLE</title>
</head>
<body>
    <?php
        include('../components/header.php');

        // prepared statement : SELECT articles
        $select_article = $bdd->prepare('SELECT * FROM article WHERE title = :title');
        $select_article->bindParam(':title', $_GET['title']);
        $select_article->execute();

        $fetch_article = $select_article->fetch();

        $_SESSION['id_article'] = $fetch_article['id_article'];
    
        /* ---------------------- display articles ---------------------- */
        echo '<h1>' . '<u>'. $fetch_article['title']. '</u>'.'</h1>';
        echo '<p>' . $fetch_article['content'] . '</p>';

        /* ---------------------- admin pannel ---------------------- */
        $select_user_infos = $bdd->prepare('SELECT * FROM user WHERE username = :username');
        $select_user_infos->bindParam(':username', $_SESSION['username']);
        $select_user_infos->execute();

        $user_infos = $select_user_infos->fetch();

        if(isset($user_infos['is_admin'])){
        ?>
            <div class="adminPannel">
                <p><a href="./modify_article.php">Modify</a> | <a href="../database/Article/article_delete_database.php">Delete</a></p> 
            </div>
        <?php
        }
 
        // prepared statement : SELECT comments

        $select_comment = $bdd->prepare('SELECT * FROM comment WHERE id_article = :id_article');
        $select_comment->bindParam(':id_article', $fetch_article['id_article']);
        $select_comment->execute();

        while($fetch_comment = $select_comment->fetch()){
            // display comments
            echo '<div class="divComment">' . '<p>' . $user_infos['username'] . '</p>'
                                            . '<p>' . $fetch_comment['comment'] . '</p>'
                 .'</div>';
        }

        /* ---------------------- Verify if user is login for the comment section ---------------------- */
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
        <div class="notificationLogin">
            <p>pour écrire un commentaire vous devez vous <u><a href="./login_createAccount.php">connecter</a></u></p>
        </div>
    <?php
        }
    ?>

</body>
</html>