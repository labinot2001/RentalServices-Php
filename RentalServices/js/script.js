// $(function() {
// 	$('#slideshow > div:gt(0)').hide();
// 	setInterval(function() {
// 		$('#slideshow > div:first')
// 		.fadeOut(1000)
// 		.next()
// 		.fadeIn(1000)
// 		.end()
// 		.appendTo('#slideshow');
// 	}, 3850);
// });

// (function($) {
// 	'use strict';
// 	$.fn.swapClass = function(remove, add) {
// 		this.removeClass(remove).addClass(add);
// 		return this;
// 	};
// }(jQuery));
// Get the container element
// var btnContainer = document.getElementById("myUl");

// // Get all buttons with class="btn" inside the container
// var btns = btnContainer.getElementsByClassName("a-buttom");

// // Loop through the buttons and add the active class to the current/clicked button
// for (var i = 0; i < btns.length; i++) {
//   btns[i].addEventListener("click", function() {
//     var current = document.getElementsByClassName("active");
//     current[0].className = current[0].className.replace(" active", "");
//     this.className += " active";
//   });
// }

// $(document).ready(function(){
//   $('/about.php a.a-buttom').addClass('active');
// });

// window.onload = function() { 
//   var all_links = document.getElementById("test-nav-ul").getElementsByTagName("a"),
//       i=0, len=all_links.length,
//       full_path = location.href.split('#')[0]; //Ignore hashes?

//   // Loop through each link.
//   for(; i<len; i++) {
//       if(all_links[i].href.split("#")[0] == full_path) {
//           all_links[i].className += " active";
//       }
//   }
// }

var slides = document.querySelectorAll("#slides .slide");
var currentSlide = 0;
var slideInterval = setInterval(nextSlide, 2000);

function nextSlide() {
  slides[currentSlide].className = "slide";
  currentSlide = (currentSlide + 1) % slides.length;
  slides[currentSlide].className = "slide showing";
}
