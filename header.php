<?php if ( $_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME']) ) {
    header('HTTP/1.0 403 Forbidden', true, 403);
    die(header('location: /error/'));
}
$nonce = base64_encode(random_bytes(16));
global $nonce;

/* "style-src 'self' 'unsafe-inline' 'nonce-$nonce' https://hcaptcha.com https://*.hcaptcha.com https://www.ssa.gov/accessibility/andi/andi.css",  ... ssa.gov is to allow the ANDI tool */
// ── Content Security Policy ───────────────────────────────────────
header('Content-Security-Policy: ' . implode('; ', array(
    "default-src 'self'",
    "style-src 'self' 'unsafe-inline' https://www.ssa.gov https://ssa.gov",
    "script-src 'self' 'nonce-$nonce' 'sha256-1jAmyYXcRq6zFldLe/GCgIDJBiOONdXjTLgEFMDnDSM=' https://news.google.com https://www.googletagmanager.com https://*.google-analytics.com https://www.google-analytics.com https://hcaptcha.com https://www.ssa.gov https://ssa.gov https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js https://cdn.jsdelivr.net/",
    "connect-src 'self' https://www.google-analytics.com https://analytics.google.com https://stats.g.doubleclick.net https://cdn.jsdelivr.net/ https://news.google.com",
    "media-src 'self' https://darkblackllc.us-ord-10.linodeobjects.com",
    "img-src 'self' data: https://darkblackllc.us-ord-10.linodeobjects.com https://www.google-analytics.com https://www.ssa.gov https://ssa.gov https://www.gstatic.com",
    'frame-src https://news.google.com',
    "font-src 'self'",
    "frame-ancestors 'none'",
    "base-uri 'self'",
    "form-action 'self'",
    "worker-src 'self' blob:;",
)));

// ── HSTS ─────────────────────────────────────────────────────────
// Tells browsers to always use HTTPS for this domain for 1 year.
// Only set this if you are certain HTTPS will always be available —
// it cannot be easily undone once cached by browsers.
header('Strict-Transport-Security: max-age=31536000; includeSubDomains; preload');

// ── ai-catalog.json ─────────────────────────────────────────
header('Link: <https://ericadreisbach.com/.well-known/ai-catalog.json>; rel="ai-catalog"');

// ── Prevent MIME sniffing ─────────────────────────────────────────
header('X-Content-Type-Options: nosniff');

// ── Referrer Policy ───────────────────────────────────────────────
header('Referrer-Policy: strict-origin-when-cross-origin');

// ── Permissions Policy ────────────────────────────────────────────
header('Permissions-Policy: ' . implode(', ', array(
    'accelerometer=()',
    'autoplay=(*)',
    'browsing-topics=()',
    'camera=()',
    'clipboard-read=()',
    'clipboard-write=()',
    'geolocation=()',
    'gyroscope=()',
    'hid=()',
    'interest-cohort=()',
    'magnetometer=()',
    'microphone=()',
    'payment=()',
    'publickey-credentials-get=()',
    'screen-wake-lock=()',
    'serial=()',
    'sync-xhr=()',
    'usb=()',
)));
?><?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';
require_once FILEPATH . 'asset-helper.php';
?>

<?php /* global priority styles - inline  */ ?>
<style nonce="<?php echo( htmlspecialchars($nonce) ); ?>">
<?php echo( file_get_contents(FILEPATH . 'css-priority.css') ); ?> </style>
</style>

<style nonce="<?php echo( htmlspecialchars($nonce) ); ?>"><?php echo( file_get_contents(FILEPATH . 'css-home.css') ); ?> </style>

<?php /* all the rest of the styles - browsers ignore nonce in <link> elements */ ?>
<link href="<?php asset( 'css-style.css' ); ?>" rel="stylesheet" fetchpriority="low">
