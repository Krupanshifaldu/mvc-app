
<?php
//$db=mysqli_connect("localhost", "root", "", "culture");
	include("config.php");
	$id=$_GET['delete_id'];
	$delete_query="delete from register where ID=".$id; 
	$del_id1=mysqli_query($db,$delete_query);
	
	if($del_id1=1)
	{
		header("location:table.php");
		
	}

?>