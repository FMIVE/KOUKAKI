//titre histoire
const animH2Histoire = document.querySelector('.h2Histoire');
window.addEventListener('scroll', function() {
   if(window.scrollY >200) {
    animH2Histoire.classList.add('scroll');
    }
    else{animH2Histoire.classList.remove('scroll');}
  });
console.log(animH2Histoire);

// titre studio koukaki
const animH2Studio = document.querySelector('.h2Studio');
window.addEventListener('scroll', function() {
   if(window.scrollY >2150) {
    animH2Studio.classList.add('scroll');
    }
    else{animH2Studio.classList.remove('scroll');}
  });
console.log(animH2Studio);