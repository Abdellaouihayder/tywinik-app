<?php
session_start();
include '../controller/userc.php';
$userc= new userc();
$list = $userc->listusers();
$mdp=md5($_POST['mdp']);
//echo $_POST['mdp']; echo'<br>';
//echo $mdp; echo'<br>';
foreach ($list as $user) 
 { //echo  $user['mdp'];
  //echo'<br>';
  if (($user['email']==$_POST['email']) &&($user['mdp']==$mdp) )
    {$_SESSION["cin"]= $user['cin']; $_SESSION["pdp"]=$user['pdp']; 
      $_SESSION["prenom"]=$user['prenom'];    $_SESSION["nom"]=$user['nom']; 
      $_SESSION["email"]=$user['email'];$_SESSION["mdp"]=$user['mdp'];
      $_SESSION['cinup']=null; $_SESSION['typetri']=2;$_SESSION['typetri2']=0;
      $_SESSION["tarif"]=$user['tarif'];
      $_SESSION["nbv"]=$user['nbvoiture'];
      break; //echo  $user['mdp'];
    
} 
  }
  //echo $_SESSION["cin"]; 
 if ($_SESSION!= null) 

 { if ($_SESSION["cin"]=='33355544')
  header('location:../admin/index.php');
  else header('location:../index.php');
 }
  else  header('location:connecterclient.php?error= address email ou mot de passe Incorrect'); 
?>