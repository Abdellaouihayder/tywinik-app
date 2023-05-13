<?php

session_start(); 
include '../controller/voitureC.php';

$CIN= $_SESSION["cin"];

    $voitureC = new voitureC();
    $list = $voitureC->listVoitureC($CIN); 

    if (
        isset($_POST['matricule2']) &&	
		isset($_POST['marque2']) &&		
        isset($_POST['couleur2']) &&
		isset($_POST['type2']) &&
        isset($_FILES['file'])
    ) {
        if (
            !empty($_POST['matricule2']) &&
			!empty($_POST['marque2']) &&
            !empty($_POST['couleur2']) && 
			!empty($_POST['type2']) 
        ) {

            //START FILE//
            $tmpName = $_FILES['file']['tmp_name'];
            $name = $_FILES['file']['name'];
            $size = $_FILES['file']['size'];
            $error = $_FILES['file']['error'];
            $type = $_FILES['file']['type'];

            $tabExtension = explode('.', $name);
            $extension = strtolower(end($tabExtension));

            $extensionsAutorisees = ['jpg', 'png', 'jpeg', 'gif'];
            $tailleMax = 400000;

            if(in_array($extension, $extensionsAutorisees) && $size <= $tailleMax && $error == 0){

                $_POST['file'] =$_FILES['file']['name'];

                move_uploaded_file($tmpName, './upload/'.$name);
            }
            else{
                echo "erreur";
            }
            //END FILE//

            $voiture= new voiture(
                $_POST['matricule2'],
                $CIN,
                $_POST['marque2'],
                $_POST['couleur2'],
                $_POST['type2'],
                $_POST['file']
            );
            
            $voitureC->updatevoitureA ($voiture,$_POST["matricule2"]);
            header('location:listvoiturecond.php');
        }
    }    