<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';

if ( $_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME']) ) {
    header('HTTP/1.0 403 Forbidden', true, 403);
    die(header('location: /error/'));
}
$nonce = base64_encode(random_bytes(16));
global $nonce;

require_once $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';
require_once FILEPATH . 'asset-helper.php';

/* "style-src 'self' 'unsafe-inline' 'nonce-$nonce' https://hcaptcha.com https://*.hcaptcha.com https://www.ssa.gov/accessibility/andi/andi.css",  ... ssa.gov is to allow the ANDI tool */
// ── Content Security Policy ───────────────────────────────────────
header('Content-Security-Policy: ' . implode('; ', array(
    "default-src 'self'",
    "style-src 'self' 'unsafe-inline' https://www.ssa.gov https://ssa.gov",
    "script-src 'self' 'nonce-$nonce' 'sha256-1jAmyYXcRq6zFldLe/GCgIDJBiOONdXjTLgEFMDnDSM=' https://news.google.com https://www.googletagmanager.com https://*.google-analytics.com https://www.google-analytics.com https://hcaptcha.com https://www.ssa.gov https://ssa.gov https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js https://cdn.jsdelivr.net/",
    "connect-src 'self' https://www.google-analytics.com https://analytics.google.com https://stats.g.doubleclick.net https://cdn.jsdelivr.net/ https://news.google.com",
    "media-src 'self' https://localseo.us-ord-10.linodeobjects.com",
    "img-src 'self' data: https://localseo.us-ord-10.linodeobjects.com https://www.google-analytics.com https://www.ssa.gov https://ssa.gov https://www.gstatic.com",
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
header('Link: <' . SITE . '.well-known/ai-catalog.json>; rel="ai-catalog"');

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
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" class="no-js">
<head>

<link rel="ai-catalog" href="<?php echo SITE; ?>.well-known/ai-catalog.json">
<link rel="ard" href="<?php echo SITE; ?>.well-known/ard.json">

<?php /* define $slug */ ?>
<?php
global $slug;
$uri  = $_SERVER['REQUEST_URI'];
$slug = '';  if ( defined( 'LOCAL') ) {
    $slug = str_replace('/dentalitchicagoland/', '', $uri);
    $slug = str_replace('/', '', $slug);
} else {
    $slug = str_replace('/', '', $uri);
}
?>

<?php /* ref: https://developers.google.com/search/docs/crawling-indexing/consolidate-duplicate-urls#rel-canonical-link-method */ ?>



<?php /* Homepage markdown mirror */ ?>
<?php if ( isset($bodyclass) && $bodyclass === 'body-home' ) : ?>
<link rel="alternate" type="text/markdown" href="<?php echo( SITE . '/index.md' ); ?>">
<link rel="canonical" href="<?php echo( SITE ); ?>">
<?php endif; ?>

<?php if ( isset($slug) && $slug !== '' ) : ?>
<link rel="canonical" href="<?php echo( SITE . $slug ); ?>">
<?php endif; ?>

<?php /* global priority styles - inline  */ ?>
<style nonce="<?php echo( htmlspecialchars($nonce) ); ?>">
<?php echo( file_get_contents(FILEPATH . 'css-priority.css') ); ?> </style>


<style nonce="<?php echo( htmlspecialchars($nonce) ); ?>"><?php echo( file_get_contents(FILEPATH . 'css-home.css') ); ?> </style>

<?php /* all the rest of the styles - browsers ignore nonce in <link> elements */ ?>
<link href="<?php asset( 'css-style.css' ); ?>" rel="stylesheet" fetchpriority="low">


<?php
$ogimg_global             = SITE . '/public/dentalitchicagoland.jpg';
$ogimg_use                = '';
$ogimg_description_global = 'Dental IT and technology services in Chicagoland. Call today!';
$ogimg_description_use    = '';

if ( isset($ogimg) ) {
    $ogimg_use = $ogimg;
} else {
    $ogimg_use = $ogimg_global; }
if ( isset($ogimg_description) ) {
    $ogimg_description_use = $ogimg_description;
} else {
    $ogimg_description_use = $ogimg_description_global; }
?>


<?php /* meta */ ?>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">


<?php /* remove IE and Windows Phone highlight */ ?>
<meta name="msapplication-tap-highlight" content="no">

<meta property="og:locale" content="en_US">
<meta property="og:type"   content="website">
<meta property="og:title"  content="erica dreisbach">
<meta property="og:image"  content="<?php echo( $ogimg_use ); ?>">
<meta property="og:image:alt" content="<?php echo( $ogimg_description_use ); ?>">

<meta property="og:url" content="<?php echo SITE; ?>">
<meta property="og:site_name" content="erica dreisbach - WordPress expert - freelance developer">
<meta property="og:description" content="<?php if ( isset($metadescription) ) { echo $metadescription; } ?>">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php if ( isset($pagetitle) ) { echo $pagetitle . ' - '; } ?>erica dreisbach">
<meta name="twitter:description" content="<?php if ( isset( $metadescription) ) { echo $metadescription; } ?>">
<meta name="twitter:image" content="<?php echo( $ogimg_use ); ?>">


<?php require_once FILEPATH . 'schema.php'; ?>

<?php /* progressive web app */ ?>
<link rel="manifest" href="<?php echo( SITE ); ?>site.webmanifest">
    
<?php /* favicons */ ?>
<?php require_once FILEPATH . 'favicons.php';?>

</head>

<body>
