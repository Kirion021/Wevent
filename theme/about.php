<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>WeVent</title>
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="ResponsiveWebInc">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Styles -->
		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Font awesome CSS -->
		<link href="css/font-awesome.min.css" rel="stylesheet">		
		<!-- Custom CSS -->
		<link href="css/style.css" rel="stylesheet">
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<!-- Favicon -->
		<link rel="shortcut icon" href="#">
	</head>
	
	<body>
	
		<div class="wrapper">
		
		<?php include_once 'helper/header.php'; ?>
	<div class="container text-center aboutUs">
		
		<img src="img/logo.png" alt="About Image">
		<br>
		<br>
		<p>WeVent is an event displaying platform who also sells limited and unique merchandises. We display recent and upcoming events and we also sell the tickets for those events. Giving the best and fast service to our customers
		is our motto.</p>
		<h2>Contact Us</h2>
		<p><b>Phone:</b> +54-382-902</p>
		<p><b>Mobile:</b> +62-812-8016-8736</p>
		<p><b>Line:</b> wevent</p>
		<p><b>Email:</b> wevent@gmail.com</p>
	</div>
    <div class="subscribe" id="subscribe">
					<div class="container">
						<!-- subscribe content -->
						<div class="sub-content">
							<h3>Subscribe Here for Updates</h3>
							<form role="form">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Email...">
										<span class="input-group-btn">
											<button class="btn btn-default" href="merch.php" type="button">Subscribe</button>
											<p></p>
											<script>
$(document).ready(function() {
$("button").click(function(){
  $.ajax({
    url:"script.php", //the page containing php script
    type: "POST", //request type
    success:function(result){
    alert(result);
    }
  });
});
})
</script>
										</span>
								</div><!-- /input-group -->
							</form>
						</div>
					</div>
				</div>
				<?php include_once 'helper/footer.php' ?>
            	<!-- Javascript files -->
		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Respond JS for IE8 -->
		<script src="js/respond.min.js"></script>
		<!-- HTML5 Support for IE -->
		<script src="js/html5shiv.js"></script>
		<!-- Custom JS -->
		<script src="js/custom.js"></script>
</body>
</html>