<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">  
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home | Dover Auto</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" media="screen and (max-width: 1200px)" href="css/masterSmall.css">
	<link rel="stylesheet" media="screen and (min-width: 1200px)" href="css/masterLarge.css">
	<link href="css/index.css" rel="stylesheet">
	<script type="text/javaScript" src="javaScript/jquery-3.3.1.js"></script>
</head>

<body id="OR">
<div id="navbar"></div>

 
<div class="container-fluid">
	<div class="jumbotron">
		<h1>Dover Auto</h1>
		<img class="jumbo" src="images/car3.jpg">
	</div>
	
	<Div class="Row">
		<div class="col-md-12 infoBanner">
			<h2 class="bannerText0">Dover</h2>
			<h2 class="bannerText">Bringing you the latest and best in Automative Technology</h2>
			<a href="catalog.php"><h2 class="browse">Visit our catalog<img class="arrow" src="images/arrow.png"></h2></a>
		</div>
	</div>
			
	
	<div class="row">
			<div class="col-lg-4 cat">
				<figure>
				<a href="FireFocus.html"><img src="images/car3.jpg" alt="2018 Fire"></a>
				<figcaption>2018 Fire</figcaption>
				</figure>
			</div>
			<div class="col-lg-4">
				<figure>
				<img src="images/truck2.jpg" alt="2018 Fire">
				<figcaption>2019 Pimento</figcaption>
				</figure>
			</div>
			<div class="col-lg-4">
				<figure>
				<img src="images/suv1.jpg" alt="2018 Fire">
				<figcaption>2019 Largo</figcaption>
				</figure>
			</div>
	</div>
</div>	


<div id="footer">
</div>
<script src="javaScript/master.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
