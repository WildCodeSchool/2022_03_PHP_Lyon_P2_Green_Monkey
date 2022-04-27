var myCarousel = document.querySelector('#carouselExampleControls');

//create a new element bootstrap to modify animation on carousel
var carousel = new bootstrap.Carousel(myCarousel, {
    interval: false,
    wrap: false
  })

//make the slides on carousel moving when radio button is selected
const radioInputs = document.querySelectorAll('.calc-input');
for (let i = 0; i < radioInputs.length; i++) {
    radioInputs[i].addEventListener('click', function(){
        carousel.next();
    }
)}

//mmake the last slide display the submit button
const radioFinalInputs = document.querySelectorAll('.calc-final');
const carouselItem = document.querySelector('#carouselExampleControls');
const finalButton = document.querySelector('#final-button');

for (let i = 0; i < radioFinalInputs.length; i++) {
    radioFinalInputs[i].addEventListener('click', function(){
        carouselItem.style.display = "none";
        finalButton.style.display = "initial";
    }
)}
