<?php
require_once ('admincheck.php');
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
<body background="index_files/back3.jpeg" >
<script>
function validateForm()
{


var a=document.forms["createpackage"]["first_name"].value;
var a1=document.forms["createpackage"]["last_name"].value;
var did=document.forms["createpackage"]["did"].value;
var spe=document.forms["createpackage"]["speciality"].value;
var pas=document.forms["createpackage"]["pass"].value;
var b=document.forms["createpackage"]["phone"].value;
var c=document.forms["createpackage"]["gender"].value;
var d=document.forms["createpackage"]["address"].value;

var d1=new Date(document.forms["createpackage"]["dob"].value);
var today = new Date();
var future = new Date("December 17, 2020 03:24:00");


  if (c==null || c=="")
  {
  alert("Gender must be filled out");
  return false;
  }

  if (a==null || a=="")
  {
  alert("First Name must be filled out");
  return false;
  }
    if (a1==null || a1=="")
  {
  alert("Last Name must be filled out");
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
   if (did==null || did=="")
  {
  alert("Unique Doctor ID must be filled out");
  return false;
  }

    if (spe==null || spe=="")
  {
  alert("Speciality must be filled out");
  return false;
  }
    if (pas==null || pas=="")
  {
  alert("Password must be filled out");
  return false;
  }
}
</script>


    <div align="center">
      <p><img src="index_files/1.jpg" width="700" height="210" /></p>
      <p>&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619; Enter Basic details of Doctor &#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;</p>
      <p><a href = "Superadminhome.php">Home </a></p>
      <p>&nbsp;      </p>
</div>
    <form name="createpackage"  onSubmit="return validateForm()" action="adddoctor_exec.php" method="post">
    <table width="562" border="0" align="center" cellpadding="2" cellspacing="5">
    <tr>
    <td><div align="right"> First Name  : </div></td>
    <td><input name="first_name" type="text" /></td>
    </tr>
	<tr>
    <td><div align="right"> Last Name  : </div></td>
    <td><input name="last_name" type="text" /></td>
    </tr>
	<tr>
    <td><div align="right"> Doctor ID  : </div></td>
    <td><input name="did" type="text" /></td>
    </tr>
	<tr>
    <td><div align="right"> Gender  : </div></td>
    <td><input name="gender" type="text" /></td>
    </tr>
	<tr>
    <td><div align="right"> Phone  : </div></td>
    <td><input name="phone" type="text" /></td>
    </tr>
	<tr>
    <td><div align="right"> Speciality : </div></td>
    <td><input name="speciality" type="text" /></td>
    </tr>
	<tr>
	<td><div align="right">Address : </div></td>
    <td><p>
      <textarea cols="35" rows="5" name="address"></textarea>
    </p>      </td>
    </tr>
	<tr>
    <td><div align="right"> Email-id : </div></td>
    <td><input name="emailid" type="text" /></td>
    </tr>
	 <tr>
    <td><div align="right">Date of birth : </div></td>
    <td><input name="dob" type="date" value = ""/></td>
    </tr>
	
		<tr>
    <td><div align="right">Password  : </div></td>
    <td><input name="pass" type="password" value = "***"/></td>
    </tr>
	
	
    <tr>
    <td height="50"><div align="right"></div></td>
    <td><input name="" type="submit" value="Proceed" /></td>
    </tr>
    </table>
    </form>

</body>
</html>