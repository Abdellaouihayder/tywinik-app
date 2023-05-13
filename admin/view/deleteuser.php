<?php  // delete by cin
include '../controller/userc.php';
$userc= new userc();
$userc->deleteuserbycin($_GET["cin"]);
header('location:affichageclient.php');
?>