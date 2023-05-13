<?php
 include '../Controller/trajetC.php';
    include '../Controller/reservationC.php';
    include '../Controller/userc.php';
    $reservation = NULL;
    $reservationC = new reservationC();
$trajetC=new trajetC();
    $userc = new userc();
    $list = $userc->listusers();
    $list2 = $trajetC->listTrajetA();
    if (
        isset($_POST["idt"])  &&
		isset($_POST["nbrplace"]) &&
        isset($_POST["cinClient"]) 
     
    ) {
        if ( 
            !empty($_POST["idt"]) &&
			!empty($_POST["nbrplace"])&&
            !empty($_POST["cinClient"]) 
           
          
        ) {
            $reservation = new reservation(
                null,
                $_POST['idt'],
                $_POST['nbrplace'],
                $_POST['cinClient']

            );
            $reservationC->ajouterreservation($reservation);
            header('Location:reservationadmin.php');
        }
        else
            $error = "Missing information";
    }

    
?>
<html>
<style>
    .error{
        color: red;
        width: 22%;
        display: block;
        margin: 0 auto;
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
                                <a class="btn btn-outline-primary m-2" href="reservationadmin.php">Retour</a>
                            <br>
                              </div>
    <!--Form trajet a remplir-->
        <form name="myForm"action="ajouterreservation.php" method="POST"> 
        <table border="1" class="table" align="center">
        <h4>Choisissez le id du conducteur:</h4>
        <select  class="form-control" name="cinClient" id="cinClientID">
            <?php foreach ($list as $user) { ?>
                <option value="<?php echo $user['cin'];?>"><?php echo $user['cin'];?></option>
            <?php } ?>
            </select>
            <h4>Choisissez le id du trajet:</h4>
            <select  class="form-control" name="idt" id="idt">
            <?php foreach ($list2 as $trajet) { ?>
                <option value="<?php echo $trajet['idt'];?>"><?php echo $trajet['idt'];?></option>
            <?php } ?>
        </select>
        <br>
        <tr>
                    <td>
                        <label for="nbrplace">nbrplace:
                        </label>
                    </td>
                    <td>
                        <input type="number" name="nbrplace" max="4" min="1" id="nbrplace">
                    </td>
                </tr>              
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
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
    <!-- <script type="text/javascript" src="../../js/trajetadmin.js"></script> -->
  
</body>

</html>