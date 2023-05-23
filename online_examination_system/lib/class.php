<?php

	include_once("../includes/db_connect.php");
	include_once("../includes/functions.php");
	if($_REQUEST[act]=="save_class")
	{
		save_class();
		exit;
	}
	if($_REQUEST[act]=="delete_class")
	{
		delete_class();
		exit;
	}
	if($_REQUEST[act]=="get_report")
	{
		get_report();
		exit;
	}
	
	function save_class()
	{
		global $con;
		$R=$_REQUEST;
		if($R[class_id])
		{
			$statement = "UPDATE `class` SET";
			$cond = "WHERE `class_id` = '$R[class_id]'";
			$msg = "Data Updated Successfully.";
		}
		else
		{
			$statement = "INSERT INTO `class` SET";
			$cond = "";
			$msg="Data saved successfully.";
		}
		$SQL=   $statement." 
				`class_title` = '$R[class_title]', 
				`class_description` = '$R[class_description]'". 
				 $cond;
		$rs = mysqli_query($con,$SQL) or die(mysqli_error($con));
		header("Location:../class-report.php?msg=$msg");
	}
#########Function for delete class##########3
function delete_class()
{
	global $con;
	/////////Delete the record//////////
	$SQL="DELETE FROM class WHERE class_id = $_REQUEST[class_id]";
	mysqli_query($con,$SQL) or die(mysqli_error($con));
	
	header("Location:../class-report.php?msg=Deleted Successfully.");
}
?>