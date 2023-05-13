<?php
session_start(); 
include '../controller/voitureC.php';

$CIN= $_SESSION["cin"];
$voitureC = new voitureC();

    if (
        isset($_POST['matricule']) &&
		isset($_POST['marque']) &&		
        isset($_POST['couleur']) &&
		isset($_POST['type']) &&
        isset($_FILES['file'])
    ) {
        if (
            !empty($_POST['matricule']) &&
			!empty($_POST['marque']) &&
            !empty($_POST['couleur']) && 
			!empty($_POST['type'])  
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
                $_POST['matricule'],
                $CIN,
                $_POST['marque'],
                $_POST['couleur'],
                $_POST['type'],
                $_POST['file']
            );
            
            $voitureC->addvoiture($voiture);

            include '../controller/userc.php';
            $userc= new userc(); 
            $listeh= $voitureC->listvoitureH($CIN);
            echo '<br> nb'.$listeh;
             $userc->updatenbvoiture($CIN,$listeh);
             $_SESSION["nbv"]=$listeh;
           header('location:listvoiturecond.php');
        }
        
    }  

?>