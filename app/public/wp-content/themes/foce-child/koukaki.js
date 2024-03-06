
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

// titre lieu
const animLieu = document.querySelector('.lieuH3');
window.addEventListener('scroll', function() {
   if(window.scrollY >1600) {
    animLieu.classList.add('scroll');
    }
    else{animLieu.classList.remove('scroll');}
  });
  console.log(animLieu);

//sous-section lieu
const animSecLieu = document.querySelector('.story #place');
window.addEventListener('scroll', function() {
   if(window.scrollY >1300) {
    animSecLieu.classList.add('scroll');
    }
    else{animSecLieu.classList.remove('scroll');}
  });
  console.log(animSecLieu);

// titre studio koukaki
const animH2Studio = document.querySelector('.h2Studio');
window.addEventListener('scroll', function() {
   if(window.scrollY >2200) {
    animH2Studio.classList.add('scroll');
    }
    else{animH2Studio.classList.remove('scroll');}
  });
console.log(animH2Studio);

//section studio
  const animStudio = document.getElementById('studio');
  window.addEventListener('scroll', function() {
     if(window.scrollY >2000) {
      animStudio.classList.add('scroll');
      }
      else{animStudio.classList.remove('scroll');}
    });
    console.log(animStudio);

//section nomination
const animNomination = document.getElementById('nomination');
window.addEventListener('scroll', function() {
   if(window.scrollY >2700) {
    animNomination.classList.add('scroll');
    }
    else{animNomination.classList.remove('scroll');}
  });
  console.log(animNomination);

  
