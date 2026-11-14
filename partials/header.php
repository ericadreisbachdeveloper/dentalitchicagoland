<?php
/**
 * header.php
 * Opens the document: <head>, meta, fonts, styles, favicons, schema,
 * then pulls in the site navigation.
 *
 * Optional variables a page can set BEFORE including this file:
 *   $page_title       string
 *   $page_description string
 *   $page_canonical   string (absolute URL)
 *   $body_class       string
 */


$page_title       = $page_title ?? SITE_NAME . ' - IT Support Built Exclusively for Dental Practices';
$page_description = $page_description ?? 'Secure, responsive IT support that understands your dental software, your team, and the pace of patient care.';
$page_canonical   = $page_canonical ?? SITE_URL . '/';
$body_class       = $body_class ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e($page_title) ?></title>
    <meta name="description" content="<?php echo e($page_description) ?>">
    <link rel="canonical" href="<?php echo e($page_canonical) ?>">

    <!-- Open Graph / social -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?php echo e(SITE_NAME) ?>">
    <meta property="og:title" content="<?php echo e($page_title) ?>">
    <meta property="og:description" content="<?php echo e($page_description) ?>">
    <meta property="og:url" content="<?php echo e($page_canonical) ?>">
    <meta property="og:image" content="<?php echo e(SITE_URL) ?>/assets/img/og-image.jpg">
    <meta name="twitter:card" content="summary_large_image">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Styles (compiled from /assets/sass/main.scss) -->
    <link rel="stylesheet" href="<?php echo asset('css/main.min.css') ?>">

    <?php require __DIR__ . '/favicons.php'; ?>
    <?php require __DIR__ . '/schema.php'; ?>

</head>

<body class="<?php echo e($body_class) ?>">

    <a class="skip-link" href="#main">Skip to content</a>

    <header class="site-header" id="top">
        <div class="container site-header__inner">
        <a class="logo" href="<?php echo e(SITE_URL) ?>/" aria-label="<?php echo e(SITE_NAME) ?> home">
            <img src="<?php echo asset('img/logo-mark.svg') ?>" alt="" width="28" height="32">
            <span class="logo__text">
            <strong>Chicagoland</strong>
            <span>Dental IT</span>
            </span>
        </a>

        <?php require __DIR__ . '/nav.php'; ?>
        </div>
    </header>
