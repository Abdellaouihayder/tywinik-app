<!doctype html><html><head><meta charset="utf-8">
<title>How to validate email address in javascript</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- <script>
function validateEmail() {
	var myemail = $("#email").val();
	var reexp = /^\w+([\.-]?\w+)*@gmail.com$/;
    //\w+([\.-]?\w+)*(\.\w{2,3})+$/
	//var reexp = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	
	if (reexp.test(myemail) == true){
		$('#msg').html(myemail + ' is Valid Emal Id');
		$('#msg').css("color", "green");
	}else{
		$('#msg').html(myemail + ' is not Valid Email Id');
		$('#msg').css("color", "red");
	}
}
	
$(document).ready(function(){
	$("#checkemail").click(function(){
    	validateEmail();
  	});
});
</script> -->
</head>
<?php 
for($i=0;$i<11;$i++)
{if (!($i%2)) { ?>
<script>
$(document).ready(function(){$('#msg').html('  <?= $i ?> is paire');
$('#msg').css("color", "green");});
</script> <?php } else { ?>

    <script>
$(document).ready(function(){$('#msg').html('  <?= $i ?> is impaire');
$('#msg').css("color", "green");});
</script>
 <?php }
}?>
<body>
<div id="msg" name="msg">a</div>
<!-- <form novalidate name="checkemail" id="checkemail">
  <label for="email">Email:</label>
  <input type="text" name="email" id="email">
	<div id="msg"></div>


  <input type="button" name="checkemail" id="checkemail" value="Button" >
</form> -->
</body>
</html>