<html>
<style>
    .error{
        color: red;
        widresh: 22%;
        display: block;
        margin: 0 auto;
    }
    </style>
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
    <div class="container-fluid pt-4 px-4 " >
                <div class="row g-4 justify-content-center align-items-center">
                <div class="col-sm-12 col-xl-6 ">
                        <div class="bg-light rounded h-100 p-4">
                        <div class="m-n2" class="mb-4" >
                                <a class="btn btn-outline-primary m-2" href="reservationconadmin.php">Retour</a>
                                
                            <br>
                            <br>
                              </div>
        <!--Form rescon a remplir-->
        
			
        
        <?php


//echo $_POST["idres"];
    include '../Controller/resconC.php';
	$resconC=new resconC();
    $listerescon=$resconC->afficherrescon();
    foreach($listerescon as $rescon){
        if ($rescon['idrescon']==$_POST["idrescon"]) {
?>
        
        <form action="modifiedrescon.php" method="post">

<form action="" method="POST">
<table border="1" class="table" align="center">
<tr>
        <td>
            <label for="idrescon">Numéro rescon:
            </label>
        </td>
        <td><input type="number"  id="idrescon" value="<?php echo $rescon['idrescon']; ?>" disabled  maxlength="20"></td>
        <input type="hidden"value="<?php echo $rescon['idrescon']; ?>"name="idrescon">
    </tr>
    <tr>
        <td>
            <label for="cinClient">Cin Client:
            </label>
        </td>
        <td><input type="number"  id="cinClient" value="<?php echo $rescon['cinClient']; ?>" disabled maxlength="20"></td>
        <input type="hidden"value="<?php echo $rescon['cinClient']; ?>"name="cinClient">
    </tr> 
    <tr>
        <td>
            <label for="cin">Cin conducteur:
            </label>
        </td>
        <td><input type="number"  id="cin" value="<?php echo $rescon['cin']; ?>" disabled maxlength="20"></td>
        <input type="hidden"value="<?php echo $rescon['cin']; ?>"name="cin">
    </tr>
    <tr>
    <h4>Choisissez le service:</h4>
            <select  class="form-control" name="servic" id="servicID" >
                <option value="Déménagement">Déménagemen/Emménagementt</option>
                <option value="Événementiel">Événementiel</option>
                <option value="Course Personnalisée">Course Personnalisée</option>
        </select>
        <br>
    <tr>
        <td>
            <label for="tarif">Tarif (km):
            </label>
        </td>
        <td>
            <input type="number" name="tarif"  id="tarif"value="<?php echo $rescon['tarif']; ?>">
        </td>
    </tr>
    <tr>
        <td>
            <label for="distance">Distance (km):
            </label>
        </td>
        <td>
            <input type="number" name="distance" id="distance" value="<?php echo $rescon['distance']; ?>">
        </td>
    </tr>
    <tr>
        <td>
            <label for="prix">Prix (DT):
            </label>
        </td>
        <td>
            <input type="number" name="prix" id="prix" value="<?php echo $rescon['prix']; ?>">
        </td>
    </tr>
    <tr>
        <td>
            <label for="datere">Date d'inscription:
            </label>
        </td>
        <td>
            <input type="date" name="datere" id="datere" value="<?php echo $rescon['datere']; ?>">
        </td>
    </tr> 
    
    <tr>
        <td></td>
        <td>
            <input type="submit" value="Modifier"> 
        
        
            <input type="reset" value="Annuler" >
        </td>
    </tr>
</table>
</form>
<?php
} }
?>
 <div id="google_translate_element"></div> 

<script type="text/javascript"> 
function googleTranslateElementInit() { 
new google.translate.TranslateElement({pageLanguage: 'en'},'google_translate_element'); 
} 
</script> 

<script type="text/javascript"
src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> 
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
    <!-- JAVA CONTROLE DE SAISIE -->
    <!-- <script type="text/javascript" src="../../js/resconadmin.js"></script> -->
 
<!-- End -->
</body>
</html>