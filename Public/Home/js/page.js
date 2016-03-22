//<![CDATA[ 
jQuery(function(){
	jQuery(window).scroll(function() {		
		if(jQuery(window).scrollTop() >= 121){
			jQuery('.gobox').fadeIn(300); 
		}else{    
			jQuery('.gobox').fadeOut(300);    
		}  
		if(jQuery.browser.msie && jQuery.browser.version == '6.0'){
			jQuery(".gobox").css("top",$(window).scrollTop());
		};
	});
	if(jQuery(window).width()>1200){
		jQuery(".gobox").css("right",(jQuery(window).width()-1000)/2-100+"px"); 
	}else{
		jQuery(".gobox").css("right","0px"); 
	};
	jQuery(".gotop").click(function(){$("html,body").animate({scrollTop :0}, 800);return false;});
});
//]]>