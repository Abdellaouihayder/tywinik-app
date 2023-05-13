
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
    <?php
/////////////////////////////////////AFFICHAGE ADMIN////////////////////////
include '../controller/userc.php';
$userc= new userc();
if(($_POST!=null) )
{   
    $_SESSION['typetri2']=$_POST["typetri2"];
}
if ($_SESSION['typetri2']==0) $list = $userc->listusers();
else if ($_SESSION['typetri2']==1) $list = $userc->listtri1();
else if ($_SESSION['typetri2']==2) $list = $userc->listtri2();
else if ($_SESSION['typetri2']==3) $list = $userc->listtri3();

?>
<!-- lenaaaa khedmtiiiii -->
            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-12">
                    <form action="affichagedetails.php" method="POST">
                        <div class="bg-light rounded h-100 p-4">
                        <div class="input-group">
                        <!-- <label for="typetri" scope="col"><input type="submit" class="btn btn-outline-primary m-1" value="trier selon :"></label> -->
                                        <select class=" btn-outline-primary bg-transparent" id="typetri2" name="typetri2">
                                            <?php if($_SESSION['typetri2']==0) { ?>
                                                <option class="btn btn-outline-primary m-2" value="0">Aucun tri</option>
                                                <option class="btn btn-outline-primary m-2" value="1">nb Passager</option>
                                                <option class="btn btn-outline-primary m-2" value="2">nb Conducteur</option>
                                                <option class="btn btn-outline-primary m-2" value="3">nb Voiture</option>
                                        
                                            <?php } else if ($_SESSION['typetri2']==1) { ?>
                                                <option class="btn btn-outline-primary m-2" value="1">nb Passager</option>
                                                <option class="btn btn-outline-primary m-2" value="0">Aucun tri</option>
                                                <option class="btn btn-outline-primary m-2" value="2">nb Conducteur</option>
                                                <option class="btn btn-outline-primary m-2" value="3">nb Voiture</option>
                                                <?php } else if ($_SESSION['typetri2']==2) { ?>
                                                    
                                                    <option class="btn btn-outline-primary m-2" value="2">nb Conducteur</option>
                                                    <option class="btn btn-outline-primary m-2" value="0">Aucun tri</option>
                                                <option class="btn btn-outline-primary m-2" value="1">nb Passager</option>
                                                <option class="btn btn-outline-primary m-2" value="3">nb Voiture</option>
                                            <?php } else {?>
                                                <option class="btn btn-outline-primary m-2" value="3">nb Voiture</option>
                                                <option class="btn btn-outline-primary m-2" value="0">Aucun tri</option>
                                                <option class="btn btn-outline-primary m-2" value="1">nb Passager</option>
                                                <option class="btn btn-outline-primary m-2" value="2">nb Conducteur</option>
                                        <?php } ?>
                                        </select>
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit" value="tri">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                        </div>      
                                </form>
                                <h1 style="color: #009CFF" align="center"> Tableau de Clients </h1>
                            <div class="m-n2" class="mb-4" align="center">
                                <button type="button" class="btn btn-outline-primary m-2" ><a href="adduser.php">Ajouter Client</a> </button>
                                <button type="button" class="btn btn-outline-primary m-2" ><a href="affichageclient.php">retour</a> </button>
                            </div>
                            <br>
                            <div class="table-responsive">
                                <table class="table" align="center">
                                    <thead>
                                        <tr align="center">
                                            <th scope="col">Cin</th>
                                            <th scope="col">En tant que Passager</th>
                                            <th scope="col">En tant que Conducteur</th> 
                                            <th scope="col">Nombre de Voiture</th> 
                                            <th scope="col">Service</th>
                                            <th scope="col">Tarif</th>
                                            <!-- <th scope="col">Mot De Passe</th> -->
                                            <th scope="col"> Update</th>
                                            <!-- <th scope="col"> delete</th> -->
                                        </tr>
                                    </thead>
                                    <?php 
                                        foreach ($list as $user) 
                                        {  $service="";
                                            if ($user['service1']==1) $service= "-Déménagement"."<br>".$service;
                                            if($user['service2']==1) $service= "-Course Special"."<br>".$service;
                                            if ($user['service3']==1) $service= "-Evenementiel"."<br>".$service;
                                            if ($user['service1']==0 && $user['service2']==0 && $user['service3']==0) $service="Aucun Service";
                                        ?> 
                                    <tbody align="center">
                                        <tr >
                                            <td ><?=$user['cin']?></td>
                                            
                                            <td text-align="center"><?php if ($user['nbpassager']==0) echo'encore nouveau'; else echo $user['nbpassager'];?></td>
                                            <td text-align="center"><?php if ($user['nbconduire']==0) echo'encore nouveau'; else echo $user['nbconduire'];?></td>
                                            <td text-align="center"><?php if ($user['nbvoiture']==0) echo'encore nouveau'; else echo $user['nbvoiture'];?></td>
                                            <td text-align="center"><?= $service?></td>
                                            <td text-align="center"><?php if ($user['tarif']==0) echo'Aucun Tarif'; else echo $user['tarif'].'Dt/Km';?></td>
                                            <!-- <td text-align="center"><?php  echo $user['mdp'];?></td> -->
                                            <td text-align="center">
                                             <a href="updateuser.php?cin=<?php echo $user['cin']?>"><button type="button" class="btn btn-outline-primary ms-1">Update</button></a>
                                        </td>
                                        <!-- <td text-align="center">
                                        <a href="deleteuser.php?cin=<?php echo $user['cin']?>"><input type="submit" value="delete" class="btn btn-outline-primary m-2"></a>
                                        </td> -->
                                        </tr>
                                        <?php } ?> 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table End -->



<!-- lenaaaa khedmtiiiii -->
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