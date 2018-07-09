<html>
<body>


<?php

 
 require_once('connection.php');
  //Create query
 	$a= $_POST["date"];
	$c= $_POST["reason"];
	$d= $_POST["as_exam"];
	$e= $_POST["sle"];
	$f= $_POST["fundus"];
	$g= $_POST["treatment"];
	$h= $_POST["surgery"];
	$i= $_POST["prescription"];
	
	

 
  $dat = "UPDATE  opvisit SET  reason =  '$c', prescription =  '$i', as_exam = '$d' , sle = '$e',  fundus = '$f' , treatment ='$g', surgery = '$h' WHERE date =  '$a';";
  
  $que = mysql_query($dat);
  if($que) {
?> <script>
  if(!alert("Updated successfully")) document.location = 'doctor_home.php';
  </script> <?php
  }
 ?>

</body>
</html>