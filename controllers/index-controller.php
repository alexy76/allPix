<?php

require_once 'controllers/helpers.php';
noAllowed();


if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['connection'])){


    if(array_key_exists($_POST['login'], $users)){

        if(password_verify($_POST['password'], $users[$_POST['login']]['password'])){

            extract($users[$_POST['login']]);

            $_SESSION['user'] = [
                'login' => $login,
                'formule' => $formule,
                'quotaH' => $quota,
                'quotaM' => $quota * 1024**2,
                'pathHome' => '../img/' . $login . '/'
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