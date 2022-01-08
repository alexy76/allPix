<?php

require_once 'controllers/helpers.php';
noAllowed();


if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['connection'])){


    if(array_key_exists($_POST['login'], $users)){

        if(password_verify($_POST['password'], $users[$_POST['login']]['password'])){

            $_SESSION['user'] = [
                'login' => $users[$_POST['login']]['login'],
                'formule' => $users[$_POST['login']]['formule'],
                'quotaH' => $users[$_POST['login']]['quota'],
                'quotaM' => $users[$_POST['login']]['quota'] * 1024**2,
                'pathHome' => '../img/' . $_POST['login'] . '/'
            ];

            header("Location: views/dashboard.php");
            exit();

        }else{
            $error = 'Pseudo / Mot de passe invalide';
        }

    }else{
            $error = 'Pseudo / Mot de passe invalide';
    }



}

?>