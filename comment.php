<?php

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shoes";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["addcust"])) {
    // collect value of input field
   $cID  = $_REQUEST['username'];
   $comName = $_REQUEST['email'];
   $contName = $_REQUEST['feedback'];
   
   
$sql = "INSERT INTO `comment`(`username`, `email`, `feedback`) VALUES ('$cID','$comName','$contName')";
if ($conn->query($sql) === TRUE) {
  header('location: comment.php');

   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


}



$conn->close();


}

?>


 <!DOCTYPE html>
 <html>
 <head>
    <meta charset="utf-8">  
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Feedback</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" media="screen and (max-width: 1200px)" href="../css/masterSmall.css">
	<link rel="stylesheet" media="screen and (min-width: 1200px)" href="../css/masterLarge.css">
	<link href="css/comment.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body id="OR">
 <div id="navbar"></div>
 
 <script>$("#navbar").load("https://raw.githubusercontent.com/KinacOelio/WebTechMidTerm/master/html/navbar.html");</script> 
 <div class="container">



<main class="container-fluid">


  
 
<div class="page-header"> 
<h1>Customer Testimony</h1>

<hr>

</div>


<section class="row content" id="div1"> 
<div class="col-md-4">
<div class="card text-white col-md-6" style="max-width: 20rem;">
  <div class="card-header">3 hours ago</div>
  <div class="card-body">
    <h4 class="card-title">Lee</h4>
    <p class="card-text">Purchased a truck, The process was super easy and the customer service was great . Want to give a shout out to Bernie M...</p>
  </div>
</div>
</div>

<div class="col-md-4">
	<div class="card border-secondary md-6" style="max-width: 20rem;">
  <div class="card-header">1 day ago</div>
  <div class="card-body text-secondary">
    <h4 class="card-title">Michael</h4>
    <p class="card-text">Just purchased my first car from the CAR LOT...Very pleased!</p>
  </div>
</div>
</div>


<div class="col-md-4">
<div class="card text-white  col-md-6" style="max-width: 20rem;">
  <div class="card-header">2 days ago</div>
  <div class="card-body">
    <h4 class="card-title">Kortney</h4>
    <p class="card-text">The Sales staff is very friendly. They always give us the best for our.</p>
  </div>
</div>
</div>



	</section>

		<section class="row content" id="div2"> 

<div class="col-md-4">
<div class="card text-white border-secondary md-6" style="max-width: 20rem;">
  <div class="card-header">2 days ago</div>
  <div class="card-body">
    <h4 class="card-title">Tony</h4>
    <p class="card-text">I recently purchased a used car here and the experience was terrific. I got a very good price for my trade, a decent price on the new car!</p>
  </div>
</div>
</div>

<div class="col-md-4">
	<div class="card text-white  col-md-6"  style="max-width: 20rem;">
  <div class="card-header">4 weeks ago</div>
  <div class="card-body text-secondary">
    <h4 class="card-title">Briana</h4>
    <p class="card-text">Willing to work with us. Overall good experience. cole was our salesperson and helped us out he was a nice gentlemen</p>
  </div>
</div>
</div>


<div class="col-md-4">
<div class="card text-white border-secondary md-6" style="max-width: 20rem;">
  <div class="card-header">4 weeks ago</div>
  <div class="card-body">
    <h4 class="card-title">James</h4>
    <p class="card-text">Willing to work with us. overall a good experience</p>
  </div>
</div>
</div>


	</section>

  <section class="row content" id="div3"> 

<div class="col-md-4">
<div class="card text-white  col-md-6" style="max-width: 20rem;">
  <div class="card-header">2 months ago</div>
  <div class="card-body">
    <h4 class="card-title">Stacy</h4>
    <p class="card-text">was a great and painless experience. talked on the phone showed up had everything ready car was perfect. was in and out within a hour highly recommend...</p>
  </div>
</div>
</div>

<div class="col-md-4">
  <div class="card border-secondary md-6" style="max-width: 20rem;">
  <div class="card-header">2 months ago</div>
  <div class="card-body text-secondary">
    <h4 class="card-title">Nick</h4>
    <p class="card-text">Overall a good experience. I would recommend this dealership to anyone.</p>
  </div>
</div>
</div>


<div class="col-md-4">
<div class="card text-white  col-md-6" style="max-width: 20rem;">
  <div class="card-header">8 months ago</div>
  <div class="card-body">
    <h4 class="card-title">Jordan</h4>
    <p class="card-text">Great experience! They worked with us on finding us the right financing. I would recommend to anyone!</p>
  </div>
</div>
</div>


  </section>




</main>



</div>
 <script>

$(document).ready(function(){
	$("#addFeedback").hide();
    $("#b1").click(function(){
        $("#addFeedback").toggle();
    });
    	
   
});
</script>

 <body>
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
<div id="footer">
<div id="footer">
<script>$("#footer").load("https://raw.githubusercontent.com/KinacOelio/WebTechMidTerm/master/html/footer.html");</script> 
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>




</html>



