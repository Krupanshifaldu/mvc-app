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
                            <h6 class="mb-4">Add Category (Gallary)</h6>
                            <form method="post">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Category Name *</label>
                                    <input type="text" name="catname" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                   
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Added Date</label>
                                    <input type="date" name="adddate" class="form-control" id="exampleInputPassword1">

                                </div>
                                
                                <button type="submit" name="addcategory" class="btn btn-primary">Add Category</button>
                            </form>
                        </div>
                    </div>
                

                    <!-- manage category -->
                
                    <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Manage All Category</h6>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#Id</th>
                                        <th scope="col">CategoryName</th>
                                        <th scope="col">AddedDate</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach($shwcat as $row)
                                    { 
                                    ?>
                                    <tr>
                                        <th scope="row"><?php echo $row["catid"];?></th>
                                        <td><?php echo $row["categoryname"];?></td>
                                        <td><?php echo $row["addeddate"];?></td>
                                        <td><a href="<?php echo $mainurl; ?>admin-addcategory?delcategory=<?php echo base64_encode($row["catid"])?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete Category ?')"><i class="bi bi-trash"></i></a> | <a href="<?php echo $mainurl;?>update_category" class="btn btn-info btn-sm"><i class="bi bi-pencil"></i></a> </td>
                                    </tr>
                                   <?php 
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                
                </div>
                </div>
            </div>
            </div>
                               
            
            <!-- Sale & Revenue End -->

            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                 
                 
                </div>
            </div>
         
            <!-- Widgets End -->
