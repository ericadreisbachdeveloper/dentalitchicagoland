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
          <a class="logo logo--light" href="/" aria-label="<?= e(SITE_NAME) ?> home">
            <img src="<?= asset('img/logo-mark.svg') ?>" alt="" width="28" height="32">
            <span class="logo__text">
              <strong>Dental IT</strong>
              <span>Chicagoland</span>
            </span>
          </a>
          <p class="site-footer__tagline">Dental technology, thoughtfully managed.</p>
        </div>

        <nav class="site-footer__nav" aria-label="Footer">
          <ul>
            <?php foreach ($footer_nav_items as $item): ?>
              <li><a href="<?= e($item['href']) ?>"<?= is_current($item['href']) ? ' aria-current="page"' : '' ?>><?= e($item['label']) ?></a></li>
            <?php endforeach; ?>
          </ul>
          <a class="btn btn--primary btn--sm" href="#contact">Let’s talk <?php include __DIR__ . '/icon-arrow.php'; ?></a>
        </nav>
      </div>

      <div class="site-footer__bottom">
        <p>&copy; <?= date('Y') ?> <?= e(SITE_NAME) ?>. All rights reserved.</p>
        <ul class="site-footer__legal">
          <li><a href="/privacy">Privacy</a></li>
          <li><a href="/terms">Terms</a></li>
          <li><span>HIPAA-minded technology partner</span></li>
        </ul>
      </div>
    </div>
  </footer>

  <script src="<?= asset('js/main.js') ?>" defer></script>
</body>
</html>
