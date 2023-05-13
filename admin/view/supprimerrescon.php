<?php
	include '../Controller/resconC.php';
	$resconC=new resconC();
	$resconC->supprimerrescon($_GET["idrescon"]);
	header('Location:reservationconadmin.php');
?>