<?php
session_start();
include '../controller/userc.php';
if(!empty($_GET))
{$userc= new userc();  
 $userc->updatepdpclient($_SESSION["cin"],$_GET['pdp']);
 $_SESSION["pdp"]=$_GET['pdp'];
header('location:compteclient.php');}

?>