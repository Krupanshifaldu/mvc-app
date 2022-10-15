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
<h6 class="mb-4">Add Images</h6>
<form method="post" enctype="multipart/form-data">


<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Select Category Name *</label>
<select type="text" name="catname" class="form-control" id="exampleInputEmail1"
aria-describedby="emailHelp">

<option value="">-select category-</option>
<?php
foreach($shwcat as $shwcat1)
{ 
?>
<option value="<?php echo $shwcat1["catid"];?>"><?php echo $shwcat1["categoryname"];?></option>
<?php 
}
?>
</select>
<label for="exampleInputEmail1" class="form-label">Select SubCategory Name *</label>
<select type="text" name="subcatname" class="form-control" id="exampleInputEmail1"
aria-describedby="emailHelp">

<option value="">-select subcategory-</option>
<?php
foreach($shwsubcat as $shwsubcat1)
{ 
?>
<option value="<?php echo $shwsubcat1["subcatid"];?>"><?php echo $shwsubcat1["subcategoryname"];?></option>
<?php 
}
?>
</select>

</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Images Name *</label>
<input type="text" name="imgname" class="form-control" 
aria-describedby="emailHelp">

</div>
<div class="mb-3">
<label for="exampleInputPassword1" class="form-label"> Upload Image</label>
<input type="file" name="img" class="form-control" >

</div>
<div class="mb-3">
<label for="exampleInputPassword1" class="form-label"> Description</label>
<input type="text" name="des" class="form-control" >

</div>

<button type="submit" name="updt" class="btn btn-primary">Update Images</button>
</form>
</div>
</div>


<

<!-- Widgets Start -->
<div class="container-fluid pt-4 px-4">
<div class="row g-4">


</div>
</div>

<!-- Widgets End -->
