<?php 
session_start(); 
include '../controller/userc.php';
include '../Controller/reservationC.php';
$error = "";

    // create reservation
    $reservation = null;

    $CIN= $_SESSION["cin"];
   // echo $CIN;
    $reservationC = new reservationC();
    if (
		isset($_POST["idt"]) &&		
		isset($_POST["nbrplace"]) 
        //isset($_POST["cinClient"]) 
       
    ) {
        if (
			!empty($_POST['idt']) &&
			!empty($_POST["nbrplace"])
            //!empty($_POST["cinClient"]) 
          
          
        ) {
            $reservation = new reservation(
                null,
				$_POST['idt'],
				$_POST['nbrplace'],
                $CIN
            );
            $reservationC->ajouterreservation($reservation);
            //var_dump($reservation);
            header('Location:afficherListereservation.php');
        }
        else
            $error = "Missing information";
    }


?>