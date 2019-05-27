$(document).ready(function(){
  $(window).scroll(function(){
  	var scroll = $(window).scrollTop();
	  if (scroll > 630) {
	    $("nav").css("background" , "#b91e2a");
	  }

	  else{
		  $("nav").css("background" , "transparent");  	
	  }
	})
})
/*$(window).scroll(function(){
	var scroll = $(window).scrollTop();
	if (scroll > 500) {
		$("nav").css("background" , "#b91e2a");
	}

	else{
		$("nav").css("background" , "transparent");  	
	}
})

$(window).resize(function () {
	$(window).scroll(function(){
	var scroll = $(window).scrollTop();
	if ($(window).outerWidth() < 1000 && scroll > 1000) {
		$("nav").css("background" , "#b91e2a");
	} else {
		$("nav").css("background" , "transparent");
	}
})
});*/