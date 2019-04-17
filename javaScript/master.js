document.addEventListener("DOMContentLoaded", function(event) { 
	
	$("#navbar").load("https://raw.githubusercontent.com/KinacOelio/WebTechMidTerm/master/navbar.html");
	$("#footer").load("https://raw.githubusercontent.com/KinacOelio/WebTechMidTerm/master/footer.html");
	$("#list").load("locationList.php");

	var locationList = document.getElementById("locations");

	
	locationList.addEventListener("click", function(e){
		console.log(e.target);
		var button = e.target;
		button.classList.toggle("active");
		var hours = document.querySelector(".active + .dropdown-content");
		console.log(hours);
		hours.classList.toggle("show");
		button.classList.toggle("active");
		
		var req = new XMLHttpRequest();
		req.open('GET', location.php, true);
		req.setRequestHeader('type', 'test');
		req.send();
	});

 


});
