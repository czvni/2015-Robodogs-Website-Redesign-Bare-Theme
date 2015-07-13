
$(function(){
	var slides = $('.slideshow > li');
	var counter = 0;
	var numberOfSlides = slides.length;
	var slideCache = [];
	
	(function preloader(){
		if(counter < numberOfSlides){
			slideCache[counter] = new Image();
			slideCache[counter].src = slides.eq(counter).find('img').attr('src');
			slideCache[counter].onload = function(){
				counter++
				preloader();
			}
		} else {
			counter = 0;
			slideShow();
		}
	})
	
})

function slideShow(){
	slides.eq(counter).fadeIn(1000).delay(2000).fadeOut(1000, function(){
		if(counter < numberOfSlides-1){
			counter++;
		} else {
			counter = 0;
		}
	});
}