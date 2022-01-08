<?php

require_once '../controllers/helpers.php';
noAllowed();


getInfoPath();


if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['pushmedia'])){

    $msgInfo = upload();
    getInfoPath();

}


?>