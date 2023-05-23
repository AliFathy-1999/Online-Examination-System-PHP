<?php 
	include_once("includes/header.php"); 
	$SQL="SELECT * FROM class";
	$rs=mysqli_query($con,$SQL) or die(mysqli_error($con));
?>
<script>
jQuery(document).on("click", ".delete-dialog", function () {
     var id = $(this).data('id');
	 $("#recordID").val( id );
});
function delete_record(class_id)
{
	this.document.frm_class.act.value="delete_class";
	this.document.frm_class.submit();
}
</script>
	<div class="container w">
		<div class="row">
			<div style="text-align:left; clear:both; font-weight:bold; border-bottom:1px solid #cccccc; width:95%; margin-bottom:10px; margin-left:20px"><h3>Class Report</h3></div>
			<div style="clear:both"></div>
		  <div class="col-lg-12">
			<form name="frm_class" action="lib/class.php" method="post">
			<center><header class="panel-heading" style="background-color:#4A4B7B;color:#FDE9CC;">
					 <h4 style="color:#FDE9CC;">Class Report</h4>
				  </header></center>
				  <?php if($_REQUEST['msg']) { ?>
				  <div class="alert alert-success fade in" style="margin:10px;">
					  <strong><?=$_REQUEST['msg']?></strong>
				  </div>
				  <?php } ?>
				  <table class="table table-striped table-advance table-hover">
				   <tbody>
					  <tr>
						 <th style="width:80%;text-align:center">Title</th>
						 <th>Action</th>
					  </tr>
					  <?php 
						$sr_no=1;
						while($data = mysqli_fetch_assoc($rs))
						{
					  ?>
					  <tr>
						 <td style="text-align:center"><?=$data[class_title]?></td>
						 <td>
						  <div class="btn-group">
							  <a href="class.php?class_id=<?php echo $data[class_id] ?>" class="btn btn-success">Edit</a>
							  <a class="delete-dialog btn btn-danger" data-id="<?php echo $data[class_id] ?>" data-toggle="modal" href="#myModal-2">Delete</i></a>
						  </div>
						  </td>
					  </tr>
					  <?php } ?>
				   </tbody>
				</table>
			  </section>
			  <input type="hidden" name="act" />
			  <input type="hidden" name="class_id" id="recordID" />
			 </form>
		  </div>
	  </div>
	</div>
	<br><br><br><br><br><br><br><br><br>
<?php include_once("includes/footer.php"); ?>
