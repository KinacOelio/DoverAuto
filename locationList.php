<?php
//instantiating the PDO 
define('DBHOST', '');
define('DBNAME', 'cars');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBCONNSTRING','mysql:dbname='.DBNAME.';charset=utf8mb4;');
$pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

function location(){
	global $pdo;
	$sqlLocations = "SELECT * FROM locations";
	$result =$pdo->query($sqlLocations);
	while($row = $result->fetch()){
	echo 	
		'<li>
		<h4>Location 1</h4>
		<h6>'.$row['adress'].' | 1.9 mi.</h6>
		<div class="dropdown">
			<button class="dropbtn">View Hours</button>
			<div name="hours" class="dropdown-content">
			'.$row['hours'].'
			</div>
		</div> 	
		</li>';
	}
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
	<link href="css/ll.css" rel="stylesheet">
	<script type="text/javaScript" src="javaScript/jquery-3.3.1.js"></script>
	<script src="javaScript/master.js"></script>
</head>

<body id="OR">
<div class="container">
<ol id="locations">

<?php
location();
?>

</ol>

</div>	


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>