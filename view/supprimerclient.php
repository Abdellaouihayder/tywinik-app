<?php  // delete by cin
session_start();
include '../controller/userc.php';
$userc= new userc();
$userc->deleteuserbycin($_SESSION["cin"]);
header('location:deconnecterclient.php');
?>