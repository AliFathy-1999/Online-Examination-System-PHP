<?php 
	include_once("includes/header.php"); 
	if($_SESSION['user_details']['user_level_id'] == 2)
	{
		$SQL="SELECT * FROM subject,user,class WHERE subject_class_id = class_id AND subject_teacher_id = user_id AND subject_class_id = '".$_SESSION['user_details']['student_course_id']."'";
	}
	else
	{
		$SQL="SELECT * FROM subject,class WHERE subject_class_id = class_id AND class_id = '".$_SESSION['user_details']['student_course_id']."'";
	}
	$rs=mysqli_query($con,$SQL) or die(mysqli_error($con));
?>
	<div class="container w">
		<div class="row">
			<div style="text-align:left; clear:both; font-weight:bold; border-bottom:1px solid #cccccc; width:95%; margin-bottom:10px; margin-left:20px"><h3>Subject Report</h3></div>
			<div style="clear:both"></div>
		  <div class="col-lg-12">
			<form name="frm_subject" action="lib/subject.php" method="post">
			  <section class="panel">
			  <center><header class="panel-heading" style="background-color:#4A4B7B;color:#FDE9CC;">
					 <h4 style="color:#FDE9CC;">Subject Report</h4>
				  </header></center>
				  <?php if($_REQUEST['msg']) { ?>
				  <div class="alert alert-success fade in" style="margin:10px;">
					  <strong><?=$_REQUEST['msg']?></strong>
				  </div>
				  <?php } ?>
				  <table class="table table-striped table-advance table-hover">
				   <tbody>
					  <tr>
						 <th>Subject Code</th>
						 <th>Title</th>
						 <th>Class</th>
					  </tr>
					  <?php 
						$sr_no=1;
						while($data = mysqli_fetch_assoc($rs))
						{
					  ?>
					  <tr>
					     <td><?=$data[subject_code]?></td>
						 <td><?=$data[subject_title]?></td>
						 <td><?=$data[class_title]?></td>
					  </tr>
					  <?php } ?>
				   </tbody>
				</table>
			  </section>
			  <input type="hidden" name="act" />
			  <input type="hidden" name="subject_id" id="recordID" />
			 </form>
		  </div>
	  </div>
	</div>
<?php include_once("includes/footer.php"); ?>
