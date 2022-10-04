

let slideIndex = 1;
showSlides(slideIndex);
// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
$(".slider").owlCarousel({
  loop: true,
  autoplay: true,
  autoplayTimeout: 2000, //2000ms = 2s;
  autoplayHoverPause: true,
 
});


var quantity=document.getElementById("mynumber");

function dow(){
    if(quantity.value>1){
    quantity.value--;
    }
}
function up(){
    quantity.value++;
}
// button
function showhide(){
  var ct=document.getElementById("content");
  if(ct.style.display == 'block')
ct.style.display = 'none';
else
ct.style.display = 'block';
}


