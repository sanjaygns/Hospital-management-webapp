<html>
<body>


<?php

require_once ('admincheck.php');  
 require_once('connection.php');
  //Create query
        $a=$_POST["name"];
        $b=$_POST["phone"];
	$c=$_POST["gender"];
	$d=$_POST["occupation"];
	$e = $_POST["fhname"];
	$f = $_POST["fhoccupation"];
	$g=$_POST["address"];
	$h = $_POST["dob"];
	$pid =  $_POST["pid"];
	

  
  $qry = "UPDATE patient SET name =  '$a', phone =  '$b', occupation =  '$d', fhname =  '$e', fhoccupation =  '$f', address = '$g', dob =  '$h' WHERE pid ='$pid'" ;

 $result=mysql_query($qry);
if($result) {
	if($_SESSION['super']) {
	 ?>
  <script type="text/javascript">
    if(!alert("Patient data updated.")) document.location = 'superadminhome.php';
    
  </script>  
  
 <?php }
 else {
 ?>
  <script type="text/javascript">
    if(!alert("Patient data updated.")) document.location = 'adminhome.php';
    
  </script>  
  
 <?php }
}
 ?>
</body>
</html>