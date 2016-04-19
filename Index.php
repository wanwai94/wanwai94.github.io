<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['userSession']))
{
	$display = 0;
}elseif(isset($_SESSION['userSession'])){
	$query = $MySQLi_CON->query("SELECT * FROM users WHERE user_id=".$_SESSION['userSession']);
	$userRow=$query->fetch_array();
	$MySQLi_CON->close();
	$display = 1;
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Great East Asia Tourism Organisation">
	<meta name="author" content="Yip Tsz Fung, Tsang Wai Ho, Wan Ka Wai, Kwong Ka Chun">
	
	<title>大東亞觀光局</title>
	<link rel="icon" href="img/webgroup_logo_v2.png">

	<!--Import Library-->
	<!--jQuery Library-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<!--bootstrapcdn Library-->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<!-- Custom JavaScript -->
	<script src="js/indexjs.js"></script>
	<script>
		function start(show){
			var display = show;
			if(display == 0){
				document.getElementById('logout').style.display = 'none';
				document.getElementById('username').style.display = 'none';
			}else{
				document.getElementById('login').style.display = 'none';
				document.getElementById('register').style.display = 'none';
			}
		}
	</script>
	
    <!-- Custom CSS -->
    <style>
	body {
		padding-top: 50px; /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
	}	
	
	.portfolio-item {
		margin-bottom: 25px;
	}

	footer {
		background-color: #000000;
		color: #ffffff;
		padding: 15px 0;
	}
	.boxHeader{
		background-color: rgb(235,235,235);
	}
	iframe {
    margin: none;
    padding: none;
    background: rgb(235,235,235);
    border: none;
	}
	</style>
</head>
<body onload="start(<?php echo $display ?>);">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				<img src="img/header.png" alt="GEATO logo and header" height="50px" id="logo" onclick="goindex();"/>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="About.php">About</a>
                    </li>
                    <li>
                        <a href="place.php">Place</a>
                    </li>
                    <li>
                        <a href="Contact.php">Contact</a>
                    </li>
                </ul>
				<ul class="nav navbar-nav navbar-right">
					<li id="login">
						<a href="login.php">Login</a>
					</li>
					<li id="register">
						<a href="register.php">Register</a>
					</li>
					<li id="username">
						<a href="#"><span class="glyphicon glyphicon-user"></span><?php echo $userRow['username']; ?></a>
					</li>
					<li id="logout">
						<a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>Logout</a>
					</li>
				</ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	<!--The end of navigation-->
	
	<!--The content page which seperate to right and left-->
    <div class="container">

    <!-- Main Page Row -->
		<div class="row">

			<!-- The left col -->
        <div class="col-md-10">
			<header id="myCarousel" class="carousel slide">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
					<li data-target="#myCarousel" data-slide-to="4"></li>
					<li data-target="#myCarousel" data-slide-to="5"></li>
					<li data-target="#myCarousel" data-slide-to="6"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active">
						<div class="fill"><img src="img/hongkong.jpg" alt="Hong Kong" width="100%"></div>
						<div class="carousel-caption">
							<h2>Hong Kong</h2>
						</div>
					</div>
					<div class="item">
						<div class="fill"><img src="img/singapore.jpg" alt="Singapore" width="100%"></div>
						<div class="carousel-caption">
							<h2>Singapore</h2>
						</div>
					</div>
					<div class="item">
						<div class="fill"><img src="img/shanghai.jpg" alt="Shanghai" width="100%"></div>
						<div class="carousel-caption">
							<h2>Shanghai</h2>
						</div>
					</div>
					<div class="item">
						<div class="fill"><img src="img/kumamoto.jpg" alt="KuMaMoTo" width="100%"></div>
						<div class="carousel-caption">
							<h2>KuMaMoTo</h2>
						</div>
					</div>
					<div class="item">
						<div class="fill"><img src="img/bangkok.jpg" alt="Bankok" width="100%"></div>
						<div class="carousel-caption">
							<h2>Bankok</h2>
						</div>
					</div>
					<div class="item">
						<div class="fill"><img src="img/beijing.jpg" alt="Beijing" width="100%"></div>
						<div class="carousel-caption">
							<h2>Beijing</h2>
						</div>
					</div>
					<div class="item">
						<div class="fill"><img src="img/seoul.jpg" alt="Seoul" width="100%"></div>
						<div class="carousel-caption">
							<h2>Seoul</h2>
						</div>
					</div>
				</div>

				<!-- Controls -->
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
					<span class="icon-prev"></span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
					<span class="icon-next"></span>
				</a>
			</header>
			<div>
				<!-- News -->
				<div class="col-lg-5" style="float: left">
					<h2>News</h2>
					<iframe id="frame" src="alert.html" width="100%" height="450" scrolling="no"></iframe>
				</div>
				<!-- More Information -->
				<div class="col-lg-5" style="float: left">
					<h2>Web Monthly Magazine</h2>
				</div>
            </div>
			<!-- End of left col -->
		</div>
			<!-- The right col -->
            <div class="col-md-2">
				<!--link to the google map page-->
				<div><br/></div>
				<div>
					<a href="map.php">
						<img border="0" alt="map" src="img/map.png" width="100%">
					</a>
				</div>
				<br/><br/>
				<div id="toBox">
					<h3 class="boxHeader"><b>Tourism Organisation</b></h3>
					<a href="http://www.discoverhongkong.com/eng/index.jsp">
						<img border="0" alt="HKTO" src="img/HKTO.png" width="100%">
					</a>
					<hr/>
					<a href="http://www.cnta.gov.cn/">
						<img border="0" alt="CNTO" src="img/CNTO.png" width="100%">
					</a>
					<hr/>
					<a href="http://big5chinese.visitkorea.or.kr/cht/index.kto">
						<img border="0" alt="KOTO" src="img/KOTO.png" width="100%">
					</a>
					<hr/>
					<a href="http://www.welcome2japan.hk/">
						<img border="0" alt="map" src="img/JPTO.png" width="100%">
					</a>
					<hr/>
				</div>
            </div>
			<!-- End of right col -->
        </div>
        <!-- /.row -->
	</div>
	<!-- End of content page which seperate to right and left -->

    <!-- Footer -->
    <footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p>Copyright &copy; Great East Asia Tourism Organisation, 2016</p>
				</div>
			</div>
			<!-- /.row -->
		</div>
    </footer>
    <!-- End of container -->
</body>
</html>
