<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

  <script>
    $(document).ready(function () {
    $('#example').DataTable();
    });
  </script>
  
  <!--// SubHeader \\-->
<div class="hotmeal-subheader">
		<span class="hotmeal-subheader-transparent"></span>
		<div class="hotmeal-subheader-text">
	        <div class="container">
	            <div class="row">
	                <div class="col-md-12">
	                	<span>Mehandi-Painting</span>
                		<h1>our gallery</h1>
                		<p> </p>
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
<div class="hotmeal-main-section hotmeal-partnerfull">
			<div class="container">
				<div class="row">

					<div class="col-md-12">
						<div class="hotmeal-fancy-title">
							<span>Culture</span>
							<h2>Culture's Art</h2>
							<img src="<?php echo $baseurl;?>images/J90.jfif" alt="">
						</div>
						<div class="hotmeal-partner">
							<ul>
							<?php
                                         foreach($subcatnm as $row) 
                                      {
                                     ?>
								<li style="font-size:20px;"><a href="<?php echo $row["subcatid"];?>"><h2 align="center"><?php echo $row["subcategoryname"];?></a></li>
								
								
						                <?php 
                                          }
										  ?>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</div>
										</div>

   <!-- booking -->
   

		<!--// Main Section \\-->
		
				<div class="row">
		<div class="col-md-12">
						<div class="hotmeal-fancy-title">
						<span>Gallery</span>
							<h2>Our Gallery</h2>
							<img src="<?php echo $baseurl;?>images/J90.jfif" alt="">
						</div>
		<div class="hotmeal-gallery hotmeal-modern-gallery" >
							<ul class="row"  >
		<?php
        foreach( $imgnm as $row) 
        {
        ?>
								<li class="col-md-3 element-item">
									<div class="hotmeal-modern-gallery-wrap">
										<figure><a data-fancybox-group="group" href="extra-images/modern-gallery-img1.jpg" class="fancybox" ><img src="../admin_cul/<?php echo $row["img"];?>" alt="" style="height:370px;"></a>
											<figcaption>
												<h5><a href=""><?php echo $row["iname"];?></a></h5>
												<p><a href=""><?php echo $row["des"];?></a></p>
												
												
											</figcaption>
										</figure>
									</div>
								</li>
	
       <?php 
        }
        ?>
							</ul>
						</div>


</div>
</div>
</div>
<!--// Main Section \\-->

</div>
<!--// Main Content \\-->





		