<?php
	include '../Controller/reservationC.php';
    
	$reservationC= new reservationC();
	$listereservation = $reservationC->afficherreservation();
	$reservationC=new reservationC();
    if (isset($_POST['idress']) && $_POST['idress']!="") {
        echo($_POST['idress']);
        $listereservation = $reservationC->recherche($_POST['idress']);}
    else if(isset($_POST['tri'])) {
        $listereservation = $reservationC->trireservation($_POST['tri']);
     }else {
        $listereservation=$reservationC->afficherreservation(); 
    }
?>
<head>
    <meta charset="utf-8">
    <title>Ty-wink Admin</title>
    <meta content="widresh=device-widresh, initial-scale=1.0" name="viewport">
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
    <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-transparent rounded h-100 p-4">
		<center><br><h1 style="color: #009CFF">Liste des reservations</h1></center>
        <div  align="center">
        <form method="POST" action="reservationadmin.php" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" name="idress" class="form-control bg-light border-0 small" placeholder="Recherche..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                        </form>
                        <form method="POST" action="reservationadmin.php" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
		<div class="input-group">
            <select name="tri">
                <option value="idres">idres</option>
                <option value="cinClient">Cin</option>
                <option value="nbrplace">nombre de place</option>
            </select>
			<div class="input-group-append">
                                <button class="btn btn-primary" type="submit" value="tri">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
			</div>
        </form>
        <button class="btn btn-outline-primary m-2"><a href="ajouterreservation.php">Ajouter un reservation</a></button>
        </div>
        <br>
        <?php
                if(empty($listereservation)){
                    ?>
                    <center><h1>Recherche Non trouver</h1></center>
            <?php
                }
                else{
            ?>
		<table class="table table-striped">
        <tr>
			<th>Idreservation</th>
			<th>Cin</th>
			<th>nombre de place </th>
			<th>Modification</th>
            <th></th>
            <th>Supression</th>
			</tr>

			<?php foreach ($listereservation as $reservation) { ?>

			<tr>
				<td><?php echo  $reservation['idres'];?></td>
                <td><?php echo $reservation['cinClient'];?></td>
                <td><?php echo $reservation['nbrplace'];?></td>
                
				<td><form method="POST" action="modifierreservation.php">
						<input class="btn btn-outline-primary ms-1" type="submit" name="modifier" value="modifier">
						 <input type="hidden" value=<?PHP echo $reservation['idres']; ?> name="idres"> 
					</form>
				</td>
				<td>
					<td><a href="supprimerreservation.php?idres= <?php echo $reservation['idres']?>"><input class="btn btn-outline-primary ms-1" type="submit" value="supprimer"></a></td>
				</td>
			</tr>
			<?php
			}
        }
			?>
		</table>
        </div>
        <!-- Affichage tableau -->
        </div>
        </div>
        </div>
        <div id="google_translate_element"></div> 
        
        <script type="text/javascript"> 
        function googleTranslateElementInit() { 
          new google.translate.TranslateElement({pageLanguage: 'en'},'google_translate_element'); 
        } 
        </script> 
          
        <script type="text/javascript"
     src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> 
        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                            <a href="excel.php" ><h5>fichier execel</h5></a>  <div class="mt-4 mb-2">
                                    </div>
		<!-- Footer Start -->  
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