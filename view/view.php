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
include '../Controller/voitureC.php';
include '../Controller/trajetC.php';
$mat=NULL;
if($_SESSION!=null) 
{
    $trajetC= new trajetC();
	$voitureC= new voitureC();
    $userc= new userc();
    
    //var_dump($_POST['idt']);
    $idt=$_POST['idt'];

    $list2= $userc->listusers();
    $list=$voitureC->listVoitureM($_POST["matricule"]);
    

    foreach ($list2 as $user) 
    if(!empty($_POST["idc"])){
        { if ($user['cin']==$_POST["idc"])

    { 
        if ($user['sexe']=='0')
        $sexe='Femme';
        else $sexe='Homme'; 
?>

<!-- DEBUT -->

<!-- Feature Start -->
	<!-- Start -->
    <br>

    <div class="container-fluid py-3">
        <div class="container py-3">
            <div class="row">
                <div class="col-lg-4 mb-5 mb-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="rounded-circle img-fluid position-absolute  h-100 rounded-circle" src="../img/avatar<?= $user['pdp'];?>.png" style="object-fit: cover;">
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2"><br>Apropos ce trajet</h6>
                        <h1 class="display-4">Profile du conducteur:</h1>
                    <div class="bg-light  p-4">
                        <h4 class="mb-3">Nom: <?= $user['nom'];?></h4>
                        <h4 class="mb-3">Prenom: <?= $user['prenom'];?></h4>
                        <h4 class="mb-3">Tel: <?= $user['phone'];?></h4>
                        <h4 class="mb-3">Sexe: <?= $sexe;?></h4>
                        <h4 class="mb-3">Date d anniversaire: <?= $user['dob'];?></h4>
                        
                </div>
            </div>
        </div>
                    
        </div>
        </div>
    </div>
    <?php }}} ?>
           
    <!-- Feature Start -->
<div class="container-fluid bg-image" style="margin: 90px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 my-5 pt-5 pb-lg-5">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Apropos ce trajet:</h6>
                        <h1 class="display-4">Voiture du conducteur:</h1>
                    </div>
                    <br>
                    <?php foreach ($list as $voiture) {  ?>
            <table class="table table-striped">
 
			<tr>
			<th>Matricule:</th>
            <td><?php echo $voiture['matricule']; ?></td>
			</tr>
            <tr>
            <th>Marque:</th>
            <td><?php echo $voiture['marque'];?></td>
            </tr>
            <tr>
			<th>Couleur:</th>
            <td><?php echo $voiture['couleur'];?></td>
            </tr>
            <tr>
			<th>Type:</th>
            <td><?php echo $voiture['type'];?></td> 
            </tr>
            
			</table>
                       
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="upload/<?php echo $voiture['photo'];?>" style="object-fit: cover;">
                    </div>
                </div> 
                <?php
                }  
			?>
            </div>
        </div>
    </div>
    <!-- Feature Start -->

     
         <div class="bg-light p-3"> 
         <center> <div class="section-title position-relative mb-4">
                <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2"><br>Apropos ce trajet</h6>
                <h1 class="display-4">Localisation d'Esprit:</h1>
            
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51050.02045041453!2d10.147420875372037!3d36.89928779999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12e2cb7454c6ed51%3A0x683b3ab5565cd357!2sESPRIT!5e0!3m2!1sfr!2stn!4v1669843824869!5m2!1sfr!2stn" 
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div></center></div><br>
    
        
        <center><a href="ajouterreservation.php?idt=<?=$idt?>" class="btn btn-secondary px-3=4 px-lg-5">Réserver</a>
                <a href="" class="btn btn-secondary px-3=4 px-lg-5">Donner un avis</a></center>
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
