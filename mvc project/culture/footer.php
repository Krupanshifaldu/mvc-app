<!--// Footer \\-->
<footer id="hotmeal-footer" class="hotmeal-footer-one">
		<span class="hotmeal-footer-transparent"></span>

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="hotmeal-footer-heading">
						<a href="index-2.html" class="logo"><img src="<?php echo $baseurl;?>images/k132.png" alt="" style="height:100px; width:120px;"></a>
						<p style=" font-size:20px;">C U L T U R E ' S  &nbsp; &nbsp; C R E A T I O N S</p>
					</div>
				</div>
			</div>
		</div>
<!--// Footer Widget \\-->
		<div class="hotmeal-footer-widget">
			<div class="container">
				<div class="row">

					<!--// Widget About Us \\-->
					 <aside class="col-md-4 widget widget_latest_post">
						
					<h2 class="footer-widget-title">Social Media</h2>
						<ul>
							<li>
								<h6><a href="https://instagram.com/ll_culture.art.official_ll?igshid=YmMyMTA2M2Y="><i class="bi bi-instagram"></i>  INSTAGRAM</a></h6>
								
							</li>
							<li>
								<h6><a href="https://pin.it/7BcqpGA"><i class="bi bi-pinterest"></i> PINTREST</a></h6>
								
							</li>
							<li>
								<h6><a href="<?php echo $mainurl;?>blog-detail.html"><i class="bi bi-envelope"></i> GMAIL</a></h6>
								
							</li>
							<h2 class="footer-widget-title">Location</h2>
							<h6><a href="<?php echo $mainurl;?>blog-detail.html"><i class="bi bi-geo-alt-fill"></i> At Rajkot.. More Details Message on Instagram or Mail...</a></h6>
								
           </li>
						</ul> 
					</aside> 
					<!--// Widget About Us \\-->

					<!--// Widget Links \\-->
					<aside class="col-md-4 widget widget_links">
						<h2 class="footer-widget-title">Quick Links</h2>
						<ul>
						<li class="active"><a href="<?php echo $mainurl;?>">Home</a></li>
							<li><a href="<?php echo $mainurl;?>about-us">About-us</a></li>
							<li><a href="<?php echo $mainurl;?>services">Services</a></li>
							
							
							
							<li><a href="<?php echo $mainurl;?>booking">Booking</a></li>
							<li><a href="<?php echo $mainurl;?>Price-plan">Price plan</a></li>
							<li><a href="<?php echo $mainurl;?>faq">FAQ</a></li>
							<li><a href="<?php echo $mainurl;?>blog_medium">Blog medium </a></li>
							<li><a href="<?php echo $mainurl;?>What-is-mehandi">Art of Mehandi</a></li>
							<li><a href="<?php echo $mainurl;?>contact">Contact Us</a></li>
							<li><a href="<?php echo $mainurl;?>login">Login</a></li>
							<li><a href="<?php echo $mainurl;?>Register">Register</a></li>
						</ul>
					</aside>
					<!--// Widget Links \\-->

					<!--// Widget Our Newsletter \\-->
					<aside class="col-md-4 widget widget_newsletter">
						<h2 class="footer-widget-title">GIVE YOUR FEEDBACK</h2>
						<p>you can give your feedback here!!</p>
						<form method="post">
							<ul>
								<li><input type="text" placeholder="Name"  name="name" onBlur="if(this.value == '') { this.value ='Name*'; }" onFocus="if(this.value =='Name*') { this.value = ''; }"></li>
								<li><input type="text" placeholder="Phone" name="phone" onBlur="if(this.value == '') { this.value ='Email*'; }" onFocus="if(this.value =='Email*') { this.value = ''; }"></li>
								<li><input type="text" placeholder="Message" name="message" onBlur="if(this.value == '') { this.value ='Email*'; }" onFocus="if(this.value =='Email*') { this.value = ''; }"></li>
								<li><label class="submit"><input type="submit" name="feedback" value="Send"><span></span></label></li>
								
							</ul>
						</form>
					</aside>
					<!--// Widget Our Newsletter \\-->

				</div>
			</div>
		</div>
		<!--// Footer Widget \\-->

		<!--// CopyRight \\-->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="hotmeal-copyright">
						<p style="font-size:25px;"><a target="_blank" href="">Culture Art</a></p>
					</div>
				</div>
			</div>
		</div>		
		<!--// CopyRight \\-->

	</footer>
	<!--// Footer \\-->

	<div class="clearfix"></div>

	</div>
	<!--// Main Wrapper \\-->

	<!-- Modal -->
	<div class="modal fade searchmodal" id="searchmodal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-body">
				<a href="#" class="hotmeal-close-btn" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></a>
				<form>
					<input type="text" value="Type Your Keyword" onBlur="if(this.value == '') { this.value ='Type Your Keyword'; }" onFocus="if(this.value =='Type Your Keyword') { this.value = ''; }">
					<input type="submit" value="">
					<i class="fa fa-search"></i>
				</form>
			</div>
		</div>
	</div>

	 <!-- jQuery (necessary for JavaScript plugins) -->
	 <script type="text/javascript" src="<?php echo $baseurl;?>script/jquery.js"></script>
	 <script type="text/javascript" src="<?php echo $baseurl;?>script/bootstrap.min.js"></script>
	 <script type="text/javascript" src="<?php echo $baseurl;?>script/slick.slider.min.js"></script>
	 <script type="text/javascript" src="<?php echo $baseurl;?>script/fancybox.pack.js"></script>
	 <script type="text/javascript" src="<?php echo $baseurl;?>script/isotope.min.js"></script>
	 <script type="text/javascript" src="<?php echo $baseurl;?>script/progressbar.js"></script>
	 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
	 <script type="text/javascript" src="<?php echo $baseurl;?>script/functions.js"></script>

	</body>

</html>