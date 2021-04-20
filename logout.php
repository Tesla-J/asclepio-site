<?php
    if(isset($_COOKIE['username'])){
        setcookie('username', '', time() - 1);
        if(isset($_COOKIE['bi'])) setcookie('bi', '', time() - 1);
        setcookie('home', '', time() - 1);
        echo $_COOKIE['username'];
    }

    header('location: index.php');
?>
