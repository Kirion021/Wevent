<?php //include "../includes/autoloader.php; "?>
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
		<div class="container text-center">
  			<h3>
  
    		<!-- View After Login -->
    		<?php
    		if(isset($_SESSION['username']))
    		{
      			echo "Welcome, ".$_SESSION['username'];
    		}

    ?>
  </h3><br>
			<!-- banner -->
			<div class="banner">
				<div class="container">
					<!-- heading -->
					<h2>WeVent</h2>
					<!-- paragraph -->
					<p>We offer great prices at tickets for your favorite events along with the best merchandise.</p>
				</div>
			</div>
			<!-- banner end -->
			
			<!-- after banner -->
			<div class="after-banner">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-4">
							<!-- after banner item -->
							<div class="ab-item">
								<!-- heading -->
								<h3>Best Prices</h3>
								<!-- paragraph -->
								<p>Our prices are cheaper than many others will offer.</p>
								<br>
								<!--<a href="#">Read More</a> -->
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<!-- after banner item -->
							<div class="ab-item">
								<!-- heading -->
								<h3>Features</h3>
								<!-- paragraph -->
								<p>We have many amazing features that will surely help you</p>
								<br>
								<!-- <a href="#">Read More</a>-->
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<!-- after banner item -->
							<div class="ab-item">
								<!-- heading -->
								<h3>Merchandises</h3>
								<!-- paragraph -->
								<p>All the best merchandises that are memorable with great prices</p>
								<br>
								<!-- <a href="#">Read More</a> -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- after banner end-->
			
			<!-- events -->
			<div class="event" id="event">
				<div class="container">
					<div class="default-heading">
						<!-- heading -->
						<h2>Upcoming events</h2>
					</div>
					<div class="row">
						<div class="col-md-4 col-sm-4">
							<!-- event item -->
							<div class="event-item">
								<!-- image -->
								<img class="img-responsive" src="img/event/1.jpg" alt="Events" />
								<!-- heading -->
								<h4><a href="merch.php">Hammersonic</a></h4>
								<!-- sub text -->
								<span class="sub-text">I love Rock n' Roll</span>
								<!-- paragraph -->
								<p>Annual concert held in Southeast Asia is back with a lineup guaranteed to rock you. Featuring names like Slipknot, Lacuna Coil and many, many more.</p>
							</div>
							<a href="merch.php">Enter shop here</a>
						</div>
						<div class="col-md-4 col-sm-4">
							<!-- event item -->
							<div class="event-item">
								<!-- image -->
								<img class="img-responsive" src="img/event/2.jpg" alt="Events" />
								<!-- heading -->
								<h4><a href="merch.php">Comifuro 2020</a></h4>
								<!-- sub text -->
								<span class="sub-text">Waifus and Husbandos all the way</span>
								<!-- paragraph -->
								<p>Anime fans are surely no stranger with Comifuro, It's one of the best events with the best merchandise of your favorite animes. Let's get those Merchs!</p>
							</div>
							<a href="merch.php">Enter shop here</a>
						</div>
						<div class="col-md-4 col-sm-4">
							<!-- event item -->
							<div class="event-item">
								<!-- image -->
								<img class="img-responsive" src="img/event/3.jpg" alt="Events" />
								<!-- heading -->
								<h4><a href="merch.php">Head in the clouds</a></h4>
								<!-- sub text -->
								<span class="sub-text">88rising presents their amazing world tour</span>
								<!-- paragraph -->
								<p>The hottest brand currently is having their world tour, with lineups like Rich Brian,Joji and many more. You don't want to miss it!</p>
							</div><a href="merch.php">Enter shop here</a>
						</div>
					</div>
				</div>
			</div>
			<!-- events end -->

				
				<div class="team" id="team">
					<div class="container">
						<div class="default-heading">
							<!-- heading -->
							<h2>Merchandise</h2>
						</div>
						<div class="row">
							<div class="col-md-3 col-sm-3">
								
								<div class="member">
									
									<img class="img-responsive" src="img/team/messageImage_1588758641769.jpg" alt="Merch" />
									
									<h3>Glowsticks</h3>
									
									<span class="dig">Rp 30.000</span>
									
								</div><a href="merch.php">Enter shop here</a>
							</div>
							<div class="col-md-3 col-sm-3">
								
								<div class="member">
									
									<img class="img-responsive" src="img/team/messageImage_1588758714404.jpg" alt="Team Member" />
									
									<h3>Hairband</h3>
									
									<span class="dig">Rp 25.000</span>
									
								</div><a href="merch.php">Enter shop here</a>
							</div>
							<div class="col-md-3 col-sm-3">
								
								<div class="member">
									
									<img class="img-responsive" src="img/team/messageImage_1588758934950.jpg" alt="Team Member" />
									
									<h3>Lanyard</h3>
									
									<span class="dig">Rp 25.000</span>
									
								</div><a href="merch.php">Enter shop here</a>
							</div>
							<div class="col-md-3 col-sm-3">
								
								<div class="member">
									
									<img class="img-responsive" src="img/team/messageImage_1588759243842.jpg" alt="Team Member" />
									
									<h3>Card Holder</h3>
									
									<span class="dig">Rp 30.000</span>
									
								</div><a href="merch.php">Enter shop here</a>
							</div>
						</div>
					</div>
				</div>
				
				
			<!-- blog -->
			<div class="blog" id="blog">
				<div class="container">
					<div class="default-heading">
						<!-- heading -->
						<h2>Customer Testimonies</h2>
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<!-- blog entry -->
							<div class="entry">
								<!-- blog entry image -->
								<center>
								<img class="img-responsive" src="img/blog/1.jpg" alt="Blog" />
								</center>
								<!-- heading / blog post title -->
								<h3><a href="#">Jane Doe</a></h3>
								<!-- blog information -->
								<span class="meta">
									Comifuro Participant
								</span>
								<!-- paragraph -->
								<p>It was amazing. I took part in last year comifuro event and I used WeVent to buy the tickets. Not only is the service fast, the prices cheap. They also sell my wanted merchandise so I don't have to queue to get one. I recommend WeVent for your event needs</p>
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<!-- blog entry -->
							<div class="entry">
								<!-- blog entry image -->
								<center>
								<img class="img-responsive" src="img/blog/2.jpg" alt="Blog" />
								</center>
								<!-- heading / blog post title -->
								<h3><a href="#">Janey Doe</a></h3>
								<!-- blog information -->
								<span class="meta">
									Slipknot Fan
								</span>
								<!-- paragraph -->
								<p>I remember last year Hammersonic event where there's a long queue to buy the ticket. So this year I decided to order online. One of my mates recommended WeVent. They have great services and with somehow even cheaper prices! I totally will recommend WeVent to my other mates!</p>
							</div>
						</div>
					</div>
					<!--<div class="text-center">
						<a href="#" class="btn btn-default">See More</a>
					</div>-->
				</div>
			</div>
			<!-- blog end -->
			
	<!-- subscribe -->
	<div class="subscribe" id="subscribe">
					<div class="container">
						<!-- subscribe content -->
						<div class="sub-content">
							<h3>Subscribe Here for Updates</h3>
							<form role="form">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Email...">
										<span class="input-group-btn">
											<button class="btn btn-default" type="button">Subscribe</button>
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
			
		
			
			<!-- footer -->
			<?php include_once 'helper/footer.php' ?>
		</div>
		
		
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
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	</body>	
</html>