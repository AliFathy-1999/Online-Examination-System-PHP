<?php
	session_start();
	
	include_once("../includes/db_connect.php");
	if($_REQUEST['act']=="check_login")
	{
		check_login();
	}
	if($_REQUEST['act']=="logout")
	{
		logout();
	}
	if($_REQUEST['act'] == "change_password")
	{
		change_password();
	}
	if($_REQUEST['act'] == "check_student_login")
	{
		check_student_login();
	}
	
####Function check user#######
function check_login()
{
	global $con;
	$user_user=$_REQUEST["user_user"];
	$user_password=$_REQUEST["user_password"];
	$SQL="SELECT * FROM user WHERE user_username = '$user_user' AND user_password = '$user_password' AND user_level_id = 2";
	$rs = mysqli_query($con,$SQL) or die(mysqli_error($con));
	if(mysqli_num_rows($rs))
	{
		$_SESSION[login]=1;
		$_SESSION['user_details'] = mysqli_fetch_assoc($rs);
		header("Location:../dashboard.php");
	}
	else
	{
		header("Location:../login.php?act=check_login&msg=Invalid User and Password.");
	}
}
####Function check user#######
function check_student_login()
{
	global $con;
	$user_user=$_REQUEST["user_user"];
	$user_password=$_REQUEST["user_password"];
	$SQL="SELECT * FROM student WHERE student_username = '$user_user' AND student_password = '$user_password'";
	$rs = mysqli_query($con,$SQL) or die(mysqli_error($con));
	if(mysqli_num_rows($rs))
	{
		$_SESSION[login]=1;
		$_SESSION['user_details'] = mysqli_fetch_assoc($rs);
		$_SESSION['user_details']['user_level_id'] = 3;
		$_SESSION['user_details']['user_id'] = $_SESSION['user_details']['student_id'];
		$_SESSION['user_details']['user_name'] = $_SESSION['user_details']['student_name'];
		header("Location:../dashboard.php");
	}
	else
	{
		header("Location:../login.php?act=check_student_login&msg=Invalid User and Password.");
	}
}
####Function logout####
function logout()
{
	global $con;
	if($_SESSION['user_details']['user_level_id'] == 3) {
		$act= "check_student_login";
	} else {
		$act= "check_login";
	}
	$_SESSION['login']=0;
	$_SESSION['user_details'] = 0;
	header("Location:../index.php?act=$act&msg=Logout Successfullly.");
	
	
}
#####Function for changing the password ####
function change_password() {
	global $con;
	$R = $_REQUEST;
	if($R['user_confirm_password'] != $R['user_new_password']) {
		header("Location:../change-password.php?msg=Your new passsword and confirm password does not match!!!");
		exit;
	}
	$SQL = "UPDATE `user` SET user_password = '$R[user_new_password]' WHERE `user_id` = ".$_SESSION['user_details']['user_id'];
	$rs = mysqli_query($con,$SQL) or die(mysqli_error($con));
	header("Location:../change-password.php?msg=Your Password Changed Successfully !!!");
	print $SQL;
	die;
}
?>