// Add an event listener to initialize the script after the DOM is fully loaded
document.addEventListener('DOMContentLoaded', function () {
  var header = document.querySelector('header');

  window.addEventListener('scroll', () =>{
    header.classList.toggle('shadow', window.scrollY > 0);
  });

  var homeSwiper = new Swiper(".home-swiper", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  var swiper = new Swiper(".coming-container", {
    spaceBetween: 20,
    loop:true,
    centeredSlides: true,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
   breakpoints:{
    0:{
      slidesPerView:2,
    },
    568:{
      slidesPerView:3,
    },
    768:{
      slidesPreView:4,
    },
    968:{
      slidesPerView:5,
    },
   }
  });
  var swiper = new Swiper(".popular-container", {
    spaceBetween: 20,
    loop:true,
    centeredSlides: true,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
   breakpoints:{
    0:{
      slidesPerView:2,
    },
    568:{
      slidesPerView:3,
    },
    768:{
      slidesPerView:4,
    },
    968:{
      slidesPerView:5,
    },
   }
  });
  var popularSwiper = new Swiper(".popular-container", {
    spaceBetween: 20,
    loop: true,
    centeredSlides: true,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    breakpoints: {
      0: {
        slidesPerView: 2,
      },
      568: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 4,
      },
      968: {
        slidesPerView: 5,
      },
    },
  });
  
   // Function to toggle the visibility of the genre dropdown
  function toggleDropdown(dropdownContent) {
    dropdownContent.classList.toggle('show');
  }

  

  // Add event listeners for dropdown links
  var dropdownLinks = document.querySelectorAll('.dropdown > a');
  dropdownLinks.forEach(function (dropdownLink) {
    dropdownLink.addEventListener('click', function (event) {
      event.preventDefault();
      var dropdownContent = this.nextElementSibling;
      var openDropdowns = document.querySelectorAll('.dropdown-content.show');
      openDropdowns.forEach(function (openDropdown) {
        if (openDropdown !== dropdownContent) {
          openDropdown.classList.remove('show');
        }
      });
      toggleDropdown(dropdownContent);
    });
  });

  // Function to toggle the visibility of the video player
  function toggleVideoPlayer(video) {
    video.classList.toggle('show-video');
  }

  // Add event listeners for play buttons
  var playButtons = document.querySelectorAll('.play');
  playButtons.forEach(function (playButton) {
    playButton.addEventListener('click', function (event) {
      event.preventDefault();
      var video = this.closest('.box').querySelector('.video-player');
      toggleVideoPlayer(video);
    });
  });

  // Function to scroll to a section
  function scrollToSection(sectionId) {
    var section = document.getElementById(sectionId);
    if (section) {
      section.scrollIntoView({ behavior: 'smooth' });
    }
  }

  // Add event listeners for genre dropdown links
  var bollywoodDropdownLinks = document.querySelectorAll('.bollywood-category .category-link');
  bollywoodDropdownLinks.forEach(function (dropdownLink) {
    dropdownLink.addEventListener('click', function (event) {
      event.preventDefault();
      var sectionId = this.getAttribute('href').substring(1);
      scrollToSection(sectionId);
    });
  });

  // Function to play video and display information
  function playVideo(src, title, duration, genre) {
    var videoPlayer = document.getElementById('video-player');
    var videoInfo = document.getElementById('video-info');

    videoPlayer.src = src;
    videoPlayer.style.display = 'block';

    videoInfo.innerHTML = `
      <h2>${title}</h2>
      <p>Duration: ${duration} | Genre: ${genre}</p>
    `;
    videoInfo.style.display = 'block';
  }
});
// Function to handle movie search
function searchMovies() {
  var input = document.getElementById('searchInput').value.toLowerCase();
  var movieBoxes = document.querySelectorAll('.box');

  movieBoxes.forEach(function(box) {
    var title = box.querySelector('h3').innerText.toLowerCase();
    
    if (title.includes(input)) {
      box.style.display = 'block';
    } else {
      box.style.display = 'none';
    }
  });
}

document.getElementById('searchInput').addEventListener('input', searchMovies);

