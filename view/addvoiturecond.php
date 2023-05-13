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

include '../controller/voitureC.php'; 

if($_SESSION!=null) 
{
    
?>
<!-- DEBUT -->
<!-- Start -->
<div class="jumbotron jumbotron-fluid position-relative overlay-bottom" style="margin-bottom: 90px;">
 <center><a href="listvoiturecond.php"><input type="submit" class="btn btn-secondary px-3 px-lg-5" value="list de mes voitures"></a></center>
    <div class="container text-center my-5 py-5">
        <!-- border -->
        <div class="encadrer-un-contenu">

        <form action="addedvoiturecond.php" method="POST" enctype="multipart/form-data" > 


        <br><h2 class="font_trajet">Insérez la matricule de votre voiture:</h2>   
        <input type="text" name="matricule" class="form-control" placeholder="Matricule" required><br>
        <p id="errormatricule" class="error"></p>

        <h2 class="font_trajet">Insérez la marque de votre voiture:</h2>   
        <input type="text" name="marque" class="form-control" placeholder="Marque" required><br>
        <p id="errormarque" class="error"></p> 

        <h2 class="font_trajet">Insérez la couleur de votre voiture:</h2>   
        <input type="text" name="couleur" class="form-control" placeholder="Couleur" required><br>
        <p id="errorcouleur" class="error"></p>

        <h2 class="font_trajet">Type de votre voiture:</h2>  
        <input type="text" name="type" class="form-control" placeholder="Type"><br>
        <p id="errortype" class="error"></p>

        <h2 class="font_trajet">Ajouter l image de la voiture:</h2> 
        <input type="file" id="formFile" class="form-control" name="file">

        <br>
        <input type="submit" id= "button" value="Publier voiture" class="btn btn-outline-primary py-3 px-5" name="publier">
        
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
