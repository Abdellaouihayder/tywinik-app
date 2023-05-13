
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

if(/*!isset($POST) &&*/ ($_POST!=null) )
{   
    $_SESSION['typetri']=$_POST["typetri"];}
    // echo $_SESSION['typetri'];
if ($_SESSION['typetri']==2) $list = $userc->listusers();
else $list = $userc->listtype($_SESSION['typetri']);

 


?>
<!-- lenaaaa khedmtiiiii -->
            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-12">
                    <form action="affichageclient.php" method="POST" >    
                    <div class="bg-light rounded h-100 p-4" >
                        <div class="input-group">
                    <!-- <label for="typetri" scope="col"><input type="submit" class="btn btn-outline-primary m-1" value="Afficher :"></label> -->
                                        <select class=" btn-outline-primary bg-transparent" id="typetri" name="typetri">
                                            <?php if($_SESSION['typetri']==0) { ?>
                                                <option class="btn btn-outline-primary m-2" value="0">Les Femmes</option>
                                                <option class="btn btn-outline-primary m-2" value="1">Les Hommes</option>
                                                <option class="btn btn-outline-primary m-2" value="2"> Les Deux </option>
                                        
                                            <?php } else if ($_SESSION['typetri']==1) { ?>
                                                <option class="btn btn-outline-primary m-2" value="1">Les Hommes</option>
                                                <option class="btn btn-outline-primary m-2" value="0">Les Femmes</option>
                                                <option class="btn btn-outline-primary m-2" value="2"> Les Deux </option>
                                            <?php } else {?>
                                                <option class="btn btn-outline-primary m-2" value="2"> Les Deux </option>
                                                <option class="btn btn-outline-primary m-2" value="0">Les Femmes</option>
                                                <option class="btn btn-outline-primary m-2" value="1">Les Hommes</option> 
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
                                <button type="button" class="btn btn-outline-primary m-2" ><a href="affichagedetails.php">Plus de detail</a> </button>
                                
                            
                            <br>
                            <div class="table-responsive">
                                <table class="table" text-align="center">
                                    <thead>
                                        <tr text-align="center">
                                            <th scope="col">Cin</th>
                                            <th scope="col">Nom</th>
                                            <th scope="col">Prenom</th> 
                                            <th scope="col">Type</th> 
                                            <th scope="col">Phone</th>
                                            <th scope="col">Date de Naissance</th>
                                            <th scope="col">Sexe</th>
                                            <th scope="col">Email</th>
                                            <!-- <th scope="col">Mot De Passe</th> -->
                                            <!-- <th scope="col"> update</th> -->
                                            <th scope="col"> delete</th>
                                        </tr>
                                    </thead>
                                    <?php 
                                        foreach ($list as $user) 
                                        {
                                            if (($user['nbpassager']==null) && ($user['nbconduire']==null))
                                                $type='Client';
                                                else if (($user['nbpassager']!=null) && ($user['nbconduire']==null))
                                                $type='Passager';
                                                else if (($user['nbpassager']==null) && ($user['nbconduire']!=null))
                                                $type='Conducteur';
                                                else $type='Conducteur
                                                            Passager';
                                                
                                                
                                                if ($user['sexe']==0)
                                                $sexe='Femme';
                                                else $sexe='Homme';   

                                                // echo $_SESSION['typetri']; 
                                       ?> 
                                    <tbody>
                                        <tr>
                                            <td text-align="center"><?= $user['cin'];?></td>
                                            <td text-align="center"><?= $user['nom'];?></td>
                                            <td text-align="center"><?= $user['prenom'];?></td>
                                            <td text-align="center"><?= $type?></td>
                                            <td text-align="center"><?= $user['phone'];?></td>
                                            <td text-align="center"><?= $user['dob'];?></td>
                                            <td text-align="center"><?= $sexe;?></td>
                                            <td text-align="center"><?= $user['email'];?></td>
                                            <!-- <td text-align="center"><?= $user['mdp'];?></td> 
                                            <td text-align="center">
                                             <a href="updateuser.php?cin=<?php echo $user['cin']?>"><input type="submit" value="update" class="btn btn-outline-primary m-2"></a>
                                        </td> -->
                                        <td text-align="center">
                                        <a href="deleteuser.php?cin=<?php echo $user['cin']?>"><button type="button" class="btn btn-outline-primary ms-1">Supprimer</button></a>
                                        </td>
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