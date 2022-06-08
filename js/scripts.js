
let scrollPos = 0;
const nav = document.querySelector('#masthead');

function checkPosition() {
  let windowY = window.scrollY;
  if (windowY < scrollPos) {
    // Scrolling UP
    nav.classList.add('is-visible');
    nav.classList.remove('is-hidden');
  } else {
    // Scrolling DOWN
    nav.classList.add('is-hidden');
    nav.classList.remove('is-visible');
  }
  scrollPos = windowY;
  if(scrollPos == 0){
    nav.classList.add('top');
    nav.classList.remove('scroll');
    nav.classList.add('is-visible');
    nav.classList.remove('is-hidden');
  }else{
    nav.classList.add('scroll');
    nav.classList.remove('top');
    nav.classList.add('is-visible');
    nav.classList.remove('is-hidden');
  }
  
}

function debounce(func, wait = 10, immediate = true) {
  let timeout;
  return function() {
    let context = this, args = arguments;
    let later = function() {
      timeout = null;
      if (!immediate) func.apply(context, args);
    };
    let callNow = immediate && !timeout;
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
    if (callNow) func.apply(context, args);
  };
};

window.addEventListener('scroll', debounce(checkPosition));
document.addEventListener("DOMContentLoaded",debounce(checkPosition));

  

document.getElementById('navToggle').addEventListener('click', function() {
  document.body.classList.toggle('--navActive');
});
document.getElementById('backdrop').addEventListener('click', function() {
document.body.classList.toggle('--navActive');
});


const boxes = document.querySelectorAll('footer h2');

for (const box of boxes) {
  box.addEventListener('click', function() {
    box.classList.toggle('active');
  });
}