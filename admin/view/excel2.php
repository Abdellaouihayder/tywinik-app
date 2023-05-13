
<?php
  require '../controller/resconC.php';
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=liste_des_rescons.com.xls");
$resconC = new resconC();
 $rescon = $resconC->afficherrescon();
 ?>
   <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border='2'>
                                    <thead>

  <tr>
   =<th>idrescon</th>
				<th>cin</th>
				<th>service</th>
				<th>tarif</th>
                <th>distance</th>
                <th>prix</th>
                <th>datere</th>

  </tr>
  
  <?php 
                foreach($rescon as $rescon) {
        ?>

                <td><?php echo $rescon['idrescon']; ?></td>
				<td><?php echo $rescon['cin']; ?></td>
				<td><?php echo $rescon['servic']; ?></td>
				<td><?php echo $rescon['tarif']; ?></td>
				<td><?php echo $rescon['distance']; ?></td>
				<td><?php echo $rescon['prix']; ?></td>
				<td><?php echo $rescon['datere']; ?></td>
                                               
                                               
                                                
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