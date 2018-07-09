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
	

  
  $qry = "UPDATE doctor SET first_name =  '$fn', last_name = '$ln', did='$did', speciality='$spe',  phone =  '$ph', pass =  '$pass', emailid =  '$emailid', address =  '$address', dob = '$dob' WHERE did ='$did'" ;

 $result=mysql_query($qry);
if($result) {
	if($_SESSION['super']) { 
	 ?>
  <script type="text/javascript">
    if(!alert("Doctor data updated.")) document.location = 'superadminhome.php';
    
  </script>  
  
 <?php }
 else {
 ?>
  <script type="text/javascript">
    if(!alert("Doctor data updated.")) document.location = 'adminhome.php';
    
  </script>  
  
 <?php }
 }
 else {
 	 ?>
  <script type="text/javascript">
    if(!alert("Something went wrong.")) document.location = 'superadminhome.php';
    
  </script>  
  
 <?php }
 
 
 ?>
</body>
</html>