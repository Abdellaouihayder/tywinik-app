<div class="col-md-6">
          <div class="contact_form-container">
            <form action="chart.php?checkout" id="payment-form" method="POST">
              <div>
                <input type="text" placeholder="Your Name" id="nom" name="nom">
                <span id="nameer"></span>
              </div>
              <div>
                <input type="text" placeholder="Your Phone" id="phone" name="phone">
                <span id="teler"></span>
              </div>
              <div>
                <input type="text" class="message_input" id="adresse" name="adresse" placeholder="adresse">
                <span id="adder"></span>
              </div>
              <div id="card-element" class="form-control">
                <!-- a Stripe Element will be inserted here. -->
              </div>
              <!-- Used to display form errors -->
              <div id="card-errors" role="alert"></div>
              <input type="text" name="element" value="<?=$val?>" hidden>
              <input type="number" name="prix" value="<?=$total?>" hidden>
              <div class="d-flex justify-content-end">
                <button type="submit " class="">
                  checkout
                </button>
              </div>
            </form>
            <form action="" method="get">
              <label for="">coupon :</label>
              <input type="text" name="coupon">
            </form>
            <?php
              error_reporting(0);
              ini_set('display_errors', 0);
              $reduction=$c->coupon(); 
              if($reduction){
                echo '<p>vous avez une reduction de : ';echo $reduction ;echo' </p>';
                header('location : chart.php');
                $total-=($total*$reduction)/100;
                echo 'nouveau prix a payé:' ;echo $total ;
              }else{
                echo '<p>vous n avez pas de reduction</p>';
              }

            ?>
            
            
            <script src="https://js.stripe.com/v3/"></script>
            <script src="checkout.js"></script>
            <script>
						let myform =document.getElementById('payment-form');
						myform.addEventListener('submit',function(e){
							let nameinput = document.getElementById('nom');
							let tel = document.getElementById('phone');
							let adresse = document.getElementById('adresse');
							const regex = /^[a-zA-Z-\s]+$/;
							if(nameinput.value === '' ){
								let nameer = document.getElementById('nameer');
								nameer.innerHTML="le champs nom est vide . ";
								nameer.style.color ='red';
								e.preventDefault();
							}else if (!(regex.test(nameinput.value))){
								let nameer = document.getElementById('nameer');
								nameer.innerHTML = "le nom doit comporter des lettres,et tirets seulements.";
								nameer.style.color='red';
								e.preventDefault();
							}
							if(tel.value === '' ){
								let teler = document.getElementById('teler');
								teler.innerHTML="le champs telephone est vide . ";
								teler.style.color ='red';
								e.preventDefault();
							}else if (!(/^[1-9]+$/.test(tel.value))){
								let teler = document.getElementById('teler');
								teler.innerHTML = "le tel doit comporter que des numero";
								teler.style.color='red';
								e.preventDefault();
							}
							if(adresse.value === '' ){
								let suber = document.getElementById('adder');
								suber.innerHTML="le champs adresse est vide . ";
								suber.style.color ='red';
								e.preventDefault();
							}
						});
					</script>
          </div>
        </div>
