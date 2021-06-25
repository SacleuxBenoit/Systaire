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
    <link rel="stylesheet" href="../css/style_body.css">
    <link rel="stylesheet" href="../css/style_components/components_header.css">
    <link rel="stylesheet" href="../css/style_create_articles.css">
    <title>Systaire - MODIFY</title>
</head>
<body>
    <?php
        include('../components/header.php');
    ?>

    <div>
        <form action="../database/Article/article_modify_database.php" method="post">
            <p>
                <label for="modifyTitle">Titre :</label>
                <input type="text" name="modifyTitle" id="modifyTitle">
            </p>

            <p>
                <label for="modifyContent">Content :</label>
                <input type="text" name="modifyContent" id="modifyContent">
            </p>

            <p>
                <label for="modifySmallDesc">description :</label>
                <input type="text" name="modifySmallDesc" id="modifySmallDesc">
            </p>

            <p>
            <select name="modifyCategorie" id="modifyCategorie">
            <label for="modifyCategorie">categorie : </label>
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
        </form>
    </div>
</body>
</html>