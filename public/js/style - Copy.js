$(document).ready(function(){
	var w=$(window).innerWidth();
	$(window).resize(function(e) {
		w=$(window).innerWidth();
	});
	$(".nav-item").hover(function(){
		if(w>=768){
			$(this).children("span.bottomLine").css("width","70%")
  			$(this).children(".dropdown-menu").addClass("show");
		}
	},function(){
		if(w>=768){
			$(".dropdown-menu").removeClass("show");
			$(this).children("span.bottomLine").css("width","20px");
		}
	});
	var defaultMn = true;
    var sliderCoverPos=$(".sliderCover").offset().top;
    var heightBrowser=$(window).innerHeight();
    var startPos= sliderCoverPos- heightBrowser;
    var stopPos= sliderCoverPos +$(".sliderCover").height();;
	$(window).scroll(function(e){
		if(document.documentElement.scrollTop >= 100 & defaultMn){
	    	$(".headerTop").addClass("headerSmall");
			defaultMn = false;
		} else if(document.documentElement.scrollTop < 100 & !defaultMn) {
	    	$(".headerTop").removeClass("headerSmall");
			defaultMn = true;
		}
		// create parallax effect
		let scrollPos = document.documentElement.scrollTop;
		if (scrollPos>=startPos & scrollPos<=stopPos) {
			parallax(scrollPos);
		}
	});

	var parallax=(sp)=>{
		let speedBackground =0.2;
		let speedContent = 0.5;
		$(".sliderCover").css("background-attachment", "initial");
		$(".sliderCover").css("background-position", "center "+ Math.round((startPos-sp)*speedBackground) + 'px');
		$(".sliderCover .overlapContainer").css("transform", "translateY("+ Math.round((startPos-sp)*speedBackground) + 'px');
		$(".sliderCover .downloadIconCover").css("transform", "translateY("+ Math.round((startPos-sp)*speedBackground) + 'px');
	};
	$('.owl-carousel').owlCarousel({
		loop:true,
		margin:10,
		autoplay:true,
		autoplayHoverPause:true,
		responsiveClass:true,
		responsive:{
			0:{
				items:2,
				nav:false,
				loop:true
			},
			768:{
				items:3,
				nav:false,
				loop:true
			},
			992:{
				items:4,
				nav:false,
				loop:true
			}
		}
	});
});

