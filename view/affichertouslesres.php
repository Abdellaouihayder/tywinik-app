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
   ?>
   <?php
	include '../Controller/reservationC.php';
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
<php>
<?php
                if(empty($listereservation)){
                    ?>
                    <center><h1>Recherche Non trouver</h1></center>
            <?php
                }
                else{
            ?>
                    <center><h1>Liste des reservations trajets</h1></center>
                    <table border="1" class="table"align="center">
			        <tr>
				        <!-- <th>idres</th> -->
                        <th>Point de départ</th>
                        <th>Point d arrivé</th>
                        <th>Date</th>
                        <th>Heure</th>
                        <th>Nombre De Place</th>
                        <th>Prix</th>
				        <th>Modifier</th>
				        <th>Supprimer</th>
			        </tr>
            <?php
				    foreach($listereservation as $reservation){
                        if($reservation['cinClient']==$_SESSION['cin'])
                        { 
                            include_once '../controller/trajetC.php';
                            $trajetC= new trajetC();
                            $idt=$reservation['idtrajet'];
                            //echo $idt;
                            $list = $trajetC->listTrajetB($idt);
                            //var_dump($list);
                            
			?>
			<tr>
                <td><?php foreach($list as $trajet){ echo $trajet['pt_dep'];}?></td>
                <td><?php foreach($list as $trajet){ echo $trajet['pt_arr'];}?></td>
                <td><?php foreach($list as $trajet){ echo $trajet['date'];}?></td>
                <td><?php foreach($list as $trajet){ echo $trajet['heure'];}?></td>
                <td><?php echo $reservation['nbrplace']; ?></td>
                <td><?php foreach($list as $trajet){ echo $trajet['prix'];}?></td>

				<td>
					<form method="POST" action="modifierreservation.php">
						<input type="submit" name="Modifier" value="Modifier">
						<input type="hidden" value=<?PHP echo $reservation['idres']; ?> name="idres">
					</form>
				</td>
				<td>
					<a href="supprimerreservation.php?idres=<?php echo $reservation['idres']; ?>">Supprimer</a>
				</td>
			</tr>
			<?php
				}}
            }
			?>
		</table>
        <?php
     include '../Controller/resconC.php';
     $resconC=new resconC();
     if (isset($_POST['idrcons2']) && $_POST['idrcons2']!="") {
         echo($_POST['idrcons2']);
         $list = $resconC->recherche($_POST['idrcons2']);}
     else if(isset($_POST['tri2'])) {
         $list = $resconC->trirescon($_POST['tri2']);
      }else {
         $list=$resconC->afficherrescon(); 
     }
   ?>
 <?php
                 if(empty($list)){
                     ?>
                     <center><h1>Recherche Non trouver</h1></center>
             <?php
                 }
                 else{
             ?>
                     <center><h1>Liste des reservations services </h1></center>
                     <table border="1" class="table"align="center">
                     <tr>
                     <th>service</th>
                <th>prix</th>
                <th>distance</th>
                <th>date</th>
				<th>Modifier</th>
				<th>Supprimer</th>
			</tr>
             <?php
                     foreach($list as $rescon){
                         if($rescon['cinClient']==$_SESSION['cin'])
                         { 
                             include_once '../controller/userC.php';
                             $userC= new userC();
                             
             ?>
             <tr>   
                 <td><?php echo $rescon['servic']; ?></td>    
				<td><?php echo $rescon['prix']; ?></td>
                <td><?php echo $rescon['distance']; ?></td>
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
                 }}
             }
             ?>
         </table>
        
         <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                             <a href="excel.php" ><h5>fichier execel</h5></a>  <div class="mt-4 mb-2">
                                     </div>
         <!-- Footer Start -->
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

