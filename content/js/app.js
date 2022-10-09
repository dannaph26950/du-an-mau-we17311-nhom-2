

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



function mua1() {
  var pro = document.getElementById('pro');
  var price = pro.getAttribute('data-price');
  var quantity = qty1.value;
  var amount = price * quantity;
  document.getElementById("td1").innerHTML = amount;
}
function mua2() {
  var pri = document.getElementById('pri');
  var price1 = pri.getAttribute('data-price1');
  var quantity1 = qty2.value;
  var amount1 = price1 * quantity1;
  document.getElementById("td2").innerHTML = amount1;
}
function mua3() {
  var pre = document.getElementById('pre');
  var price2 = pre.getAttribute('data-price2');
  var quantity2 = qty3.value;
  var amount2 = price2 * quantity2;
  document.getElementById("td3").innerHTML = amount2;
}

function xoa1(){
  dem = 0;
  document.getElementById('td1').innerHTML = dem;
}

function xoa2(){
  dem = 0;
  document.getElementById('td2').innerHTML = dem;
}

function xoa3(){
  dem = 0;
  document.getElementById('td3').innerHTML = dem;
}

function dong_y(){
  var pro = document.getElementById('pro');
  var price = pro.getAttribute('data-price');
  var quantity = qty1.value;
  var amount = price * quantity;

  var pri = document.getElementById('pri');
  var price1 = pri.getAttribute('data-price1');
  var quantity1 = qty2.value;
  var amount1 = price1 * quantity1;

  var pre = document.getElementById('pre');
  var price2 = pre.getAttribute('data-price2');
  var quantity2 = qty3.value;
  var amount2 = price2 * quantity2;

  var sum = amount + amount1 + amount2

  document.getElementById("tong").innerHTML = sum;
}

function xoa_gio(){
  dem = 0;
  document.getElementById("tong").innerHTML = dem;
  document.getElementById('td1').innerHTML = dem;
  document.getElementById('td2').innerHTML = dem;
  document.getElementById('td3').innerHTML = dem;
}


