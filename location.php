
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">  
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Location</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" media="screen and (max-width: 1200px)" href="css/masterSmall.css">
	<link rel="stylesheet" media="screen and (min-width: 1200px)" href="css/masterLarge.css">
	<link href="css/location.css" rel="stylesheet">
	<link href="css/ll.css" rel="stylesheet">
	<script type="text/javaScript" src="javaScript/jquery-3.3.1.js"></script>
</head>

<body id="OR">
<div id="navbar"></div>
 
<div class="container">
	<div class="page-header"> 
		<h1>Store Locations</h1>
		<hr>
	</div>
	
	<div class="row justify-content-center">
		<div class="col-lg-4">
			<div id="list"></div>
		</div>
		<div class="col-lg-8">
			<div class="mapouter">
				<div class="gmap_canvas"><a href="https://www.pureblack.de/webdesign-muenchen/">
						<iframe width="600" height="500" id="gmap_canvas" 
						src="https://maps.google.com/maps?q='.$_GET['location'].'kalamazoo&t=&z=13&ie=UTF8&iwloc=&output=embed" 
						frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>';
					
			</div>
			</div>
		</div>
	</div>

</div>	

<div id="footer"></div>

<?php var_dump($_GET); ?>

<script src="javaScript/master.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>