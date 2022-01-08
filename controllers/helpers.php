<?php

require_once basename($_SERVER['PHP_SELF']) == 'index.php' ? 'my-config.php' : '../my-config.php';

/** */
function scanUserDir()
{
    return array_filter(scandir($_SESSION['user']['pathHome']), function($f){
        if (is_file($_SESSION['user']['pathHome'] . $f))         return true;
    });
}


/** */
function getInfoPath() : void
{
    $arrayFiles = scanUserDir();

    $size = array_sum(array_map(function($f){   return filesize($_SESSION['user']['pathHome'] . $f);    }, $arrayFiles));
    $count = count($arrayFiles);

    $_SESSION['infoPath'] = [
                                'sizeH' => round($size / 1024**2, 2), 
                                'nbFiles' => $count, 
                                'sizeM' => $size
    ];
}


/** */
function upload() : string
{
    extract($_FILES["fileToUpload"]);

    if($error > 0)                                                                  return "Une erreur est survenue";
    if(!@getimagesize($tmp_name))                                                   return "Le fichier n'est pas une image";
    if($size > MAX_UPLOAD_MACHINE)                                                  return "L'image est trop volumineuse";
    if(!in_array(getimagesize($tmp_name)['mime'], ALLOWED_TYPE_IMG))                return "Le format de l'image n'est pas autorisé";
    if(($size + $_SESSION['infoPath']['sizeM']) > $_SESSION['user']['quotaM'])      return "Votre espace disque est insuffisant";


    $extension = explode('/', getimagesize($tmp_name)['mime']);
    $newFile = $_SESSION['user']['pathHome'] . "/" . uniqid() . '.' . end($extension);


    return move_uploaded_file($tmp_name, $newFile) ? "L'image a bien été uploadée" : "Erreur de transfert";
}


/** */
function noAllowed() : void
{
    if (session_status() == PHP_SESSION_NONE) session_start();

    if (!isset($_SESSION['user'])) {
        if(in_array(basename($_SERVER['PHP_SELF']), NO_LOGIN)) header('Location: ../views/no-allowed.php');
    }
    else{
        if(in_array(basename($_SERVER['PHP_SELF']), LOGIN)) header('Location: views/dashboard.php');
    }
}
?>