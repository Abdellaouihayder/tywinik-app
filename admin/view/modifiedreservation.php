<?php 
include '../controller/userc.php';
include '../Controller/reservationC.php';
$error = "";

    // create reservation
    $reservation = null;
    $reservationC = new reservationC();
    if (
        isset($_POST["idres"])&&
		isset($_POST["nbrplace"])

    ) {
        if (
            !empty($_POST["idres"])&&
			!empty($_POST["nbrplace"])
           
         
        ) { echo $_POST["nbrplace"];
            echo "<br>";
            echo $_POST["idres"];
            $reservationC->modifierreservation($_POST["nbrplace"], $_POST["idres"]);
           header('Location:reservationadmin.php');
        }
        else
            $error = "Missing information"; echo $error;
    }    


?>