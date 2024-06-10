new Swiper('.slides-2', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 20
      },

      1200: {
        slidesPerView: 2,
        spaceBetween: 20
      }
    }
  });





  window.addEventListener('scroll', function() {
    var navbar = document.getElementById('nav');
    var distanceY = window.scrollY || document.documentElement.scrollTop;

    
    var scrollTrigger = 300; 
    var textColor = 'text-light'; 
    var bgColor = 'custom-navBg'; 

    if (distanceY > scrollTrigger) {
      navbar.classList.add(bgColor);
      navbar.querySelectorAll('.nav-link').forEach(function(link) {
        link.classList.add(textColor);
      });
    } else {
      navbar.classList.remove(bgColor);
      navbar.querySelectorAll('.nav-link').forEach(function(link) {
        link.classList.remove(textColor);
      });
    }
  });


  

// Scroll top
let upBtn = document.getElementById("UpBtn");

window.onscroll = () => {
  if (window.scrollY >= 400) {
    upBtn.style.display = "block";
  } else {
    upBtn.style.display = "none";
  }
};

upBtn.addEventListener("click", () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
});

AOS.init();
