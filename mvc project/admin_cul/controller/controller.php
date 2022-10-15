<!-------------------------- ADMIN ----------------------------->

<?php
//error_reporting(0);
require_once("model/model.php");
class controller extends model 
{
    public function __construct()
    {
        parent:: __construct();
      
        
//-------------------------------------- login as admin--------------------------
        if(isset($_POST["log"]))
        {
            $em=$_POST["em"];
            $pass=$_POST["pass"];
            $chk=$this->logindata('admin_login',$em,$pass);
            if($chk)
            {
                echo "<script>
                alert('You are Logged In as Admin! successfully')
                window.location='./admin-dashboard';
                </script>";
            }
            else 
            {
                echo "<script>
                alert('Your email and password are wrong')
                window.location='./';
                </script>";

            }
        }
//---------------------- add category here--------------------------------------
        if(isset($_POST["addcategory"]))
        {
            $catnm=$_POST["catname"];
            $addeddate=$_POST["adddate"];
            $data=array("categoryname"=>$catnm,"addeddate"=>$addeddate);
            $chk=$this->insalldata('tbl_addcategory',$data);
            if($chk)
            {
            echo "<script>
            alert('Your Category Added Successfully')
            window.location='admin-addcategory';
            </script>";
       
            }
        }

        // manage category
        $shwcat=$this->selectalldata('tbl_addcategory');

         // delete category here
         if(isset($_GET["delcategory"]))
         {
             $id=base64_decode($_GET["delcategory"]);
             $id=array("catid"=>$id);
             $chk=$this->dellalldata('tbl_addcategory',$id);
             if($chk)
             {
             echo "<script>
             alert('Your Category Deleted Successfully')
             window.location='admin-addcategory';
             </script>";
        
             }
         } 

         //update category here

           // update for category
        if(isset($_POST["upd"]))
        {
            $cat=$_POST["catnm"];
            $dt=$_POST["date"];
           
            $chk=$this->updata('tbl_addcategory','catid',$catid);

            if($chk)
            {
                echo "<script>
                alert('Thanks for update your account with Us')
                window.location='Manage-profile';
                </script>";
            } 
        }

        //manage
        
        $managecat=$this->updata('tbl_addcategory','catid',$catid);
        
        

 //----------------------------- add subcategory here------------------------
         if(isset($_POST["addsubcategory"]))
         {
             
             $subcatnm=$_POST["subcatname"];
             $addeddate=$_POST["date"];
             $data=array("catid"=>$catnm,"subcategoryname"=>$subcatnm,"addeddate"=>$addeddate);
             $chk=$this->insalldata('tbl_addsubcategory',$data);
             if($chk)
             {
             echo "<script>
             alert('Your SubCategory Added Successfully')
             window.location='admin-addsubcategory';
             </script>";
        
             }
         }
                 
         // manage subcategory
         $shwsubcat=$this->joindata('tbl_addcategory','tbl_addsubcategory','tbl_addcategory.catid=tbl_addsubcategory.catid');

         
          // delete subcategory here
        if(isset($_GET["delete-subcategory"]))
        {
            $id=base64_decode($_GET["delete-subcategory"]);
            $id=array("subcatid"=>$id);
            $chk=$this->dellalldata('tbl_addsubcategory',$id);
            if($chk)
            {
            echo "<script>
            alert('Your SubCategory Deleted Successfully')
            window.location='admin-addsubcategory';
            </script>";
       
            }
            
        } 
         
      // update for subcategory
      if(isset($_POST["updt"]))
      {
          $subcat=$_POST["subcatname"];
          $dt=$_POST["date"];
         
          $chk=$this->updsubcat('tbl_addsubcategory','subcatid',$subcatid);

          if($chk)
          {
              echo "<script>
              alert('Thanks for update your account with Us')
              window.location='admin-addsubcategory';
              </script>";
          } 
      }

      //manage
      
      $managesubcat=$this->updsubcat('tbl_addsubcategory','subcatid',$subcatid);
      
      

// -------------------------- add img here---------------------------
          if(isset($_POST["add"]))
          {
            

              $catnm=$_POST["catname"];
              $subcatnm=$_POST["subcatname"];
              $imgs=$_POST["imgname"];
              $tmp_name=$_FILES["img"]["tmp_name"];
            $type=$_FILES["img"]["type"];
            $size=$_FILES["img"]["size"]/1024;
            $path="uploads/imgs/".$_FILES["img"]["name"];
            move_uploaded_file($tmp_name,$path);
            $des=$_POST["des"];

              $data=array("catid"=>$catnm,"subcatid"=>$subcatnm,"iname"=>$imgs,"img"=>$path,"des"=>$des);
              $chk=$this->insalldata('tbl_img',$data);
              if($chk)
              {
              echo "<script>
              alert('Your product Added Successfully')
              window.location='images';
              </script>";
         
              }
          }
                  
          // manage product
          $img=$this->imgdata('tbl_addcategory','tbl_addsubcategory','tbl_img','tbl_addcategory.catid=tbl_addsubcategory.catid', 'tbl_addsubcategory.subcatid=tbl_img.subcatid');

         // delete img here
        if(isset($_GET["img"]))
        {
            $id=base64_decode($_GET["img"]);
            $id=array("iid"=>$id);
            $chk=$this->dellalldata('tbl_img',$id);
            if($chk)
            {
            echo "<script>
            alert('Your Images Deleted Successfully')
            window.location='images';
            </script>";
       
            }
        } 
               // update for img
        if(isset($_POST["updt"]))
        {
            $inm=$_POST["imgname"];
            $img=$_POST["img"];
            $des=$_POST["des"];
        
           
            $chk=$this->updimg('tbl_img','iid',$iid);

            if($chk)
            {
                echo "<script>
                alert('Thanks for update your account with Us')
                window.location='';
                </script>";
            } 
        }

        //manage
        
        $managecat=$this->updimg('tbl_img','iid',$iid);
        
        


// -------------------------- add price here---------------------------
if(isset($_POST["addprice"]))
{
  

    $catnm=$_POST["catname"];
    $subcatnm=$_POST["subcatname"];
    $price=$_POST["price"];
   

    $data=array("catid"=>$catnm,"subcatid"=>$subcatnm,"price"=>$price);
    $chk=$this->insalldata('price_plan',$data);
    if($chk)
    {
    echo "<script>
    alert('Your product Added Successfully')
    window.location='Price-plan';
    </script>";

    }
}
        
// manage product
$price=$this->imgdata('tbl_addcategory','tbl_addsubcategory','price_plan','tbl_addcategory.catid=tbl_addsubcategory.catid', 'tbl_addsubcategory.subcatid=price_plan.subcatid');

// delete img here
if(isset($_GET["price"]))
{
  $id=base64_decode($_GET["price"]);
  $id=array("id"=>$id);
  $chk=$this->dellalldata('price_plan',$id);
  if($chk)
  {
  echo "<script>
  alert('Your Images Deleted Successfully')
  window.location='Price-plan';
  </script>";

  }
} 

//------------------------------------- logout here----------------------

        if(isset($_GET["logout-here"]))
        {
            $lg=$_GET["logout-here"];
            $lg=$this->logout();
            if($lg)
            {
                echo "<script>
                alert('You are Logout as Admin successfully')
                window.location='./';
                </script>";

            }
            
        }
//------------------contact--------------------------------------

// manage all contacts
$shwcontact=$this->selectalldata('contact_us');

  // delete subcategory here
  if(isset($_GET["contact"]))
  {
      $id=base64_decode($_GET["contact"]);
      $id=array("id"=>$id);
      $chk=$this->dellalldata('contact_us',$id);
      if($chk)
      {
      echo "<script>
      alert('Your contact Deleted Successfully')
      window.location='Contact';
      </script>";
 
      }
  } 
   
//------------------users--------------------------------------

// manage all users
$shwuser=$this->selectalldata('register');

  // delete users here
  if(isset($_GET["reg"]))
  {
      $id=base64_decode($_GET["reg"]);
      $id=array("rid"=>$rid);
      $chk=$this->dellalldata('register',$rid);
      if($chk)
      {
      echo "<script>
      alert('Your user Deleted Successfully')
      window.location='Users';
      </script>";
 
      }
  } 
   
  // manage all booking
$shwbook=$this->selectalldata('appoinment');

// delete booking here
if(isset($_GET["book"]))
{
    $id=base64_decode($_GET["book"]);
    $id=array("id"=>$id);
    $chk=$this->dellalldata('appoinment',$id);
    if($chk)
    {
    echo "<script>
    alert('Your user Deleted Successfully')
    window.location='Booking';
    </script>";

    }
} 
 


//------------------feedback--------------------------------------

// manage all feedback
$shwfeedback=$this->selectalldata('feedback');

  // delete subcategory here
  if(isset($_GET["feed"]))
  {
      $id=base64_decode($_GET["feed"]);
      $id=array("id"=>$id);
      $chk=$this->dellalldata('feedback',$id);
      if($chk)
      {
      echo "<script>
      alert('Your feedback Deleted Successfully')
      window.location='Feedback';
      </script>";
 
      }
  } 
   


//------------------comment--------------------------------------

// manage all comment
$shwcomment=$this->selectalldata('comment');

  // delete subcategory here
  if(isset($_GET["comm"]))
  {
      $id=base64_decode($_GET["comm"]);
      $id=array("id"=>$id);
      $chk=$this->dellalldata('comment',$id);
      if($chk)
      {
      echo "<script>
      alert('Your comment Deleted Successfully')
      window.location='Comment';
      </script>";
 
      }
  } 

  
   
 //--------------------------------------------------------------------------

        if(isset($_SERVER["PATH_INFO"]))
        {
            switch($_SERVER["PATH_INFO"])
            {
        case '/': 
            require_once("index.php");
            require_once("login.php");
            break;   
        case '/admin-dashboard': 
            require_once("index.php");
            require_once("header.php");
            require_once("sidebar.php");
            require_once("dashboard.php");
            require_once("footer.php");
            break;
        case '/admin-addcategory': 
            require_once("index.php");
            require_once("header.php");
            require_once("sidebar.php");
            require_once("addcategory.php");
            require_once("footer.php");
            break;

        case '/admin-addsubcategory': 
            require_once("index.php");
            require_once("header.php");
            require_once("sidebar.php");
            require_once("addsubcategory.php");
            require_once("footer.php");
            break;
            case '/images': 
                require_once("index.php");
                require_once("header.php");
                require_once("sidebar.php");
                require_once("addimages.php");
                require_once("footer.php");
                break;
            case '/Price-plan': 
                require_once("index.php");
                require_once("header.php");
                require_once("sidebar.php");
                require_once("price_plan.php");
                require_once("footer.php");
                break;
            case '/Contact': 
                require_once("index.php");
                require_once("header.php");
                require_once("sidebar.php");
                require_once("contact.php");
                require_once("footer.php");
                break;
            case '/Comment': 
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("comment.php");
                    require_once("footer.php");
                    break;
                case '/Feedback': 
                        require_once("index.php");
                        require_once("header.php");
                        require_once("sidebar.php");
                        require_once("feedback.php");
                        require_once("footer.php");
                        break;
                case '/Users': 
                            require_once("index.php");
                            require_once("header.php");
                            require_once("sidebar.php");
                            require_once("register.php");
                            require_once("footer.php");
                            break;
                case '/Booking': 
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("booking.php");
                    require_once("footer.php");
                    break;
            case '/update_category': 
                require_once("index.php");
                require_once("header.php");
                require_once("sidebar.php");
                require_once("updt_cat.php");
                require_once("footer.php");
                break;
        case '/update_subcategory': 
            require_once("index.php");
            require_once("header.php");
            require_once("sidebar.php");
            require_once("updt_subcat.php");
            require_once("footer.php");
            break;
            case '/update_img': 
                require_once("index.php");
                require_once("header.php");
                require_once("sidebar.php");
                require_once("updt_img.php");
                require_once("footer.php");
                break;
                    
                default: 
                require_once("index.php");
                require_once("404.php");
               
                break;
                
            }
        }

    }
}

$obj=new controller;



?>