<?php
/**
 * nav.php
 * Primary navigation + phone + CTA. Collapses to a toggle menu on mobile
 * (behaviour in /assets/js/main.js).
 * Relies on $nav_items from /partials/config.php.
 */
?>
<button class="nav-toggle" type="button" aria-controls="primary-nav" aria-expanded="false">
  <span class="nav-toggle__bar"></span>
  <span class="nav-toggle__bar"></span>
  <span class="nav-toggle__bar"></span>
  <span class="sr-only">Menu</span>
</button>

<nav class="primary-nav" id="primary-nav" aria-label="Primary">
  <ul class="primary-nav__list">
    <?php foreach ( $nav_items as $item ) : ?>
      <li><a class="primary-nav__link" href="<?php echo e($item['href']) ?>"><?php echo e($item['label']) ?></a></li>
    <?php endforeach; ?>
  </ul>

  <a class="primary-nav__phone" href="tel:<?php echo e(SITE_PHONE_E164) ?>">
    
    
  </a>

  <a class="btn btn--primary btn--sm" href="tel:<?php echo e(SITE_PHONE_E164) ?>">
    <svg class="icon" aria-hidden="true" viewBox="0 0 24 24"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.4 1.8.7 2.7a2 2 0 0 1-.5 2.1L8 9.8a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.8.6 2.7.7a2 2 0 0 1 1.7 2z"/></svg>
    <?php echo e(SITE_PHONE) ?></a>
</nav>
