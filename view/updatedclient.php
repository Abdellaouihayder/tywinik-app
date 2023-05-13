<?php
session_start();
include '../controller/userc.php';
$userc= new userc();
if(!empty($_POST))
{ 
 $userc->updateclient($_SESSION["cin"],$_POST['phone'],$_POST['email']);
header('location:compteclient.php');}
?>