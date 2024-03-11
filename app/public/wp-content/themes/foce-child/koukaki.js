
//titre histoire
 const animH2Histoire = document.querySelector('.h2Histoire');
window.addEventListener('scroll', function() {
   if(window.scrollY >240) {
    animH2Histoire.classList.add('scroll');
    }
    else{animH2Histoire.classList.remove('scroll');}
  });
console.log(animH2Histoire);

//section story
  const animStory = document.getElementById('story');
window.addEventListener('scroll', function() {
   if(window.scrollY >150) {
    animStory.classList.add('scroll');
    }
    else{animStory.classList.remove('scroll');}
  });
  console.log(animStory);

// titre les personnages
const animTitrePersonnages = document.querySelector('.lesPersonnagesH3');
window.addEventListener('scroll', function() {
   if(window.scrollY >700) {
    animTitrePersonnages.classList.add('scroll');
    }
    else{ animTitrePersonnages.classList.remove('scroll');}
  });
  console.log( animTitrePersonnages);

 //sous-section lieu
const animSecLieu = document.querySelector('.story #place');
window.addEventListener('scroll', function() {
   if(window.scrollY >1300) {
    animSecLieu.classList.add('scroll');
    }
    else{animSecLieu.classList.remove('scroll');}
  });
  console.log(animSecLieu);

// titre lieu
const animLieu = document.querySelector('.lieuH3');
window.addEventListener('scroll', function() {
   if(window.scrollY >1600) {
    animLieu.classList.add('scroll');
    }
    else{animLieu.classList.remove('scroll');}
  });
  console.log(animLieu);

//section studio
  const animStudio = document.getElementById('studio');
  window.addEventListener('scroll', function() {
     if(window.scrollY >2000) {
      animStudio.classList.add('scroll');
      }
      else{animStudio.classList.remove('scroll');}
    });
    console.log(animStudio);

// titre studio koukaki
const animH2Studio = document.querySelector('.h2Studio');
window.addEventListener('scroll', function() {
   if(window.scrollY >2200) {
    animH2Studio.classList.add('scroll');
    }
    else{animH2Studio.classList.remove('scroll');}
  });
console.log(animH2Studio);

//section nomination
const animNomination = document.getElementById('nomination');
window.addEventListener('scroll', function() {
   if(window.scrollY >2700) {
    animNomination.classList.add('scroll');
    }
    else{animNomination.classList.remove('scroll');}
  });
  console.log(animNomination);

  // SWIPER SLIDER
  //pour changer des paramètres, voir Doc swiperjs.com/swiper-api le tableau
 const swiper = new Swiper('.swiper-container', {
  effect: "coverflow",
  centeredSlides: true,
  grabCursor: true,
  slidesPerView:3,
  loop: true,
  autoplay: {
    delay: 1500,
  },
  coverflowEffect: {
    rotate: 75,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: false,
    },
  });

