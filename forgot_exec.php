<html>
<body>


<?php
session_start();

 require_once('connection.php');
  //Create query
        $a=$_POST["userid"];
    
 

 
	
	$que = "SELECT * FROM doctor WHERE did='$a'";

	$resu = mysql_query($que);

	$row = mysql_fetch_array($resu);
	echo $row['first_name'] . "____" . $row['pass'] . "____ " . $row['did'];    

	
//email
        $sub="Your Login Information ";
	$email = $row['emailid'];
	$feedback = "Smitha Hospitals :  your User-Id and password is : ".$row['did']." and ".$row['pass']. "\nRegards,\nAdmin";
 	
        $from = "admin@smithahospitals.com";
	$head = "From:" . $from;
	$message="$feedback";
	mail($email,$sub,$message,$head);
	echo "Redirecting to login page"; 
?>	 
  <script type="text/javascript">
    if(!alert("The email has been sent to email associated with  userid :<?php echo $_POST['userid']; ?> regarding login information.")) document.location = 'login.php';
    
  </script>
<?php
	

?>
</body>
</html>