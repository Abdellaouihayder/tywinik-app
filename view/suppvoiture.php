<?php
session_start(); 
	include '../Controller/voitureC.php';

	$voitureC= new voitureC();
	$voitureC->deletevoitureA($_GET["matricule"]);
	include '../controller/userc.php';
	$CIN= $_SESSION["cin"];
            $userc= new userc(); 
            $listeh= $voitureC->listvoitureH($CIN);
            echo '<br> nb'.$listeh;
             $userc->updatenbvoiture($CIN,$listeh);
             $_SESSION["nbv"]=$listeh;
	header('location:listvoiturecond.php');
?>