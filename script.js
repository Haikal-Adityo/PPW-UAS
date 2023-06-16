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
const contact = document.getElementById('contact');
const form = document.querySelector('form');
const submitBtn = document.getElementById('submitBtn');
const thankYouMessage = document.getElementById('thankYouMessage');

form.addEventListener('submit', function (e) {
    e.preventDefault();

    // Get form values
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    // Perform form validation here
    if (name.trim() === '') {
        alert('Please enter your name.');
        return;
    }

    if (email.trim() === '') {
        alert('Please enter your email.');
        return;
    }

    if (message.trim() === '') {
        alert('Please enter your message.');
        return;
    }

    // Simulate form submission (replace this with actual form submission logic)
    showThankYouMessage();
    form.reset();
});

// Show thank you message
function showThankYouMessage() {
    form.style.display = 'none';
    thankYouMessage.style.display = 'block';
    thankYouMessage.classList.add('animate', 'stay');
}

// Scroll event listener for animating sections
let scrollPosition = window.pageYOffset || document.documentElement.scrollTop;
window.addEventListener('scroll', function () {
    const sections = document.querySelectorAll('section:not(#banner)');

    const currentScrollPos = window.pageYOffset || document.documentElement.scrollTop;
    const scrollDirection = currentScrollPos > scrollPosition ? 'down' : 'up';
    scrollPosition = currentScrollPos;

    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        const windowHeight = window.innerHeight;

        if (scrollDirection == 'down' && currentScrollPos > sectionTop - windowHeight + (sectionHeight / 2)) {
            section.classList.add('visible', 'animate', 'stay');
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

let prevScrollPos = window.pageYOffset || document.documentElement.scrollTop;

window.addEventListener('scroll', function () {
const currentScrollPos = window.pageYOffset || document.documentElement.scrollTop;
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
  const currentScrollPos = window.pageYOffset || document.documentElement.scrollTop;

  if (currentScrollPos > banner.offsetTop) {
    header.classList.add('sticky');
  }
});

// Initial adjustment on page load
window.addEventListener('load', adjustHeaderPosition);

// Adjust header position on window resize
window.addEventListener('resize', adjustHeaderPosition);