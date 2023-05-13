<?php
session_start(); 
	include '../controller/trajetC.php';

	$trajetC= new trajetC();
	$trajetC->deleteTrajetA($_GET["idt"]);
	include '../controller/userc.php';
            $userc= new userc();
			$CIN= $_SESSION["cin"]; 
            $listeh= $trajetC->listtrajetH($CIN);
            echo '<br> nb'.$listeh;
             $userc->updatenbconduire($CIN,$listeh);
             $_SESSION["nbc"]=$listeh;
	header('location:listtrajetcond.php');
?>