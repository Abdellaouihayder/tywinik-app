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

if($_SESSION!=null) 
{
    include '../controller/trajetC.php';

    $trajetC= new trajetC();

    if($_GET["type"] == '1') {$list = $trajetC->listPt_depC($_GET["destination"]);}
    else if($_GET["type"] == '2') {$list = $trajetC->listPt_arrC($_GET["destination"]);}
?>

<!-- DEBUT -->
 <!-- Header Start -->
 <div class="jumbotron jumbotron-fluid position-relative overlay-bottom" style="margin-bottom: 90px;">
        <div class="container text-center my-5 py-5">
            <h1 class="text-white mt-4 mb-4">Choisir Votre</h1>
            <h1 class="text-white display-1 mb-5">Destination</h1>
            <div class="mx-auto mb-5" style="width: 100%; max-width: 600px;">
            
            <form action="" method="POST">
                <div class="input-group">
                    <div class="input-group-prepend">

                      
                            <select class="btn btn-primary py-3 px-2" name="type" value="">
                            <div class="dropdown-menu">
                                <option name='depart' value="1">Depart</option>
                                <option name='arrive' value="2">Arrive</option>
                            </select>
                
                    </div>
                    
                    <input name="destination" type="text" value="<?php echo $_GET['destination'] ?>" class="form-control border-light" style="padding: 30px 25px;" placeholder="Destination">
                    <div class="input-group-append">

                        <input type="submit" name="recherche" value="Recherche"class="btn btn-secondary px-4 px-lg-5">
                    </div>
                    
                       
                
                
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- Header End -->
    

<center><h1>Liste des trajets disponibles</h1></center><br>
		<table class="table table-striped" >
			<tr>
			<th>Point de départ</th>
			<th>Point d arrivé</th>
			<th>Date</th>
			<th>Heure</th>
			<th>Place</th>
			<th>Prix en Dt</th>
            <th>Description</th>
			<th>Affichage</th>
			</tr>

            
			<?php 

            foreach ($list as $trajet) { ?>

			<tr>
				<!-- <td><?php //echo $trajet['idc'];?></td> -->
                <td><?php echo $trajet['pt_dep'];?></td>
                <td><?php echo $trajet['pt_arr'];?></td>
                <td><?php echo $trajet['date'];?></td>
                <td><?php echo $trajet['heure'];?></td>
                <td><?php echo $trajet['place'];?></td>
                <td><?php echo $trajet['prix'];?></td>
                <td><?php echo $trajet['description'];?></td>
                <td>
                <form action='view.php' method='POST'>
                <input type="hidden" value="<?php echo $trajet['idc'];?>" name="idc" id='idc'>
                <input type="hidden" value="<?php echo $trajet['matricule'];?>" name="matricule" id='matricule'>
                <input type="hidden" value="<?php echo $trajet['idt'];?>" name="idt" id='idt'>
                <!-- <td><a href="view.php?matricule=<?php //echo $trajet['matricule']?>"><input type="submit" value="afficher plus"></a></td></tr> -->
                <input type="submit" value="afficher plus">   </td> 
            </form>
            </tr>
			<?php
            
			}
			?>
		</table>
		<br>

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
