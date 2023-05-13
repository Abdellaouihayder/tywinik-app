<?php
session_start();
include '../controller/userc.php';
$userc= new userc();
if(!empty($_POST)){ 
$time_input = strtotime ( $_POST['dob']); 
$dob = DateTime::createFromFormat("Y-m-d", $_POST['dob']);
$user= new user($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['phone'],$dob,$_POST['sexe'],$_POST['email'],md5($_POST['mdp']),NULL,NULL,NULL,'1',NULL,NULL,NULL,NULL);
$userc->adduser ($user);
$mdp=md5($_POST['mdp']);
//echo 'votre mdp est '.$_POST['mdp'].' crypté en '.$mdp;
$_SESSION["cin"]=$_POST['cin'];
$_SESSION["pdp"]='1';
$_SESSION["prenom"]=$_POST['prenom'];    $_SESSION["nom"]=$_POST['nom'];
header('location:../index.php');
}
?>
