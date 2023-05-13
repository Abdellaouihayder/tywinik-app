
<?php
session_start();
include '../controller/userc.php';
$userc= new userc();
$list = $userc->listusers();
if(!empty($_POST))
{
$mdp=md5($_POST['mdp']);
$up=null;
foreach ($list as $user) 
 {
  if (($user['cin']==$_SESSION["cin"])&&($user['mdp']==$mdp) )
    { $mdp1=md5($_POST['mdp1']);
        $userc->updatemdpclient($_SESSION["cin"],$mdp1); $up='1'; break; //echo  $user['mdp'];
    
    }    
  }
}
  //echo $_SESSION["cin"];
 if ($up!= null) 
  header('location:compteclient.php');
  else  header('location:modifiermdpclient.php?errormdp= Ancien mot de passe Incorrect'); 
?>