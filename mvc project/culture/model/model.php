<?php
class model 
{
  public $connection=""; 
  public function __construct()
  {
    session_start();
    try 
    {
       $this->connection=new mysqli("localhost","root","","culture");
       //echo "connection successfully";
    } 
    catch(Exception $e)
    {
      die(mysqli_error($this->connection,$e));
    } 

  }
  //create a member function for insertalldata(contact_us)
  public function insalldata($table,$data)
  {
    $k=array_keys($data);
    $kk=implode(',',$k);
    $v=array_values($data);
    $vv=implode("','",$v);
    $insert="insert into $table($kk) values ('$vv')";
    $exe=mysqli_query($this->connection,$insert);
    return $exe;
  }
//create a member function for insertalldata (comment)
public function commentdata($table,$data)
{
  $k=array_keys($data);
  $kk=implode(',',$k);
  $v=array_values($data);
  $vv=implode("','",$v);
  $insert="insert into $table($kk) values ('$vv')";
  $exe=mysqli_query($this->connection,$insert);
  return $exe;
}
//create a member function for insertalldata (feedback)
public function feedbackdata($table,$data)
{
  $k=array_keys($data);
  $kk=implode(',',$k);
  $v=array_values($data);
  $vv=implode("','",$v);
  $insert="insert into $table($kk) values ('$vv')";
  $exe=mysqli_query($this->connection,$insert);
  return $exe;
}
   //fetch all data create a member function(register)
   public function selectalldata($table)
   {
     $select="select *from $table";
     $exe=mysqli_query($this->connection,$select);
     while($fetch=mysqli_fetch_array($exe))
     {
       $arr[]=$fetch;
     } 
     return $arr;
   } 
   
  //fetch all data create a member function
  public function selectsubcategorydetails($table,$column,$id)
   {
   $select="select * from $table where $column='$id'"; 
    $exe=mysqli_query($this->connection,$select);
    while($fetch=mysqli_fetch_array($exe))
    {
      $arr[]=$fetch;
    } 
    return $arr;
    
  }
  //fetch all data create a member function
  public function img($table,$column,$id)
   {
    $select="select * from $table where $column='$id'"; 
    $exe=mysqli_query($this->connection,$select);
    while($fetch=mysqli_fetch_array($exe))
    {
      $arr[]=$fetch;
    } 
    return $arr;
    
  }
    
    // create a member function for login 
  public function logindata($table,$em,$pass)
  {
    $sel="select *from $table where email='$em' and password='$pass'";
    $exe=mysqli_query($this->connection,$sel);
    $num_rows=mysqli_num_rows($exe);
    $fetch=mysqli_fetch_array($exe);
    if($num_rows==1)
    {
      $_SESSION["rid"]=$fetch["rid"];
      $_SESSION["fname"]=$fetch["fname"];
      $_SESSION["email"]=$fetch["email"];
      return true;
    }
    else 
    {
      return false;
    }
  }
//fetch or view cart as user added 
public function manageprofile($table,$column,$id)
{
  $select="select *from $table  where $column='$id'"; 
 $exe=mysqli_query($this->connection,$select);
 while($fetch=mysqli_fetch_array($exe))
 {
   $arr[]=$fetch;
 } 
 return $arr; 
}

//fetch user appointment 

public function viewappoinment($table,$table1,$where,$column,$rid)
{
 $select="select *from $table join $table1 on $where where $table.$column='$rid'"; 
 $exe=mysqli_query($this->connection,$select);
 while($fetch=mysqli_fetch_array($exe))
 {
   $arr[]=$fetch;
 } 
 return $arr; 
}

//update a data or porofile
public function updata($table,$fname,$lname,$em,$user,$add,$column,$rid)
{
 $upd="update $table set fname='$fname',lname='$lname',email='$em',username='$user',address='$add' where $column='$rid'"; 
 $exe=mysqli_query($this->connection,$upd);
 return $exe;

}

 // create a member function for forget password 
 public function frgpassword($table,$em)
 {
   $sel="select password from $table where email='$em'"; 
   $exe=mysqli_query($this->connection,$sel);
   $num_rows=mysqli_num_rows($exe);
   $fetch=mysqli_fetch_array($exe);
   $pass=base64_decode($fetch['password']);
   if($num_rows==1)
   {
     return $pass;
   }
   else 
   {
     return false;
   }
 }

 // create a member function for change password 
 public function chngpassword($table,$opass,$npass,$cpass,$rid)
 {
   $sel="select password from $table where rid='$rid'"; 
   $exe=mysqli_query($this->connection,$sel);
   $fetch=mysqli_fetch_array($exe);
   $pass=$fetch['password'];
   if($pass==$opass && $npass==$cpass)
   {
     $upd="update $table set password='$npass'  where rid='$rid'"; 
     $exe=mysqli_query($this->connection,$upd);
     return $exe;
   }
   else 
   {
     return false;
   }
 }

  // create a member function for logout 
  public function logout()
  {
    unset($_SESSION["rid"]);
    unset($_SESSION["fname"]);
    unset($_SESSION["email"]);
    session_destroy();
    return true;
    
  }
  
}


?>