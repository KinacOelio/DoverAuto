<?php
//instantiating the PDO 
define('DBHOST', '');
define('DBNAME', 'cars');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBCONNSTRING','mysql:dbname=cars;charset=utf8mb4;');
$pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">  
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Catalog</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.css">
	<link rel="stylesheet" media="screen and (max-width: 1200px)" href="../css/masterSmall.css">
	<link rel="stylesheet" media="screen and (min-width: 1200px)" href="../css/masterLarge.css">
	<link href="../css/catalog.css" rel="stylesheet">

</head>


<body id="OR">
<div class="container">

 <div id="navbar1"></div>
 <script>
</script>

<div class="container">
<div class="row catHeader">
<div class="col"><h1>Vehichle Catalog</h1></div>
</div>
<hr>

	<div class="row catHeader">
		<div class="col">
		<h2>Cars</h2>
		</div>
	</div>
	<?php
	echo 'test';
	$sqlAllCars = "select * from cars";
	$result =$pdo->query($sqlAllCars);
	echo
	'<div class="row">';
	//the cars bit
	while($row = $result->fetch()){
	echo
		'<div class="col-md-4 cat">
			<a href="FireFocus.html"><img src="../images/'.$row['filePath'].'" alt="2018 Fire"></a>
			<label class="carName">The '.$row['modelYear'].' '.$row['modelName'].'</label>
			<p class="price">Starting at '.$row['BasePrice'].'$<br></p>
			<p class="mpg">Average '.$row['MPG-mean'].' mpg</p>
		</div>';
	}
	echo
	'</div>';
	?>
	
	<div class="row catHeader">
		<div class="col">
		<h2>SUVs</h2>
		</div>
	</div>	
	<div class="row">
		<div class="col-md-4 cat">
			<img src="../images/suv1.jpg" alt="2018 Fire">
			<h3 class="carName">The 2019 Largo</h3>
			<p class="price">Starting at 22,000$<br></p>
			<p class="mpg">Average 21 mpg</p>
			</div>
		<div class="col-md-4 cat">
			<img src="../images/suv2.jpg" alt="2018 Fire">
			<h3 class="carName">The 2019 Killa</h3>
			<p class="price">Starting at 25,000$<br></p>
			<p class="mpg">Average 19 mpg</p>
			</div>
		<div class="col-md-4 cat">
			<img src="../images/suv3.jpg" alt="2018 Fire">
			<h3 class="carName">The 2019 Daily</h3>
			<p class="price">Starting at 20,000$<br></p>
			<p class="mpg">Average 25 mpg</p>
		</div>
	</div>
	
<div class="row catHeader">
		<div class="col">
		<h2>Trucks</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 cat">
			<img src="../images/truck1.jpg" alt="2018 Fire">
			<h3 class="carName">The 2020 Testo</h3>
			<p class="price">Starting at 21,000$<br></p>
			<p class="mpg">Average 13 mpg</p>
			</div>
		<div class="col-md-4 cat">
			<img src="../images/truck2.jpg" alt="2018 Fire">
			<h3 class="carName">The 2019 Pimento</h3>
			<p class="price">Starting at 18,000$<br></p>
			<p class="mpg">Average 31 mpg</p>
			</div>
		<div class="col-md-4 cat">
			<img src="../images/truck3.jpg" alt="2018 Fire">
			<h3 class="carName">The 2018 Falcon</h3>
			<p class="price">Starting at 21,000$<br></p>
			<p class="mpg">Average 19 mpg</p>
		</div>
		</div>
	</div>




</div>	


<div id="footer"></div>
<script>$("#footer").load("https://raw.githubusercontent.com/KinacOelio/WebTechMidTerm/master/html/footer.html");</script> 

<script type="text/javaScript" src="../javaScript/jquery-3.3.1.js"></script>
<script src="../javaScript/master.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>


