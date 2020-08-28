<?php
session_start();
unset($_SESSION['uid']);
	$_SESSION['msg'] = 'Logged out succesfully';
//echo '<script language="javascript">document.location.href="home.php"</script>';
?>
<script>
 alert("email or password not match !!");
 window.open('main.php','_self');
 </script>
 <?php
header('Location: ../index.php');
?>
