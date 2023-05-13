<?php
    include '../Controller/trajetC.php';

    $trajet = NULL;
    $trajetC = new trajetC();
    $list = $trajetC->listTrajetA();

    if (
        isset($_POST['matricule2']) &&
        isset($_POST['pt_dep2']) &&
		isset($_POST['pt_arr2']) &&		
        isset($_POST['date2']) &&
		isset($_POST['heure2']) && 
        isset($_POST['place2']) && 
        isset($_POST['prix2']) &&
        isset($_POST['description2'])
    ) {
        if (
            !empty($_POST['matricule2']) && 
            !empty($_POST['pt_dep2']) && 
			!empty($_POST['pt_arr2']) &&
            !empty($_POST['date2']) && 
			!empty($_POST['heure2']) && 
            !empty($_POST['place2']) && 
            !empty($_POST['prix2']) && 
            !empty($_POST['description2'])
        ) {
            $trajet = new trajet(
                $_POST["idt2"],
                $_POST['matricule2'],
                NULL,
                $_POST['pt_dep2'], 
                $_POST['pt_arr2'],
                $_POST['date2'],
                $_POST['heure2'],
                $_POST['place2'],
                $_POST['prix2'],
                $_POST['description2']
            );
            
            $trajetC->updateTrajetA ($trajet,$_POST["idt2"]);
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
                            <br>
                              </div>
        <!--Form trajet a remplir-->
        <form action="" method="POST">
        
        <?php foreach ($list as $trajet) { 
            if(!empty($_POST["idt"])){
            if ($trajet['idt'] == $_POST["idt"]){ ?>

        <h4>Modifier idc:</h4>   
        <input type="number" name="idc2" id="idcID" class="form-control" value="<?php echo $trajet['idc'];?>" disabled><br> 
        <p id="erroridc" class="error"></p>

        <h4>Modifier matricule:</h4>   
        <input type="text" name="matricule2" id="matriculeID" class="form-control" value="<?php echo $trajet['matricule'];?>"><br> 
        <p id="errorimat" class="error"></p>

        <h4 >Modifier le point de depart:</h4>   
        <input type="text" name="pt_dep2" id="pt_depID" class="form-control" value="<?php echo $trajet['pt_dep'];?>" placeholder="Point de depart"><br>
        <p id="errordep" class="error"></p> 
        
        <h4>Modifier le point d'arrivé:</h4>   
        <input type="text" name="pt_arr2" id="pt_arrID" class="form-control" value="<?php echo $trajet['pt_arr'];?>" placeholder="Point d'arrivé"><br>
        <p id="errorarr" class="error"></p>
        
        <h4>Modifier la date:</h4>   
        <input type="date" name="date2" id="dateID" class="form-control" value="<?php echo $trajet['date'];?>"><br>
        <p id="errordate" class="error"></p>
        
        <h4>Modifier l'horraire:</h4>  
        <input type="time" name="heure2" id="heureID" class="form-control" value="<?php echo $trajet['heure'];?>"><br>
        <p id="errorheure" class="error"></p>
        
        <h4>Modifioer le nombre de place libre:</h4>  
        <input type="number" name="place2" id="placeID" class="form-control" value="<?php echo $trajet['place'];?>" placeholder="4" min="1" max="4"><br>
        <p id="errornb" class="error"></p>
        
        <h4 >Modifier le prix en DT:</h4>  
        <input type="number" name="prix2" ID="prixID" class="form-control" value="<?php echo $trajet['prix'];?>" placeholder="10" step="1">
        <p id="errorprix" class="error"></p>

        <h4>Modifier la description:</h4> 
        <textarea name='description2' class="form-control" ><?php echo $trajet['description'];?></textarea>

        <?php
			}
        }}
			?>
        
        <br>
        <input type="submit" value="Modifier trajet" class="btn btn-primary" name="publier2">
        <input type="hidden" value=" <?php echo $_POST['idt'] ?>" name="idt2">
        
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
 
<!-- End -->
</body>
</html>