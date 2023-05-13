<?php
session_start();
include '../controller/userc.php';
if(!empty($_POST))
{ 
       if((!empty($_POST['service1']) || !empty($_POST['service2']) || !empty($_POST['service3']))&&(empty($_SESSION["tarif"]) && empty($_POST['tarif'])))
   header('location:modifierservice.php?error= Saisir un Tarif pour le/les Service(s) selectionné(s)'); 
   else if  (!empty($_SESSION["tarif"]) || !empty($_POST['tarif']))
             { $userc= new userc();
                if (!empty($_POST['tarif'])) $tarif=$_POST['tarif']; else $tarif=$_SESSION["tarif"];
                 if (!empty($_POST['service1']))  $s1=1; else $s1=0;
                 if (!empty($_POST['service2']))  $s2=1; else $s2=0;
                 if (!empty($_POST['service3']))  $s3=1; else $s3=0;
                 $userc->updateservice($_SESSION["cin"],$s1,$s2,$s3,$tarif);
                 header('location:affichageservice.php');
             }
   else header('location:affichageservice.php');         
}

?>