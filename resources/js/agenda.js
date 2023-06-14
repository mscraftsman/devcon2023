window.onscroll = function() { affixedRooms() };

let header = document.getElementById("rooms-bar");
let sticky = header.getBoundingClientRect().top + document.documentElement.scrollTop;

function affixedRooms() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

let container = document.querySelector('.sessions__column');
let fixedElements = document.querySelectorAll('.time__tag');

container.addEventListener('scroll', function () {
  let scrollLeft = container.scrollLeft;

  fixedElements.forEach(function(fixedElement) {
    fixedElement.style.transform = 'translateX(' + scrollLeft + 'px) translateY(-30px)';
  });

  if (window.pageYOffset > sticky) {
    header.style.transform = 'translateX(' + -scrollLeft + 'px)';
  } else {
    header.style.transform = 'none';
  }
});