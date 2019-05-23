$(document).ready(function(){
  $(window).scroll(function(){
  	var scroll = $(window).scrollTop();
	  if (scroll > 870) {
	    $("nav").css("background" , "#b91e2a");
	  }

	  else{
		  $("nav").css("background" , "transparent");  	
	  }
  })
})