<?php
/**
 * config.php
 * Site-wide constants and tiny helpers shared by every partial.
 */

define('SITE_NAME', 'Chicagoland Dental IT');


if ( $_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === 'dentalitchicagoland.local' ) {
    define('LOCAL', 'local');
    define('SITE_URL', 'https://dentalitchicagoland.local');
} else {
    define('SITE_URL', 'https://' . $_SERVER['HTTP_HOST']);
}



define('SITE_PHONE', '(888) 550-7111');
define('SITE_PHONE_E164', '+18885507111');
define('SITE_EMAIL', 'hello@cuspdentalit.com');

/** Escape output for HTML. */
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

/** Primary navigation items (used by nav.php and footer.php). */
$nav_items = array(
    array(
        'label' => 'How it works',
        'href'  => '#how-it-works',
    ),
    array(
        'label' => 'Results',
        'href'  => '#results',
    ),
    array(
        'label' => 'Why Us',
        'href'  => '#why-us',
    ),
    array(
        'label' => 'FAQ',
        'href'  => '#faq',
    ),
    array(
        'label' => 'Services',
        'href'  => '/services/',
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
