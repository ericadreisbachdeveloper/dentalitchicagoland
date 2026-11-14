/**
 * Cusp Dental IT — main.js
 * Vanilla JS, no dependencies.
 *  1. Mobile nav toggle
 *  2. Sticky header shadow
 *  3. FAQ accordion
 *  4. Video placeholder → embed on click
 */
(() => {
  'use strict';

  /* 1. Mobile nav ------------------------------------------------ */
  const toggle = document.querySelector('.nav-toggle');
  const nav = document.getElementById('primary-nav');

  if (toggle && nav) {
    const setOpen = (open) => {
      toggle.setAttribute('aria-expanded', String(open));
      nav.classList.toggle('is-open', open);
    };

    toggle.addEventListener('click', () => {
      setOpen(toggle.getAttribute('aria-expanded') !== 'true');
    });

    // Close after choosing a link or pressing Escape
    nav.addEventListener('click', (e) => {
      if (e.target.closest('a')) setOpen(false);
    });
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') setOpen(false);
    });
  }

  /* 2. Header shadow on scroll ---------------------------------- */
  const header = document.querySelector('.site-header');
  if (header) {
    const onScroll = () => header.classList.toggle('is-scrolled', window.scrollY > 8);
    onScroll();
    window.addEventListener('scroll', onScroll, { passive: true });
  }

  /* 3. Accordion (one panel open at a time) ---------------------- */
  document.querySelectorAll('[data-accordion]').forEach((accordion) => {
    const triggers = accordion.querySelectorAll('.accordion__trigger');

    triggers.forEach((btn) => {
      btn.addEventListener('click', () => {
        const willOpen = btn.getAttribute('aria-expanded') !== 'true';

        triggers.forEach((other) => {
          const panel = document.getElementById(other.getAttribute('aria-controls'));
          const open = other === btn && willOpen;
          other.setAttribute('aria-expanded', String(open));
          other.closest('.accordion__item').classList.toggle('is-open', open);
          if (panel) panel.hidden = !open;
        });
      });
    });
  });

  /* 4. Video placeholder ----------------------------------------- */
  // Set data-video-src on the button to a YouTube/Vimeo embed URL, e.g.
  // https://www.youtube-nocookie.com/embed/VIDEO_ID?autoplay=1
  document.querySelectorAll('.video-card__trigger').forEach((btn) => {
    btn.addEventListener('click', () => {
      const src = btn.dataset.videoSrc;
      if (!src) return; // no video yet — leave the placeholder in place

      const iframe = document.createElement('iframe');
      iframe.src = src;
      iframe.title = btn.getAttribute('aria-label') || 'Video';
      iframe.allow = 'autoplay; encrypted-media; picture-in-picture; fullscreen';
      iframe.allowFullscreen = true;
      btn.replaceWith(iframe);
    });
  });
})();
