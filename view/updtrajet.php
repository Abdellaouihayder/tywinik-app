<html>
<head>
    <meta charset="utf-8">
    <title>Ty-Wink</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="../img/ty-wink.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center text-white">
                    <small><i class="fa fa-phone-alt mr-2"></i>+216 98 962 361</small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-envelope mr-2"></i>ty-wink@gmail.com</small>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-2" href="https://www.facebook.com/hayder.abdellaoui.9">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-2" href="https://www.facebook.com/hayder.abdellaoui.9">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-white px-2" href="https://www.facebook.com/hayder.abdellaoui.9">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-white px-2" href="https://www.facebook.com/hayder.abdellaoui.9">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-white pl-2" href="https://www.facebook.com/hayder.abdellaoui.9">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
<!-- Topbar End -->

<?php
include 'headerClient.php';
include '../controller/userc.php';

include '../controller/trajetC.php';
include '../controller/voitureC.php';

if($_SESSION!=null) 
{
    $CIN= $_SESSION["cin"];
    $voitureC= new voitureC();
	$list2 = $voitureC->listVoitureC($CIN); 

    $trajetC= new trajetC();
	$list = $trajetC->listTrajetC($CIN);

?>
<!-- DEBUT -->

<div class="jumbotron jumbotron-fluid position-relative overlay-bottom" style="margin-bottom: 90px;">
    <div class="container text-center my-5 py-5">
        <!-- border -->
        <div class="encadrer-un-contenu">

        <form action="updedtrajet.php" method="POST">

        <?php foreach ($list as $trajet) { 
            if(!empty($_POST["idt"])){
            if ($trajet['idt'] == $_POST["idt"]){ ?>

        <h2 class="font_trajet">Modifier votre voiture:</h2> 
        <select  class="form-control" name="matricule2" id="matriculeID">
            <?php foreach ($list2 as $voiture) { ?>
                <option value="<?php echo $voiture['matricule'];?>"><?php echo $voiture['matricule'];?></option>
            <?php } ?>
        </select><br>

        <h2 class="font_trajet">Modifier le point de depart:</h2>   
        <input type="text" name="pt_dep2" class="form-control" value="<?php echo $trajet['pt_dep'];?>" placeholder="Point de depart" ><br>
        
        <h2 class="font_trajet">Modifier le point d'arrivé:</h2>   
        <input type="text" name="pt_arr2" class="form-control" value="<?php echo $trajet['pt_arr'];?>" placeholder="Point d'arrivé" ><br>
        
        <h2 class="font_trajet">Modifier la date:</h2>   
        <input type="date" name="date2" class="form-control" value="<?php echo $trajet['date'];?>"><br>
        
        <h2 class="font_trajet">Modifier l'horraire:</h2>  
        <input type="time" name="heure2" class="form-control" value="<?php echo $trajet['heure'];?>"><br>
        
        <h2 class="font_trajet">Modifioer le nombre de place libre:</h2>  
        <input type="number" name="place2" class="form-control" value="<?php echo $trajet['place'];?>" placeholder="4" min="1" max="4" ><br>
        
        <h2 class="font_trajet">Modifier le prix en DT:</h2>  
        <input type="number" name="prix2" class="form-control" value="<?php echo $trajet['prix'];?>" placeholder="10" step="1"><br>
        
        <h2 class="font_trajet">Modifier la description:</h2> 
        <textarea name='description2' class="form-control"><?php echo $trajet['description'];?></textarea>

        <?php
			}
        }}
			?>

        <br>
        <input type="submit" class="btn btn-outline-primary py-3 px-5" value="Modifier trajet" name="publier2">
        <input type="hidden" value=" <?php echo $_POST['idt'] ?>" name="idt2">
        
        </form> 
      </div>
     </div> 
    </div>

    <!-- FIN -->
    
<?php
include 'footerClient.php';
?>
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary rounded-0 btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/counterup/counterup.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>
<?php } 
else 
{
//echo ' veuillez vous connecter ou créer un compte NZIDOUHA CHWAYA ZINA';
?>
<html>
<div class="jumbotron jumbotron-fluid position-relative overlay-bottom " style="margin-bottom: 90px; ">
    <div class="container-fluid text-center my-7 py-7" >
        <!-- border -->
            <div class="content">
                <div class="container-fluid pt-4 px-4 ">
                    <div class="row g-4 justify-content-center align-items-center" >
                    <div class="col-sm-12 col-xl-6 ">
                        <div class="bg-primary rounded h-1000 p-4" >
                            <div class="bg-white rounded h-100 p-4" style="margin: -10px; ">
      <div class="container text-center my-0 py-0">
            <h2 class="nav-item nav-link mb-4"> Oops <i class="fa fa-surprise"></i></h2>
            <h3 class="nav-item nav-link mb-4 bg-secondary"> Veuillez-vous <a href="connecterclient.php" class="text-white mt-4 mb-4" >Reconnecter </a> <i class="fa fa-laptop"></i></h3>
</div> 
    </div>
    </div> 
    </div></div>
    </div> 
    </div>
</div>
    </html> 
<?php      
}
?>
