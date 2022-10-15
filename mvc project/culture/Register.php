<link rel="stylesheet" href="<?php echo $baseurl;?>css/gray3.css" type="text/css" media="screen" />
<!-- bvalidator script -->
<script>
$(document).ready(function(){
	$("#frm").bValidator();
})
</script>

<script>
$(document).ready(function(){
	$("#frm1").bValidator();
})
</script>

	<!--// SubHeader \\-->
	<div class="hotmeal-subheader">
		<span class="hotmeal-subheader-transparent"></span>
		<div class="hotmeal-subheader-text">
	        <div class="container">
	            <div class="row">
	                <div class="col-md-12">
	                	<!--<span>Reservation</span>-->
                		<h1>Register</h1>
                		<p>User can Register here. </p>
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
								<h2>Create New Account</h2>
								<img src="<?php echo $baseurl;?>images/J90.jfif" alt="">
								
							</div>
							<form  method="post" enctype="multipart/form-data">
								<ul>
									<li>
										<input type="text" name="fname" placeholder="First_Name" data-bvalidator="required" >
									</li>
                                    <li>
										<input type="text" name="lname" placeholder="Last_Name" data-bvalidator="required" >
									</li>
                                    <li>
										<input type="text" name="email" data-bvalidator="required,email" placeholder="Email" >
									</li>
                                    <li>
										<input type="text" name="username" placeholder="Username">
									</li>
                                    <li>
										<input type="text" name="password" placeholder="password" data-bvalidator="required,minlen[4],maxlen[10]" >
									</li>
                                    <li>
										<input type="text" name="c_pass"  placeholder="C_password" data-bvalidator="required,minlen[4],maxlen[10]">
									</li>
									<li style="width:1100px;">
									<textarea placeholder="Address" data-bvalidator="required" name="address"></textarea>
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
					
					</div>

				</div>
			</div>
		</div>
		<!--// Main Section \\-->

	</div>
	<!--// Main Content \\-->

	