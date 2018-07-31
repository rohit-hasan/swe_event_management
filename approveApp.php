<?php
include("connection.php");
global $con;
if(isset($_POST['approve'])){
	if($_SESSION['userName']=='firstApp'){
		$form_id=$_GET['form_id'];
		$query="update form set firstApproval=1 where form_id='$form_id'";
		$run_query=mysqli_query($con,$query);
		if($run_query){
			echo "<script>alert('Application approved')</script>";
			echo "<script>window.open('adminPage.php','_self')</script>";
		}
	}else if($_SESSION['userName']=='secondApp'){
		$form_id=$_GET['form_id'];
		$query="update form set secondApproval=1 where form_id='$form_id'";
		$run_query=mysqli_query($con,$query);
		if($run_query){
			echo "<script>alert('Application approved')</script>";
			echo "<script>window.open('adminPage.php','_self')</script>";
		}
	}
}

?>