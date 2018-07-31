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
<script type="text/javascript" src="js/jquery.min.js"></script>


<script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>



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
				<li><a href="appStatus.php">Application Status</a></li>
				<li><a href="logout.php">Logout</a></li>
				
                
              </ul>
            </div>
          </div>
        </nav>
	</div>
</div>
<!-- /navigation section -->
<!-- <div class="container"> -->
<div style=" margin-top:100px; margin-left: 100px" id="content">
	<h1><t><t>Daffodil International University</h1>
	<h4 style="margin-bottom: 10px;">Event Planning Sheet</h4>
	<!-- <button id="cmd">Generate PDF</button> -->
	
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

	
	
	
		<p><b><font size="3">Program Offered By:</b><?php echo $programOffer; ?></font></p>
	
		<p><b><font size="3">Person Responsible:</b><?php echo $responsible; ?></font></p>
		<p><b><font size="3">Designation:</b><?php echo $designation; ?></font></p>
		<p><b><font size="3">Mobile:</b><?php echo $mobile; ?></font></p>
		<p><b><font size="3">Program Name:</b><?php echo $programName; ?></font></p>
		<p><b><font size="3">Date:</b><?php echo $date; ?></font></p>
		<p><b><font size="3">Time:</b><?php echo $time ?></font></p>
		<p><b><font size="3">Venue:</b><?php echo $venue; ?></font></p>
		<p><b><font size="3">Chief Guest:</b><?php echo $chiefGuest; ?></font></p>
		<p><b><font size="3">How having this chief guest will benefit the <br>objectives of the program:</b><?php echo $benefit; ?></font></p>
		<p><b><font size="3">Target Audience:</b><?php echo $targetAudience; ?></font></p>
		<p><b><font size="3">Expected Number of audience:</b><?php echo $number; ?></font></p>
		<p><b><font size="3">Objective/Outcome of the event:</b><?php echo $outcome; ?></font></p>
		<p><b>SL-----------Task--------------------Responsible Person with mobile number</b></p>
		<p><b>01-------Program Approval------<?php echo $approval; ?></p>
		<p><b>02-------Venue Booking-------<?php echo $venueBooking; ?></b></p>
		<p><b>03-------Guest Reception------<?php echo $guest; ?></b></p>
		<p><b>04-------Car Parking-----------<?php echo $car; ?></b></p>
		<p><b>05-------IT Support------------<?php echo $it; ?></b></p>
		<p><b>06-------Banner Text and Size-----<?php echo $banner; ?></b></p>
		<p><b>07-------Security-------------<?php echo $security; ?></b></p>
		<p><b>08-------Public Relation----------<?php echo $public; ?></b></p>
		<p><b>09-------Press Release and Website Text-----------<?php echo $press; ?></b></p>
		<p><b>10-------Video Recording---------------<?php echo $video; ?></b></p>
		<p><b>11-------Campus TV----------<?php echo $campus; ?></b></p>
		<p><b>12-------Venue Decoration----------<?php echo $venueDecoration; ?></b></p>
		<p><b>13-------Audience Confirmations-----------<?php echo $audienceConfirmation; ?></b></p>
		<p><b>14-------Room Decoration------------<?php echo $room; ?></b></p>
		<p><b>15-------Cleaning Supervision-----------<?php echo $cleaning; ?></b></p>
		<p><b>16-------Refreshment------------<?php echo $refreshment; ?></b></p>
		<p><b>17-------Staff Support----------<?php echo $staff; ?></b></p>
		<p><b>18-------Transport Booking-----------<?php echo $transport; ?></b></p>
		<p><b>19-------Extra Support from Outside-------------<?php echo $extraSupport; ?></b></p>
		<p><b>20-------Other Requirements------------<?php echo $other; ?></b></p>
		<p><b>21-------Master of ceremonies-----------<?php echo $master; ?><b></b>
		<p><b>22-------Program outline and squence confirmed----------<?php echo $program; ?></b></p>
		<p><b>23-------Volunteers and Training----------<?php echo $volunteer; ?></b></p>
		<p><b>24-------Budget Source----------<?php echo $budget; ?></b></p>
		<p><b>25-------Departmental Contribution------------<?php echo $deptCon; ?></b></p>
		<p><b>26-------Sponsor Contribution------------<?php echo $sponsorCon; ?></b></p>		
		
	
	<!-- <button type="submit" class="btn btn-primary" name="approve">Approve</button> -->



	<!-- these js files are used for making PDF -->
	
<?php
	}
}
//include("approveApp.php");
?>
<div id="editor"></div>

</div>
<button id="cmd" style="margin-left: 100px">generate PDF</button>
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

<script type="text/javascript">
	var doc = new jsPDF();
var specialElementHandlers = {
    '#editor': function (element, renderer) {
        return true;
    }
};

$('#cmd').click(function () {
    doc.fromHTML($('#content').html(), 15, 15, {
        'width': 170,
            'elementHandlers': specialElementHandlers
    });
    doc.save('sample-file.pdf');
});
</script>





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
