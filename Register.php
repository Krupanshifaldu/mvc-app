

	<!--// SubHeader \\-->
	<div class="hotmeal-subheader">
		<span class="hotmeal-subheader-transparent"></span>
		<div class="hotmeal-subheader-text">
	        <div class="container">
	            <div class="row">
	                <div class="col-md-12">
	                	<!--<span>Reservation</span>-->
                		<h1>Register</h1>
                		<p>Sed vulputate elementum aliquam. Nunc vel efficitur ante. Ut gravida nulla id ornare sodales.</p>
                	</div>
                </div>
            </div>
        </div>
        <div class="hotmeal-breadcrumb">
        	<div class="container">
        		<div class="row">
        			<div class="col-md-12">
        				<ul>
				            <li><a href="index-2.html">Homepage</a></li>
				            <li class="active">Register</li>
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
								<!--<span>Reservation</span>-->
								<h2>Create New Account</h2>
								<img src="<?php echo $baseurl;?>images/fancy-title-img.png" alt="">
							</div>
							<form  method="post" enctype="multipart/form-data">
								<ul>
									<li>
										<input type="text" name="fname" placeholder="First_Name" onBlur="if(this.value == '') { this.value ='First_Name'; }" onFocus="if(this.value =='First_Name') { this.value = ''; }">
									</li>
                                    <li>
										<input type="text" name="lname" placeholder="Last_Name" onBlur="if(this.value == '') { this.value ='Last_Name'; }" onFocus="if(this.value =='Last_Name') { this.value = ''; }">
									</li>
                                    <li>
										<input type="text" name="email" placeholder="Email"  onBlur="if(this.value == '') { this.value ='email'; }" onFocus="if(this.value =='email') { this.value = ''; }">
									</li>
                                    <li>
										<input type="text" name="username" placeholder="Username" "onBlur="if(this.value == '') { this.value ='username'; }" onFocus="if(this.value =='username') { this.value = ''; }">
									</li>
                                    <li>
										<input type="text" name="password" placeholder="password"  onBlur="if(this.value == '') { this.value ='password*'; }" onFocus="if(this.value =='password*') { this.value = ''; }">
									</li>
                                    <li>
										<input type="text" name="c_pass"  placeholder="C_password">
									</li>
									<li>
									<textarea placeholder="Address"  name="address"></textarea>
									</li>
									<li>
									<select placeholder="country"  name="country">
									<option value="">Select Country</option>
									<?php
									foreach($country as $country1)
									{ 
									?>
									<option value="<?php echo $country1["cid"]?>"><?php echo $country1["cname"]?></option>
									<?php 
									}
									?>
									</select>
									</li>
									<li>
									<select placeholder="state"  name="state">
									<option value="">Select Country</option>
									<?php
									foreach($country as $country1)
									{ 
									?>
									<option value="<?php echo $country1["cid"]?>"><?php echo $country1["cname"]?></option>
									<?php 
									}
									?>
									</select>
									</li>
									<li>
									<select placeholder="city"  name="city">
									<option value="">Select Country</option>
									<?php
									foreach($country as $country1)
									{ 
									?>
									<option value="<?php echo $country1["cid"]?>"><?php echo $country1["cname"]?></option>
									<?php 
									}
									?>
									</select>
									</li>
									

						
						
					
									<!--<li>
										<input type="text" value="Date*" onBlur="if(this.value == '') { this.value ='Date*'; }" onFocus="if(this.value =='Date*') { this.value = ''; }">
									</li>
									<li>
										<input type="text" value="Phone*" onBlur="if(this.value == '') { this.value ='Phone*'; }" onFocus="if(this.value =='Phone*') { this.value = ''; }">
									</li>
									<li>
										<input type="text" value="Time*" onBlur="if(this.value == '') { this.value ='Time*'; }" onFocus="if(this.value =='Time*') { this.value = ''; }">
									</li>
									<li>
										<input type="email" value="Email*" onBlur="if(this.value == '') { this.value ='Email*'; }" onFocus="if(this.value =='Email*') { this.value = ''; }">
									</li>
									<li>
										<input value="00" min="01" max="10" type="number">
									</li>
									<li class="full-form"><textarea placeholder="Messege*"></textarea></li>-->
									<li><label class="submit"><input type="submit" name="submit" value="Register"><span></span></label></li>
								</ul>
							</form>
						</div>						
					</div>
					<!--<div class="col-md-6">
						<div class="hotmeal-reservation-info">
							<div class="hotmeal-fancy-title">
								<span>Make Reservation</span>
								<h2>Call For Reservation</h2>
							</div>
							<p>Sed vulputate elementum aliquam. Nunc vel efficitur ante. Ut gravida nulla id ornare sodales. Aenean aliquam mauris purus, eget mollis lectus sagittis sed. Cras varius est vel massa ultricies, ac rutrum urna hendrerit.</p>
							<ul>
								<li>
									<h6>Call Us At</h6>
									<p>(00) 123 45 678  -  987 65 432</p>
								</li>
								<li>
									<h6>Mail Us At</h6>
									<a href="mailto:yourdomain@name.com">info@example.com - hotmeal@example.com</a>
								</li>
								<li>
									<h6>Meet Now</h6>
									<p>Fusce pulvinar tortor viverra aliquam semper</p>
								</li>
								<li>
									<h6>Follow Us</h6>
									<ul class="hotmeal-reservation-social">
	                                    <li><a href="https://www.facebook.com/" class="fa fa-facebook-square"></a></li>
										<li><a href="https://twitter.com/login?lang=en" class="fa fa-twitter-square"></a></li>
										<li><a href="https://www.linkedin.com/uas/login" class="fa fa-linkedin-square"></a></li>
										<li><a href="https://plus.google.com/" class="fa fa-youtube-square"></a></li>
	                                </ul>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6">
						<div class="hotmeal-reservation-twitter">
							<div class="hotmeal-fancy-title">
								<span>Make Reservation</span>
								<h2>Call For Reservation</h2>
							</div>
							<p>Sed vulputate elementum aliquam. Nunc vel efficitur ante. Ut gravida nulla id ornare sodales. Aenean aliquam mauris purus.</p>
							<ul>
								<li>
									<h6><i class="fa fa-twitter"></i><a href="https://twitter.com/login?lang=en">@hot_meal</a><time datetime="2008-02-14 20:00">1 hour ago</time></h6>
									<p>Etiam auctor dignissim bibendum. Nunc pulvinar massa nunc, quis pellentesque felis suscipit eu.</p>
								</li>
								<li>
									<h6><i class="fa fa-twitter"></i><a href="https://twitter.com/login?lang=en">@hot_meal</a><time datetime="2008-02-14 20:00">3 hour ago</time></h6>
									<p>Suspendisse potenti. Sed ligula nisl, congue quis sodales quis, mattis ut ligula. Quisque id metus eu mauris.</p>
								</li>
							</ul>
						</div>-->
					</div>

				</div>
			</div>
		</div>
		<!--// Main Section \\-->

	</div>
	<!--// Main Content \\-->

	