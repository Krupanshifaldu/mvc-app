
	<!--// SubHeader \\-->
	<div class="hotmeal-subheader">
		<span class="hotmeal-subheader-transparent"></span>
		<div class="hotmeal-subheader-text">
	        <div class="container">
	            <div class="row">
	                <div class="col-md-12">
	                	<!--<span>Reservation</span>-->
                		<h1>Change Password</h1>
                		<p>User Can Change password from here. </p>
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
								<!--<span>Reservation</span>-->
								<h2>Change Password</h2>
								<img src="<?php echo $baseurl;?>images/J90.jfif" alt="">
							</div>
							<form method="post">
								<ul>
									
									
									
									<li style="width:1100px;">
										<input type="text" name="opass"  placeholder="Old Password" onBlur="if(this.value == '') { this.value ='password*'; }" onFocus="if(this.value =='password*') { this.value = ''; }">
									</li>

									<li style="width:1100px;">
										<input type="text" name="npass"  placeholder="New Password" onBlur="if(this.value == '') { this.value ='password*'; }" onFocus="if(this.value =='password*') { this.value = ''; }">
									</li>

									<li style="width:1100px;">
										<input type="text" name="cpass"  placeholder="Confirm Password" onBlur="if(this.value == '') { this.value ='password*'; }" onFocus="if(this.value =='password*') { this.value = ''; }">
									</li>
                                    
									<!--<li class="full-form"><textarea placeholder="Messege*"></textarea></li>-->
									<li><label class="submit"><input type="submit" name="sub" value="Submit"><span></span></label></li>
									
								</ul>
							</form>
						</div>						
					</div>
				
					</div>

				</div>
			</div>
		</div>
		<!--// Main Section \\-->

	</div>
	<!--// Main Content \\-->

	