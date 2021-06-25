<?php
session_start();
if(!isset($_SESSION['username'])){
    header('Location: ../index.php');
}
include('../login_database.php');
include('../database/connection_database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style_body.css">
    <link rel="stylesheet" href="../css/style_components/components_header.css">
    <link rel="stylesheet" href="../css/style_create_articles.css">
    <title>Systaire - CREATE ARTICLE</title>
</head>
<body>
    <?php
        include('../components/header.php');
    ?>
    <div class="container">
        <div>
            <form action="../database/Article/article_create_database.php" method="post">
                <p>
                    <label for="title">Titre :</label>
                    <input type="text" name="title" id="title">
                </p>

                <p>
                    <label for="content">Content :</label>
                    <input type="text" name="content" id="content">
                </p>

                <p>
                    <label for="smallDesc">description :</label>
                    <input type="text" name="smallDesc" id="smallDesc">
                </p>

                <p>
                <select name="categorie" id="categorie">
                <label for="categorie">categorie : </label>
                <?php

                    $select_category = $bdd->query('SELECT categorie FROM categorie');
                    $select_category->execute();

                    while($display_category = $select_category->fetch()){
                        ?>
                            <option value="<?php echo htmlspecialchars($display_category['categorie'])?>"><?php echo htmlspecialchars($display_category['categorie'])?></option>
                        <?php
                    }
                ?>
                </select>

                </p>

                <p>
                    <input type="submit" value="Submit">
                </p>
                </div>
            </form>
        </div>
</body>
</html>