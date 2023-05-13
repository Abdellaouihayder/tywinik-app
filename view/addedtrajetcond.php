<?php

session_start(); 
include '../controller/trajetC.php';

$CIN= $_SESSION["cin"];
$trajetC = new trajetC();

if (
    isset($_POST['matricule']) &&
    isset($_POST['pt_dep']) &&
    isset($_POST['pt_arr']) &&		
    isset($_POST['date']) &&
    isset($_POST['heure']) && 
    isset($_POST['place']) && 
    isset($_POST['prix']) 
    //&&
    //isset($_POST['description'])
) {
    if (
        !empty($_POST['matricule']) &&
        !empty($_POST['pt_dep']) && 
        !empty($_POST['pt_arr']) &&
        !empty($_POST['date']) && 
        !empty($_POST['heure']) && 
        !empty($_POST['place']) && 
        !empty($_POST['prix']) 
        //&&
        //!empty($_POST['description'])
    ) {
        $trajet= new trajet(
            NULL,
            $_POST['matricule'],
            $CIN,
            $_POST['pt_dep'],
            $_POST['pt_arr'],
            $_POST['date'],
            $_POST['heure'],
            $_POST['place'],
            $_POST['prix'],
            $_POST['description']
        );
        
        $trajetC->addTrajet($trajet);
        include '../controller/userc.php';
            $userc= new userc(); 
            $listeh= $trajetC->listtrajetH($CIN);
            echo '<br> nb'.$listeh;
             $userc->updatenbconduire($CIN,$listeh);
             $_SESSION["nbc"]=$listeh;
        header('location:listtrajetcond.php');
    } else echo 'wtf';
    
}  

?>