<?php
session_start(); 

include '../controller/userc.php';
include '../Controller/resconC.php';
$error = "";

    // create rescon
    $CIN= $_SESSION["cin"];
    $rescon = null;
    $resconC = new resconC();
    if (
        //isset($_POST["idrescon"]) &&
		//isset($_POST["cin"]) &&		
        //isset($_POST["servic"]) &&
		//isset($_POST["tarif"]) && 
        isset($_POST["distance"]) && 
        //isset($_POST["prix"]) && 
        isset($_POST["datere"])
        //isset($_POST["cinClient"]) 
    ) {
        if (
            //!empty($_POST["idrescon"]) && 
			//!empty($_POST['cin']) &&
        //!empty($_POST["servic"]) && 
		//	!empty($_POST["tarif"]) && 
            !empty($_POST["distance"]) &&
            //!empty($_POST["prix"]) &&  
          !empty($_POST["datere"])
            //!empty($_POST["cinClient"]) 
         
        ) {
            $rescon = new rescon(
                $_POST['idrescon'],
                null,
                null,
				null,
                $_POST['distance'],
                $_POST['tarif']*$_POST['distance'],
               $_POST['datere'],
                null
            );
            $resconC->modifierrescon($rescon, $_POST["idrescon"]);
            var_dump($rescon);
            header('Location:afficherlisterescon.php');
        }
        else
            $error = "Missing information";
    }    
?>