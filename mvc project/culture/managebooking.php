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
					<h1>Show your Appointment here</h1>
					<p>you can show your appointment here.</p>
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

				<div class="col-md-12" style="font-size:15px;">
					<div class="hotmeal-reservation-info">
						<div class="hotmeal-fancy-title">
							<span>Show Appointment</span>
							<h2>You can show your appointment here.</h2>
						</div>
						<?php 
						 foreach($view as $row) 
						 {
						 ?>
						<ul>
							<li>
								<h6>Name</h6>
								<p><?php echo $row["name"];?></p>
							</li>
							<li>
								<h6>Phone</h6>
								<p><?php echo $row["phone"];?></p>
							</li>
							<li>
								<h6>Date</h6>
								<p><?php echo $row["date"];?></p>
							</li>
							<li>
								<h6>Time</h6>
								<p><?php echo $row["time"];?></p>
							</li>
							<li>
								<h6>Category</h6>
								<p><?php echo $row["select_category"];?></p>
							</li>
							<li>
								<h6>Service </h6>
								<p><?php echo $row["service_name"];?></p>
							</li>
							<li>
								<h6>Briefly describe</h6>
								<p><?php echo $row["Briefly_describe"];?></p>
							</li>
							<li>
								<h6>Offer Plan</h6>
								<p><?php echo $row["plan"];?></p>
							</li>
							<?php
						 }
						 ?>
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
									<h5><a href="404.php"> Missing Book Appointment?</a></h5>
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