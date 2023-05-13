<?php

session_start(); 
include '../controller/trajetC.php';

$CIN= $_SESSION["cin"];

    $trajetC = new trajetC();
     

    if (
        isset($_POST['matricule2']) &&
        isset($_POST['pt_dep2']) &&
		isset($_POST['pt_arr2']) &&		
        isset($_POST['date2']) &&
		isset($_POST['heure2']) && 
        isset($_POST['place2']) && 
        isset($_POST['prix2']) &&
        isset($_POST['description2'])
    ) {
        if (
            !empty($_POST['matricule2']) &&
            !empty($_POST['pt_dep2']) && 
			!empty($_POST['pt_arr2']) &&
            !empty($_POST['date2']) && 
			!empty($_POST['heure2']) && 
            !empty($_POST['place2']) && 
            !empty($_POST['prix2']) && 
            !empty($_POST['description2'])
        ) {
            $trajet = new trajet(
                $_POST["idt2"],
                $_POST['matricule2'],
                $CIN,
                $_POST['pt_dep2'], 
                $_POST['pt_arr2'],
                $_POST['date2'],
                $_POST['heure2'],
                $_POST['place2'],
                $_POST['prix2'],
                $_POST['description2']
            );
            
            $trajetC->updateTrajetA ($trajet,$_POST["idt2"]);
            header('location:listtrajetcond.php');
        }
    }    