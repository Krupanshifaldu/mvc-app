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
  //create a member function for insertalldata
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

  //fetch all data create a member function
  public function selectalldata($table)
  {
    $select="select * from $table";
    $exe=mysqli_query($this->connection,$select);
    while($fetch=mysqli_fetch_array($exe))
    {
      $arr[]=$fetch;
    } 
    return $arr;
    
  }

  //fetch all data create join a member function
  public function joindata($table,$table1,$where)
  {
   $select="select * from $table join $table1 on $where";
    $exe=mysqli_query($this->connection,$select);
    while($fetch=mysqli_fetch_array($exe))
    {
      $arr[]=$fetch;
    } 
    return $arr;
    
  }

  //fetch all data create join a for img member function
  public function imgdata($table,$table1,$table2,$where,$where1)
  {
    $select="select * from $table join $table1 on $where join $table2 on $where1"; 
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
    $sel="select * from $table where email='$em' and password='$pass'";
    $exe=mysqli_query($this->connection,$sel);
    $num_rows=mysqli_num_rows($exe);
    $fetch=mysqli_fetch_array($exe);
    if($num_rows==1)
    {
      $_SESSION["aid"]=$fetch["aid"];
      $_SESSION["em"]=$fetch["email"];
      return true;
    }
    else 
    {
      return false;
    }
  }
  
  //create a member function for deletedata
  public function dellalldata($table,$id)
  {
      $key=array_keys($id);
      $key1=implode(",",$key);
      $value=array_values($id);
      $value1=implode("','",$value);
      $delete="delete from $table where $key1='$value1'";
      $exe=mysqli_query($this->connection,$delete);
      return $exe;
  } 
//fetch or view cart as user added 
public function manage($table,$column,$id)
{
  $select="select *from $table  where $column='$id'"; 
 $exe=mysqli_query($this->connection,$select);
 while($fetch=mysqli_fetch_array($exe))
 {
   $arr[]=$fetch;
 } 
 return $arr; 
}

//update a data category
public function updata($table,$cat,$dt,$catid)
{
 $upd="update $table set categoryname='$cat',addeddate='$dt', where $column='$catid'"; 
 $exe=mysqli_query($this->connection,$upd);
 return $exe;

}

//update a data subcategory
public function updsubcat($table,$subcat,$dt,$subcatid)
{
 $upd="update $table set subcategoryname='$subcat',addeddate='$dt', where $column='$subcatid'"; 
 $exe=mysqli_query($this->connection,$upd);
 return $exe;

}

//update a data img
public function updimg($table,$img,$dt,$iid)
{
 $upd="update $table set imagename='$inm',img='$img',des='$des', where $column='$iid'"; 
 $exe=mysqli_query($this->connection,$upd);
 return $exe;

}


  // create a member function for logout 
  public function logout()
  {
    unset($_SESSION["aid"]);
    unset($_SESSION["em"]);
    session_destroy();
    return true;
    
  }

}

?>