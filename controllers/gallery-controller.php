<?php

require '../controllers/helpers.php';
noAllowed(basename($_SERVER['PHP_SELF']));


$files = scandir($_SESSION['user']['pathHome']);


?>