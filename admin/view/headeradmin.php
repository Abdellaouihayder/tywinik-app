<?php 
session_start(); 
  $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1); 
if($_SESSION!=null)   
{ if ($_SESSION["cin"]!='33355544') header('location:../../index.php');
  ?>
<html>
        <!-- Spinner Start -->
        <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only"></span>
            </div>
        </div>  -->
        <!-- Spinner End -->  
        
        
        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img  src="../img/logo.png" alt="" style="width: 160px; height: 65px;">
                    </div>
                </div>
                <div class="navbar-nav w-100">
                
                <a href="../index.php" class="nav-item nav-link <?php $type="";
    if ($curPageName=="../index.php") $type="active";  echo $type;?>"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="affichageclient.php" class="nav-item nav-link <?php $type="";
    if ($curPageName=="affichageclient.php" || $curPageName=="affichagedetails.php" 
                                        ||
    $curPageName=="adduser.php" || $curPageName=="updateuser.php") $type="active";  echo $type;?>"><i class="fa fa-users"></i>Client</a>
                    <a href="trajetadmin.php" class="nav-item nav-link <?php $type="";
    if ($curPageName=="trajetadmin.php" || $curPageName=="addtrajet.php" || $curPageName=="updtrajet.php")
        $type="active";  echo $type;?>"><i class="fa fa-road"></i>Trajet</a>
    <a href="voitureadmin.php" class="nav-item nav-link <?php $type="";
    if ($curPageName=="voitureadmin.php" || $curPageName=="addvoiture.php" || $curPageName=="updvoiture.php")
        $type="active";  echo $type;?>"><i class="fa fa-car"></i>Voiture</a>
                    <a href="../contactadmin.php" class="nav-item nav-link <?php $type="";
    if ($curPageName=="../contactadmin.php") $type="active";  echo $type;?>"><i class="fa fa-phone"></i>Contact</a>
                    <a href="reservationadmin.php" class="nav-item nav-link <?php $type="";
    if ($curPageName=="reservationadmin.php") $type="active";  echo $type;?>"><i class="fa fa-business-time"></i>Reservation trajet</a>
     <a href="reservationconadmin.php" class="nav-item nav-link <?php $type="";
    if ($curPageName=="reservationconadmin.php") $type="active";  echo $type;?>"><i class="fa fa-business-time"></i>Reservation service</a>
                    <a href="../reclamationadmin.php" class="nav-item nav-link <?php $type="";
    if ($curPageName=="../reclamationadmin.php") $type="active";  echo $type;?>"><i class="fa fa-comments"></i>Reclamation</a>
                    <a href="../avisadmin.php" class="nav-item nav-link <?php $type="";
    if ($curPageName=="../avisadmin.php") $type="active";  echo $type;?>"><i class="fa fa-star"></i>Avis</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="../index.php" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <!-- <form class="d-none d-md-flex ms-4"> 
                    yelzem tetefhem l search
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form> -->
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                    </div>
                    <div class="nav-item dropdown">
                    <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                    </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <img class="rounded-circle me-lg-2" src="../../img/avatar<?=$_SESSION['pdp']?>.png" alt="" style="width: 40px; height: 40px;">
                        <span class="d-none d-lg-inline-flex"><?= $_SESSION['prenom']?>  <?= $_SESSION['nom']?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                        <a href="../../index.php" class="dropdown-item">Mode Client</a>    
                        <a href="../../view/deconnecterclient.php" class="dropdown-item">se deconnecter</a>
                        </div>
                    </div>
                </div>
            </nav>


</html>
<?php
}
else header('location:../../index.php');
?>