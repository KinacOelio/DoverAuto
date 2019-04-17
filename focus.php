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

    <title>Vehicle Details</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" media="screen and (max-width: 1200px)" href="css/masterSmall.css">
	<link rel="stylesheet" media="screen and (min-width: 1200px)" href="css/masterLarge.css">
	<link href="css/focus.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>

<body id="OR">
 <div id="navbar"></div>

 
<div class="container">

<?php
	$sqlThisCar = "SELECT * FROM cars WHERE modelID =".$_GET['modelID'];
	$result =$pdo->query($sqlThisCar);
	$car = $result->fetch();
	echo
	'<div class="jumbotron">
		<h1 style="background-color: rgba(0,0,0,0.5); margin: 2px;">'.$car['modelYear'].' '.$car['modelName'].'</h1>
		<img class="jumbo" src="images/'.$car['filePath'].'" alt="'.$car['modelName'].'">
	</div>
	<div class="row justify-content-right">
		<div class="col-3">'.$car['MPG-highway'].' MPG highway / '.$car['MPG-city'].' MPG city</div>
		<div class="col-3">Starting at $'.$car['BasePrice'].' <br> Finance at $'.sprintf("%d", $car['BasePrice']/20).'/month</div>
		<div class="col-3">'.$car['horsepower'].' horsepower</div>
		<div class="col-3">Seats '.$car['seating'].'</div>
	</div>';
	


 ?>
</div>	

<div id="footer"></div>

<script src="javaScript/master.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
