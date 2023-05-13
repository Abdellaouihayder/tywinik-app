<?php 
include '../controller/userc.php';
include '../Controller/reservationC.php';
$error = "";

    // create reservation
    $reservation = null;
    $reservationC = new reservationC();
    if (
		isset($_POST["nbrplace"]) 
    ) {
        if (
           
			!empty($_POST["nbrplace"])
           
         
        ) { echo $_POST["nbrplace"];
            $reservationC->modifierreservation($_POST["nbrplace"], $_POST["idres"]);
            header('Location:afficherListereservation.php');
        }
        else
            $error = "Missing information"; echo $error;
    }    


?>