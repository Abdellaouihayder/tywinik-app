<?php
	include '../Controller/trajetC.php';

	$trajetC= new trajetC();
	$trajetC->deleteTrajetA($_GET["idt"]);
	header('location:trajetadmin.php');
?>