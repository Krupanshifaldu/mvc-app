<html>
<body>
<h1>EPMLOYEE'S FORM</h1>

<form method="post" enctype="multipart/form-data">
<table>
<tr>
<td>First name</td>
<td> <input type="text" name="first_name"></td>
</tr>
<tr>
<td>Last name</td>
<td> <input type="text" name="last_name"></td>
</tr>
<tr>
<td>email</td>
<td> <input type="text" name="email"></td>
</tr>
<tr>
<td>username</td>
<td> <input type="text" name="username"></td>
</tr>

<tr>
<td>password</td>
<td> <input type="text" name="password"></td>
</tr>
<tr>
<td>c_password </td>
<td> <input type="text" name="c_password"></td>
</tr>
<tr>
<!-- <td>Salary</td>
<td> <input type="text" name="salary"></td>
</tr>
<tr>
<td> Image: </td>
<td><input type="file" name="img" />
</td>
</tr> -->
<tr>
<td><input type="submit" name="submit"><br></td>
</tr>
</table>
</form>
</body>
</html>


<?php
	include("config.php");
	
	if(isset($_REQUEST['submit'])){
				
			 	 $firstname=$_POST['0'];
				 $lastname=$_POST['1'];
				 $email=$_POST['2'];
				 $username=$_POST['3'];
				 $password=$_POST['4'];
				 $c_password=$_POST['5'];
				//  $salary=$_POST['salary'];
			
				// $img=$_FILES['img']['name'];
				// $target_dir="images/";
				// $imgs=$target_dir.basename($img);
				// move_uploaded_file($_FILES['img']['tmp_name'],$imgs);
			 
				if($password != $c_password){
					
					echo "password and confirm password does not match";
				}else{
			 $iquery="insert into register(ID,first_name,last_name,email,username,password,c_password) values(NULL,'".$firstname."','".$lastname."','".$email."','".$username."','".$password."','".$c_password."')"; 
					
						
					$p1=mysqli_query($db,$iquery);
					if($p1=1){
						header("location:table.php?msg1=inserted");
					
					}
					if($p1=0){
						echo"not inserted";
					
					}
				}

	}
 ?>
 
 