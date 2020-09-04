<?php

session_start();

$userLogin = htmlspecialchars($_POST['userLogin'], ENT_QUOTES);
$userPassword = htmlspecialchars($_POST['userPassword'], ENT_QUOTES);

$success = false;
$error =  false;

if (! empty($_POST)) {
    require_once ($_SERVER['DOCUMENT_ROOT'] . '/include/login.php');
    require_once ($_SERVER['DOCUMENT_ROOT'] . '/include/password.php');

    for ($i = 0, $length = count($correctLogin); $i < $length; $i++) {
        if ($correctLogin[$i] === $userLogin && $correctPassword[$i] === $userPassword || $_COOKIE['login'] == $correctLogin[$i]  && $correctPassword[$i] == $userPassword) {
            $success = true;
            $_SESSION['authorization'] = true;
            $_SESSION['login'] = $correctLogin[$i];

            break;
        }
    }
}

if (!$_SESSION['authorization'] && !isset($_GET['login']) && $_GET['login'] !== 'yes') {
    header('Location: /?login=yes');
}

if ($_SESSION['authorization']) {
    setcookie('login', $_SESSION['login'], time() + (3600 * 24 * 30), '/');
}