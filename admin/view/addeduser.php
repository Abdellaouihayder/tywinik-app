<?php
include '../controller/userc.php';
$userc= new userc();
for($i=0;$i<3;$i++)
{$x=random_int(1,10);

echo 'random='.$x.'<br>';}
if(!empty($_POST)){ 
$time_input = strtotime ( $_POST['dob']); 
$dob = DateTime::createFromFormat("Y-m-d", $_POST['dob']);
$user= new user($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['phone'],$dob,$_POST['sexe'],$_POST['email'],md5($_POST['mdp']),NULL,NULL,NULL,$x,NULL,NULL,NULL,NULL);

$userc->adduser($user);
header('location:affichageclient.php');
echo("added user");
}
?>