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
					<h1>Manage Profile</h1>
					<p>User can Manage their profile from here and they can update this. </p>
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
							<h2>Update Account</h2>
							<img src="<?php echo $baseurl;?>images/J90.jfif" alt="">
							
						</div>
						<form  method="post" enctype="multipart/form-data">
							<ul>
								<li>
									<input type="text" name="fname" placeholder="First_Name" data-bvalidator="required" value="<?php echo $manageprof[0]["fname"];?>">
								</li>
								<li>
									<input type="text" name="lname" placeholder="Last_Name" data-bvalidator="required" value="<?php echo $manageprof[0]["lname"];?>" >
								</li>
								<li>
									<input type="text" name="email" data-bvalidator="required,email" placeholder="Email" value="<?php echo $manageprof[0]["email"];?>">
								</li>
								<li>
									<input type="text" name="username" placeholder="Username" value="<?php echo $manageprof[0]["username"];?>">
								</li>
								
								<li style="width:1100px;">
								<textarea placeholder="Address" data-bvalidator="required" name="address" value="<?php echo $manageprof[0]["address"];?>"></textarea>
								</li>
								
								<li><label class="submit"><input type="submit" name="upd" value="Update"><span></span></label></li>

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

