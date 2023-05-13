<?php
include '../controller/userc.php';
$userc= new userc();
if(!empty($_POST))
{ 
    $userc->updateadmin($_POST['cinup'],$_POST['nbpassager'],$_POST['nbvoiture'],$_POST['nbconduire']);

header('location:affichagedetails.php');}
?>