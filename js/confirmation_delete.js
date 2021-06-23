function messageDelete(){
    let resultMessageDelete = confirm('Are you sure you want to delete this article ?')

    if(resultMessageDelete){
        document.location.href="../database/article/article_delete_database.php";
    }
}