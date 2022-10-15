<?php 
    if(isset($_SESSION["rid"]))
    {
   ?>
<!--// SubHeader \\-->
<div class="hotmeal-subheader">
		<span class="hotmeal-subheader-transparent"></span>
		<div class="hotmeal-subheader-text">
	        <div class="container">
	            <div class="row">
	                <div class="col-md-12">
	                	<span>Appointment</span>
                		<h1>Book your Appointment</h1>
                		<p>Do you want to book your appointment with us from  your home?</p>
                	</div>
                </div>
            </div>
        </div>
        <div class="hotmeal-breadcrumb">
        	<div class="container">
        		<div class="row">
        			<div class="col-md-12">
        				<ul>
				            <li><a href="<?php echo $mainurl;?>">Homepage</a></li>
				           
				        </ul>
        			</div>
        		</div>
        	</div>
        </div>
    </div>
    <!--// SubHeader \\-->

	<!--// Main Content \\-->
	<div class="hotmeal-main-content">

		<!--// Main Section \\-->
		<div class="hotmeal-main-section">
			<div class="container">
				<div class="row">

					<div class="col-md-12">
						<div class="hotmeal-reserve-table hotmeal-reservation-wrap">
							<div class="hotmeal-fancy-title">
								<span>Appointment</span>
								<h2>Book your Appointment here</h2>
								<img src="<?php echo $baseurl;?>images/J90.jfif" alt="">
							</div>
							<form method="post">
								<ul>
									<li>
										<input type="text" placeholder="Name*" name="name">
									</li>
									<li>
										<input type="text" placeholder="phone*"name="phn" >
									</li>
									
									<li> 
										
                                     Select your Category : &nbsp;&nbsp; Mehandi
    <input type="radio" checked=true name="select" value="Mehandi">&nbsp;&nbsp;&nbsp;
    Painting
    <input type="radio"  name="select" value="Painting">  
									</li>
                                    <li style="width:220px;">Date:&nbsp;
										<input type="date" placeholder="date*" name="date">
									</li>
									<li style="width:220px;">Time:&nbsp;
										<input type="time" placeholder="Time*" name="time">
									</li>
                                    <li>
										<input type="text" placeholder="service_name*"name="service" >
									</li>
                                    <li>
										<input type="text" placeholder="Your Native Place*" name="place">
									</li>
									
									<li class="full-form" ><textarea placeholder="Briefly_describe about your requirement*"name="des"></textarea></li>

									<li style="width:800px;"> 
									Do you want to book our offer plan ? If yes then select here which one you want to book :<BR> &nbsp;&nbsp; Basic Plan 
    <input type="radio" checked=true name="plan" value="Basic Plan ">&nbsp;&nbsp;&nbsp;
     Standerd Plan
    <input type="radio"  name="plan" value="Standerd Plan">  &nbsp;&nbsp;&nbsp;
	Premium Plan
    <input type="radio"  name="plan" value="Premium Plan">
									</li>
									<li></li>
									<li></li>
                                  
									<li><label class="submit"><input type="submit" name="booking" value="Book Appointment"><span></span></label></li>
								</ul>
							</form>
						</div>						
					</div>
					<div class="col-md-12" style="font-size:15px;">
						<div class="hotmeal-reservation-info">
							<div class="hotmeal-fancy-title">
								<span>Make Appointment</span>
								<h2>You can also book your appointment on call</h2>
							</div>
							
							<ul>
								<li>
									<h6>Call Us on</h6>
									<p>93135 30214</p>
								</li>
								<li>
									<h6>Mail Us At</h6>
									<a href="mailto:yourdomain@name.com">cultureart277@gmail.com</a>
								</li>
								<li>
									<h6>Meet Now</h6>
									<p>At Rajkot</p>
								</li>
								<li>
									<h6>Follow Us</h6>
									<ul class="hotmeal-reservation-social">
	                                    <li><a href="https://instagram.com/ll_culture.art.official_ll?igshid=YmMyMTA2M2Y=" class="bi bi-instagram"></a></li>
										<li><a href="https://pin.it/7BcqpGA" class="bi bi-pinterest"></a></li>
										<li><a href="https://api.whatsapp.com/send?phone=9313530214&text=Thanks%20for%20contact%20us%20" class="bi bi-whatsapp"></a></li>
										<li><a href="https://plus.google.com/" class="bi bi-envelope"></a></li>
	                                </ul>
								</li>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<!--// Main Section \\-->

	</div>
	<!--// Main Content \\-->
	<?php 
    }
    else 
    {
        ?>
		<!--// SubHeader \\-->
<div class="hotmeal-subheader">
		<span class="hotmeal-subheader-transparent"></span>
		<div class="hotmeal-subheader-text">
	        <div class="container">
	            <div class="row">
	                <div class="col-md-12">
	                	<span>Appointment</span>
                		<h1>Book your Appointment</h1>
                		<p>Do you want to book your appointment with us from  your home?</p>
                	</div>
                </div>
            </div>
        </div>
        <div class="hotmeal-breadcrumb">
        	<div class="container">
        		<div class="row">
        			<div class="col-md-12">
        				<ul>
				            <li><a href="<?php echo $mainurl;?>">Homepage</a></li>
				           
				        </ul>
        			</div>
        		</div>
        	</div>
        </div>
    </div>
    <!--// SubHeader \\-->

	<!--// Main Section \\-->
	<div class="hotmeal-main-section hotmeal-service-providefull">
			<img src="<?php echo $baseurl;?>images/J94.JFIF" alt="" class="img-one">
			<img src="<?php echo $baseurl;?>images/J96.JFIF" alt="" class="img-two">
			<div class="container">
				<div class="row">

					<div class="col-md-12">
						<div class="hotmeal-fancy-title">
							
						</div>
						<div class="hotmeal-service hotmeal-service-grid">
							<ul class="row">
							
								<li class="col-md-12">
									<div class="hotmeal-service-grid-text">
										<i class="bi bi-people-fill"></i>
										<h5><a> Missing Book Appointment?</a></h5>
										<p>Login first for book your Appointment.</p>
										<span class="btn-shape"></span>
										  <a href="<?php echo $mainurl;?>login"><h3><button type="button" class="mt-5 p-2 btn btn-lg btn-danger">Login</button></h3></a>  
										  <p>If you have not registered , please register first.</p>
										  <a href="<?php echo $mainurl;?>Register"><h3><button type="button" class="mt-5 p-2 btn btn-lg btn-danger">Register</button></h3></a>  
									</div>
								</li>

								
							</ul>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!--// Main Section \\-->
<?php 
    }
    ?>