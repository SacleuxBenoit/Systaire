<header>
    <h1><a href="http://localhost:8888/test/Systaire/">Systaire</a></h1>

    <ul>
        <li><a href="#">Accueil</a></li>
        <li><a href="#">Top lectures</a></li>
        <li><a href="#">Space x</a></li>
        <li><a href="#">Nasa</a></li>
        <li><a href="#">Usa</a></li>
        <li><a href="#">Europe</a></li>
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