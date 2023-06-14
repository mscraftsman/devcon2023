window.onscroll = function() { affixedRooms() };

// Get the header
var header = document.getElementById("rooms-bar");

// Get the offset position of the navbar
var sticky = header.getBoundingClientRect().top + document.documentElement.scrollTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function affixedRooms() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

var container = document.querySelector('.sessions__column');
var fixedElements = document.querySelectorAll('.time__tag');

container.addEventListener('scroll', function () {
  var scrollLeft = container.scrollLeft;

  fixedElements.forEach(function(fixedElement) {
    fixedElement.style.transform = 'translateX(' + scrollLeft + 'px) translateY(-30px)';
  });
});