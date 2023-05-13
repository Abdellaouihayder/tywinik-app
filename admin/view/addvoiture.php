<?php

    include '../Controller/voitureC.php';
    include '../Controller/userc.php';

    $voiture = NULL;
    $voitureC = new voitureC();

    $userc = new userc();
    $list = $userc->listusers();

    

    if (
        isset($_POST['matricule']) &&
        isset($_POST['idcfk']) &&
		isset($_POST['marque']) &&		
        isset($_POST['couleur']) &&
		isset($_POST['type']) &&
        isset($_FILES['file'])
    ) {
        if (
            !empty($_POST['matricule']) &&
            !empty($_POST['idcfk']) && 
			!empty($_POST['marque']) &&
            !empty($_POST['couleur']) && 
			!empty($_POST['type'])  
        ) {

            //START FILE//
            $tmpName = $_FILES['file']['tmp_name'];
            $name = $_FILES['file']['name'];
            $size = $_FILES['file']['size'];
            $error = $_FILES['file']['error'];
            $type = $_FILES['file']['type'];

            $tabExtension = explode('.', $name);
            $extension = strtolower(end($tabExtension));

            $extensionsAutorisees = ['jpg', 'png', 'jpeg', 'gif'];
            $tailleMax = 400000;

            if(in_array($extension, $extensionsAutorisees) && $size <= $tailleMax && $error == 0){
                $_POST['file'] =$_FILES['file']['name'];

                move_uploaded_file($tmpName, './upload/'.$name);
            }
            else{
                echo "erreur";
            }
            //END FILE//
            var_dump($_POST['matricule'],
            $_POST['idcfk'],
            $_POST['marque'],
            $_POST['couleur'],
            $_POST['type'],
            $_POST['file']);
            $voiture= new voiture(
                $_POST['matricule'],
                $_POST['idcfk'],
                $_POST['marque'],
                $_POST['couleur'],
                $_POST['type'],
                $_POST['file'],
            );
            
            $voitureC->addvoiture($voiture);
           
            header('location:voitureadmin.php');
        }
        
    }  
    
?>

<html>
<style>
    .error{
        color: red;
    }
    </style>

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
    <div class="container-fluid pt-4 px-4 " >
                <div class="row g-4 justify-content-center align-items-center">
                <div class="col-sm-12 col-xl-6 ">
                        <div class="bg-light rounded h-100 p-4">
                        <div class="m-n2" class="mb-4" >
                                <a class="btn btn-outline-primary m-2" href="voitureadmin.php">Retour</a>
                            <br>
                              </div>
    <!--Form voiture a remplir-->
        <form action="" method="POST" enctype="multipart/form-data" > 
          
        <h4>Choisissez le id du conducteur:</h4>
        <select  class="form-control" name="idcfk" id="idcfkID">
            <?php foreach ($list as $user) { ?>
                <option value="<?php echo $user['cin'];?>"><?php echo $user['cin'];?></option>
            <?php } ?>
        </select>

        <br><h4>Donnez la matricule de la voiture:</h4>   
        <input type="text" name="matricule" class="form-control" id="exampleInputEmail1" placeholder="Matricule" required><br>
        <p id="errormatricule" class="error"></p>

        <h4>Donnez la marque de la voiture:</h4>   
        <input type="text" name="marque" class="form-control" placeholder="Marque" required><br>
        <p id="errormarque" class="error"></p> 

        <h4>Donnez la couleur de la voiture:</h4>   
        <input type="text" name="couleur" class="form-control" placeholder="Couleur" required><br>
        <p id="errorcouleur" class="error"></p>

        <h4>Donnez le type:</h4>  
        <input type="text" name="type" class="form-control" placeholder="Type"><br>
        <p id="errortype" class="error"></p>

        <h2 class="font_trajet">Ajouter l image de la voiture:</h2> 
        <input type="file" id="formFile" class="form-control" name="file">
        
        <br>
        <input type="submit" id= "button" value="Publier voiture" class="btn btn-primary" name="publier">
        
        </form> 
</div>
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