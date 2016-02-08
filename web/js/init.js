$(document).ready(function(){	
	$("#wdController").jFlow({
		slides: "#wdSlides",
		controller: ".wdControl", // must be class, use . sign
		slideWrapper : "#wdSlide", // must be id, use # sign
		selectedWrapper: "wdSelected", // just pure text, no sign
		easing: "easeInOutCubic",
		duration: 900,
		width: "530px",
		height: "85px",
		prev: ".wdPrev", // must be class, use . sign
		next: ".wdNext" // must be class, use . sign
	});

	


})






