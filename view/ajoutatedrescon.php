<?php 
session_start(); 
include '../controller/userc.php';
include '../Controller/resconC.php';
$error = "";

    // create rescon
    $rescon = null;

    $CIN= $_SESSION["cin"];
   // echo $CIN;
    $resconC = new resconC();
    if (
	//	isset($_POST["cin"]) &&		
       // isset($_POST["service"]) &&
	//	isset($_POST["tarif"]) && 
        isset($_POST["distance"]) && 
       // isset($_POST["prix"]) &&
        isset($_POST["datere"]) 
        //isset($_POST["cinClient"]) 
       
    ) {
        if (
			//!empty($_POST['cin']) &&
            //!empty($_POST["service"]) && 
			//!empty($_POST["tarif"]) && 
            !empty($_POST["distance"]) &&
           // !empty($_POST["prix"]) &&  
            !empty($_POST["datere"])
           // !empty($_POST["cinClient"])
        
            
          
        ) {
            $rescon = new rescon(
                null,
                $_POST['cincond'],
                $_POST['service'],
				$_POST['tarif'],
                $_POST['distance'],
                $_POST['tarif']*$_POST['distance'],
               $_POST['datere'],
                $CIN
                
                

            );
            var_dump($rescon);

            $resconC->ajouterrescon($rescon);
            header('Location:afficherlisterescon.php');
        }
        else
            echo $error = "Missing information";
    }
    // var_dump($_POST);

   
?>