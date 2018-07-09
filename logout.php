 <?php
    //Start session
    session_start();
    //Unset the variables stored in session
    unset($_SESSION['SESS_MEMBER_ID']);
    unset($_SESSION['SESS_FIRST_NAME']);
   unset($_SESSION['SESS_LAST_NAME']); 
	 unset($_SESSION['admin']);
   unset($_SESSION['super']);  
  ?>
   
  <script>
  if(!alert("successful")) document.location = "login.php"
  </script>
  
  