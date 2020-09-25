
<!-- header -->
<header>
				<!-- navigation -->
				<nav class="navbar navbar-default" role="navigation">
					<div class="container">
						
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="index.php"><img class="img-responsive" src="img/logo.png" alt="Logo" /></a>
						</div>

						
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
                                <?php
                                session_start();
                                if(!isset($_SESSION['username']))
                                {
                                ?>
								<li><a href="registration.php">Signup</a></li>
								<li><a href="login.php">Login</a></li>
                                <?php
                                }else{                             
                                ?>
                                <li><a href="./controller/doLogout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
                                <?php
                                }
                                
                                ?>
                                
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <span class="caret"></span></a>
									<ul class="dropdown-menu" role="menu">
									
										<li><a href="about.php">About Us</a></li>
										<li><a href="merch.php">Store</a></li>
                                        <li><a href="index.php">Main Page</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</nav>
            </header>