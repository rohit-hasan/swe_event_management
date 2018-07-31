<?php
session_start();

?>
<!DOCTYPE HTML>
<html>
<head>
<title>SWE Event Management</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="SWE Event Managment" />
<!-- font files -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<!-- /font files -->
<!-- css files -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/jQuery.lightninBox.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/pogo-slider.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- /css files -->
<!-- js files -->
<script src="js/modernizr.custom.js"></script>
<!-- /js files -->
</head>
<body>
<!-- top bar -->
<div class="top-bar">
	<div class="container">
		<ul class="top-contacts">
			<li class="top-unhover"><p><span class="fa fa-phone-square" aria-hidden="true"></span> +8801XXXXXXXXX</p></li>
			<li class="top-hover"><p><span class="fa fa-envelope" aria-hidden="true"></span> <a href="mailto:support@cdiu.edu.bd.com">support@diu.edu.bd</a></p></li>
		</ul>
		
		<div class="clearfix"></div>
	</div>		
</div>
<!-- /top bar -->
<!-- navigation section -->
<div class="navbar-wrapper">
	<div class="container">
		<nav class="navbar navbar-inverse navbar-static-top cl-effect-4">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
              <a class="navbar-brand" href="#"><h1>Application Form</h1></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                <!-- <li class="active"><a href="index.html">Home</a></li> -->
				
				<!-- <li><a href="previous.html">Previous Events</a></li> -->
				<!-- <li><a href="appStatus.php">Application Status</a></li> -->
				<li><a href="logout.php">Logout</a></li>
				
                
              </ul>
            </div>
          </div>
        </nav>
	</div>
</div>
<!-- /navigation section -->
<!-- <div class="container"> -->
<div style=" margin-top:100px; margin-left: 100px">
	<h1>Daffodil International University</h1>
	<h4 style="margin-bottom: 10px">Event Planning Sheet</h4>

