<html>

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

<body>
<div class="container-fluid position-relative bg-white d-flex p-0">
    <?php include 'headeradmin.php'; ?>
            <!--KHEDMTIIII  -->
            <div class="container-fluid pt-4 px-4 " >
                <div class="row g-4 justify-content-center align-items-center">
                <div class="col-sm-12 col-xl-6 ">
                        <div class="bg-light rounded h-100 p-4">
                        <div class="m-n2" class="mb-4" >
                                <a class="btn btn-outline-primary m-2" href="affichageclient.php">Retour</a>
                            <br>
                              </div>
                            <!-- <h6 class="mb-4"> <br>Nouveau Client</h6> -->
                            <h3 style="color: #009CFF" align="center"> Nouveau Client </h3>
                            <form  method="POST" action="addeduser.php">
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
                                    <div class="row mb-3">
                                        <label for="email" class="col-sm-4 col-form-label">Email</label>
                                        <div class="col-sm-5">
                                        <input type="text" name="email" id="email" placeholder="email"required class="form-control" >
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="mdp" class="col-sm-4 col-form-label">Votre Mot de passe</label>
                                        <div class="col-sm-5">
                                        <input type="password" name="mdp" id="mdp" required class="form-control"oncopy="return false" onpaste="return false" oncut="return false">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="mdp" class="col-sm-4 col-form-label">Confirmer Mot de passe</label>
                                        <div class="col-sm-5">
                                        <input type="password" name="mdpC" id="mdpC" required class="form-control" oncopy="return false" onpaste="return false" oncut="return false">
                                        </div>
                                    </div>
                                    <div class="form-inline justify-content-center align-items-center">
                                    <input  type="submit" value="submit" class="btn btn-primary mb-3 mr-sm-5">
              
              <input type="reset" value="reset" class="btn btn-primary mb-3 mr-sm-0" > </div>
                            </form>
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
</body>

</html>