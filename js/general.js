$(document).ready(function(){
	if (document.referrer.indexOf(location.protocol + "//" + location.host) === 0) {
		$('#imgLogo').fadeTo(0,1);
		$('#over').animate({ backgroundColor: "#343538" }, 0);
		document.getElementById("toHide").style.display="none";  
		// some code..
		window.scrollTo(0,1);
	} else {
		if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) { 	
		$('#imgLogo').fadeTo(0,1);
		$('.over').animate({ backgroundColor: "#343538" }, 0);
		document.getElementById("toHide").style.display="none";  
		// some code..
		window.scrollTo(0,1);
	}
	};

	$('#show').fadeTo(500,1);


$('video').on('ended pause',function(){
	$('#toHide').fadeTo(0,0,function() {
		$('#imgLogo').fadeTo(0,1);
		$("#over").animate({backgroundColor: "#343538" }, 1000);	
		document.getElementById("toHide").style.display="none";  

	});
	/*
	$('#imgLogo').fadeTo(0,1,function() {
		document.getElementById("toHide").style.display="none";    
	});
	*/
	/*document.getElementById("imgLogo").style.visibility ="visible";
	document.getElementById("toHide").style.display="none";*/
});

});