var myCarousel = document.querySelector('#carouselExampleControls');

var carousel = new bootstrap.Carousel(myCarousel, {
    interval: false,
    wrap: false
  })



const radioInputs = document.querySelectorAll('.calc-input');
for (let i = 0; i < radioInputs.length; i++) {
    radioInputs[i].addEventListener('click', function(){
        carousel.next();
    }
)}
