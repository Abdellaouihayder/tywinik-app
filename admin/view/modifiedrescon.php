<?php
    include_once '../Model/rescon.php';
    include_once '../Controller/resconC.php';

    $error = "";

    // create rescon
    $rescon = null;

    // create an instance of the controller
    $resconC = new resconC();
    if (
        //isset($_POST["idrescon"]) &&
		//isset($_POST["cin"]) &&		
        isset($_POST["servic"]) &&
		isset($_POST["tarif"]) && 
        isset($_POST["distance"]) && 
        isset($_POST["prix"]) && 
        isset($_POST["datere"])
        //isset($_POST["cinClient"]) 
    ) {
        if (
          //  !empty($_POST["idrescon"]) && 
			//!empty($_POST['cin']) &&
            !empty($_POST["servic"]) && 
			!empty($_POST["tarif"]) && 
            !empty($_POST["distance"]) &&
            !empty($_POST["prix"]) &&  
            !empty($_POST["datere"])
            //!empty($_POST["cinClient"]) 
         
        )
         {
            var_dump($_POST); 
            echo"<br>" ; 

            $rescon = new rescon(
                $_POST['idrescon'],
				$_POST['cin'],
                $_POST['servic'], 
				$_POST['tarif'],
                $_POST['distance'],
                $_POST['prix'],
                $_POST['datere'],
                $_POST['cinClient']
            );
            echo"xd";
            echo"<br>" ; 

            var_dump($rescon);
            echo"<br>" ; 

            $resconC->modifierrescon($rescon, $_POST["idrescon"]);
            header('Location:reservationconadmin.php');
        }
    }   
    
?>