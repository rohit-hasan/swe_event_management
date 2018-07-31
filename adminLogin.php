<?php
session_start();
include('connection.php');
global $con;
if(isset($_POST['login'])){
		$userName=mysqli_real_escape_string($con,$_POST['userName']);
		$password=mysqli_real_escape_string($con,$_POST['password']);
		$_SESSION['userName']=$userName;
		
		
		
		$get_user="select * from admin where admin_userName='$userName' AND admin_password='$password'" ;
		

		$run_user=mysqli_query($con,$get_user);
		$check=mysqli_num_rows($run_user);
		
		$row= mysqli_fetch_array($run_user);
		$_SESSION['admin_id']=$row['admin_id'];

		if($check==1){
			$_SESSION['userName']=$userName;
            $_SESSION['admin_password']=$password;

			echo "<script>window.open('adminPage.php','_self');</script>";

		}else{
			echo "<script>alert('Incorrect username or password')</script>";
		}
				
}
?>