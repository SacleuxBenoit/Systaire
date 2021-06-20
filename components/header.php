<?php
    // SELECT COLUMN CATEGORY
    $get_categorie = $bdd->query('SELECT DISTINCT categorie FROM categorie');
    $get_categorie->execute();

    // SELECT is_admin FROM USER
    $select_user_admin = $bdd->prepare('SELECT is_admin FROM user WHERE username = :username');
    $select_user_admin->bindParam(':username', $_SESSION['username']);
    $select_user_admin->execute();
    $verify_is_admin = $select_user_admin->fetch();
?>
<header>
    <h1><a href="http://localhost:8888/test/Systaire/">Systaire</a></h1>

    <ul>
        <li><a href="http://localhost:8888/test/Systaire/">Accueil</a></li>
        <?php 
            // display categories
            while($fetch_categorie = $get_categorie->fetch()){
                ?>
                    <li><a href="http://localhost:8888/test/Systaire/layouts/category.php?categorie=<?php echo $fetch_categorie['categorie']?>"><?php echo $fetch_categorie['categorie']?></a></li>
                <?php
            }
            // verify if user is login + if it's an admin
            if(!empty($_SESSION['username']) && $verify_is_admin['is_admin']){
        ?>
            <li><a href="http://localhost:8888/test/Systaire/layouts/create_articles.php">Create articles</a></li>
            <li><a href="http://localhost:8888/test/Systaire/database/User/user_logout_database.php">Logout</a></li>
        <?php
            // if user is login and it's not an admin
            }else if(!empty($_SESSION['username'])){
        ?>
        <li><a href="http://localhost:8888/test/Systaire/database/User/user_logout_database.php">Logout</a></li>

        <?php
            // user isn't login : display link to login / create account
        }else{
            ?>
        <li><a href="http://localhost:8888/test/Systaire/layouts/login_createAccount.php">Login / create account</a></li>

            <?php
        }
            
        ?>
    </ul>
</header>