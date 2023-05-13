<?php
  require '../controller/reservationC.php';
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=liste_des_reservations.com.xls");
$reservationC = new reservationC();
 $reservation = $reservationC->afficherreservation();
 ?>
   <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border='2'>
                                    <thead>

  <tr>
    <th>idtrajet</th>
    <th>idpassage</th>
    <th>nbrplace</th>

  </tr>
  
  <?php 
                foreach($reservation as $reservation) {
        ?>

                                                <td><?php echo $reservation['idtrajet'] ; ?></td>
                                                <td><?php echo $reservation['cinClient'] ; ?></td>
                                                <td><?php echo $reservation['nbrplace'] ; ?></td>
                                               
                                               
                                                
                                                </tr>
                                            
                                                </div>
                      </div>
                  </div>

              </div>
              <!-- /.container-fluid -->

          </div>


      <?php
              }
      ?>
</table>