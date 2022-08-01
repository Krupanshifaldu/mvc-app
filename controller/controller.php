<?php
require_once("model/model.php");
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
            $cn=$_POST["country"];
            $st=$_POST["state"];
            $ct=$_POST["city"];
            $data=array("fname"=>$fname,"lname"=>$lname,"email"=>$em,"username"=>$user,"address"=>$add,"password"=>$pass);
            if($pass==$cpass)
            {
            $chk=$this->insalldata('register',$data);
            if($chk)
            {
                echo "<script>
                alert('Thanks for create your Account with Us')
                window.location='Register';
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
                    //require_once("index.php");
                    require_once("header.php");
                    require_once("Register.php");
                    require_once("footer.php");
                   // require_once("contact_us.php");
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
                        //require_once("index.php");
                        require_once("header.php");
                        require_once("learnmore.php");
                        require_once("footer.php");
                       // require_once("contact_us.php");
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