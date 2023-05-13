<?php
	include '../Controller/voitureC.php';

	$voitureC= new voitureC();
	$voitureC->deletevoitureA($_GET["matricule"]);
	header('location:voitureadmin.php');
?>