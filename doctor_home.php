    <?php
   //require_once('auth.php');
	session_start();	
	include('connection.php');
	
 
  if(!isset($_SESSION['SESS_FIRST_NAME']))
  {?>
  <script type="text/javascript">
    if(!alert("You need to login first")) document.location = 'login.php';
    exit(); 
  </script><?php
   }
   ?>

  
  
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0043)file:///C:/xampp/htdocs/package/package.htm -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="keywords" content="ss, packages, tour">
<meta name="description" content="Your Complete package tour Internet friend. Information about various package ">
<meta name="author" content="sspackage">
<title>Doctor Homepage</title>

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
		background-repeat:no-repeat;
		background-position:top;
}
.style1 {color: #3300FF}
.style2 {color: #0000FF}
.style3 {font-size: 14px}
.style8 {font-size: 12px}
.style10 {color: #000000}
.style13 {font-size: 16}
.style14 {color: #FF0000}
</style>

<script>
$(function(){
	$('.fadein img:gt(0)').hide();
	setInterval(function(){$('.fadein :first-child').fadeOut().next('img').fadeIn().end().appendTo('.fadein');}, 3000);
});
</script>

<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body  background="index_files/back4.png" onLoad="setInterval(function() {window.location.reload();}, 5000);" leftmargin="5" topmargin="5" class="BCdefultfont" marginheight="5" marginwidth="5">

<!--Container Start--->
<!--Top ads Start--->
<!--Top ads ends--->
<!--Welcometext Start--->
<div class="welcomtext" id="welcometext">
  <h2 align="right" class="style2">Doctors area -  Usha Eye Care </h2>
  <h1 align="center">&nbsp;</h1>
  <div align="right">
<h4>&nbsp;</h4>
<h4>&nbsp;</h4>
<h4>&nbsp;</h4>
<h4>&nbsp;</h4>
<h4><em>.</em></h4>
<!--Time Start--->  
 <h1><span class="style8">Signed as: 
     <?php  echo $_SESSION['SESS_FIRST_NAME']; echo " ";
   echo $_SESSION['SESS_LAST_NAME']; ?>
   
 </span><a href="logout.php" class="style3">Logout</a></h1>
 </span>
 <?php
  $my = $_SESSION['SESS_MEMBER_ID'];
  $data = "select * from opvisit where did = '$my' and prescription =''";
 $waiting = 0; 
  $query = mysql_query($data);
  if( mysql_num_rows($query) > 0 ) {
    $datap = mysql_fetch_array($query);
	$waiting =  mysql_num_rows($query);
	}
 
 ?>
 <p align="center"><a href="viewwaiting.php" class="style3 style2"></a><a href="viewwaiting.php" class="style14"> &#9619;&#9619;&#9619;&#9619;&#9619; Waiting  patients:   <?php echo $waiting ?>                 
    
  &#9619;&#9619;&#9619;&#9619;&#9619;</a><a href="viewpatient.php" class="style14"> &#9619;&#9619;&#9619;&#9619;&#9619; View Patient                 
     </h1>
     <!--Time Ends---> 
  &#9619;&#9619;&#9619;&#9619;&#9619;</a></p>
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
      <li class="current"><a href="doctor_home.php" class="parent"><span><font color="#0000FF">Home</font></span></a>      </li>
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
$cid = $_SESSION['SESS_MEMBER_ID'];

$qry= "SELECT * FROM doctor where did= '$cid'";
$res = mysql_query($qry);
if(!$res)
{
echo "no result";
}
$r = mysql_num_rows($res);
if($r <1)
{
echo "no rows";
}
$r = mysql_fetch_array($res);
?>

<div align="left">
  <p style="y-index:300;margin-top:-2px;"><img src="./index_files/main-delimiter.png" alt="greenbar2" width="1000" height="5" align="baseline" /></p>
</div>
<p>&nbsp;______________________________________________________________________________________________________________________________________________________</p>
<table width="400" height="277" border="2" cellpadding="5" cellspacing="5">
  <tr>
    <td class="style13"><span class="style10">My ID </span></td>
    <td class="style13"><span class="style10"><?php echo $r['did']; ?></span></td>
  </tr>
  <tr>
    <td class="style13"><span class="style10">First Name</span></td>
    <td class="style13"><span class="style10"><?php echo $r['first_name']; ?></span></td>
  </tr>
  <tr>
    <td class="style13"><span class="style10">Last Name</span></td>
    <td class="style13"><span class="style10"><?php echo $r['last_name']; ?></span></td>
  </tr>
  <tr>
    <td class="style13"><span class="style10">Mobile Numbe</span>r</td>
    <td class="style13"><span class="style10"><?php echo $r['phone']; ?></span></td>
  </tr>
  <tr>
    <td class="style13"><span class="style10">E-mail Id</span></td>
    <td class="style13"><span class="style10"><?php echo $r['emailid']; ?></span></td>
  </tr>
  <tr>
    <td class="style13"><span class="style10">Address </span></td>
    <td class="style13"><span class="style10"><?php echo $r['address']; ?></span></td>
  </tr>
  <tr>
    <td class="style13"><span class="style10">Speciality</span></td>
    <td class="style13"><span class="style10"><?php echo $r['speciality']; ?></span></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp; </p>
</body>
</html>