<?php 
include_once("includes/header.php"); 
$SQL="SELECT * FROM student";
$rs=mysqli_query($con,$SQL) or die(mysqli_error($con));
?>
<script>
jQuery(document).on("click", ".delete-dialog", function () {
     var id = $(this).data('id');
	 $("#recordID").val( id );
});
function delete_record(student_id)
{
	this.document.frm_student.act.value="delete_student";
	this.document.frm_student.submit();
}
</script>
	<div class="container w">
		<div class="row">
			<div style="text-align:left; clear:both; font-weight:bold; border-bottom:1px solid #cccccc; width:95%; margin-bottom:10px; margin-left:20px"><h3> Student Listing Page</h3></div>
			<div style="clear:both"></div>
		  <div class="col-lg-12">
			<form name="frm_student" action="lib/student.php" method="post">
			  <section class="panel">
			  <center><header class="panel-heading" style="background-color:#4A4B7B;color:#FDE9CC;">
					 <h4 style="color:#FDE9CC;">Student Report</h4>
				  </header></center>
				  <?php if($_REQUEST['msg']) { ?>
				  <div class="alert alert-success fade in" style="margin:10px;">
					  <strong><?=$_REQUEST['msg']?></strong>
				  </div>
				  <?php } ?>
				  <table class="table table-striped table-advance table-hover">
				   <tbody>
					  <tr>
							<th scope="col">Sr. No.</th>
							
							<th scope="col">Name</th>
							<th scope="col">Roll No.</th>
							<th scope="col">Father Name</th>
							<th scope="col">Mobile</th>
							<th><i class="icon_cogs"></i> Action</th>
					  </tr>
					  <?php 
						$sr_no=1;
						while($data = mysqli_fetch_assoc($rs))
						{
					  ?>
					  <tr>
							<td style="text-align:center; font-weight:bold;"><?=$sr_no++?></td>
							
							<td><?=$data[student_name]?></td>
							<td><?=$data[student_rollno]?></td>
							<td><?=$data[student_father_name]?></td>
							<td><?=$data[student_mobile]?></td>
							<td>
							  <div class="btn-group">
								  <a class="delete-dialog btn btn-danger" data-id="<?php echo $data[student_id] ?>" data-toggle="modal" href="#myModal-2">Delete</a>
							  </div>
							</td>
					  </tr>
					  <?php } ?>
				   </tbody>
				</table>
			  </section>
			  <input type="hidden" name="act" />
			  <input type="hidden" name="student_id" id="recordID" />
			 </form>
		  </div>
	  </div>
	</div>
<?php include_once("includes/footer.php"); ?>
