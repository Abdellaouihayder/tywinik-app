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
?>
    <!-- Navbar Start -->
<!-- Header Start -->
<div class="jumbotron jumbotron-fluid position-relative overlay-bottom " style="margin-bottom: 90px; ">
    <div class="container-fluid text-center my-7 py-7" >
        <!-- border -->
            <div class="content">
                <div class="container-fluid pt-4 px-4 ">
                    <div class="row g-4 justify-content-center align-items-center" >
                    <div class="col-sm-12 col-xl-6 ">
                        <div class="bg-primary rounded h-1000 p-4" >
                            <div class="bg-white rounded h-100 p-4" style="margin: -10px; ">
                            <div class="m-n2" class="mb-4" >
                                    <a class="btn btn-outline-primary py-2 px-4" href="../index.php">Retour</a>
                                <br>
                                  </div>
                                <h6 class="nav-item nav-link mb-4"> <br>Bienvenue Parmis nous <br><br>
                                <small class="text-muted" class="navbar-nav mx-auto py-0">
      Vous avez déjà un Compte ?
    <a href="connecterclient.php" >Connectez-Vous</a></small>  </h6>
    <script>
function validateform() {
    let nom= document.forms["form"]["nom"].value;
    if(nom=="") {alert("nom vide"); return false;}
    let prenom= document.forms["form"]["prenom"].value;
    if(prenom=="") {alert("prenom vide"); return false;}
    let mdp1= document.forms["form"]["mdp"].value;
    let mdp2= document.forms["form"]["mdpC"].value;
    if((mdp1!=mdp2)) {alert("veuillez Confirmer votre mot de passe"); return false;}
    }


</script>

                                <form name="form" method="POST" action="addedclient.php" onsubmit="return validateform()">
                                <?php if (!empty($_SESSION['erreurcin'])) { ?>
                                        <h5 class="nav-item nav-link mb-4"><?php echo $_SESSION['erreurcin']; ?></h5>
                                        <?php } ?>    
                                <div class="row mb-3">
                                        <label for="cin" class="col-sm-4 col-form-label">Cin</label>
                                        <div class="col-sm-5"  >
                                        <input  type="text" minlength="8" maxlength="8"name="cin" id="cin" class="form-control" placeholder="12345678">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="nom" class="col-sm-4 col-form-label">Nom</label>
                                        <div class="col-sm-5">
                                        <input type="text"  name="nom" id="nom"  placeholder="nom taille >=3" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="prenom" class="col-sm-4 col-form-label">Prenom</label>
                                        <div class="col-sm-5">
                                        <input type="text"  name="prenom" id="prenom" placeholder="prenom taille >=3"class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="prenom" class="col-sm-4 col-form-label">Phone</label>
                                        <div class="col-sm-5">
                                        <input type="text" minlength="8" maxlength="8" name="phone" id="phone" placeholder="phone exp: 55555555"required class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="dob" class="col-sm-4 col-form-label">Date de naissance</label>
                                        <div class="col-sm-5">
                                        <input type="date" name="dob" id="dob" placeholder="dob"Required class="form-control">
                                        </div>
                                    </div>
                                     <fieldset class="form-group" >
                                        <div class="row mb-3">
                                        <legend class="col-form-label col-sm-4 pt-0">Sexe</legend>
                                        <div class="col-sm-5">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="sexe"
                                                    id="femme" value="0" checked >
                                                <label class="form-check-label" for="femme">
                                                Femme
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="sexe"
                                                    id="homme" value="1" >
                                                <label class="form-check-label" for="homme">
                                                Homme
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    </fieldset>
                                    <?php if (!empty($_SESSION['erreurmail'])) { ?>
                                        <h5 class="nav-item nav-link mb-4"><?php echo $_SESSION['erreurmail']; ?></h5>
                                        <?php } ?>
                                    <div class="row mb-3">
                                   
                                        <label for="email" class="col-sm-4 col-form-label">Email</label>
                                        <div class="col-sm-5">
                                        <input type="text" name="email" id="email" placeholder="email"required class="form-control" pattern="[a-z0-9._%+-]+@gmail.com$">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="mdp" class="col-sm-4 col-form-label">Votre Mot de passe</label>
                                        
                                        <div class="col-sm-5">
                                        <input type="password" name="mdp" id="mdp" required class="form-control"      pattern="[a-zA-Z0-9]{8,12}$"oncopy="return false" onpaste="return false" oncut="return false">
                                        </div>
                                        <small class="text-muted ">doit contenir au moins une lettre Maj et une lettre Minuscle et un nombre, De Longeur : 8->12</small>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="mdp" class="col-sm-4 col-form-label">Confirmer Mot de passe</label>
                                        <div class="col-sm-5">
                                        <input type="password" name="mdpC" id="mdpC" required class="form-control"  pattern="[a-zA-Z0-9]{8,12}$" oncopy="return false" onpaste="return false" oncut="return false">
                                        </div>
                                    </div>
                                    <div class="form-inline justify-content-center align-items-center">
                                    <input  type="submit" value="submit" class="btn btn-outline-primary mb-3 mr-sm-5">
              
              <input type="reset" value="reset" class="btn btn-outline-primary mb-3 mr-sm-0" > </div>
                                </form>
                            </div>
                        </div>
            
                   </div>
                   </div>
                   </div>
                </div> 
        <!--Fin trajet form-->
    </div>
</div>
<!-- Header End -->
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
