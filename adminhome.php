<?php

require_once('admincheck.php');
?>
<html><title>Admin area</title><style type="text/css">
<!--
body {
		background-color:#FFFFFF;
		background-repeat:no-repeat;
		background-position:center;
}
.style4 {color: #996633}
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<body background="index_files/back3.jpeg" >
    <div align="center"><img src="index_files/1.jpg" width="300" height="110" />
</div>
    <form name="loginform" action="login_exec.php" method="post">
      <div align="center">
        <p>&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;
        Welcome    
   Admin 
&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;      </p>
        <p><a href = "adminlogout.php">Admin logout</a> </p>
      </div>
    </form>

    <p align="center"><strong>Select your actions</strong></p>
    <p align="center"><a href = "adminlogout.php"></a></p>
    <form name="form1" method="post" action="">
      <label>
      <div align="center">
        <p> <abbr title="Add New Out Patient">         
         <a href = "add_patient.php"> <img src="index_files/outpatient.png" alt="New out patient" width="230" height="78" > </a>       </p>
        <p>&nbsp;</p>
         <a href = "viewpatient.php"> <p><abbr title="View All Patients"><img src="index_files/patients.png" alt="View all patients" width="210" height="85"> </p> </a>
        <p>&nbsp;</p>
       <a href = "inpatient.php"> <p><abbr title="Add New Inpatient"><img src="index_files/inpatient.png" alt="New Inpatient" width="221" height="78" ></p> </a>
        <p>&nbsp; </p>
      
      </div>
      <p>&nbsp;</p>
</form>
    <p>&nbsp;</p>
</body>
</html>