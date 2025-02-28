
// Navigation and Scroll Effects
const navbar = document.getElementById('navbar');
const navLinks = document.querySelectorAll('.nav-links a');
const hamburger = document.querySelector('.hamburger');
const navMenu = document.querySelector('.nav-links');
const sections = document.querySelectorAll('section');

// Sticky Navbar
window.addEventListener('scroll', () => {
  if (window.scrollY > 100) {
    navbar.classList.add('scrolled');
  } else {
    navbar.classList.remove('scrolled');
  }
  
  // Active menu based on scroll position
  let current = '';
  
  sections.forEach(section => {
    const sectionTop = section.offsetTop - 100;
    const sectionHeight = section.clientHeight;
    if (pageYOffset >= sectionTop) {
      current = section.getAttribute('id');
    }
  });
  
  navLinks.forEach(link => {
    link.classList.remove('active');
    if (link.getAttribute('href').substring(1) === current) {
      link.classList.add('active');
    }
  });
});

// Mobile menu toggle
hamburger.addEventListener('click', () => {
  navMenu.classList.toggle('active');
});

// Close mobile menu when link is clicked
navLinks.forEach(link => {
  link.addEventListener('click', () => {
    navMenu.classList.remove('active');
  });
});

// Contact Form Submission
const contactForm = document.getElementById('contactForm');

if (contactForm) {
  contactForm.addEventListener('submit', (e) => {
    e.preventDefault();
    
    // Get form values
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const subject = document.getElementById('subject').value;
    const message = document.getElementById('message').value;
    
    // Form validation
    if (!name || !email || !message) {
      alert('Please fill in all required fields');
      return;
    }
    
    // Success message (in real app, would send to server)
    alert('Thank you for your message! We will get back to you soon.');
    contactForm.reset();
  });
}

// Portfolio item hover effect enhancement
const portfolioItems = document.querySelectorAll('.portfolio-item');

portfolioItems.forEach(item => {
  item.addEventListener('mouseenter', () => {
    portfolioItems.forEach(otherItem => {
      if (otherItem !== item) {
        otherItem.style.opacity = '0.7';
      }
    });
  });
  
  item.addEventListener('mouseleave', () => {
    portfolioItems.forEach(otherItem => {
      otherItem.style.opacity = '1';
    });
  });
});

// Smooth scrolling for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function(e) {
    e.preventDefault();
    
    const targetId = this.getAttribute('href');
    if (targetId === '#') return;
    
    const targetElement = document.querySelector(targetId);
    if (targetElement) {
      window.scrollTo({
        top: targetElement.offsetTop - 80,
        behavior: 'smooth'
      });
    }
  });
});

// Newsletter form submission
const newsletterForm = document.querySelector('.footer-newsletter form');

if (newsletterForm) {
  newsletterForm.addEventListener('submit', (e) => {
    e.preventDefault();
    const emailInput = newsletterForm.querySelector('input[type="email"]');
    
    if (!emailInput.value) {
      alert('Please enter your email address');
      return;
    }
    
    alert('Thank you for subscribing to our newsletter!');
    emailInput.value = '';
  });
}
