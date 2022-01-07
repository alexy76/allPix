<?php

require_once basename($_SERVER['PHP_SELF']) == 'index.php' ? 'my-config.php' : '../my-config.php';


/**
 * 
 */
function createCookieLogin(){

    setcookie("login", uniqid(uniqid().'x'));

}


/**
 * 
 */
function upload() : string
{
    extract($_FILES["fileToUpload"]);

    if($error > 0)                                                                  return "Une erreur est survenue";
    if(!@getimagesize($tmp_name))                                                   return "Le fichier n'est pas une image";
    if($size > MAX_UPLOAD_MACHINE)                                                  return "L'image est trop volumineuse";
    if(!in_array(getimagesize($tmp_name)['mime'], ALLOWED_TYPE_IMG))                return "Le format de l'image n'est pas autorisé";
    if(($size + $_SESSION['infoPath']['sizeM']) > $_SESSION['user']['quotaM'])      return "Votre espace disque est insuffisant";


    $extension = explode('/', getimagesize($tmp_name)['mime']);

    return move_uploaded_file($tmp_name, $_SESSION['user']['pathHome'] . "/" . uniqid() . '.' . end($extension)) ? "L'image a bien été uploadée" : "Erreur de transfert";

}


/**
 * 
 */
function getInfoPath(string $dir) : void
{
    $size = 0; $count = 0;

    foreach (scandir($dir) as $file) {

        if (is_file($dir . $file) && $file != '.' && $file != '..') {
            $size += filesize($dir . $file);
            $count++;
        }
    }

    $_SESSION['infoPath'] = [   
                                'nbFiles' => $count, 
                                'sizeM' => $size, 
                                'sizeH' => round(($size / 1024) / 1024, 2)
    ];
}


/**
 * 
 */
function noAllowed(string $uri) : void
{
    if (session_status() == PHP_SESSION_NONE) session_start();

    if (!isset($_SESSION['user'])) {
        if(in_array($uri, NO_LOGIN)) header('Location: ../views/no-allowed.php');
    }
    else{
        if(in_array($uri, LOGIN)) header('Location: views/dashboard.php');
    }
}

?>