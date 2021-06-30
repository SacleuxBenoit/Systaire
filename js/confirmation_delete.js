function messageDelete(){
    let resultMessageDelete = confirm('Are you sure you want to delete this article ?')

    if(resultMessageDelete){
        document.location.href="../database/article/article_delete_database.php";
    }
}

function deleteAccount(){
    let resultDeleteAccount = confirm('Are you sure you want to delete your account ?');

    if(resultDeleteAccount){
        document.location.href="../database/Settings/settings_deleteAccount_database.php";
    }
}

function deleteComment(){
    let resultDeleteComment = confirm('Are you sure you want to delete this comment ?');

    if(resultDeleteComment){
        document.location.href="../database/Comment/delete_comment.php";
    }
}