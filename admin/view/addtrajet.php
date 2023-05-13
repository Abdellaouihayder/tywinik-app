<?php

    include '../Controller/trajetC.php';
    include '../Controller/userc.php';

    $trajet = NULL;
    $trajetC = new trajetC();
    
    $userc = new userc();
    $list = $userc->listusers();

    if (
        isset($_POST['matricule']) &&
        isset($_POST['idc']) &&
        isset($_POST['pt_dep']) &&
		isset($_POST['pt_arr']) &&		
        isset($_POST['date']) &&
		isset($_POST['heure']) && 
        isset($_POST['place']) && 
        isset($_POST['prix']) &&
        isset($_POST['description'])
    ) {
        if (
            !empty($_POST['matricule']) &&
            !empty($_POST['idc']) &&
            !empty($_POST['pt_dep']) && 
			!empty($_POST['pt_arr']) &&
            !empty($_POST['date']) && 
			!empty($_POST['heure']) && 
            !empty($_POST['place']) && 
            !empty($_POST['prix']) &&
            !empty($_POST['description'])
        ) {
            $trajet= new trajet(
                NULL,
                $_POST['matricule'],
                $_POST['idc'],
                $_POST['pt_dep'],
                $_POST['pt_arr'],
                $_POST['date'],
                $_POST['heure'],
                $_POST['place'],
                $_POST['prix'],
                $_POST['description']
            );
            
            $trajetC->addTrajet($trajet);
            
            header('location:trajetadmin.php');
        }
        
    }  
    
?>

<html>
<style>
    .error{
        color: red;
        width: 22%;
        display: block;
        margin: 0 auto;
    }
    </style>

<head>
    <meta charset="utf-8">
    <title>Ty-wink Admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../img/ty-wink.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
</head>
<html>
<body>
<div class="container-fluid position-relative bg-white d-flex p-0">
    <?php include 'headeradmin.php'; ?>
    <div class="container-fluid pt-4 px-4 " >
                <div class="row g-4 justify-content-center align-items-center">
                <div class="col-sm-12 col-xl-6 ">
                        <div class="bg-light rounded h-100 p-4">
                        <div class="m-n2" class="mb-4" >
                                <a class="btn btn-outline-primary m-2" href="trajetadmin.php">Retour</a>
                            <br>
                              </div>
    <!--Form trajet a remplir-->
        <form action=""  method="POST" > 

        <h4>Choisissez le id du conducteur:</h4>
        <select  class="form-control" name="idc" id="idcID">
            <?php foreach ($list as $user) { ?>
                <option value="<?php echo $user['cin'];?>"><?php echo $user['cin'];?></option>
            <?php } ?>
        </select>

        <h4>Donnez la matricule de la voiture:</h4>   
        <input type="text" name="matricule" id="matriculeID" class="form-control" placeholder="Matricule"><br>
        <p id="errordmat" class="error"></p>         
                
        <h4>Donnez le point de départ:</h4>   
        <input type="text" name="pt_dep" id="pt_depID" class="form-control" placeholder="Point de depart"><br>
        <p id="errordep" class="error"></p> 

        <h4>Donnez le point d'arrive:</h4>   
        <input type="text" name="pt_arr" id="pt_arrID" class="form-control" placeholder="Point d'arrivé"><br>
        <p id="errorarr" class="error"></p>

        <h4>Donnez la date:</h4>   
        <input type="date" name="date" id="dateID" class="form-control" required><br>
        <p id="errordate" class="error"></p>

        <h4>Donnez l'horraire:</h4>  
        <input type="time" name="heure" id="heureID" class="form-control" required><br>
        <p id="errorheure" class="error"></p>

        <h4>Donnez le nombre de place libre:</h4>  
        <input type="number" name="place" id="placeID" class="form-control" placeholder="nombre de places" min="1" max="4" required><br>
        <p id="errornb" class="error"></p>

        <h4>Donnez le prix en DT:</h4>  
        <input type="number" name="prix" ID="prixID" class="form-control" placeholder="prix par personne" step="1" required>
        <p id="errorprix" class="error"></p>
        
        <h4>Donnez une courte description:</h4> 
        <textarea name='description' class="form-control"></textarea>
        
        <br>
        <input type="submit" id= "button" value="Publier trajet" class="btn btn-primary" name="publier">
        
        </form> 
</div>
</div>
</div>
</div>
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/chart/chart.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../lib/tempusdominus/js/moment.min.js"></script>
    <script src="../lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
    <!-- JAVA CONTROLE DE SAISIE -->
    <!-- <script type="text/javascript" src="../../js/trajetadmin.js"></script> -->
  
</body>

</html>