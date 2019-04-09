<?php
//instantiating the PDO 
define('DBHOST', '');
define('DBNAME', 'locations');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBCONNSTRING','mysql:dbname='.DBNAME.';charset=utf8mb4;');
$pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

function location(){
	//global $pdo;
	//$sqlLocations = "SELECT * FROM locations";
	//$result =$pdo->query($sqlLocations);
	//while($row = $result->fetch()){
	echo 	
		'<li>
		<h4>Location 1</h4>
		<h6>1337 Hacker prkw | 1.9 mi.</h6>
		<div class="dropdown">
			<button onclick="dropFunc1()" class="dropbtn">View Hours</button>
			<div id="myDropdown1" class="dropdown-content">
			<h6 href="#">Mon-Fri: 9 am-5pm</h6>
			<h6 href="#">Sat: 9 am-3 pm</h6>
			<h6 href="#">Sun: closed</h6>
			</div>
		</div> 	
		</li>';
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">  
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TITLE</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" media="screen and (max-width: 1200px)" href="../css/masterSmall.css">
	<link rel="stylesheet" media="screen and (min-width: 1200px)" href="../css/masterLarge.css">
	<link href="../css/ll.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="../javaScript/master.js"></script>
</head>

<body id="OR">
<div class="container">
<ol>

<?php
for($i = 0; $i<10; $i++){location();}
?>

</ol>

</div>	

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>