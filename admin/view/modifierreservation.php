
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
                                <a class="btn btn-outline-primary m-2" href="reservationadmin.php">Retour</a>
                                
                            <br>
                            <br>
                              </div>
        <!--Form reservation a remplir-->
        
			
        <?php


//echo $_POST["idres"];
    include '../Controller/reservationC.php';
	$reservationC=new reservationC();
    $listereservation=$reservationC->afficherreservation();
    foreach($listereservation as $reservation){
        if ($reservation['idres']==$_POST["idres"]) {
?>
        
        <form action="modifiedreservation.php" method="post">
            <table border="1" align="center">
             <!-- <tr>
                    <td>
                        <label for="idres">Numéro reservation:
                        </label>
                    </td>
                    <td><input type="number" name="idres" id="idres" value="<?php// echo $reservation['idres']; ?>" maxlength="20"></td>
                </tr> -->
            <tr>
                    <td>
                        <label for="nbrplace">nbrplace:
                        </label>
                    </td>
                    <td>
                        <input type="number" name="nbrplace" value="<?php echo $reservation['nbrplace']; ?>" id="nbrplace" max="4"min="1">
                    </td>
                </tr>
                <input type="hidden" value=<?PHP echo $reservation['idres']; ?> name="idres"> 
                <!-- <tr>
                    <td>
                        <label for="cinClient">cinClient:
                        </label>
                    </td>
                    <td><input type="hidden" name="cinClient" id="cinClient" value="<?php //echo $rescon['cinClient']; ?>" maxlength="20"></td>
                </tr>              -->
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier"> 
                    
                    
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
        <div id="google_translate_element"></div> 
        
        <script type="text/javascript"> 
        function googleTranslateElementInit() { 
          new google.translate.TranslateElement({pageLanguage: 'en'},'google_translate_element'); 
        } 
        </script> 
          
        <script type="text/javascript"
     src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> 
<?php } }

?>  
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
    <!-- <script type="text/javascript" src="../../js/reservationadmin.js"></script> -->
 
<!-- End -->
</body>
</html>