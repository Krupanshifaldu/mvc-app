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
<h6 class="mb-4">Manage All Feedback</h6>
<table class="table">
<thead>
<tr>
<th scope="col">#Id</th>
<th scope="col">Name</th>
<th scope="col">Phone</th>
<th scope="col">Message</th>
<th scope="col">Action</th>
</tr>
</thead>
<tbody>
<?php
foreach($shwfeedback as $row)
{ 
?>
<tr>
<th scope="row"><?php echo $row["id"];?></th>
<td><?php echo $row["name"];?></td>
<td><?php echo $row["phone"];?></td>
<td><?php echo $row["message"];?></td>
<td><a href="<?php echo $mainurl;?>Feedback?feed=<?php echo base64_encode($row["id"]);?>" class="btn btn-danger btn-sm" onclick="return confirm('are you sure to delete feedback?')"><i class="bi bi-trash"></i></a> </a> </td>
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
