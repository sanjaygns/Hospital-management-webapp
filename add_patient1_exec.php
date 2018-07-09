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
	$i = $_POST["problem"];
	$j = $_POST["doctor"];
	$k =  $_POST["fees"];
	

  $data = "select * from patient where name = '$a' and phone = '$b'";
  
  $query = mysql_query($data);
  if(mysql_num_rows($query) <1) {
  $data1 = "select * from patient";
  
  $query1 = mysql_query($data1);
  $next_pid = mysql_num_rows($query1) +10001; 
  $qry="insert into patient (name,phone,gender,occupation,fhname, fhoccupation, address, pid, dob) values('$a','$b','$c','$d','$e','$f','$g','$next_pid', $h)";
   $result=mysql_query($qry);
}

  $data = "select * from patient where name = '$a' and phone = '$b'";
  
  $query = mysql_query($data);
  $datap = mysql_fetch_array($query);
  $pid = $datap['pid'];
  
  $data = "select * from doctor where first_name = '$j'";
  
  $query = mysql_query($data);
  $datad = mysql_fetch_array($query);
  $did = $datad['did'];
  
 //echo "san> patent number $pid ::::: doctor id $did";
  
  $qry="insert into opvisit (date,reason,did, pid, prescription, fees) values( now(),'$i','$did', '$pid', '', '$k')";

  $query = mysql_query($qry);
 
  if( ! $query ) {
  echo "failllllllllllllllllllllllllllllllllllllllllllllll";
  }
  
	 ?>
  <script type="text/javascript">
    if(!alert("Patient is assigned to a doctor.")) document.location = 'adminhome.php';
    
  </script>  
  

</body>
</html>