<?php
	session_start();
	include("connection.php");
	global $con;
	if (isset($_POST['register'])){

		$name=$_POST['name'];
		$email=$_POST['email'];
		$id=$_POST['id'];
		$password=$_POST['password'];
		$password=md5($password);
		$mobile=$_POST['mobile'];


		//checking if user is already registred
		$get_email="select * from users where user_email='$email'" ;
		$run_email=mysqli_query($con,$get_email) or die("email query failed");
		$check=mysqli_num_rows($run_email);
		if($check==1){
				
			echo "<script>alert('This email is already registered');</script>";
			exit();

		}else{
					
					$insert="insert into users(user_name,user_email,user_uni_id,user_password,user_mobile)
					values('$name','$email','$id','$password','$mobile')";
					
					$run_insert=mysqli_query($con,$insert) or die("insert query failed");
					if($run_insert){
						$_SESSION['user_email']=$email;
						echo "<script>alert('Registration Successful');</script>";
						//echo "<script>window.open('home.php','_self')</script>";
					}else{
						echo "<script>alert('Registration Unsuccessful');</script>";
					}
			}
			}

?>