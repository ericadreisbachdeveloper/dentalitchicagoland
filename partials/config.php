<?php
/**
 * config.php
 * Site-wide constants and tiny helpers shared by every partial.
 */

define('SITE_NAME', 'Dental IT Chicagoland');
define('SITE_URL', 'https://www.dentalitchicagoland.com'); // no trailing slash — confirm real domain
define('SITE_PHONE', '(888) 550-7111');
define('SITE_PHONE_E164', '+18885507111');
define('SITE_EMAIL', 'hello@dentalitchicagoland.com');      // confirm real address

/**
 * Dev / production switch (marker-file approach, works with MAMP).
 *   npm run dev   -> creates  assets/.dev  -> loads css/main.css (readable + source map)
 *   npm run build -> deletes  assets/.dev  -> loads css/main.min.css
 * Also requires main.css to exist, so a stray marker on a live server
 * still falls back to the minified file.
 */
define('ROOT_PATH', dirname(__DIR__));
define('IS_DEV', is_file(ROOT_PATH . '/assets/.dev') && is_file(ROOT_PATH . '/assets/css/main.css'));
define('CSS_FILE', IS_DEV ? 'css/main.css' : 'css/main.min.css');

/**  Small helper that makes any value safe to print inside HTML */
function e( $value ): string {
    return htmlspecialchars( (string) $value, ENT_QUOTES, 'UTF-8');
}

/**
 * Asset URL with cache-busting query string based on file modification time.
 * Usage: <?= asset('css/main.min.css') ?>
 */
function asset( string $path ): string {
    $file = dirname(__DIR__) . '/assets/' . ltrim($path, '/');
    $ver  = is_file($file) ? filemtime($file) : '1';
    return '/assets/' . ltrim($path, '/') . '?v=' . $ver;
}

require_once __DIR__ . '/icons.php';

/**
 * Current URL path, normalised with a trailing slash: "/", "/services/".
 * Used to mark the active nav link.
 */
function current_path(): string {
    $path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
    $path = preg_replace('#/index\.php$#', '/', $path);
    return rtrim($path, '/') . '/';
}

/**
 * Is this nav link the current page? Only real pages count —
 * homepage anchors like "/#faq" are never "active".
 */
function is_current( string $href ): bool {
    return strpos($href, '#') === false && $href === current_path();
}

/**
 * Primary navigation (nav.php).
 * Homepage sections use "/#id" so they also work from other pages.
 */
$nav_items = array(
    array(
        'label' => 'How It Works',
        'href'  => '/#how-it-works',
    ),
    array(
        'label' => 'Results',
        'href'  => '/#results',
    ),
    array(
        'label' => 'Why Us',
        'href'  => '/#why-us',
    ),
    array(
        'label' => 'FAQ',
        'href'  => '/#faq',
    ),
    array(
        'label' => 'Services',
        'href'  => '/services/',
    ),
);

/** Footer navigation (footer.php) — differs from the header in the design. */
$footer_nav_items = array(
    array(
        'label' => 'Home',
        'href'  => '/',
    ),
    array(
        'label' => 'Services',
        'href'  => '/services/',
    ),
    array(
        'label' => 'Results',
        'href'  => '/#results',
    ),
    array(
        'label' => 'FAQ',
        'href'  => '/#faq',
    ),
);

/** FAQ content (used by index.php and schema.php so they stay in sync). */
$faqs = array(
    array(
        'q' => 'Do you only work with dental practices?',
        'a' => 'Yes. Dental is our entire focus. That means our team understands practice management software, imaging systems, operatory workflows, HIPAA safeguards, and the urgency of keeping your schedule moving.',
    ),
    array(
        'q' => 'Can you support multiple locations?',
        'a' => 'Absolutely. We build one secure standard across every location, with centralized monitoring and a single help desk your whole group can rely on.',
    ),
    array(
        'q' => 'What happens when we need help during the workday?',
        'a' => 'You reach a real person fast. Our average response time is under two minutes, and most issues are resolved remotely without interrupting patient care.',
    ),
    array(
        'q' => 'Can you work with our current software and equipment vendors?',
        'a' => 'Yes. We coordinate directly with vendors like Dentrix, Eaglesoft, Curve, Open Dental, and Carestream so your team doesn’t have to play middleman.',
    ),
    array(
        'q' => 'How does pricing work?',
        'a' => 'Simple, predictable monthly pricing based on your users, devices, and locations. Your free IT assessment includes a clear quote with no long-term guesswork.',
    ),
);
