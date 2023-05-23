<?php
	ini_set("display_errors",1);
	error_reporting(E_ERROR);
	session_start();
	include_once("includes/db_connect.php");
	include_once("includes/functions.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="4FutureLogo.png">

    <title>E-exam System</title>

	<link href="assets/css/jquery-ui.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
		
    
    <link href="assets/css/main.css" rel="stylesheet">
	<script src="assets/js/jquery-1.10.2.min.js"></script>
	<script src="assets/js/jquery-ui.js"></script>
	<link href="admin/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="admin/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
	
	<script src="admin/js/fullcalendar.min.js"></script> 
	<script src="admin/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
	
	<script src="admin/js/calendar-custom.js"></script>
	<script src="admin/js/jquery.rateit.min.js"></script>

  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" style=" background-image: linear-gradient( 135deg, #5EFCE8 0%, #736EFE 100%); height:110px;">
	<img src="4FutureLogo.png" style="width:130px; float:left;"/>
	<a class="navbar-brand" href="index.php" style="font-size: 23px; color: #FFFFFF; margin-top:3px;margin-left:20px; margin-top:20px;">
		E-Exam System
		  </a>
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

        </div>
        <div class="navbar-collapse collapse">
		  <ul class="nav navbar-nav navbar-right">
		  <li class="active"><a href="index.php" style="color:#FDE9CC; background-color:#4A4B7B;">Home</a></li>
		  <?php if($_SESSION['user_details']['user_level_id'] == 3) {?>
		  <li><a href="dashboard.php" style="color:#FDE9CC;">Dashboard</a></li>
		  <li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#FDE9CC;">My Accounts
			<span class="caret"></span></a>
			<ul class="dropdown-menu">
			  <li><a href="student-quiz-report.php" >My Exams</a></li>				  
			</ul>
		  </li>
		  <?php } ?>
		  <?php if($_SESSION['user_details']['user_level_id'] == 2) {?>
		  <li><a href="dashboard.php" style="color:#FDE9CC;">Dashboard</a></li>
		  <li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#FDE9CC;">Administration
			<span class="caret"></span></a>
			<ul class="dropdown-menu">
			  <li><a href="class.php">Add Class</a></li>
			  <li><a href="quiz.php">Add Exam</a></li>			  
			</ul>
		  </li>
		  <li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#FDE9CC;">Report
			<span class="caret"></span></a>
			<ul class="dropdown-menu" >
			  <li><a href="class-report.php">Class Reports</a></li>
			  <li><a href="quiz-report.php">Exam Reports</a></li>			  
			  <li><a href="student-report.php">Student Reports</a></li>	
			</ul>
		  </li>
		  <?php } ?>
		  <?php if($_SESSION['login'] != 1) {?>
		    
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#FDE9CC;">User Login 
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a data-toggle="modal" data-target="#loginModal" href="#loginModal">Teacher Login</a></li>
					<li><a data-toggle="modal" data-target="#studentLoginModal" href="#studentLoginModal">Student Login</a></li>
				</ul>
			</li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#FDE9CC;"> Signup 
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="user.php">Teacher Login</a></li>
					<li><a href="student.php">Student Login</a></li>
				</ul>
			</li>
		  <?php } else { ?>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#FDE9CC;">Welcome <?=$_SESSION['user_details']['user_name']?> 
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<?php if($_SESSION['user_details']['user_level_id'] == 2) {?>
					<li><a href="user.php">My Account</a></li>
					<?php }?>
					<li><a href="lib/login.php?act=logout">Logout</a></li>
				</ul>
			</li>			
		  <?php } ?>
		  <li style="color:#fffff; float:right"><a href="#"></a></li>
		</ul>
		
        </div>
      </div>
    </div>