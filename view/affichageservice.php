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
if($_SESSION!=null) 
{ $userc= new userc();
    $list = $userc->listusers();
    foreach ($list as $user) 
     { if ($user['cin']==$_SESSION["cin"])
        { if (($user['nbpassager']==null) && ($user['nbconduire']==null))
            $type='Client';
            else if (($user['nbpassager']!=null) && ($user['nbconduire']==null))
            $type='Passager';
            else if (($user['nbpassager']==null) && ($user['nbconduire']!=null))
            $type='Conducteur';
            else $type='Conducteur
                        Passager';
                        if ($user['service1']==1)  $x1="Choisie"; else $x1="Non Choisie";
                        if ($user['service2']==1)  $x2="Choisie"; else $x2="Non Choisie";
                        if ($user['service3']==1) $x3="Choisie"; else $x3="Non Choisie";
?>
<div class="jumbotron jumbotron-fluid position-relative overlay-bottom " style="margin-bottom: 80px;">
  <div class="container my-0 py-0 " >
    <div class="row " >
      <div class="container text-center my-0 py-0">
            <h2 class="text-white mt-4 mb-4">Vos Services <br><br></h2>
</div> 
    </div>

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="../img/avatar<?=$user['pdp'];?>.png" alt=""
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3"><?= $user['nom'];?>  <?= $user['prenom'];?></h5>
            <p class="text-muted mb-4"><?= $type?></p>
            <div class="d-flex justify-content-center mb-2">
            <a href="modifierservice.php"><button type="button" class="btn btn-outline-primary" value="update">Modifier</button></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-6">
              <h5 class="my-0">Déménagement/Emménagement</h5>
              </div>
              <div class="col-sm-3 text-center">
                <p class="text-muted mb-0"><?= $x1?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-6">
              <h5 class="my-0">Course Personnalisée</h5>
              </div>
              <div class="col-sm-3 text-center">
                <p class="text-muted mb-0"><?= $x2?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-6">
              <h5 class="my-0">Événementiel</h5>
              </div>
              <div class="col-sm-3 text-center">
                <p class="text-muted mb-0"><?= $x3?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-6">
              <h5 class="my-0">Tarif</h5>
              </div>
              <div class="col-sm-3 text-center">
                <p class="text-muted mb-0"><?php if ($user['tarif']!=NULL) echo $user['tarif']." Dt/Heure"; else echo "Aucun Tarif"; ?></p>
              </div>
            </div>
          </div>
        </div>
    </div>
    </div>
  </div>
</div>



<?php
}
}
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
            <h3 class="nav-item nav-link mb-4 bg-secondary"> Veuillez-vous <a href="connecterclient.php" class="text-white mt-4 mb-4" >Connecter </a> <i class="fa fa-laptop"></i></h3>
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