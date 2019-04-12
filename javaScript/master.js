document.addEventListener("DOMContentLoaded", function(event) { 
	
	$("#navbar").load("https://raw.githubusercontent.com/KinacOelio/WebTechMidTerm/master/html/navbar.html");
	$("#footer").load("https://raw.githubusercontent.com/KinacOelio/WebTechMidTerm/master/html/footer.html");

	var locationList = document.getElementById("locations");
	
	locationList.addEventListener("click", function(e){
		$(this + ".dropdown-content").hide();
	
		//console.log(e.target);
		//var button = e.target;
		//button.classList.toggle("active");
		//var hours = document.querySelector(".active + .dropdown-content");
		//console.log(hours);
		//hours.classList.toggle("show");
		//button.classList.toggle("active");
	});

 


});
