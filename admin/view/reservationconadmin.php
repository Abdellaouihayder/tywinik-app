<?php
	include '../Controller/resconC.php';
    
	$resconC= new resconC();
	$listerescon = $resconC->afficherrescon();
    if (isset($_POST['idress2']) && $_POST['idress2']!="") {
        echo($_POST['idress2']);
        $listerescon = $resconC->recherche($_POST['idress2']);}
    else if(isset($_POST['tri2'])) {
        $listerescon = $resconC->trirescon($_POST['tri2']);
     }else {
        $listerescon=$resconC->afficherrescon(); 
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
        <button class="btn btn-outline-primary m-2"><a href="ajouterrescon.php">Ajouter une reservation</a></button>
        <form method="POST" action="reservationconadmin.php" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
		<div class="input-group">
            <select name="tri2">
                <option value="cin">cin</option>
                <option value="servic">service</option>
                <option value="tarif">tarif</option>
                <option value="distance">distance</option>
                <option value="prix">prix</option>
                <option value="datere">datere</option>
            </select>
			<div class="input-group-append">
                                <button class="btn btn-primary" type="submit" value="tri2">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
			</div>
        </form>
		<form method="POST" action="reservationconadmin.php" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" name="idress2" class="form-control bg-light border-0 small" placeholder="Recherche..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
    </form>
        </div>
        <br>
        <?php
                if(empty($listerescon)){
                    ?>
                    <center><h1>Recherche Non trouver</h1></center>
            <?php
                }
                else{
            ?>
		<table class="table table-striped">
        <tr>
                <th>Idrescon</th>
                <th>Cin Client</th>
				<th>Cin Cond</th>
				<th>Service</th>
				<th>Tarif</th>
                <th>Distance</th>
                <th>Prix</th>
                <th>Date </th>
				<th>Modifier</th>
				<th>Supprimer</th>
			</tr>

            <?php
				foreach($listerescon as $rescon){
			?>
				<tr>
				<td><?php echo $rescon['idrescon']; ?></td>
                <td><?php echo $rescon['cinClient']; ?></td>
				<td><?php echo $rescon['cin']; ?></td>
				<td><?php echo $rescon['servic']; ?></td>
				<td><?php echo $rescon['tarif']; ?></td>
				<td><?php echo $rescon['distance']; ?></td>
				<td><?php echo $rescon['prix']; ?></td>
				<td><?php echo $rescon['datere']; ?></td>
				<td>
					<form method="POST" action="modifierrescon.php">
						<input type="submit" name="Modifier" value="Modifier">
						<input type="hidden" value=<?PHP echo $rescon['idrescon']; ?> name="idrescon">
					</form>
				</td>
				<td>
					<a href="supprimerrescon.php?idrescon=<?php echo $rescon['idrescon']; ?>">Supprimer</a>
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
                                              <a href="excel2.php" ><h5>fichier execel</h5></a>  <div class="mt-4 mb-2">
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