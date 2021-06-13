<?php
    $get_categorie = $bdd->query('SELECT DISTINCT categorie FROM categorie');
    $get_categorie->execute();
?>
<header>
    <h1><a href="http://localhost:8888/test/Systaire/">Systaire</a></h1>

    <ul>
        <li><a href="#">Accueil</a></li>
        <?php
            while($fetch_categorie = $get_categorie->fetch()){
                ?>
                    <li><a href="http://localhost:8888/test/Systaire/layouts/article.php"><?php echo $fetch_categorie['categorie']?></a></li>
                <?php
            }
        ?>
        <li><a href="http://localhost:8888/test/Systaire/layouts/create_articles.php">Create articles</a></li>
        <?php
            if(empty($_SESSION['username'])){
        ?>
        <li><a href="http://localhost:8888/test/Systaire/layouts/login_createAccount.php">Login / create account</a></li>
        <?php
            }else{
        ?>
            <li><a href="http://localhost:8888/test/Systaire/database/User/user_logout_database.php">Logout</a></li>
        <?php
            }
        ?>
    </ul>
</header>