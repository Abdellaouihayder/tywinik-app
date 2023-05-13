<?php  
session_start(); 
$curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1); 
if($_SESSION==null)   
{ 
  ?>
<html>
<div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
            <a href="../index.php" class="navbar-brand ml-lg-3">
                <img class="m-0 text-uppercase text-primary" src="../img/logo.png" width="180" hight="180">
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="../index.php" class="nav-item nav-link <?php $type="";
    if ($curPageName=="../index.php") $type="active";  echo $type;?>">Acceuil</a>
                    <a href="../apropos.php" class="nav-item nav-link <?php $type="";
    if ($curPageName=="../apropos.php") $type="active";  echo $type;?>">A propos</a>
                    <a href="addtrajetcond.php" class="nav-item nav-link <?php $type="";
    if ($curPageName=="addtrajetcond.php") $type="active";  echo $type;?>">Créer trajet</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle <?php $type="";
    if ((($curPageName=="../trajetsdetailles.php") || ($curPageName=="../conducteur.php"))
          || (($curPageName=="../offre.php") ||($curPageName=="../avis.php")))
     $type="active";  echo $type;?>" data-toggle="dropdown">Nos trajets</a>
                        <div class="dropdown-menu m-0">
                            <a href="../trajetsdetailles.php" class="dropdown-item <?php $type="";
    if ($curPageName=="../trajetsdetailles.php") $type="active";  echo $type;?>">Nos trajets détaillés</a>
                            <a href="../conducteur.php" class="dropdown-item <?php $type="";
    if ($curPageName=="../conducteur.php") $type="active";  echo $type;?>">Meilleurs conducteurs</a>
                            <a href="../offre.php" class="dropdown-item <?php $type="";
    if ($curPageName=="../offre.php") $type="active";  echo $type;?>">Nos offres</a>
                            <a href="../avis.php" class="dropdown-item  <?php $type="";
    if ($curPageName=="../avis.php") $type="active";  echo $type;?>">Avis</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle <?php $type="";
    if ($curPageName=="service.php")
     $type="active";  echo $type;?>" data-toggle="dropdown">Nos Services</a>
                        <div class="dropdown-menu m-0">
                            <a href="service.php?nb=1" class="dropdown-item <?php $type="";
    if ($curPageName=="service.php?nb=1") $type="active";  echo $type;?>">Déménagement/Emménagement</a>
                            <a href="service.php?nb=2" class="dropdown-item <?php $type="";
    if ($curPageName=="service.php?nb=2") $type="active";  echo $type;?>">Course Personnalisée</a>
                            <a href="service.php?nb=3" class="dropdown-item <?php $type="";
    if ($curPageName=="service.php?nb=3") $type="active";  echo $type;?>">Événementiel</a>
                        </div>
                    </div>
                    <a href="../reclamation.php" class="nav-item nav-link <?php $type="";
    if ($curPageName=="../reclamation.php") $type="active";  echo $type;?>">Reclamation</a>
                </div>
                <a href="addclient.php" class="btn btn-outline-primary py-2 px-4 d-none d-lg-block mr-sm-1 <?php $type="";
    if ($curPageName=="addclient.php") $type="active";  echo $type;?>">S'inscrire</a>
                <a href="connecterclient.php" class="nav-item nav-link py-0 px-0 " ><button onclick="document.getElementById('id01').style.display='block'"  class="btn btn-outline-primary py-2 px-4 d-none d-lg-block mr-sm-0 <?php $type="";
    if ($curPageName=="connecterclient.php") $type="active";  echo $type;?>  rm">Se connecter</button></a>
            </div>
        </nav>
    </div>


</html>
<?php
}
else
{  ?>
<html>
<div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
            <a href="../index.php" class="navbar-brand ml-lg-3">
                <img class="m-0 text-uppercase text-primary" src="../img/logo.png" width="180" hight="180">
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="../index.php" class="nav-item nav-link <?php $type="";
    if ($curPageName=="../index.php") $type="active";  echo $type;?>">Acceuil</a>
                    <a href="../apropos.php" class="nav-item nav-link <?php $type="";
    if ($curPageName=="../apropos.php") $type="active";  echo $type;?>">A propos</a>
                    <a href="addtrajetcond.php" class="nav-item nav-link <?php $type="";
    if ($curPageName=="addtrajetcond.php") $type="active";  echo $type;?>">Créer trajet</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle <?php $type="";
    if ((($curPageName=="../trajetsdetailles.php") || ($curPageName=="../conducteur.php"))
          || (($curPageName=="../offre.php") ||($curPageName=="../avis.php")))
     $type="active";  echo $type;?>" data-toggle="dropdown">Nos trajets</a>
                        <div class="dropdown-menu m-0">
                            <a href="../trajetsdetailles.php" class="dropdown-item <?php $type="";
    if ($curPageName=="../trajetsdetailles.php") $type="active";  echo $type;?>">Nos trajets détaillés</a>
                            <a href="../conducteur.php" class="dropdown-item <?php $type="";
    if ($curPageName=="../conducteur.php") $type="active";  echo $type;?>">Meilleurs conducteurs</a>
                            <a href="../offre.php" class="dropdown-item <?php $type="";
    if ($curPageName=="../offre.php") $type="active";  echo $type;?>">Nos offres</a>
                            <a href="../avis.php" class="dropdown-item  <?php $type="";
    if ($curPageName=="../avis.php") $type="active";  echo $type;?>">Avis</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle <?php $type="";
    if ($curPageName=="service.php")
     $type="active";  echo $type;?>" data-toggle="dropdown">Nos Services</a>
                        <div class="dropdown-menu m-0">
                            <a href="service.php?nb=1" class="dropdown-item <?php $type="";
    if ($curPageName=="service.php?nb=1") $type="active";  echo $type;?>">Déménagement/Emménagement</a>
                            <a href="service.php?nb=2" class="dropdown-item <?php $type="";
    if ($curPageName=="service.php?nb=2") $type="active";  echo $type;?>">Course Personnalisée</a>
                            <a href="service.php?nb=3" class="dropdown-item <?php $type="";
    if ($curPageName=="service.php?nb=3") $type="active";  echo $type;?>">Événementiel</a>
                        </div>
                    </div>
                    <a href="../reclamation.php" class="nav-item nav-link <?php $type="";
    if ($curPageName=="../reclamation.php") $type="active";  echo $type;?>">Reclamation</a>
                </div>
                <div class="nav-item dropdown">
        <a href="#" class="nav-link nav-item dropdown-toggle" data-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="../img/avatar<?=$_SESSION['pdp']?>.png" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?= $_SESSION['prenom']?>  <?= $_SESSION['nom']?></span>
                        </a>
                        <div class="dropdown-menu m-0">
                        <?php if ($_SESSION["cin"]=='33355544') {?>
                            <a href="../admin/index.php" class="dropdown-item <?php $type="";
    if ($curPageName=="../admin/index.php") $type="active";  echo $type;?>"> Mode Admin</a>
                            <?php }?>
                        <a href="compteclient.php" class="dropdown-item <?php $type="";
    if ($curPageName=="compteclient.php") $type="active";  echo $type;?>">Compte</a>
                        <a href="deconnecterclient.php" class="dropdown-item<?php $type="";
    if ($curPageName=="deconnecterclient.php") $type="";  echo $type;?>">Déconnection</a>   
                        </div>
                    </div>
                    
                    </div>
        </nav>
    </div>


</html>

<?php
}
?>