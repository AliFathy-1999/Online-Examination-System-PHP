<?php 
	include_once("includes/header.php"); 
	if($_SESSION['user_details']['user_level_id'] == 2) {
		$heading = "PROFESSOR";
	} else {
		$heading = "STUDENT";
	}
?>
<style>
.btn-circle {
  width: 156px;
  height: 156px;
  text-align: center;
  padding: 6px 0;
  line-height: 1.42;
  border-radius: 90px;
  color: #fff;
  background: #57889c;
  background-color: #57889c;
  font-size: 18px;
  font-weight: 700;
}
.btn-circle div{
  margin-top: 40px;
}
.mydash {
	border:1px solid #57889c;
	padding:10px;
	margin:10px;
}
.col-lg-2 {
	width:14.667%;
}
.Dashboard
{
	background-image: linear-gradient( 135deg, #5EFCE8 0%, #736EFE 100%);
	 border-radius: 15px;
	  width:250px; 
	  height:80px;
	   margin-top:40px;
	   color: white;
	    font-size:40px;
		padding-bottom: 150px;
		 padding-top: 90px;
		 padding-right: 50px;
		 padding-left: 50px;
		 display: inline-block;
	margin-left:30px;

}
</style>      

	<div id="blue">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-8 col-lg-offset-2">
				<h4><?=$heading?> DASHBOARD</h4>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!--  bluewrap -->
	<?php if($_SESSION['user_details']['user_level_id'] == 3) {?>
		<div class="MyExam" style="  margin: auto;width: 50%;padding: 10px; ">
		<a href="student-quiz-report.php" ><div style=" background-image: linear-gradient( 135deg, #5EFCE8 0%, #736EFE 100%); border-radius: 15px; width:250px; height:80px; margin-top:60px;color: white; font-size:40px;padding-bottom: 100px; padding-top: 100px;padding-right: 50px;padding-left: 50px; display: inline; margin-right:100px;"> My Exams</div></a>	
		<a href="lib/login.php?act=logout"><div style=" background-image: linear-gradient( 135deg, #5EFCE8 0%, #736EFE 100%); border-radius: 15px; width:250px; height:80px; margin-top:40px;color: white; font-size:40px;padding-bottom: 150px; padding-top: 90px;padding-right: 50px;padding-left: 50px;display: inline-block;">Logout</div></a>
		</div> 

		<br>
		<br>
	</div>
	<?php } ?>
	<?php if($_SESSION['user_details']['user_level_id'] == 2) {?>
	<div class="container w">
		<div class="row">
		
				<a href="class.php" ><div class="Dashboard">Add Class</div></a>	
			
			
				<a href="quiz.php" ><div class="Dashboard">Add<br>Exam</div></a>	
				
			
				<a href="class-report.php" ><div class="Dashboard">Class<br>Report</div></a>	
			
				<a href="quiz-report.php" ><div class="Dashboard">Exam<br>Report</div></a>	
			
			
				<a href="student-report.php" ><div class="Dashboard">Student<br>Report</div></a>	
			
			
				<a href="user.php?user_id=<?=$_SESSION['user_details']['user_id']?>" ><div class="Dashboard">My Account</div></a>	
			
			
				<a href="lib/login.php?act=logout" ><div class="Dashboard">Logout</div></a>	
							
		</div><!-- row -->
		<br>
		<br>
	</div>
	<?php } ?>
	<!-- container -->
	<br><br><br><br><br><br><br><br><br>

<?php include_once("includes/footer.php"); ?>
