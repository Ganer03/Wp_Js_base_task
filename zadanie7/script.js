const mobile_count = 2;
const desktop_count = 4;
const dot = document.querySelector("svg.dot");
let count = desktop_count;

function resize(){
  let width = document.querySelector(".slide.active").clientWidth;
  document.querySelectorAll(".slide").forEach(element => element.style.height = width + "px");
}

function init(){
  dot.remove();

  function updateView(){
    if (window.outerWidth <= 425){
      count = mobile_count;
    }
    document.querySelectorAll(".slide.active").forEach(element => element.classList.remove('active'));
    document.querySelectorAll(".dot").forEach(element => element.remove());

    let slides = document.querySelectorAll(".slide");

    for(let i = 1; i <= slides.length; i++){
      if(i%count===0)
        document.querySelector(".dotes").appendChild(dot.cloneNode(true));
    }

    let dots = document.querySelectorAll(".dot");

    for(let i = 0; i < Math.min(count, slides.length); i++){
      slides[i].classList.add('active');
    }
    dots[0].classList.add('active-dot');
    resize();
  }

  updateView();
}
function down(){
  if (window.outerWidth <= 425){
      count = mobile_count;
    }
  let slider = document.querySelector(".slides");
  let slides = document.querySelectorAll(".slide");
  for(let i=0;i<Math.min(count, slides.length); i++){
    let last_slide = slider.querySelector('.slide:last-child');
    last_slide.remove();
    slider.insertBefore(last_slide, slider.querySelector('.slide'));
  }

  document.querySelectorAll(".slide.active").forEach(element => element.classList.remove('active'));

  slides = document.querySelectorAll(".slide");
  for(let i = 0; i < Math.min(count, slides.length); i++){
    slides[i].classList.add('active');
  }

  let dots = document.querySelectorAll(".dot");
  let p;
  let last_active_dot;
  for(let i = 0; i < dots.length; i++){
    if (dots[i].classList.contains("active-dot")){
      last_active_dot = dots[i];
      p=i;
      break;
    }
  }
  if(p===0){
    dots[dots.length-1].classList.add("active-dot");
  }
  else{
    dots[p-1].classList.add("active-dot");
  }
  last_active_dot.classList.remove("active-dot");
}

function up(){
  if (window.outerWidth <= 425){
      count = mobile_count;
    }
    
  let slides = document.querySelectorAll(".slide");
  let slider = document.querySelector(".slides");
  for(let i=0;i<Math.min(count, slides.length); i++){
    let slide_n = slider.querySelector('.slide');
    slide_n.remove();
    slider.appendChild(slide_n);
  }

  document.querySelectorAll(".slide.active").forEach(element => element.classList.remove('active'));

  slides = document.querySelectorAll(".slide");
  for(let i = 0; i < Math.min(count, slides.length); i++){
    slides[i].classList.add('active');
  }

  let dots = document.querySelectorAll(".dot");
  let p;
  let last_active_dot;
  for(let i = 0; i < dots.length; i++){
    if (dots[i].classList.contains("active-dot")){
      last_active_dot = dots[i];
      p=i;
      break;
    }
  }
  if(p+1===dots.length){
    dots[0].classList.add("active-dot");
  }
  else{
    dots[p+1].classList.add("active-dot");
  }
  last_active_dot.classList.remove("active-dot");
}

window.addEventListener("DOMContentLoaded", init);
window.addEventListener("resize", resize, true);


function ready() {
    console.log("DOM is ready");
}

document.addEventListener("DOMContentLoaded",ready);

