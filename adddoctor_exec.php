<html>
<body>


<?php

require_once ('admincheck.php');  
 require_once('connection.php');
  //Create query
        $fn=$_POST["first_name"];
        $ln=$_POST["last_name"];
	$did=$_POST["did"];
	$spe=$_POST["speciality"];
	$ph = $_POST["phone"];
	$pass = $_POST["pass"];
	$emailid=$_POST["emailid"];
	$address = $_POST["address"];
	$dob =  $_POST["dob"];
	$gender =  $_POST["gender"];
	

  
 
 $qry = "INSERT INTO `doctor`(`first_name`, `last_name`, `did`, `gender`, `speciality`, `phone`, `pass`, `dob`, `emailid`, `address`) VALUES ('$fn','$ln','$did','$gender','$spe','$ph','$pass','$dob','$emailid','$address') ";

 $result=mysql_query($qry);
if($result) {
	if($_SESSION['super']) { 
	 ?>
  <script type="text/javascript">
    if(!alert("Doctor data updated.")) document.location = 'superadminhome.php';
    
  </script>  
  
 <?php }
 
 }
 else {
 	 ?>
  <script type="text/javascript">
    if(!alert("Something went wrong. May be duplicate ID")) document.location = 'superadminhome.php';
    
  </script>  
  
 <?php }
 
 
 ?>
</body>
</html>