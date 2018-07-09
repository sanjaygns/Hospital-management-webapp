    <?php
    //Start session
    session_start();
    //Unset the variables stored in session
    if(isset($_SESSION['SESS_MEMBER_ID']) && isset($_SESSION['SESS_FIRST_NAME']) && isset($_SESSION['SESS_LAST_NAME']) )
	{
		?>
		<script>
			
		if(!alert("already logged in ! logout first")) document.location = “logout.php"
		</script>
		<?php
	}
	else if (isset($_SESSION['admin']))
	{
			?>
			<script>
			if(!alert("logged in as admin!!logout first")) document.location = "adminhome.php"	
			</script>	
			<?php
	}
	
	
	
       ?>
<html><title>User Login - Secured</title><style type="text/css">
<!--
body {
	background-color:#FFFFFF;
	background-repeat:no-repeat;
	background-position:center;
}
-->
</style>
<body background="index_files/back3.jpeg"  >
   
</div>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <form name="loginform" action="login_exec.php" method="post">	 
      <table width="716" border="0" align="right" cellpadding="2" cellspacing="5">
    <tr>
    <td colspan="2">
    <!--the code bellow is used to display the message of the input validation-->
    <?php
    if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
    echo '<ul class="err">';
    foreach($_SESSION['ERRMSG_ARR'] as $msg) {
    echo '<li>',$msg,'</li>';
    }
    echo '</ul>';
    unset($_SESSION['ERRMSG_ARR']);
    }
    ?>
    </td>
    </tr>
    <tr>
    <td width="183"><div align="right">User_ID</div></td>
    <td width="510"><input name="username" type="text" /></td>
    </tr>
    <tr>
    <td><div align="right">Password</div></td>
    <td><input name="password" type="password" /></td>
    </tr>
    <tr>
    <td height="28"><div align="right"></div></td>
    <td><input name="" type="submit" value="login" /> 
      <a href="forgot.php">Forgot password</a>. </td>
    </tr>
    </table>
    </form>

</body>
</html>