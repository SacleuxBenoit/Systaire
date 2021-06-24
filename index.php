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
    <link rel="stylesheet" href="./css/style_components/components_header.css">
    <link rel="stylesheet" href="./css/style_index.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Systaire</title>
</head>
<body>
    <?php
        include('./components/header.php');

        $get_article = $bdd->query('SELECT * FROM article LIMIT 10');
        $get_article->execute();

        while($display_article = $get_article->fetch()){
            ?>
                <div class="article">
                    <p>
                        <h2>
                            <a href="./layouts/article.php?title=<?php echo htmlspecialchars($display_article['title'])?>"><?php echo htmlspecialchars($display_article['title']) ?></a>
                        </h2>
                    </p>
                    
                    <p>
                        <?php echo htmlspecialchars($display_article['smallDesc'])?> 
                    </p>
            
                    <a href="./layouts/article.php?title=<?php echo htmlspecialchars($display_article['title'])?>">see more</a> 

                </div>
            <?php
        }
    ?>
</body>
</html>