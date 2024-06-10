
window.addEventListener('scroll', function() {
  var navbar = document.getElementById('nav');
  var distanceY = window.scrollY || document.documentElement.scrollTop;

  var scrollTrigger = 600; // Adjust as needed
  var textColorClass = 'text-black'; // Class for changing text color
  var bgColorClass = 'custom-navBg'; // Class for changing background color

  if (distanceY > scrollTrigger) {
    navbar.classList.add(bgColorClass);
    navbar.querySelectorAll('.nav-link').forEach(function(link) {
      link.classList.add(textColorClass);
    });
  } else {
    navbar.classList.remove(bgColorClass);
    navbar.querySelectorAll('.nav-link').forEach(function(link) {
      link.classList.remove(textColorClass);
    });
  }
});



document.addEventListener('DOMContentLoaded', function () {
  var splide = new Splide('.splide', {
    perPage: 4,
    rewind: true,
    pagination: false,
    arrows: false,

  });

  splide.mount();

  // Add event listeners for custom arrows
  document.querySelector('.custom-next').addEventListener('click', function () {
    splide.go('>');
  });

  document.querySelector('.custom-prev').addEventListener('click', function () {
    splide.go('<');
  });
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



// CountDown timer

const countDownClock = (number = 100, format = "seconds") => {
  const d = document;
  const daysElement = d.querySelector(".days");
  const hoursElement = d.querySelector(".hours");
  const minutesElement = d.querySelector(".minutes");
  const secondsElement = d.querySelector(".seconds");
  let countdown;
  convertFormat(format);

  function convertFormat(format) {
    switch (format) {
      case "seconds":
        return timer(number);
      case "minutes":
        return timer(number * 60);
      case "hours":
        return timer(number * 60 * 60);
      case "days":
        return timer(number * 60 * 60 * 24);
    }
  }

  function timer(seconds) {
    const now = Date.now();
    const then = now + seconds * 1000;

    countdown = setInterval(() => {
      const secondsLeft = Math.round((then - Date.now()) / 1000);

      if (secondsLeft <= 0) {
        clearInterval(countdown);
        return;
      }

      displayTimeLeft(secondsLeft);
    }, 1000);
  }

  function displayTimeLeft(seconds) {
    daysElement.textContent = Math.floor(seconds / 86400);
    hoursElement.textContent = Math.floor((seconds % 86400) / 3600);
    minutesElement.textContent = Math.floor(((seconds % 86400) % 3600) / 60);
    secondsElement.textContent =
      seconds % 60 < 10 ? `0${seconds % 60}` : seconds % 60;
  }
};

countDownClock(3, "days");




// heart icon in cards

document.addEventListener("DOMContentLoaded", function() {
  const wishIcons = document.querySelectorAll('.wish-icon');
  wishIcons.forEach(function(icon) {
      icon.addEventListener('click', function() {
          this.classList.toggle('clicked');
      });
  });
});


/* document.addEventListener('DOMContentLoaded', function() {
    const payOnlineRadio = document.querySelector('input[name="payment_method"][value="pay_online"]');
    const onlinePaymentField = document.getElementById('onlinePaymentField');

    payOnlineRadio.addEventListener('change', function() {
        if (this.checked) {
            onlinePaymentField.style.display = 'block';
        } else {
            onlinePaymentField.style.display = 'none';
        }
    });

    // Initially check if "Pay Online" is selected on page load
    if (payOnlineRadio.checked) {
        onlinePaymentField.style.display = 'block';
    }
}); */






