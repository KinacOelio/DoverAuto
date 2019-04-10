document.addEventListener("DOMContentLoaded", function(event) { 
	
	$("#navbar1").load("https://raw.githubusercontent.com/KinacOelio/WebTechMidTerm/master/html/navbar.html");

	var locationList = document.getElementById("locations");
	
	locationList.addEventListener("click", function(e){
		console.log(e.target);
		var button = e.target;
		button.classList.toggle("active");
		var hours = document.querySelector(".active + .dropdown-content");
		console.log(hours);
		hours.classList.toggle("show");
		button.classList.toggle("active");
	});

 


});
