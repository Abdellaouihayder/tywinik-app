<?php
	include '../Controller/reservationC.php';
	$reservationC=new reservationC();
	$reservationC->supprimerreservation($_GET["idres"]);
	header('Location:affichertouslesres.php');
?>