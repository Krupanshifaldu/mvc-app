<?php
	include("../config.php");
	//session_destroy();
	//header("Location: signin.php?msg=successlogout&status=1");
?>

<?php 
unset($_SESSION['submit']);
session_destroy();

echo "<script>
alert('You are successfully Logout')
window.location='signin.php';
</script>";

?>