 <?php 
if(!isset($_SESSION["aid"]))
{
    echo "<script>
    window.location='./';
    </script>";
}
?> 

<!-- Content Start -->       
            <!-- Sale & Revenue Start -->
          
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                  
                       <!-- Form Start -->
                       
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                    
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Update Category (Gallary)</h6>
                            <form method="post">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Category Name *</label>
                                    <input type="text" name="catnm" placeholder="First_Name" data-bvalidator="required" value="<?php echo $managecat[0]["categoryname"];?>">
                                   
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Added Date</label>
                                    <input type="text" name="date" placeholder="First_Name" data-bvalidator="required" value="<?php echo $managecat[0]["addeddate"];?>">
                                </div>
                                
                                <button type="submit" name="upd" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                