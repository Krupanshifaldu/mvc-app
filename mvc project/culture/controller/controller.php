<?php
require_once("model/model.php");
error_reporting(0);
class controller extends model 
{
    public function __construct()
    {
        parent:: __construct();
      
        // create account for user or customer
        if(isset($_POST["submit"]))
        {
            $fname=$_POST["fname"];
            $lname=$_POST["lname"];
            $em=$_POST["email"];
            $user=$_POST["username"];
            $pass=base64_encode($_POST["password"]);
            $cpass=base64_encode($_POST["c_pass"]);
            $add=$_POST["address"];
           
            $data=array("fname"=>$fname,"lname"=>$lname,"email"=>$em,"username"=>$user,"address"=>$add,"password"=>$pass);
            if($pass==$cpass)
            {
            $chk=$this->insalldata('register',$data);
            if($chk)
            {
                echo "<script>
                alert('Thanks for create your Account with Us')
                window.location='login';
                </script>";
            } 
            }
            else 
            {
                echo "<script>
                alert('Your password and confirmed password does not macthed try again')
                window.location='Register';
                </script>";
            }
    
        }

        //store data in contact us page

        if(isset($_POST["submit1"]))
        {
            $nm=$_POST["name"];
            $em=$_POST["email"];
            $phone=$_POST["phone"];
            $msg=$_POST["message"];
            $data=array("name"=>$nm,"email"=>$em,"phone"=>$phone,"message"=>$msg);
            $chk=$this->insalldata('contact_us',$data);
            if($chk)
            {
                echo "<script>
                alert('Thanks for contact with us Our one of Admin will contact with you Soon!')
                window.location='contact';
                </script>";
            }
        }

         // login as custumer 
         if(isset($_POST["login"]))
         {
             $em=$_POST["email"];
             $pass=base64_encode($_POST["password"]);
             $chk=$this->logindata('register',$em,$pass);
             if($chk)
             {
                 echo "<script>
                 alert('You are Logged In! successfully')
                 window.location='./';
                 </script>";
             }
             else 
             {
                 echo "<script>
                 alert('Your email and password are wrong')
                 window.location='./login';
                 </script>";
 
             }
         }
          // logout here

        if(isset($_GET["logout-here"]))
        {
            $lg=$_GET["logout-here"];
            $lg=$this->logout();
            if($lg)
            {
                echo "<script>
                alert('You are Logout successfully')
                window.location='login';
                </script>";

            }
            
        }
        //store data in contact us page

        if(isset($_POST["comment"]))
        {
            $nm=$_POST["name"];
            $em=$_POST["email"];
            $msg=$_POST["message"];
            $data=array("name"=>$nm,"email"=>$em,"message"=>$msg);
            $chk=$this->commentdata('comment',$data);
            if($chk)
            {
                echo "<script>
                alert('Thanks for give comment. Admin will check Soon and reply you fast!')
                window.location='./';
                </script>";
            }
        }
        //store data in feedback  page

        if(isset($_POST["feedback"]))
        {
            $nm=$_POST["name"];
            $phn=$_POST["phone"];
            $msg=$_POST["message"];
            $data=array("name"=>$nm,"phone"=>$phn,"message"=>$msg);
            $chk=$this->feedbackdata('feedback',$data);
            if($chk)
            {
                echo "<script>
                alert('Thanks for give Your Feedback.')
                window.location='./';
                </script>";
            }
        }
         
         //store data in booking page

         if(isset($_POST["booking"]))
         {
             $rid=$_SESSION["rid"];
             $nm=$_POST["name"];
             $phn=$_POST["phn"];
             $sel=$_POST["select"];
             $dt=$_POST["date"];
             $time=$_POST["time"];
             $service=$_POST["service"];
             $place=$_POST["place"];
             $des=$_POST["des"];
             $plan=$_POST["plan"];
             $data=array("rid"=>$rid,"name"=>$nm,"phone"=>$phn,"date"=>$dt,"time"=>$time,"select_category"=>$sel,"service_name"=>$service,"Briefly_describe"=>$des,"plan"=>$plan,);
             $chk=$this->insalldata('appoinment',$data);
             if($chk)
             {
                 echo "<script>
                 alert('your appointment was booking successfully')
                 window.location='booking';
                 </script>";
             }
         }
 
        // fetch all category
        $catnm=$this->selectalldata('tbl_addcategory');

        //fetch all comments
        $comment=$this->selectalldata('comment');

        

         // fetch all subcategory with category
         if(isset($_GET["category_id"]))
         {
             $id=$_GET["category_id"];
             $subcatnm=$this->selectsubcategorydetails('tbl_addsubcategory','catid',$id);
         }
         // fetch all products with subcategory
         if(isset($_GET["category_id"]))
         {
             $id=$_GET["category_id"];
             $imgnm=$this->img('tbl_img','catid',$id);
        }
        
        // update for user or customer
        if(isset($_POST["upd"]))
        {
            // upload image
            $rid=$_SESSION["rid"];

            $fname=$_POST["fname"];
            $lname=$_POST["lname"];
            $em=$_POST["email"];
            $user=$_POST["username"];
            $add=$_POST["address"];
           
         //    $data=array("photo"=>$path,"firstname"=>$fname,"lastname"=>$lname,"email"=>$em,"mobile"=>$mob,"address"=>$add);

            $chk=$this->updata('register',$fname,$lname,$em,$user,$add,'rid',$rid);

            if($chk)
            {
                echo "<script>
                alert('Thanks for update your account with Us')
                window.location='Manage-profile';
                </script>";
            } 
        }

         // manage profile 
         if(isset($_SESSION["rid"]))
         {
             $rid=$_SESSION["rid"];
             $manageprof=$this->manageprofile('register','rid',$rid);
         } 

            // all cart data view as user added of cart
            if(isset($_SESSION["rid"]))
            {
                $rid=$_SESSION["rid"];
                $view=$this->viewappoinment('appoinment','register','appoinment.rid=register.rid','rid',$rid);
            }

             //  forget password 
        if(isset($_POST["frgt"]))
        {
            $em=$_POST["email"];
            $pass=$this->frgpassword('register',$em);
            if($pass)
            {
                echo "<script>
                alert('Your password is :'+''+'$pass')
                window.location='login';
                </script>";

            }

            else 
            {
                echo "<script>
                alert('Your email does not exist try with another email')
                window.location='Forget-password';
                </script>";

            }

        }

        //  change  password 
        if(isset($_POST["sub"]))
        {
            $rid=$_SESSION["rid"];
            $opass=base64_encode($_POST["opass"]);
            $npass=base64_encode($_POST["npass"]);
            $cpass=base64_encode($_POST["cpass"]);

            $chk=$this->chngpassword('register',$opass,$npass,$cpass,$rid);
            if($chk)
            {
                echo "<script>
                alert('Your password is successfully changed')
                window.location='./';
                </script>";

            }

            else 
            {
                echo "<script>
                alert('Your opass,npass and confirm password does not matched')
                window.location='Change-password';
                </script>";

            }

        }
//--------------------------------------------------------------------------------------
        if(isset($_SERVER["PATH_INFO"]))
        {
            switch($_SERVER["PATH_INFO"])
            {
                case '/': 
                    require_once("index.php");
                    require_once("header.php");
                    require_once("slider.php");
                    require_once("content.php");
                    require_once("footer.php");
                    
                    break;   
                case '/Register': 
                    require_once("header.php");
                    require_once("Register.php");
                    require_once("footer.php");
                   break;

                case '/login': 
                    require_once("header.php");
                    require_once("login.php");
                    require_once("footer.php");
                    break;

                case '/Manage-profile': 
                    require_once("index.php");
                    require_once("header.php");
                    require_once("manageprofile.php");
                    require_once("footer.php");
                    break;
                    
                case '/forget-password': 
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("forgetpassword.php");
                    require_once("footer.php");
                    require_once("applynow.php");
                    require_once("login.php");
                    break;
                
                case '/contact': 
                    require_once("index.php");
                    require_once("header.php");
                    require_once("contact_us.php");
                    require_once("footer.php");
                    break;

                case '/Learn_More': 
                    require_once("header.php");
                    require_once("learnmore.php");
                    require_once("footer.php");
                    break;

                case '/about-us': 
                    require_once("index.php");
                    require_once("header.php");
                    require_once("about-us.php");
                    require_once("footer.php");
                    break;

                case '/blog_medium': 
                    require_once("index.php");
                    require_once("header.php");
                    require_once("blog-medium.php");
                    require_once("footer.php");
                    break;
    
                            
            case '/blog-detail': 
                require_once("index.php");
                require_once("header.php");
                require_once("blog-detail.php");
                require_once("footer.php");
                break;

                case '/blog-detail1': 
                    require_once("index.php");
                    require_once("header.php");
                    require_once("blog-detail1.php");
                    require_once("footer.php");
                    break;

                case '/blog-detail2': 
                    require_once("index.php");
                    require_once("header.php");
                    require_once("blog-detail2.php");
                    require_once("footer.php");
                    break;

                case '/faq': 
                    require_once("index.php");
                    require_once("header.php");
                    require_once("faq.php");
                    require_once("footer.php");
                    break;

                case '/shop-list': 
                    require_once("index.php");
                    require_once("header.php");
                    require_once("shop-list.php");
                    require_once("footer.php");
                    break;
                                
                case '/services': 
                    require_once("index.php");
                    require_once("header.php");
                    require_once("service.php");
                    require_once("footer.php");
                    break;
                case '/booking': 
                    require_once("index.php");
                    require_once("header.php");
                    require_once("booking.php");
                    require_once("footer.php");
                    break;
                case '/Mehandi': 
                require_once("index.php");
                require_once("header.php");
                require_once("mendi.php");
                require_once("footer.php");
                break;
                case '/Mehandi2': 
                require_once("index.php");
                require_once("header.php");
                require_once("mendi2.php");
                require_once("footer.php");
                break;
                case '/Mehandi3': 
                    require_once("index.php");
                    require_once("header.php");
                    require_once("mendi3.php");
                    require_once("footer.php");
                    break;
                case '/Mehandi4': 
                    require_once("index.php");
                    require_once("header.php");
                    require_once("mendi4.php");
                    require_once("footer.php");
                    break;
                                            
                case '/What-is-mehandi': 
                require_once("index.php");
                require_once("header.php");
                require_once("art1.php");
                require_once("footer.php");
                break;    
                case '/uses-of-mehndi': 
                    require_once("index.php");
                    require_once("header.php");
                    require_once("art2.php");
                    require_once("footer.php");
                    break;    
            case '/henna-plant': 
                require_once("index.php");
                require_once("header.php");
                require_once("art3.php");
                require_once("footer.php");
                break;    
                case '/tips-of-mehndi': 
                    require_once("index.php");
                    require_once("header.php");
                    require_once("art4.php");
                    require_once("footer.php");
                    break;                            
            case '/Price-plan': 
            require_once("index.php");
            require_once("header.php");
            require_once("priceplan.php");
            require_once("footer.php");
            break;
        case '/Show_appointment': 
            require_once("index.php");
            require_once("header.php");
            require_once("managebooking.php");
            require_once("footer.php");
            break;
        case '/Change-password': 
            require_once("index.php");
            require_once("header.php");
            require_once("changepass.php");
            require_once("footer.php");
            break;
        case '/Forget-password': 
            require_once("index.php");
            require_once("header.php");
            require_once("forgetpass.php");
            require_once("footer.php");
            break;

                                    
                default: 
                require_once("header.php");
                require_once("404.php");
                require_once("footer.php");
                break;
                
            }
        }

    }
}

$obj=new controller;



?>