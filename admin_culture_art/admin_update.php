<?php
include("connection.php");

//$db=mysqli_connect("localhost", "root", "", "culture");
$uid=$_GET['update_id'];
$uquery="select *from register WHERE id=$uid";
$up_query=mysqli_query($db,$uquery);
$updata=mysqli_fetch_array($up_query);
?>
<html>
<body>
<h1>UPDATE EPMLOYEE'S FORM</h1>
<form method="post" enctype="multipart/form-data">
<table>
<tr>
<td>id :</td>
<td> <input type="text" name="id" value="<?php echo $updata['id'];?>"></td>
</tr>
<tr>
<td>First Name :</td>
<td> <input type="text" name="fname" value="<?php echo $updata['1'];?>"></td>
</tr>
<tr>
<td>Last name</td>
<td> <input type="text" name="lname" value="<?php echo $updata['2']; ?>"></td>
</tr>
<tr>
<td>email</td>
<td> <input type="text" name="email" value="<?php echo $updata['email']; ?>"></td>
</tr>
<tr>
<td>username </td>
<td> <input type="text" name="username" value="<?php echo $updata['username']; ?>"></td>
</tr>
<td>password</td>
<td> <input type="text" name="password" value="<?php echo $updata['password']; ?>"></td>
</tr>
<td>c_password</td>
<td> <input type="text" name="c_password" value="<?php echo $updata['c_password']; ?>"></td>
</tr>

<!-- <td>Salary</td>
<td> <input type="text" name="salary" value="<?php //echo $updata['7']; ?>"></td>
</tr>
<tr>
<td> Image: </td>
<td><input type="file" name="img1" value="<?php// echo $updata['8']; ?>" />
</td>
<td><img src="images/<?php //ssecho $updata['8']; ?>" height="100" width="100" />
<input type="hidden" name="imgd" value="<?php// echo $updata['8']; ?>" />
</td>
</tr> -->
<tr>
<td><input type="submit" name="updates" value="UPDATE"><br></td>
</tr>
</table>
</form>
</body>
</html>

<?php
if(isset($_REQUEST['updates'])){
	
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	// $salary=$_POST['salary'];
	
	// if($_FILES['img1']['name']!=''){
	
	// $imgg=$_FILES['img1']['name'];
	// $dir="images/";
	// $tot=$dir.basename($imgg);	
	// move_uploaded_file($_FILES['img1']['tmp_name'],$tot);	
	// }else{
	// $imgg=$_POST['imgd'];
	// }
	
	$update_query="update register set 
			
		first_name='".$fname."',
		last_name='".$lname."',
		email='".$email."',
		username='".$username."',
		password='".$password."',
		c_password='".$c_password."'
		
		where ID='".$uid."'
	";
	
$updatedata=mysqli_query($db,$update_query);
	
	if($updatedata=1){
		
		header("location:culture/register.php");
		
	}	
}
?>
