<?php
    session_start();
    if(isset($_COOKIE['username'])){
        setcookie('username', '', time() - 1);
        if(isset($_COOKIE['bi'])) setcookie('bi', '', time() - 1);
        setcookie('home', '', time() - 1);
        setcookie('email', '', time() -1);
    }

    unset($_SESSION);
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() -1,
        $params["path"],
        $params['domain'],
        $params['secure'],
        $params['httponly']
    );
    session_destroy();

    header('location: index');
?>
