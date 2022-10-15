<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="bi bi-brush me-2"></i>Culture Art</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="<?php echo $baseurl;?>img/k.jpg" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Welcome</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="<?php echo $mainurl;?>admin-dashboard" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
          <a href="<?php echo $mainurl;?>admin-addcategory" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Add Category</a>
            <a href="<?php echo $mainurl;?>admin-addsubcategory" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Add Subcategory</a>
            <a href="<?php echo $mainurl;?>images" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Add Images</a>
            

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-keyboard me-2"></i>Tables</a>
                <div class="dropdown-menu bg-transparent border-0">
                <a href="<?php echo $mainurl;?>Users" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Users</a>
                <a href="<?php echo $mainurl;?>Booking" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Appointment</a>
                <!-- <a href="<?php// echo $mainurl;?>Price-plan" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Price-plan</a> -->
            <a href="<?php echo $mainurl;?>Contact" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i> Contacts</a>
            <a href="<?php echo $mainurl;?>Comment" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i> Comment</a>
            <a href="<?php echo $mainurl;?>Feedback" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i> Feedback</a>
                        </div>
                    </div>
           
           
            <!-- <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="signin.html" class="dropdown-item">Sign In</a>
                    <a href="signup.html" class="dropdown-item">Sign Up</a>
                    <a href="404.html" class="dropdown-item">404 Error</a>
                    <a href="blank.html" class="dropdown-item">Blank Page</a>
                </div>
            </div> -->
        </div>
    </nav>
</div>
<!-- Sidebar End -->

