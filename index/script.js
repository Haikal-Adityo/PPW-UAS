// Scroll to section on navigation link click
const header = document.querySelector('header');
document.querySelectorAll('nav a').forEach(anchor => {
    const headerHeight = header.offsetHeight;
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        const sectionId = this.getAttribute('href');
        const section = document.querySelector(sectionId);

        window.scrollTo({
            behavior: 'smooth',
            top: section.offsetTop - 100
        });
    });
});

// Form submission
$('#form').submit(function (e) {
  e.preventDefault();
  var userMessage = $('#message').val();

  $.ajax({
      type: 'POST',
      url: 'inquiry.php',
      data: {
          name: $('#name').val(),
          email: $('#email').val(),
          message: userMessage
      },
      success: function (response) {
          console.log(response); // Check the response from contact.php
          // Display the thank you message
          $('#form').hide();
          $('#thankYouMessage').show();

          // Scroll to the bottom of the page slowly
          const scrollStep = window.innerHeight / 10; // Adjust the speed by changing the divisor
          let scrollCount = 0;

          const scrollInterval = setInterval(() => {
              if (scrollCount >= document.body.scrollHeight - window.innerHeight) {
                  clearInterval(scrollInterval);
              }

              window.scrollBy(0, scrollStep);
              scrollCount += scrollStep;
          }, 20); // Adjust the interval duration for smoother scrolling
      },
      error: function (xhr, status, error) {
          console.error(xhr.responseText);
          alert('An error occurred while submitting the form.');
      }
  });

  return false;
});

// Scroll event listener for animating sections
let scrollPosition = window.scrollY || document.documentElement.scrollTop;

window.addEventListener('scroll', function() {
  const mainDivs = document.querySelectorAll('div.main-div:not(#banner):not(#content):not(footer)');

  const currentScrollPos = window.scrollY || document.documentElement.scrollTop;
  const scrollDirection = currentScrollPos > scrollPosition ? 'down' : 'up';
  scrollPosition = currentScrollPos;

  mainDivs.forEach(mainDiv => {
    const divTop = mainDiv.offsetTop;
    const divHeight = mainDiv.clientHeight;
    const windowHeight = window.innerHeight;

    if (scrollDirection === 'down' && currentScrollPos > divTop - windowHeight + (divHeight / 2)) {
      mainDiv.classList.add('visible', 'animate', 'stay');
    }
  });
});


// Force page scroll position to top at page refresh
window.onbeforeunload = function () {
    window.scrollTo(0, 0);
}

// Header
const banner = document.getElementById('banner');

function adjustHeaderPosition() {
  const headerHeight = header.offsetHeight;
  banner.style.marginTop = `-${headerHeight}px`;
}

let prevScrollPos = window.scrollY || document.documentElement.scrollTop;

window.addEventListener('scroll', function () {
const currentScrollPos = window.scrollY || document.documentElement.scrollTop;
const headerHeight = header.offsetHeight;

if (currentScrollPos > prevScrollPos) {
    // Scrolling down
    header.style.top= `-${headerHeight}px`;
} else {
    // Scrolling up
    header.style.top= "0";
}

prevScrollPos = currentScrollPos;

// Change header background when it goes past the banner section
const bannerBottom = banner.offsetTop + banner.offsetHeight;

if (currentScrollPos > bannerBottom) {
    header.classList.add('sticky');
} else {
    header.classList.remove('sticky');
}
});


// Adjust scroll position after page load (in case the page is loaded at a scrolled position)
window.addEventListener('load', function () {
  const currentScrollPos = window.scrollY || document.documentElement.scrollTop;

  if (currentScrollPos > banner.offsetTop) {
    header.classList.add('sticky');
  }
});

// Initial adjustment on page load
window.addEventListener('load', adjustHeaderPosition);

// Adjust header position on window resize
window.addEventListener('resize', adjustHeaderPosition);

// Toggle visibility
const navbarToggle = document.querySelector('.navbar-toggle');

navbarToggle.addEventListener('click', () => {
  navbarToggle.classList.toggle('active');
  sidebar.classList.toggle('active');
});

// Show/hide navbar based on scroll direction
window.addEventListener('scroll', () => {
  const currentScrollPos = window.scrollY || document.documentElement.scrollTop;

  if (currentScrollPos > prevScrollPos) {
    // Scrolling down
    header.style.top = `-${header.offsetHeight}px`;
    navbarToggle.classList.remove('active');
  } else {
    // Scrolling up
    header.style.top = '0';
  }

  prevScrollPos = currentScrollPos;

  // Change header background when it goes past the banner section
  const banner = document.getElementById('banner');
  const bannerBottom = banner.offsetTop + banner.offsetHeight;

  if (currentScrollPos > bannerBottom) {
    header.classList.add('sticky');
  } else {
    header.classList.remove('sticky');
  }
});

// Adjust scroll position after page load (in case the page is loaded at a scrolled position)
window.addEventListener('load', () => {
  const currentScrollPos = window.scrollY || document.documentElement.scrollTop;

  if (currentScrollPos > banner.offsetTop) {
    header.classList.add('sticky');
  }
});
