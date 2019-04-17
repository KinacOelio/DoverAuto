

<?php
//instantiating the PDO 
define('DBHOST', 'localhost');
define('DBNAME', 'cars');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBCONNSTRING','mysql:host=localhost;mysql:dbname=cars;charset=utf8mb4;');
$pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

function printComments(){
    global $pdo;
	$sql = "SELECT * FROM cars.comment";
	$result = $pdo->query($sql);
	while($row = $result->fetch()){
			echo
				'
				<div class="col-md-4" style="margin-bottom: 20px;">
				<div class="card text-white  col-md-6" style="max-width: 20rem;">
				<div class="card-header">8 months ago</div>
				<div class="card-body">
					<h4 class="card-title">'.$row['username'].'</h4>
					<p class="card-text">'.$row['feedback'].'</p>
				</div>
				</div>
				</div>';
	}
}
?> 

 <!DOCTYPE html>
 <html>
 <head>
    <meta charset="utf-8">  
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Feedback</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" media="screen and (max-width: 1200px)" href="css/masterSmall.css">
	<link rel="stylesheet" media="screen and (min-width: 1200px)" href="css/masterLarge.css">
	<link href="css/comment.css" rel="stylesheet">
	<script type="text/javaScript" src="javaScript/jquery-3.3.1.js"></script>
</head>
<body id="OR">
 <div id="navbar"></div>

 <div class="container">

<div class="page-header"> 
<h1>Customer Testimony</h1>
<hr>
</div>

<section class="row content" id="div1"> 
<?php printComments(); ?>
</section>
</div>

 <div class="page-header"> 
<h1>Your Feedback</h1>
<hr>
</div>

<label for="addFeedback">
<button id="b1">Add feedback</button></label>
<div id="addFeedback">
	<form action="comment.php" method="POST">
		<input type="hidden" name="addcust" value="add">
	<label for="CID">userID</label>
	<input type="text" name="username" placeholder="userID" id="CID" required=""> 
	<label for="CN">email</label>
	<input type="text" name="email" placeholder="email" id="CN" required="">
	<label for="conName">feedback</label>
	<input type="text" name="feedback" placeholder="your feed back" id="Contact" required="">
	
<button type="submit" id="cSub" value="Submit" ><h2>Submit</h2></button>
</form>
</div>

<?php
global $pdo;
if (isset($_POST['feedback'])){
var_dump($_POST);
$db = 'cars.comment';
$sql = "INSERT INTO cars.comment (username, email, feedback) VALUES (?, ?, ?)";
$statement = $pdo->prepare($sql);
$statement ->bindValue(1, $_POST['username']);
$statement ->bindValue(2, $_POST['email']);
$statement ->bindValue(3, $_POST['feedback']);
$statement->execute();
}

?>

<div id="footer"></div>

<script src="javaScript/master.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>



