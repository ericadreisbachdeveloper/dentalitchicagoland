<?php
/**
 * footer.php
 * Site footer, scripts, and closing tags.
 */
?>

  <footer class="site-footer">
    <div class="container">
      <div class="site-footer__top">
        <div class="site-footer__brand">
          <a class="logo logo--light" href="<?php echo e(SITE_URL) ?>/" aria-label="<?php echo e(SITE_NAME) ?> home">
            <img src="<?php echo asset('img/logo-mark.svg') ?>" alt="" width="28" height="32">
            <span class="logo__text">
              <strong>Cusp</strong>
              <span>Dental IT</span>
            </span>
          </a>
          <p class="site-footer__tagline">Dental technology, thoughtfully managed.</p>
        </div>

        <nav class="site-footer__nav" aria-label="Footer">
          <ul>
            <?php foreach ( $nav_items as $item ) : ?>
              <li><a href="<?php echo e($item['href']) ?>"><?php echo e($item['label']) ?></a></li>
            <?php endforeach; ?>
          </ul>
          <a class="btn btn--primary btn--sm" href="#contact">Let’s talk <?php require __DIR__ . '/icon-arrow.php'; ?></a>
        </nav>
      </div>

      <div class="site-footer__bottom">
        <p>&copy; <?php echo date('Y') ?> <?php echo e(SITE_NAME) ?>. All rights reserved.</p>
        <ul class="site-footer__legal">
          <li><a href="/privacy">Privacy</a></li>
          <li><a href="/terms">Terms</a></li>
          <li><span>HIPAA-minded technology partner</span></li>
        </ul>
      </div>
    </div>
  </footer>

  <script src="<?php echo asset('js/main.js') ?>" defer></script>
</body>
</html>
