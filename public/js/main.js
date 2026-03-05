/* ================================================================
   Anu International – Main JS
   ================================================================ */

(function () {
  'use strict';

  /* ---- Mobile Nav Toggle ---- */
  const toggle = document.getElementById('navToggle');
  const menuWrap = document.getElementById('navMenuWrap');

  if (toggle && menuWrap) {
    toggle.addEventListener('click', function () {
      const isOpen = menuWrap.classList.toggle('open');
      this.setAttribute('aria-expanded', String(isOpen));
    });
    // Close on outside click
    document.addEventListener('click', function (e) {
      if (!toggle.contains(e.target) && !menuWrap.contains(e.target)) {
        menuWrap.classList.remove('open');
        toggle.setAttribute('aria-expanded', 'false');
      }
    });
  }

  /* ---- Active nav link on scroll ---- */
  const sections = document.querySelectorAll('section[id]');
  const navLinks = document.querySelectorAll('.navbar__menu li a');

  function onScroll() {
    let current = '';
    sections.forEach(section => {
      const top = section.offsetTop - 90;
      if (window.scrollY >= top) current = section.id;
    });
    navLinks.forEach(link => {
      link.classList.remove('active');
      if (link.getAttribute('href') === '#' + current) link.classList.add('active');
    });
  }

  window.addEventListener('scroll', onScroll, { passive: true });

  /* ---- Navbar sticky shadow ---- */
  const navbar = document.getElementById('navbar');
  window.addEventListener('scroll', function () {
    if (navbar) {
      navbar.style.boxShadow = window.scrollY > 10
        ? '0 4px 24px rgba(0,0,0,0.35)'
        : '0 4px 20px rgba(0,0,0,0.25)';
    }
  }, { passive: true });

  /* ---- Smooth close nav on link click ---- */
  navLinks.forEach(link => {
    link.addEventListener('click', () => {
      menuWrap.classList.remove('open');
      toggle.setAttribute('aria-expanded', 'false');
    });
  });

})();
