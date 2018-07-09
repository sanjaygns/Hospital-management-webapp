<?php

require_once ('admincheck.php');

 include('connection.php');
$abc =  $_POST["p_name"];
$cde =  $_POST["phone"];
  $data = "select * from patient where name = '$abc' and phone = '$cde'";
  
  $query = mysql_query($data);


 
  $data2 = mysql_fetch_array($query);
//  print_r($data2);
// $ac= $data2['p_no'];
//   $_SESSION['p_no']=$ac;
?>
<html><title>Add Patient</title><style type="text/css">
<!--
body {
		background-color:#FFFFFF;
		background-position:center;
		background-repeat:no-repeat;
		
}
-->
</style>
<body background="index_files/back3.jpeg"  >
<script>
function validateForm()
{


var a=document.forms["createpackage"]["name"].value;
var b=document.forms["createpackage"]["phone"].value;
var c=document.forms["createpackage"]["gender"].value;
var d=document.forms["createpackage"]["address"].value;
var e=document.forms["createpackage"]["occupation"].value;
var d1=new Date(document.forms["createpackage"]["dob"].value);
var today = new Date();
var future = new Date("December 17, 2020 03:24:00");
var e=document.forms["createpackage"]["problem"].value;
var f=document.forms["createpackage"]["doctor"].value;
var k=document.forms["createpackage"]["fees"].value;

  if (c==null || c=="")
  {
  alert("Gender must be filled out");
  return false;
  }

  if (a==null || a=="")
  {
  alert("Name must be filled out");
  return false;
  }
  if (b==null || b=="" || b.length != "10" )
  {
  alert("10 Digit number must be filled out");
  return false;
  }
  if (isNaN(b))
  {
  alert("number is not valid");
  return false;
  }

 
   if(d == null || d=="") 
   {
	
  	alert("valid address must be filled out");
  	return false;
  }
  
     if(e == null || e=="") 
   {
	
  	alert("valid issue must be filled out");
  	return false;
  }
   if (d1-today>0)
  {
	
	alert("Dob must be later than the current date!");
  	return false;
  }
  if (d1-future>0)
  {
	
	alert("Date must be within the limited date 2020 !");
  	return false;
  }
 if (f=="Default" || f=="")
  {
  alert("Doctor must be assigned");
  return false;
  }
	if (k=="Default" || k=="")
  {
  alert("Fees must be assigned");
  return false;
  }


}
</script>


    <div align="center">
      <p><img src="index_files/1.jpg" width="700" height="210" /></p>
      <p>&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619; Patient Details &#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;</p>
      <p>&nbsp;</p>
      <p>&nbsp;      </p>
</div>
    <form name="createpackage"  onSubmit="return validateForm()" action="add_patient1_exec.php" method="post">
    <table width="562" border="0" align="center" cellpadding="2" cellspacing="5">
    <tr>
    <td colspan="2">
    <!--the code bellow is used to display the message of the input validation-->   </td>
    </tr>
  
    <tr>
    <td><div align="right">Name  : </div></td>
    <td><input name="name" type="text" value = "<?php echo $abc?>"/></td>
    </tr>
	 <tr>
    <td><div align="right">Phone Number  : </div></td>
    <td><input name="phone" type="text" value = "<?php echo $cde?>"/></td>
    </tr>
	 <tr>
    <td><div align="right">Gender : </div></td>
    <td><p>
      <input name="gender" type="text" value = "<?php echo $data2['gender']?>"/>
    </p>      </td>
    </tr>
	 <tr>
    <td><div align="right">Occupation : </div></td>
    <td><p>
      <input name="occupation" type="text" value = "<?php echo $data2['fhoccupation']?>"/>
    </p>      </td>
    </tr>
	 <tr>
    <td><div align="right">Father / Husband Name : </div></td>
    <td><p>
      <input name="fhname" type="text" value = "<?php echo $data2['fhname']?>"/>
    </p>      </td>
    </tr>
	 <tr>
    <td><div align="right">Father / Husband Occupation : </div></td>
    <td><p>
      <input name="fhoccupation" type="text" value = "<?php echo $data2['fhoccupation']?>"/>
    </p>      </td>
    </tr>
	 <tr>
    <td><div align="right">Address : </div></td>
    <td><p>
      <textarea cols="35" rows="5" name="address"><?php echo $data2['address']?></textarea>
    </p>      </td>
    </tr>
	
	 <tr>
    <td><div align="right">Date of birth : </div></td>
    <td><input name="dob" type="date" value = "<?php echo $data2['dob']?>"/></td>
    </tr>

<?php 


$qry="SELECT * 
FROM  `opvisit` 
ORDER BY  `date` DESC ";
    $result=mysql_query($qry);

    //Check whether the query was successful or not
   if($result) {
    if(mysql_num_rows($result) > 0) {
	$member = mysql_fetch_assoc($result);
	 $last_date = $member['date'];
	 $today = date("Y-m-d H:i:s");
	// $interval = date_diff($today, $last_date);
	 $cons=$today-$last_date;
    if($cons >15 ) {
	$cons = 500;
	} else {
	$cons = 0;
	}
	}
	}
	
	
?>
     <tr>
    <td><div align="right">Consultation Fees : </div></td>
    <td><input name="fees" type="text" value="<?php echo $cons; ?>" /></td>
    </tr>
	<tr>
	    <td><p align="right">Complaint</p>      </td>
	  <td><textarea cols="40" rows="5" name="problem"></textarea>	  </td>
	  </tr>
      <tr>
    <td width="295"><div align="right">
      <label> Doctor : </label>
    </div></td>
<?php
$qry="SELECT first_name FROM doctor";
    $result=mysql_query($qry);

    //Check whether the query was successful or not
   if($result) {
    if(mysql_num_rows($result) > 0) {
   
	
 
   

?>

    <td width="244"><label>
      <select name="doctor">
        <option selected="selected">Default</option>
<?php
  while( $member = mysql_fetch_assoc($result) ) {
 ?>
 		
        <option><?php echo $member['first_name'] ?></option>
<?php 
} }
 } 
 ?>
      </select>
    </label></td>
    </tr>
		 <tr>
    <td><div align="right">Date of birth : </div></td>
    <td><input name="dob" type="date" value = "<?php echo $data2['dob']?>"/></td>
    </tr>
    <tr>
    <td height="50"><div align="right"></div></td>
    <td><input name="" type="submit" value="Proceed" /></td>
    </tr>
    </table>
    </form>

</body>
</html>
