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
<body background="index_files/back3.jpeg"  >
<script>
function validateForm()
{
var c=document.forms["createpackage"]["p_name"].value;
var b=document.forms["createpackage"]["phone"].value;

 if (c==null || c=="")
  {
  alert(" name must be filled out");
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
}
</script>


    <div align="center">
      <p><img src="index_files/1.jpg" width="700" height="210" /></p>
      <p>&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619; Enter Basic details of patient &#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;</p>
      <p>&nbsp;</p>
      <p>&nbsp;      </p>
</div>
    <form name="createpackage"  onSubmit="return validateForm()" action="add_patient1.php" method="post">
    <table width="562" border="0" align="center" cellpadding="2" cellspacing="5">
    <tr>
    <td><div align="right"> Name  : </div></td>
    <td><input name="p_name" type="text" /></td>
    </tr>
	 <tr>
    <td><div align="right"> Phone  : </div></td>
    <td><input name="phone" type="text" /></td>
    </tr>
    <tr>
    <td height="50"><div align="right"></div></td>
    <td><input name="" type="submit" value="Proceed" /></td>
    </tr>
    </table>
    </form>

</body>
</html>