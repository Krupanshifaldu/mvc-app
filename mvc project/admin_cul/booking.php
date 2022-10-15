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
<div class="col-sm-12 col-xl-12">
<div class="bg-secondary rounded h-100 p-4">
<!-- manage contacts -->
<div class="bg-secondary rounded h-100 p-4">
<h6 class="mb-4">Manage All Appointment</h6>
<table class="table">
<thead>
<tr>
<th scope="col">#Id</th>
<th scope="col"> Name</th>
<th scope="col">Phone</th>
<th scope="col">Date</th>
<th scope="col">Time</th>
<th scope="col">Cetegory</th>
<th scope="col">Service Name</th>
<th scope="col">Description</th>
<th scope="col">Offer Plan</th>
<th scope="col">Action</th>
</tr>
</thead>
<tbody>
<?php
foreach($shwbook as $row)
{ 
?>
<tr>
<th scope="row"><?php echo $row["id"];?></th>
<td><?php echo $row["name"];?></td>
<td><?php echo $row["phone"];?></td>
<td><?php echo $row["date"];?></td>
<td><?php echo $row["time"];?></td>
<td><?php echo $row["select_category"];?></td>
<td><?php echo $row["service_name"];?></td>
<td><?php echo $row["Briefly_describe"];?></td>
<td><?php echo $row["plan"];?></td>
<td><a href="<?php echo $mainurl;?>Booking?book=<?php echo base64_encode($row["id"]);?>" class="btn btn-danger btn-sm" onclick="return confirm('are you sure to delete Appointment ?')"><i class="bi bi-trash"></i></a> </a> </td>
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
