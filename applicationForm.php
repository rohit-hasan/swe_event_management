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
<div style=" margin-top:100px; margin-left: 100px">
	<h1>Daffodil International University</h1>
	<h4 style="margin-bottom: 10px">Event Planning Sheet</h4>
	
<form method="post">
	<table border="4">
	
		<tr><th colspan="2">Program Offered By:</th><td colspan="3"><input size="50" type="text" name="programOffer"></td></tr>
	
		<tr><th colspan="2">Person Responsible:</th><td colspan="3"><input size="50" type="text" name="responsible"></td></tr>
		<tr><th colspan="2">Designation:</th><td colspan="3"><input size="50" type="text" name="designation"></td></tr>
		<tr><th colspan="2">Mobile:</th><td colspan="3"><input size="50" type="text" name="mobile"></td></tr>
		<tr><th colspan="2">Program Name:</th><td colspan="3"><input size="50"  type="text" name="programName"></td></tr>
		<tr><th colspan="2">Date:</th><td colspan="3"><input size="50" type="date" name="date"></td></tr>
		<tr><th colspan="2">Time:</th><td colspan="3"><input size="50" type="time" name="time"></td></tr>
		<tr><th colspan="2">Venue:</th><td colspan="3"><input size="50" type="text" name="venue"></td></tr>
		<tr><th colspan="2">Chief Guest:</th><td colspan="3"><input size="50" type="text" name="chiefGuest"></td></tr>
		<tr><th colspan="2">How having this chief <br>guest will benefit the <br>objectives of the program:</th><td colspan="3"><textarea name="benefit" rows="10" cols="50"></textarea></td></tr>
		<tr><th colspan="2">Target Audience:</th><td colspan="3"><input size="50" type="text" name="targetAudience"></td></tr>
		<tr><th colspan="2">Expected Number of audience:</th><td colspan="3"><input size="50" type="text" name="number"></td></tr>
		<tr><th colspan="2">Objective/Outcome of the event:</th><td colspan="3"><textarea name="outcome" rows="10" cols="50"></textarea></td></tr>
		<tr><th>SL</th><th>Task</th><th>Particulars</th><th>Responsible Person with mobile number</th><th>Signature</th></tr>
		<tr><th>01</th><th>Program Approval</th><td></td><td><input size="50" type="text" name="approval"></td><td></td></tr>
		<tr><th>02</th><th>Venue Booking</th><td></td><td><input size="50" type="text" name="venueBooking"></td><td></td></tr>
		<tr><th>03</th><th>Guest Reception</th><td></td><td><input size="50" type="text" name="guest"></td><td></td></tr>
		<tr><th>04</th><th>Car Parking</th><td></td><td><input size="50" type="text" name="car"></td><td></td></tr>
		<tr><th>05</th><th>IT Support</th><td></td><td><input size="50" type="text" name="it"></td><td></td></tr>
		<tr><th>06</th><th>Banner Text and Size</th><td></td><td><input size="50" type="text" name="banner"></td><td></td></tr>
		<tr><th>07</th><th>Security</th><td></td><td><input size="50" type="text" name="security"></td><td></td></tr>
		<tr><th>08</th><th>Public Relation</th><td></td><td><input size="50" type="text" name="public"></td><td></td></tr>
		<tr><th>09</th><th>Press Release and Website Text</th><td></td><td><input size="50" type="text" name="press"></td><td></td></tr>
		<tr><th>10</th><th>Video Recording</th><td></td><td><input size="50" type="text" name="video"></td><td></td></tr>
		<tr><th>11</th><th>Campus TV</th><td></td><td><input size="50" type="text" name="campus"></td><td></td></tr>
		<tr><th>12</th><th>Venue Decoration</th><td></td><td><input size="50" type="text" name="venueDecoration"></td><td></td></tr>
		<tr><th>13</th><th>Audience Confirmations</th><td></td><td><input size="50" type="text" name="audienceConfirmation"></td><td></td></tr>
		<tr><th>14</th><th>Room Decoration</th><td></td><td><input size="50" type="text" name="room"></td><td></td></tr>
		<tr><th>15</th><th>Cleaning Supervision</th><td></td><td><input size="50" type="text" name="cleaning"></td><td></td></tr>
		<tr><th>16</th><th>Refreshment</th><td></td><td><input size="50" type="text" name="refreshment"></td><td></td></tr>
		<tr><th>17</th><th>Staff Support</th><td></td><td><input size="50" type="text" name="staff"></td><td></td></tr>
		<tr><th>18</th><th>Transport Booking</th><td></td><td><input size="50" type="text" name="transport"></td><td></td></tr>
		<tr><th>19</th><th>Extra Support from Outside</th><td></td><td><input size="50" type="text" name="extraSupport"></td><td></td></tr>
		<tr><th>20</th><th>Other Requirements</th><td></td><td><input size="50" type="text" name="other"></td><td></td></tr>
		<tr><th>21</th><th>Master of ceremonies</th><td></td><td><input size="50" type="text" name="master"></td><td></td></tr>
		<tr><th>22</th><th>Program outline and squence confirmed</th><td></td><td><input size="50" type="text" name="program"></td><td></td></tr>
		<tr><th>23</th><th>Volunteers and Training</th><td></td><td><input size="50" type="text" name="volunteer"></td><td></td></tr>
		<tr><th>24</th><th>Budget Source</th><td></td><td><input size="50" type="text" name="budget"></td><td></td></tr>
		<tr><th>25</th><th>Departmental Contribution</th><td></td><td><input size="50" type="text" name="deptCon"></td><td></td></tr>
		<tr><th>26</th><th>Sponsor Contribution</th><td></td><td><input size="50" type="text" name="sponsorCon"></td><td></td></tr>
		
		
	</table>
	<button type="submit" class="btn btn-primary" name="formSubmit">Submit</button>
</form>
	<?php
	
	include("formSubmit.php");
	
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
