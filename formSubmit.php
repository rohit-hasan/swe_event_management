<?php
	
	include("connection.php");
	global $con;
	if (isset($_POST['formSubmit'])){

		$user_id=$_SESSION['user_id'];
		$firstApproval=0;
		$secondApproval=0;
		$programOffer=$_POST['programOffer'];
		$responsible=$_POST['responsible'];
		$designation=$_POST['designation'];
		$mobile=$_POST['mobile'];
		$programName=$_POST['programName'];
		$date=$_POST['date'];
		$time=$_POST['time'];
		$venue=$_POST['venue'];
		$chiefGuest=$_POST['chiefGuest'];
		$benefit=$_POST['benefit'];
		$targetAudience=$_POST['targetAudience'];
		$number=$_POST['number'];
		$outcome=$_POST['outcome'];
		$approval=$_POST['approval'];
		$venueBooking=$_POST['venueBooking'];
		$guest=$_POST['guest'];
		$car=$_POST['car'];
		$it=$_POST['it'];
		$banner=$_POST['banner'];
		$security=$_POST['security'];
		$public=$_POST['public'];
		$press=$_POST['press'];
		$video=$_POST['video'];
		$campus=$_POST['campus'];
		$venueDecoration=$_POST['venueDecoration'];
		$audienceConfirmation=$_POST['audienceConfirmation'];
		$room=$_POST['room'];
		$cleaning=$_POST['cleaning'];
		$refreshment=$_POST['refreshment'];
		$staff=$_POST['staff'];
		$transport=$_POST['transport'];
		$extraSupport=$_POST['extraSupport'];
		$other=$_POST['other'];
		$master=$_POST['master'];
		$program=$_POST['program'];
		$volunteer=$_POST['volunteer'];
		$budget=$_POST['budget'];
		$deptCon=$_POST['deptCon'];
		$sponsorCon=$_POST['sponsorCon'];
		

		//checking if user is already registred
		// $get_email="select * from users where user_email='$email'" ;
		// $run_email=mysqli_query($con,$get_email) or die("email query failed");
		// $check=mysqli_num_rows($run_email);
		
					
		$insert="insert into 
		form(user_id,programOffer,responsible,designation,mobile,programName,date,time,venue,chiefGuest,benefit,targetAudience,number,outcome,approval,venueBooking,guest,car,it,banner,security,public,press,video,campus,venueDecoration,audienceConfirmation,room,cleaning,refreshment,staff,transport,extraSupport,other,master,program,volunteer,budget,deptCon,sponsorCon,firstApproval,secondApproval)
		
		values('$user_id','$programOffer','$responsible','$designation','$mobile','$programName','$date','$time','$venue','$chiefGuest','$benefit','$targetAudience','$number','$outcome','$approval','$venueBooking','$guest','$car','$it','$banner','$security','$public','$press','$video','$campus','$venueDecoration','$audienceConfirmation','$room','$cleaning','$refreshment','$staff','$transport','$extraSupport','$other','$master','$program','$volunteer','$budget','$deptCon','$sponsorCon','$firstApproval','$secondApproval')";
					
		$run_insert=mysqli_query($con,$insert) or die("insert query failed");
		if($run_insert){
			echo "<script>alert('Application form successfully submitted');</script>";
		}else{
			echo "<script>alert('Application Submission Unsuccessful');</script>";
		}
					
	}				
			
		

?>