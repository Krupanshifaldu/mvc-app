
<?php
$mainurl="http://localhost/culture_mvc1/culture/";
$baseurl="http://localhost/culture_mvc1/culture/assets/"; 
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
					<aside class="col-md-2"> <a href="<?php echo $mainurl;?>index" class="logo"><img src="<?php echo $mainurl;?>images/k132.png" alt="" style="height:80px; width:120px;" ></a> </aside>
					<aside class="col-md-10">
						<!--// Navigation \\-->
						<a href="#menu" class="menu-link active"><span></span></a>
						<nav id="menu" class="menu navbar navbar-default">
							<ul class="level-1 navbar-nav">
								<li class="active"><a href="<?php echo $mainurl;?>">Home</a></li>
								<li><a href="<?php echo $mainurl;?>menu.html">Menu</a></li>
								<li><a href="#">Blogs</a><span class="has-subnav"><i class="fa fa-angle-down"></i></span>
									<ul class="sub-menu level-2">
										<li><a href="<?php echo $mainurl;?>blog-grid.html">Blog Grid <i class=" fa fa-angle-right"></i></a><span class="has-subnav"><i class="fa fa-angle-down"></i></span>
											<ul class="sub-menu">
												<li><a href="<?php echo $mainurl;?>blog-grid-wls.html">Blog Grid W/L/S</a></li>
												<li><a href="<?php echo $mainurl;?>blog-grid-wrs.html">Blog Grid W/R/S</a></li>
											</ul>
										</li>
										<li><a href="<?php echo $mainurl;?>blog-medium.html">Blog Medium <i class=" fa fa-angle-right"></i></a></li>
										<li><a href="<?php echo $mainurl;?>blog-large.html">Blog Large <i class=" fa fa-angle-right"></i></a><span class="has-subnav"><i class="fa fa-angle-down"></i></span>
											<ul class="sub-menu">
												<li><a href="<?php echo $mainurl;?>blog-large-wls.html">Blog Large W/L/S</a></li>
											</ul>
										</li>
										<li><a href="<?php echo $mainurl;?>blog-detail.html">Blog Detail <i class=" fa fa-angle-right"></i></a><span class="has-subnav"><i class="fa fa-angle-down"></i></span>
											<ul class="sub-menu">
												<li><a href="<?php echo $mainurl;?>blog-detail-wls.html">Blog Detail W/L/S</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li><a href="#">Gallery</a><span class="has-subnav"><i class="fa fa-angle-down"></i></span>
									<ul class="sub-menu level-2">
										<li><a href="<?php echo $mainurl;?>shop-grid.html">Shop Grid <i class=" fa fa-angle-right"></i></a><span class="has-subnav"><i class="fa fa-angle-down"></i></span>
											<ul class="sub-menu">
												<li><a href="<?php echo $mainurl;?>shop-grid-wls.html">Shop Grid W/L/S</a></li>
												<li><a href="<?php echo $mainurl;?>shop-grid-wrs.html">Shop Grid W/R/S</a></li>
											</ul>
										</li>
										<li><a href="<?php echo $mainurl;?>shop-list.html">Shop List <i class=" fa fa-angle-right"></i></a><span class="has-subnav"><i class="fa fa-angle-down"></i></span>
											<ul class="sub-menu">
												<li><a href="<?php echo $mainurl;?>shop-list-wls.html">Shop List W/L/S</a></li>
											</ul>
										</li>
										<li><a href="<?php echo $mainurl;?>shop-detail.html">Shop Detail</a></li>
									</ul>
								</li>
								<li><a href="#">Booking</a><span class="has-subnav"><i class="fa fa-angle-down"></i></span>
									<ul class="sub-menu level-2">
										<li><a href="<?php echo $mainurl;?>team-grid.html">Team Grid <i class=" fa fa-angle-right"></i></a><span class="has-subnav"><i class="fa fa-angle-down"></i></span>
											<ul class="sub-menu">
												<li><a href="<?php echo $mainurl;?>team-grid-wls.html">Team Grid W/L/S</a></li>
												<li><a href="<?php echo $mainurl;?>team-grid-wrs.html">Team Grid W/R/S</a></li>
											</ul>
										</li>
										<li><a href="<?php echo $mainurl;?>team-list.html">Team List <i class=" fa fa-angle-right"></i></a><span class="has-subnav"><i class="fa fa-angle-down"></i></span>
											<ul class="sub-menu">
												<li><a href="team-list-wls.html">Team List W/L/S</a></li>
											</ul>
										</li>
										<li><a href="<?php echo $mainurl;?>team-detail.html">Team Detail</a></li>
									</ul>
								</li>
								<li><a href="#">Pages</a><span class="has-subnav"><i class="fa fa-angle-down"></i></span>
									<ul class="sub-menu level-2">
										<li><a href="<?php echo $mainurl;?>reservations.html">Reservations</a></li>
										<li><a href="<?php echo $mainurl;?>about-us.html">About Us</a></li>
										<li><a href="<?php echo $mainurl;?>priceplan.html">Price plan</a></li>
										<li><a href="<?php echo $mainurl;?>gallery.html">Gallery</a></li>
										<li><a href="<?php echo $mainurl;?>gallery-four-col.html">Gallery Four Col</a></li>
										<li><a href="<?php echo $mainurl;?>gallery-two-col.html">Gallery Two Col</a></li>
										<li><a href="<?php echo $mainurl;?>faq.html">FAQ</a></li>
										<li><a href="<?php echo $mainurl;?>404">Error Page</a></li>
										<li><a href="<?php echo $mainurl;?>search-result.html">Search Result</a></li>
										<li><a href="<?php echo $mainurl;?>contact">Contact Us</a></li>
										
                                        <li><a href="<?php echo $mainurl;?>login.html">Login</a></li>
										<li><a href="<?php echo $mainurl;?>Register">Register</a></li>
										
									</ul>
								</li>
							</ul>
						</nav>
						<!--// Navigation \\-->
						<ul class="hotmeal-user-list">
						<li><a href="<?php echo $mainurl;?>Register" class='fa fa-user-circle' style='font-size:40px;color:white;'></a>
							 
							 
							 <a href="logout.php" onclick="return confirm('Are you sure to Logout ?')"><span style="color:white; font-size:18px" onmouseover="this.style.color='brown';" onmouseout="this.style.color='white';" >Logout</span></a></li>
						</ul>
					</aside>
			 	</div>
			</div>
		</div>
	</header>
	<!--// Header \\-->
