<?php
 $mainurl="http://localhost/culture_mvc1/culture/";
 $baseurl="http://localhost/culture_mvc1/culture/assets/"; 

//$mainurl="http://culture-art.byethost7.com/";
//$baseurl="http://culture-art.byethost7.com/assets/";
?>

<!DOCTYPE html>
<html lang="en">
	
<head>
	 <meta charset="utf-8">
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	 
	 <title>Cuture Art</title>
     
	 
	 <!-- Css Files -->
	 <link href="<?php echo $baseurl;?>css/bootstrap.css" rel="stylesheet">
	 <link href="<?php echo $baseurl;?>css/font-awesome.css" rel="stylesheet">
	 <link href="<?php echo $baseurl;?>css/flaticon.css" rel="stylesheet">
	 <link href="<?php echo $baseurl;?>css/slick-slider.css" rel="stylesheet">
	 <link href="<?php echo $baseurl;?>css/fancybox.css" rel="stylesheet">
	 <link href="<?php echo $baseurl;?>style.css" rel="stylesheet">
	 <link href="<?php echo $baseurl;?>css/color.css" rel="stylesheet">
	 <link href="<?php echo $baseurl;?>css/responsive.css" rel="stylesheet">
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	 

	 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	 <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	 <!--[if lt IE 9]>
		 <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	 <![endif]-->
	</head>
	<body>
	 
	 <!--// Main Wrapper \\-->
	 <div class="hotmeal-main-wrapper">

	<!--// Header \\-->
	<header id="hotmeal-header" class="hotmeal-header-one">
		<div class="hotmeal-main-header">
			<div class="container">
				<div class="row">
					<aside class="col-md-2"> <a href="<?php echo $mainurl;?>index" class="logo"><img src="<?php echo $baseurl;?>images/k132.png" alt="" ></a> </aside>
					<aside class="col-md-10">
						
						<!--// Navigation \\-->
						<a href="#menu" class="menu-link active"><span></span></a>
						<nav id="menu" class="menu navbar navbar-default">
							<ul class="level-1 navbar-nav">
								<li class="active" style="font-size: 15px;"><a href="<?php echo $mainurl;?>">Home</a></li>
								<li style="font-size: 15px;"><a href="<?php echo $mainurl;?>about-us">About Me</a></li>
								<li style="font-size: 15px;"><a href="<?php echo $mainurl;?>services">Services</a></li>
										
								
								<li style="font-size: 15px;"><a href="<?php echo $mainurl;?>">Gallery</a><span class="has-subnav"><i class="fa fa-angle-down"></i></span>
									<ul class="sub-menu level-2">
									<?php
                                         foreach($catnm as $row) 
                                      {
                                     ?>
										<li><a href="<?php echo $mainurl;?>Mehandi?category_id=<?php echo $row["catid"];?>"><i class=""></i><?php echo $row["categoryname"];?></a><span class="has-subnav"><i class="fa fa-angle-down"></i></span>
										<?php 
                                          }
										  ?>
										</li>
										
								</ul>
								</li>
								<li style="font-size: 15px;"><a href="<?php echo $mainurl;?>booking">Booking</a><span class="has-subnav"><i class="fa fa-angle-down"></i></span>
									
								</li>
								<li style="font-size: 15px;"><a href="#">Pages</a><span class="has-subnav"><i class="fa fa-angle-down"></i></span>
									<ul class="sub-menu level-2">
										
									
										<li><a href="<?php echo $mainurl;?>Price-plan">Price plan</a></li>
										
										
										<li><a href="<?php echo $mainurl;?>faq">FAQ</a></li>
										<li><a href="<?php echo $mainurl;?>blog_medium">Blogs</a><span class="has-subnav"><i class="fa fa-angle-down"></i></span>
									<ul class="sub-menu level-2">
										
										
										
										<li><a href="<?php echo $mainurl;?>blog_medium">Blog medium <i class=" fa fa-angle-right"></i></a><span class="has-subnav"><i class="fa fa-angle-down"></i></span>
											
										</li>
									</ul>
								</li>
								<li><a href="<?php echo $mainurl;?>What-is-mehandi">Art of Mehandi</a>
										<ul class="sub-menu">
												<li><a href="<?php echo $mainurl;?>What-is-mehandi">what-is-mehndi</a></li>
												<li><a href="<?php echo $mainurl;?>uses-of-mehndi">uses-of-mehndi</a></li>
												<li><a href="<?php echo $mainurl;?>henna-plant">henna-plant</a></li>
												<li><a href="<?php echo $mainurl;?>tips-of-mehndi">tips-of-mehndi</a></li>
											</ul>
	                                       </li>
										
										<li><a href="<?php echo $mainurl;?>contact">Contact Us</a></li>
										
                                        <li><a href="<?php echo $mainurl;?>login">Login</a></li>
										<li><a href="<?php echo $mainurl;?>Register">Register</a></li>
										
									</ul>
								</li>
							</ul>
						</nav>
						
						<!--// Navigation \\-->
						<ul class="hotmeal-user-list">
						<?php 
            if(!isset($_SESSION["rid"]))
			{
			?>
						 <li><a href="<?php echo $mainurl;?>Register" class='fa fa-user-circle' style='font-size:40px;color:white;'></a>
						
							 
							  <a href="<?php echo $mainurl;?>login"><span style="color:white; font-size:18px" onmouseover="this.style.color='brown';" onmouseout="this.style.color='white';" >login</span></a></li> 
						</ul>
						
						<?php 
				}
				else 
				{
				?>
				
			<li class="dropdown"><a href="#"  data-toggle="dropdown" class='fa fa-user-circle' style='font-size:40px; color:white;'><i class="bi bi-chevron-double-down" style="font-size: 15px;"onmouseover="this.style.color='brown';" onmouseout="this.style.color='white';"></i></a>
			
				&nbsp;
				<a href="#"><span style="color:white;  font-size:17px"  ><?php echo ucfirst($_SESSION["fname"]);?></i></span></a>
				<ul class="dropdown-menu" style="background-color: black;">
                  <li> <a href="<?php echo $mainurl;?>Manage-profile">Manage Profile </a>
                <a href="<?php echo $mainurl;?>Show_appointment"> View Appointment </a>
                <a href="<?php echo $mainurl;?>Change-password"> Change Password </a><br>
                <a href="<?php echo $mainurl;?>?logout-here" class="btn btn-sm btn-danger text-center"  style="margin-left: 8%;" onclick="return confirm('Are You sure to Logout as Customer ?')"> Logout Here </a></li>
				  
				</ul>
				</li>
				
				<?php 
				}

				?>
					
			 	</div>
			</div>
		</div>
	</header>
	<!--// Header \\-->
