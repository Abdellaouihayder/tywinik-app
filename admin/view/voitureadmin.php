<?php
	include '../Controller/voitureC.php';
    
	$voitureC= new voitureC();
	$list = $voitureC->listvoitureA();
?>

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
<html>
<body>
<div class="container-fluid position-relative bg-white d-flex p-0">
    <?php include 'headeradmin.php'; ?>
    <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-transparent rounded h-100 p-4">
		<center><br><h1 style="color: #009CFF">Liste des voitures</h1></center>
        <div  align="center">
        <button class="btn btn-outline-primary m-2"><a href="addvoiture.php">Ajouter une voiture</a></button>
        </div>
        <br>
        <table class="table table-striped">
			<tr>
			<th>Matricule</th>
            <th>Cin</th>
			<th>Marque</th>
			<th>Couleur</th>
			<th>Type</th>
            <th>Image</th>
			<th>Modification</th>
            <th></th>
            <th>Supression</th>
			</tr>

			<?php foreach ($list as $voiture) { ?>

			<tr>
				<td><?php echo $voiture['matricule']; ?></td>
                <td><?php echo $voiture['idcfk'];?></td>
                <td><?php echo $voiture['marque'];?></td>
                <td><?php echo $voiture['couleur'];?></td>
                <td><?php echo $voiture['type'];?></td>
                <td><img class="square img-fluid" style="width: 120px;" src="upload/<?php echo $voiture['photo'];?>"></td>
                <td><form method="POST" action="updvoiture.php">
						<input class="btn btn-outline-primary ms-1" type="submit" name="modifier" value="modifier">
						<input type="hidden" value=<?PHP echo $voiture['matricule']; ?> name="matricule">
					</form>
				</td>
				<td>
					<td><a href="suppvoiture.php?matricule=<?php echo $voiture['matricule']?>"><input class="btn btn-outline-primary ms-1" type="submit" value="supprimer"></a></td>
				</td>
			</tr>
			<?php
			}
			?>
		</table>

        </div>
        <!-- Affichage tableau -->
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