<?php

	include("connection.php");
	global $con;
	if(isset($_GET['form_id'])){
	$form_id=$_GET['form_id'];
	$query_form_id="select * from form where form_id='$form_id'";
	$run_query=mysqli_query($con,$query_form_id);
	while($row=mysqli_fetch_array($run_query)){

		$programOffer=$row['programOffer'];
		$responsible=$row['responsible'];
		$designation=$row['designation'];
		$mobile=$row['mobile'];
		$programName=$row['programName'];
		$date=$row['date'];
		$time=$row['time'];
		$venue=$row['venue'];
		$chiefGuest=$row['chiefGuest'];
		$benefit=$row['benefit'];
		$targetAudience=$row['targetAudience'];
		$number=$row['number'];
		$outcome=$row['outcome'];
		$approval=$row['approval'];
		$venueBooking=$row['venueBooking'];
		$guest=$row['guest'];
		$car=$row['car'];
		$it=$row['it'];
		$banner=$row['banner'];
		$security=$row['security'];
		$public=$row['public'];
		$press=$row['press'];
		$video=$row['video'];
		$campus=$row['campus'];
		$venueDecoration=$row['venueDecoration'];
		$audienceConfirmation=$row['audienceConfirmation'];
		$room=$row['room'];
		$cleaning=$row['cleaning'];
		$refreshment=$row['refreshment'];
		$staff=$row['staff'];
		$transport=$row['transport'];
		$extraSupport=$row['extraSupport'];
		$other=$row['other'];
		$master=$row['master'];
		$program=$row['program'];
		$volunteer=$row['volunteer'];
		$budget=$row['budget'];
		$deptCon=$row['deptCon'];
		$sponsorCon=$row['sponsorCon'];
	
?>

<form method="post">
	<table border="4">
	
		<tr><th colspan="2">Program Offered By:</th><td colspan="3"><?php echo $programOffer; ?></td></tr>
	
		<tr><th colspan="2">Person Responsible:</th><td colspan="3"><?php echo $responsible; ?></td></tr>
		<tr><th colspan="2">Designation:</th><td colspan="3"><?php echo $designation; ?></td></tr>
		<tr><th colspan="2">Mobile:</th><td colspan="3"><?php echo $mobile; ?></td></tr>
		<tr><th colspan="2">Program Name:</th><td colspan="3"><?php echo $programName; ?></td></tr>
		<tr><th colspan="2">Date:</th><td colspan="3"><?php echo $date; ?></td></tr>
		<tr><th colspan="2">Time:</th><td colspan="3"><?php echo $time ?></td></tr>
		<tr><th colspan="2">Venue:</th><td colspan="3"><?php echo $venue; ?></td></tr>
		<tr><th colspan="2">Chief Guest:</th><td colspan="3"><?php echo $chiefGuest; ?></td></tr>
		<tr><th colspan="2">How having this chief <br>guest will benefit the <br>objectives of the program:</th><td colspan="3"><?php echo $benefit; ?></td></tr>
		<tr><th colspan="2">Target Audience:</th><td colspan="3"><?php echo $targetAudience; ?></td></tr>
		<tr><th colspan="2">Expected Number of audience:</th><td colspan="3"><?php echo $number; ?></td></tr>
		<tr><th colspan="2">Objective/Outcome of the event:</th><td colspan="3"><?php echo $outcome; ?></textarea></td></tr>
		<tr><th>SL</th><th>Task</th><th>Particulars</th><th>Responsible Person with mobile number</th><th>Signature</th></tr>
		<tr><th>01</th><th>Program Approval</th><td></td><td><?php echo $approval; ?></td><td></td></tr>
		<tr><th>02</th><th>Venue Booking</th><td></td><td><?php echo $venueBooking; ?></td><td></td></tr>
		<tr><th>03</th><th>Guest Reception</th><td></td><td><?php echo $guest; ?></td><td></td></tr>
		<tr><th>04</th><th>Car Parking</th><td></td><td><?php echo $car; ?></td><td></td></tr>
		<tr><th>05</th><th>IT Support</th><td></td><td><?php echo $it; ?></td><td></td></tr>
		<tr><th>06</th><th>Banner Text and Size</th><td></td><td><?php echo $banner; ?></td><td></td></tr>
		<tr><th>07</th><th>Security</th><td></td><td><?php echo $security; ?></td><td></td></tr>
		<tr><th>08</th><th>Public Relation</th><td></td><td><?php echo $public; ?></td><td></td></tr>
		<tr><th>09</th><th>Press Release and Website Text</th><td></td><td><?php echo $press; ?></td><td></td></tr>
		<tr><th>10</th><th>Video Recording</th><td></td><td><?php echo $video; ?></td><td></td></tr>
		<tr><th>11</th><th>Campus TV</th><td></td><td><?php echo $campus; ?></td><td></td></tr>
		<tr><th>12</th><th>Venue Decoration</th><td></td><td><?php echo $venueDecoration; ?></td><td></td></tr>
		<tr><th>13</th><th>Audience Confirmations</th><td></td><td><?php echo $audienceConfirmation; ?></td><td></td></tr>
		<tr><th>14</th><th>Room Decoration</th><td></td><td><?php echo $room; ?></td><td></td></tr>
		<tr><th>15</th><th>Cleaning Supervision</th><td></td><td><?php echo $cleaning; ?></td><td></td></tr>
		<tr><th>16</th><th>Refreshment</th><td></td><td><?php echo $refreshment; ?></td><td></td></tr>
		<tr><th>17</th><th>Staff Support</th><td></td><td><?php echo $staff; ?></td><td></td></tr>
		<tr><th>18</th><th>Transport Booking</th><td></td><td><?php echo $transport; ?></td><td></td></tr>
		<tr><th>19</th><th>Extra Support from Outside</th><td></td><td><?php echo $extraSupport; ?></td><td></td></tr>
		<tr><th>20</th><th>Other Requirements</th><td></td><td><?php echo $other; ?></td><td></td></tr>
		<tr><th>21</th><th>Master of ceremonies</th><td></td><td><?php echo $master; ?></td><td></td></tr>
		<tr><th>22</th><th>Program outline and squence confirmed</th><td></td><td><?php echo $program; ?></td><td></td></tr>
		<tr><th>23</th><th>Volunteers and Training</th><td></td><td><?php echo $volunteer; ?></td><td></td></tr>
		<tr><th>24</th><th>Budget Source</th><td></td><td><?php echo $budget; ?></td><td></td></tr>
		<tr><th>25</th><th>Departmental Contribution</th><td></td><td><?php echo $deptCon; ?></td><td></td></tr>
		<tr><th>26</th><th>Sponsor Contribution</th><td></td><td><?php echo $sponsorCon; ?></td><td></td></tr>
		
		
	</table>
	<button type="submit" class="btn btn-primary" name="approve">Approve</button>
</form>

<?php
	}
}
include("approveApp.php");

?>

</div>
<!-- </div> -->
<div class="footer">
	<div class="container">
		<p>&copy; Daffodil International University</a></p>
	</div>
</div>
<!-- /footer section -->
<a href="#0" class="cd-top">Top</a>
<!-- js files -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<script src="js/top.js"></script> 
<script src="js/jQuery.lightninBox.js"></script>
<script type="text/javascript">
	$(".lightninBox").lightninBox();
</script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar li a").on('click', function(event) {

   // Make sure this.hash has a value before overriding default behavior
  if (this.hash !== "") {

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){

      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
      });
    } // End if
  });
})
</script>
<script>
$(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slide");
    }
  });
});
</script>	
<script src="js/jquery.pogo-slider.min.js"></script>
<script src="js/main.js"></script>
<!-- /js files -->
</body>
</html>
