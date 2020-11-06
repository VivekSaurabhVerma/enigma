$(document).ready(function(){

	var x = setInterval(function(){
		if(window.innerWidth<1000){
			$(".continuous-view").show();
			$(".carousel-rules").hide();
		}

		else{
			$(".continuous-view").hide();
			$(".carousel-rules").show();
		}

	});


});