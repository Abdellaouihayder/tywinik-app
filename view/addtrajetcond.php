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
	$list = $voitureC->listVoitureC($CIN);
?>
<!-- DEBUT -->
<div class="jumbotron jumbotron-fluid position-relative overlay-bottom" style="margin-bottom: 90px;">
 <center><a href="listtrajetcond.php"><input type="submit" class="btn btn-secondary px-3 px-lg-5" value="list de mes trajets"></a></center>
    <div class="container text-center my-5 py-5">
        <!-- border -->
        <div class="encadrer-un-contenu">
        <script>
function validateform() {
    let pt_dep= document.forms["form"]["pt_dep"].value;
    if(pt_dep=="") {alert("pt_dep vide"); return false;}
    let pt_arr= document.forms["form"]["pt_arr"].value;
    if(pt_arr=="") {alert("pt_arr vide"); return false;}
}

</script> 

        <!--Form trajet a remplir-->
        <form name="form" action="addedtrajetcond.php" method="POST" onsubmit="return validateform()">

        <h2 class="font_trajet">Choisir votre voiture:</h2> 
        <select  class="form-control" name="matricule" id="matriculeID">
            <?php foreach ($list as $voiture) { ?>
                <option value="<?php echo $voiture['matricule'];?>"><?php echo $voiture['matricule'];?></option>
            <?php } ?>
        </select><br>

        <h2 class="font_trajet">D'où partez-vous?</h2>   
        <input type="text" name="pt_dep" id="pt_depID" class="form-control" placeholder="Point de depart"><br>
        <p id="errordep" class="error"></p>

        <h2 class="font_trajet">Où allez-vous?</h2>   
        <input type="text" name="pt_arr" id="pt_arrID" class="form-control" placeholder="Point d'arrivé"><br>
        <p id="errorarr" class="error"></p>

        <h2 class="font_trajet">Quand partez-vous?</h2>   
        <input type="date" name="date" id="dateID" class="form-control" required><br>
        <p id="errordate" class="error"></p>
        
        <h2 class="font_trajet">A quelle heure souhaitez-vous retrouver vos passagers?</h2>  
        <input type="time" name="heure" id="heureID" class="form-control" required><br>
        <p id="errorheure" class="error"></p>

        <h2 class="font_trajet">Combien de place libre disposez-vous?</h2>  
        <input type="number" name="place" id="placeID" class="form-control" placeholder="4" min="1" max="4" required><br>
        <p id="errornb" class="error"></p>

        <h2 class="font_trajet">Fixez votre prix en DT:</h2>  
        <input type="number" name="prix" id="prixID" class="form-control" placeholder="10" step="1" required><br>
        <p id="errorprix" class="error"></p>

        <h2 class="font_trajet">Donnez une courte description:</h2> 
        <textarea name='description' class="form-control" style="padding: 10px 50px;"></textarea>

        <br>
        <br>
        <input type="submit" class="btn btn-outline-primary py-3 px-5" value="Publier trajet"></input>
        
        </form> 
     </div>
        <!--Fin trajet form-->
    </div>
</div>
<!-- End -->
    <!-- FIN -->
    <?php } 
else 
{
//echo ' veuillez vous connecter ou créer un compte NZIDOUHA CHWAYA ZINA';
?>
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
</div>
<?php      
}
?> 
</body>   
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


