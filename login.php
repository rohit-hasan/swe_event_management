<?php
session_start();
include("connection.php");
if(isset($_POST['login'])){
		$email=mysqli_real_escape_string($con,$_POST['email']);
		$password=mysqli_real_escape_string($con,$_POST['password']);
		$password=md5($password);
		
		
		$get_user="select * from users where user_email='$email' AND user_password='$password'" ;
		

		$run_user=mysqli_query($con,$get_user);
		$check=mysqli_num_rows($run_user);
		
		$row= mysqli_fetch_array($run_user);
		$_SESSION['user_id']=$row['user_id'];

		if($check==1){
			$_SESSION['user_email']=$email;
            $_SESSION['user_password']=$password;

			echo "<script>window.open('applicationForm.php','_self');</script>";

		}else{
			echo "<script>alert('Incorrect email or password')</script>";
		}
				
}
?>