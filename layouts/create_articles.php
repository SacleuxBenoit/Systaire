<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style_create_articles.css">
    <title>Document</title>
</head>
<body>
    <?php
        include('../components/header.php');
    ?>

    <div>
        <form action="#" method="post">
            <p>
                <label for="title">Titre :</label>
                <input type="text" name="title" id="title">
            </p>

            <p>
                <label for="content">Content :</label>
                <input type="text" name="content" id="content">
            </p>

            <p>
                <label for="description">description :</label>
                <input type="text" name="description" id="description">
            </p>

            <p>
                <label for="categorie">categorie :</label>
                <input type="text" name="categorie" id="categorie">
            </p>

            <p>
                <input type="submit" value="Submit">
            </p>
        </form>
    </div>
</body>
</html>