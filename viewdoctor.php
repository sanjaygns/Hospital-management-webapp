    <?php
   //require_once('auth.php');
	session_start();	
	include('connection.php');
 
 ?>

  
  
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0043)file:///C:/xampp/htdocs/package/package.htm -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="keywords" content="ss, packages, tour">
<meta name="description" content="Your Complete package tour Internet friend. Information about various package ">
<meta name="author" content="sspackage">
<title>View Doctors</title>

<link type="text/css" href="./index_files/menu.css" rel="stylesheet">
	<script src="./index_files/ga.js" async="" type="text/javascript"></script><script type="text/javascript" src="./index_files/jquery.js"></script>
	<script type="text/javascript" src="./index_files/menu.js"></script>
    

<style type="text/css">
body,td,th {
	color: #060;
	width: 1000px;
}
</style>
<style>
.fadein {
	position:relative;
	height:210px;
	width:700px;
	left: 0px;
	top: 0px;
	right: 0px;
	bottom: 0px;
	float: left;
}
.fadein img {
	position:absolute;
	left:0px;
	top:0px;
}

body {
		background-color:#FFFFFF;
		background-position:top;
		background-repeat:no-repeat;
		
}
.style1 {color: #3300FF}
.style2 {color: #0000FF}
.style3 {font-size: 14px}
.style8 {font-size: 12px}
.style10 {color: #000000}
.style13 {font-size: 16}
.style14 {color: #66FF33}
</style>

<script>
$(function(){
	$('.fadein img:gt(0)').hide();
	setInterval(function(){$('.fadein :first-child').fadeOut().next('img').fadeIn().end().appendTo('.fadein');}, 3000);
});
</script>

<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body background="index_files/back4.png" leftmargin="5" topmargin="5" class="BCdefultfont" marginheight="5" marginwidth="5">
<script>
function validateForm()
{


var a=document.forms["patient"]["pid"].value;


  if (a=="Default" || a=="")
  {
  alert("Choose a valid Doctor ID");
  return false;
  }

 
}
</script>





<!--Container Start--->
<!--Top ads Start--->
<!--Top ads ends--->
<!--Welcometext Start--->
<div class="welcomtext" id="welcometext">
  <h2 align="right" class="style2">Owner area -  Usha Eye Hospitals </h2>
  <h1 align="center">&nbsp;</h1>
  <div align="right">
<h4>&nbsp;</h4>
<h4>&nbsp;</h4>
<h4>&nbsp;</h4>
<h4>&nbsp;</h4>
<h4><em>.</em></h4>
<!--Time Start--->  
 <h1><span class="style8">Signed as: 
     <?php 
	 if($_SESSION['super']) {
	 echo "super";
	 }
	 if($_SESSION['admin']) {
	 echo "admin";
	 }
	 else {
	  echo $_SESSION['SESS_FIRST_NAME']; echo " ";
      echo $_SESSION['SESS_LAST_NAME'];
	  } ?>
   
 </span><a href="logout.php" class="style3">Logout</a></h1>
 </span>

 <p align="center"><a href="viewpatient.php"> &#9619;&#9619;&#9619;&#9619;&#9619; View Patients                 
     </h1>
     <!--Time Ends---> 
  &#9619;&#9619;&#9619;&#9619;&#9619;</p>
 </div>
</div>
<div align="left">
  <p style="y-index:300;margin-top:-2px;"><img src="./index_files/main-delimiter.png" alt="greenbar2" width="1000" height="5" align="baseline" /></p>
</div>
 <!--Welcometext end--->  
<!--Menu Start--->
<div id="menu" style="y-index:300;margin-top:-2px;">
  <ul class="menu">
  <div align="left"></div>
      <li class="current"><a href=<?php if($_SESSION['admin']) { if($_SESSION['super']) echo "super"; echo "adminhome.php" ; } else { echo "doctor_home.php"; } ?> class="parent"><span><font color="#0000FF">Home</font></span></a>      </li>
      <li><a href="file:///E:/web/link" class="parent style1"><span><font color="#0000FF">View info</font></span></a>
          <ul style="display: none; left: -2px; width: 163px; height: 120px; overflow: hidden;">
            <li><a href="localpackage.php"><span style="color: rgb(169, 169, 169);">info1</span></a></li>
              <li><a href="statepackage.php"><span style="color: rgb(169, 169, 169);">info2</span></a></li>
              <li><a href="seasonalpackage.php"><span style="color: rgb(169, 169, 169);">info3</span></a></li>
          </ul>
    </li>
      
      <li style="left: 35px; width: 56px; display: block; overflow: hidden;" class="back"><div class="left"></div></li><li class="back" style="left: 35px; width: 56px;"><div class="left"></div></li><li class="back" style="left: 35px; width: 56px; display: block; overflow: hidden;"><div class="left"></div></li><li class="back" style="left: 35px; width: 56px;"><div class="left"></div></li><li class="back" style="left: 35px; width: 56px; display: block;"><div class="left"></div></li></ul>
</div>

  <?php
  
  $data = "select * from doctor";
  
  $query = mysql_query($data);
  if( mysql_num_rows($query) > 0 ) {
	}
 
 ?>

<div align="left">
  <p style="y-index:300;margin-top:-2px;"><img src="./index_files/main-delimiter.png" alt="greenbar2" width="1000" height="5" align="baseline" /></p>
</div>
<p>&nbsp;______________________________________________________________________________________________________________________________________________________</p>
<table width="700" height="100" border="2" cellpadding="5" cellspacing="5">
	<tr>
    <td class="style13"><span class="style10">First name </span></td>
    <td class="style13"><span class="style10">Last name </span></td>
	<td class="style13"><span class="style10">Doctor ID </span></td>
	<td class="style13"><span class="style10">Gender</span></td>
	<td class="style13"><span class="style10">Phone </span></td>
	<td class="style13"><span class="style10">Speciality </span></td>
    <td class="style13"><span class="style10">Address </span></td>
	<td class="style13"><span class="style10">Email-id </span></td>
	<td class="style13"><span class="style10">Dob </span></td>
	<td class="style13"><span class="style10">password </span></td>
    
  
  </tr>

 <?php
  while( $member = mysql_fetch_assoc($query) ) {
  
  
 ?>
  <tr>
  	  <td class="style13"><span class="style10"><?php echo $member['first_name']; ?></span></td>
    <td class="style13"><span class="style10"><?php echo $member['last_name']; ?></span></td>
	<td class="style13"><span class="style10"><?php echo $member['did']; ?></span></td>
	<td class="style13"><span class="style10"><?php echo $member['gender']; ?></span></td>
	<td class="style13"><span class="style10"><?php echo $member['phone']; ?></span></td>
	<td class="style13"><span class="style10"><?php echo $member['speciality']; ?></span></td>
    <td class="style13"><span class="style10"><?php echo $member['address']; ?></span></td>
	 <td class="style13"><span class="style10"><?php echo $member['emailid']; ?></span></td>
	  <td class="style13"><span class="style10"><?php echo $member['dob']; ?></span></td>
	   <td class="style13"><span class="style10"><?php echo $member['pass']; ?></span></td>
  
	
	
  </tr>
 <?php
 }
 ?>
   <tr>
    <form name="patient"  onSubmit="return validateForm()" action="doctor_detail.php" method="post">
    <td class="style13"><span class="style10">Choose Doctor ID for details </span></td>
	<?php
$qry="select * from doctor";
    $result=mysql_query($qry);

    //Check whether the query was successful or not
   if($result) {
    if(mysql_num_rows($result) > 0) {
    
 
   

?>

    <td width="244"><label>
      <select name="pid">
        <option selected="selected">Default</option>
<?php
  while( $member = mysql_fetch_assoc($result) ) {
 ?>
 		
        <option><?php echo $member['did'] ?></option>
<?php 
} }
 } 
 ?>
      </select>
    </label></td>
    <td><input name="" type="submit" value="Proceed" /></td>
	
	
	</form>

 </tr>

</table>



<p>&nbsp; </p>
</body>
</html>