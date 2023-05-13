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
    <link href="../css/style.form.css" rel="stylesheet">
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
$userc= new userc();
$typeservice=$_GET['nb'];
//echo 'type='.$typeservice;
if ($typeservice==1)  $list = $userc->listservice1();
else if ($typeservice==2)  $list = $userc->listservice2();
else 
     if ($typeservice==3) $list = $userc->listservice3();
?>
<div class="jumbotron jumbotron-fluid position-relative overlay-bottom " style="margin-bottom: 80px;">
  <div class="container my-0 py-0 " >
        <div class="container text-center my-0 py-0">
        <h1 class="text-white mt-4 mb-4"> Choisissez Votre Conducteur <br></h1>
        </div>  
            <div class="owl-carousel team-carousel position-relative justify-content-center" style="padding: 0 30px;">
                
                
                <?php 
                if ($typeservice==1)  $service="Déménagement/Emménagement";
                else if ($typeservice==2)  $service="Course-Personnalisée";
                else 
                     if ($typeservice==3) $service="Événementiel"; 
                  foreach($list as $user)
                  {?> 
                  <div  class="team-item ">

                  <div class="card mb-4">
          <div class="card-body text-center">
          <div class="d-flex justify-content-center">
          <img src="../img/avatar<?=$user['pdp'];?>.png" alt=""
              class="rounded-circle img-fluid" style="width: 120px;">
                        <div class="ms-3 ">
                            <br>
                            <h5 class="my-3 ">Tarif :</h5>
                            <span><?= $user['tarif'];?> Dt/Heure</span>

                        </div>
                    </div>
            <h5 class="my-3"><?= $user['nom'];?>  <?= $user['prenom'];?></h5>
            <p class="text-muted mb-4"><?= $service?></p>
            <div class="d-flex justify-content-center mb-2">
            <a href="ajouterrescon.php?service=<?php echo $service ?>&tarif=<?php echo $user['tarif']; ?>&cin=<?php echo $user['cin']; ?>"><button type="button" class="btn btn-outline-primary" value="update">Réserver</button></a>

            </div>
          </div>
        </div>
                </div>
                    <?php } 
                ?>
                
                
            </div>
        </div>  
        <!-- Sidebar Start -->
    </div>
    </div>
  </div>
</div>     
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
    <script>
    // Il y a plusieurs façon de sélectionner un nœud DOM ; ici on récupère
// le formulaire et le champ d'e-mail ainsi que l'élément span
// dans lequel on placera le message d'erreur

var form  = document.getElementById('formtest');
var email = document.getElementById('mail');
var error = document.querySelector('.error');

email.addEventListener("input", function (event) {
  // Chaque fois que l'utilisateur saisit quelque chose
  // on vérifie la validité du champ e-mail.
  if (email.validity.valid) {
    // S'il y a un message d'erreur affiché et que le champ
    // est valide, on retire l'erreur
    error.innerHTML = ""; // On réinitialise le contenu
    error.className = "error"; // On réinitialise l'état visuel du message
  }
}, false);
form.addEventListener("submit", function (event) {
  // Chaque fois que l'utilisateur tente d'envoyer les données
  // on vérifie que le champ email est valide.
  if (!email.validity.valid) {

    // S'il est invalide, on affiche un message d'erreur personnalisé
    error.innerHTML = "J'attends une adresse e-mail correcte, mon cher&nbsp;!";
    error.className = "error active";
    // Et on empêche l'envoi des données du formulaire
    event.preventDefault();
  }
}, false);
</script>
</body>

</html>
