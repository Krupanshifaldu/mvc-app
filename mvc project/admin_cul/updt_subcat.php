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
<h6 class="mb-4">Update SubCategory</h6>
<form method="post">


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

</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">SubCategory Name *</label>
<input type="text" name="subcatname" class="form-control" id="exampleInputEmail1"
aria-describedby="emailHelp" value="<?php echo $managesubcat[0]["subcategoryname"];?>">

</div>
<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">Added Date</label>
<input type="date" name="date" class="form-control" id="exampleInputPassword1" value="<?php echo $managesubcat[0]["addeddate"];?>">

</div>

<button type="submit" name="updt" class="btn btn-primary">Update</button>
</form>
</div>
</div>



<!-- Sale & Revenue End -->

<!-- Widgets Start -->
<div class="container-fluid pt-4 px-4">
<div class="row g-4">


</div>
</div>

<!-- Widgets End -->
