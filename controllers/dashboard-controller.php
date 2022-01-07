<?php

require_once '../controllers/helpers.php';


noAllowed(basename($_SERVER['PHP_SELF']));

getInfoPath($_SESSION['user']['pathHome']);


if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['pushmedia'])){

    $msgInfo = upload();
    getInfoPath($_SESSION['user']['pathHome']);

}


?>