//we referenced solutions for lab 13 for the slideshow

$(document).ready(function() {

	var images = ["images/slideshowplaceholder.jpg", "images/banner-soup2.jpg", "images/soup2.jpg", "images/soup3.jpg"];


	var currentIndex = 0;
	var FIRST_IMAGE_INDEX = 0;
	var LAST_IMAGE_INDEX = images.length - 1;

//if the user clicks on the left button
	$("#left").click(function() {

		if (currentIndex > FIRST_IMAGE_INDEX) {
			currentIndex = currentIndex - 1;
		}
		else {

			currentIndex = LAST_IMAGE_INDEX;
		}
		$("#current_img").attr("src", images[currentIndex]);
	});

//if the user clicks on the right button
	$("#right").click(function() {

		if (currentIndex < LAST_IMAGE_INDEX) {
			currentIndex = currentIndex + 1;
		}
		else {
			currentIndex = FIRST_IMAGE_INDEX;
		}
		$("#current_img").attr("src", images[currentIndex]);
	});
});
