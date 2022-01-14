<?php
    session_start();
    echo $_SESSION["login"]="username";
    $_SESSION["login"]="username";

    //session_unset();

    if(isset($_GET['index.html'])){
        $link = $_GET['index.html'];
        if($link == true) {
            session_destroy();
        }
    }
?>