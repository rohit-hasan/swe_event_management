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
              <a class="navbar-brand" href="#"><h1>Events Page</h1></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="index.html">Home</a></li>
				<li><a href="apply.php">Apply for Event</a></li>
				<li><a href="previous.php">Previous Events</a></li>
				<li><a href="upcoming.php">Upcoming Events</a></li>
				<li><a href="admin.php">Admin Login</a></li>
				
                
              </ul>
            </div>
          </div>
        </nav>
	</div>
</div>
<!-- /navigation section -->

<div style="margin-top:100px;margin-left: 100px ">
	<h1>Previous Events</h1>
	 <table border="3" cellspacing="10">
    <tr><th>Program Name</th><th>Date</th><th>Venue</th></tr>
    <?php 
    include 'connection.php';
    global $con;
    $select_form="select * from form where firstApproval=1 and secondApproval=1 ORDER by 1 desc";
    $run_select_form= mysqli_query($con, $select_form);
    while($row= mysqli_fetch_array($run_select_form)){
        
       
        $form_id=$row['form_id'];
        $date=$row['date'];
        $today = date("Y-m-d H:i:s");

		if ($date < $today) {

		$programName=$row['programName'];
        $date=$row['date'];
        $venue=$row['venue'];
    ?>
    <tr><td><?php echo $programName; ?></td><td><?php echo $date; ?></td><td><?php echo $venue; ?></td></tr>
    <?php 
    }
}
    ?>
   </table>

</div>


<!-- /services section -->





<!-- /contact section -->
<!-- footer section -->
<!-- <div class="footer">
	<div class="container">
		<p>&copy; Daffodil International University</a></p>
	</div>
</div> -->
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
