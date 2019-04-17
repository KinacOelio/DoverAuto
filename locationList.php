<?php
//instantiating the PDO 
define('DBHOST', '');
define('DBNAME', 'cars');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBCONNSTRING','mysql:dbname=cars;charset=utf8mb4;');
$pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


function location(){
	global $pdo;
	$sqlLocations = "SELECT * FROM locations";
	$result =$pdo->query($sqlLocations);
	$i = 1;
	while($row = $result->fetch()){
	echo 	
		'<li>
		<h4>Location '.$i.'</h4>
		<h6>'.$row['adress'].' | 1.9 mi.</h6>
		<div class="dropdown">
			<button class="dropbtn">View Hours</button>
			<div name="hours" class="dropdown-content">
			'.$row['hours'].'
			</div>
		</div> 	
		</li>';
		$i++;
	}
}

?>

<ol id="locations">

<?php
location();
?>

</ol>

</div>	

<script>
document.addEventListener("click", function(e){
console.log(location.href)});
</script>
