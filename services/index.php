<?php
/**
 * services/index.php — Services page  →  /services/
 */

// Load config first so SITE_NAME / SITE_URL are available for the page variables.
// (header.php uses require_once, so config isn't loaded twice.)
require_once dirname(__DIR__) . '/partials/config.php';

$page_title       = 'Dental IT Services | ' . SITE_NAME;
$page_description = 'Managed IT and cybersecurity, imaging, CAD/CAM and 3D printing, AI readiness, patient experience technology and multi-location infrastructure for dental practices.';
$page_canonical   = SITE_URL . '/services/';
$body_class       = 'page-services';

require dirname(__DIR__) . '/partials/header.php';

/** Service rows. Order = display order; rows alternate image left / right. */
$services = array(
    array(
        'id'    => 'managed-it',
        'icon'  => 'shield',
        'title' => 'Managed IT & cybersecurity',
        'text'  => 'A dependable technology foundation for the entire practice—monitored, protected, and supported by a team that understands dental workflows.',
        'items' => array( 'Proactive device monitoring', 'HIPAA-minded safeguards', 'Secure backups and recovery' ),
        'img'   => 'services/managed-it.jpg',
        'alt'   => 'IT technicians working at computers in a bright office',
    ),
    array(
        'id'    => 'imaging',
        'icon'  => 'scan',
        'title' => 'Imaging systems & diagnostics',
        'text'  => 'Keep high-resolution imaging moving quickly and securely, from intraoral cameras and sensors to CBCT workstations and image archives.',
        'items' => array( 'Imaging software support', 'Fast, secure storage', 'Workstation performance' ),
        'img'   => 'services/imaging.jpg',
        'alt'   => 'Close-up of a dental examination with a mirror and probe',
    ),
    array(
        'id'    => 'cad-cam',
        'icon'  => 'layers',
        'title' => 'CAD/CAM & 3D printing',
        'text'  => 'Connect scanners, mills, and printers to a stable network so same-day restorations and in-house fabrication do not stall between steps.',
        'items' => array( 'Scanner and mill connectivity', 'Design workstation setup', '3D print workflow support' ),
        'img'   => 'services/cad-cam.jpg',
        'alt'   => 'A row of 3D printers producing parts',
    ),
    array(
        'id'    => 'ai',
        'icon'  => 'bot',
        'title' => 'AI & automation readiness',
        'text'  => 'Prepare your practice to evaluate and adopt tools for image analysis, treatment planning, documentation, and repetitive administrative work.',
        'items' => array( 'Vendor and security review', 'Workflow integration', 'Responsible adoption planning' ),
        'img'   => 'services/ai.jpg',
        'alt'   => 'Abstract illustration of the letters AI surrounded by connected lines',
    ),
    array(
        'id'    => 'patient-experience',
        'icon'  => 'heart',
        'title' => 'Patient experience technology',
        'text'  => 'Reduce friction before, during, and after each visit with reliable communication, digital forms, entertainment, and comfort-focused systems.',
        'items' => array( 'Digital intake workflows', 'Operatory audio and displays', 'Patient communication systems' ),
        'img'   => 'services/patient-experience.jpg',
        'alt'   => 'A smiling patient fitting a clear aligner',
    ),
    array(
        'id'    => 'multi-location',
        'icon'  => 'network',
        'title' => 'Multi-location infrastructure',
        'text'  => 'Give every office the same secure, responsive experience while leadership gets consistent standards and one point of accountability.',
        'items' => array( 'Secure site connectivity', 'Standardized technology stack', 'Centralized vendor management' ),
        'img'   => 'services/multi-location.jpg',
        'alt'   => 'Network server racks with neatly routed cables',
    ),
);

/** "Ready for what's next" capability cards. */
$capabilities = array(
    array(
        'icon'  => 'monitor',
        'title' => 'Clinical systems',
        'text'  => 'Practice management, imaging, intraoral cameras, CBCT, sensors, and digital charting',
    ),
    array(
        'icon'  => 'cube',
        'title' => 'Digital production',
        'text'  => 'Intraoral scanners, CAD/CAM workstations, milling units, and 3D printing workflows',
    ),
    array(
        'icon'  => 'cloud',
        'title' => 'Cloud & automation',
        'text'  => 'Cloud platforms, digital forms, patient communication, AI tools, and secure integrations',
    ),
    array(
        'icon'  => 'lock',
        'title' => 'Security & continuity',
        'text'  => 'Identity protection, endpoint security, encrypted backups, recovery, and access controls',
    ),
);
?>

<main id="main">

  <!-- =========================================================
       PAGE HERO
       ========================================================= -->
  <section class="page-hero" aria-labelledby="page-title">
    <div class="container page-hero__grid">
      <div class="page-hero__content">
        <p class="eyebrow">Dental technology, thoughtfully managed</p>
        <h1 class="page-hero__title" id="page-title">
          Build the practice your team <span class="text-accent">wishes existed.</span>
        </h1>
        <p class="page-hero__lead">From today's essential systems to tomorrow's clinical innovations, we make the technology behind better patient care secure, connected, and dependable.</p>
        <a class="btn btn--primary" href="#explore">Explore services <?php echo icon('arrow', 'icon icon--arrow') ?></a>
      </div>

      <figure class="photo-frame page-hero__media">
        <img src="<?php echo asset('img/services/hero.jpg') ?>" alt="An IT specialist reviewing a network dashboard in a dental office" width="599" height="591">
      </figure>
    </div>
  </section>

  <!-- =========================================================
       STATEMENT BAND
       ========================================================= -->
  <section class="statement-band" aria-label="Our approach">
    <div class="container statement-band__grid">
      <p class="statement-band__kicker">Technology should remove friction—not create more of it.</p>
      <p class="statement-band__text">Dentistry keeps moving toward clearer imaging, more precise digital production, smarter automation, and a calmer patient experience. We build the reliable IT environment that lets your practice adopt those advances with confidence.</p>
    </div>
  </section>

  <!-- =========================================================
       SERVICES INTRO
       ========================================================= -->
  <section class="services-intro" id="explore" aria-labelledby="services-title">
    <div class="container section-head section-head--split">
      <div>
        <p class="eyebrow">What we manage</p>
        <h2 class="section-title" id="services-title">One partner for your <span class="text-accent">entire technology ecosystem.</span></h2>
      </div>
      <p class="section-lead">Every service is designed around one outcome: technology that stays out of your team's way and supports better care.</p>
    </div>
  </section>

  <!-- =========================================================
       SERVICE ROWS (alternating)
       ========================================================= -->
  <?php foreach ( $services as $i => $service ) :
        $num     = sprintf('%02d', $i + 1);
        $reverse = $i % 2 === 1;  // even rows: image on the right
        ?>
    <section class="service-row<?php echo $reverse ? ' service-row--reverse' : '' ?>" id="<?php echo e($service['id']) ?>" aria-labelledby="<?php echo e($service['id']) ?>-title">
      <div class="container service-row__grid">
        <div class="service-row__content">
          <p class="eyebrow eyebrow--numbered"><span class="num-badge"><?php echo $num ?></span> What we manage</p>
          <h2 class="service-row__title" id="<?php echo e($service['id']) ?>-title"><?php echo e($service['title']) ?></h2>
          <p class="service-row__text"><?php echo e($service['text']) ?></p>
          <ul class="checklist checklist--divided">
            <?php foreach ( $service['items'] as $item ) : ?>
              <li><?php echo e($item) ?></li>
            <?php endforeach; ?>
          </ul>
        </div>

        <figure class="service-row__media">
          <img src="<?php echo asset('img/' . $service['img']) ?>" alt="<?php echo e($service['alt']) ?>" loading="lazy">
          <span class="icon-badge" aria-hidden="true"><?php echo icon($service['icon']) ?></span>
        </figure>
      </div>
    </section>
  <?php endforeach; ?>

  <!-- =========================================================
       READY FOR WHAT'S NEXT
       ========================================================= -->
  <section class="section section--dark innovation" aria-labelledby="innovation-title">
    <div class="container innovation__grid">
      <div class="innovation__intro">
        <p class="eyebrow eyebrow--light">Ready for what's next</p>
        <h2 class="section-title section-title--lg" id="innovation-title">Innovation only works when the <span class="text-yellow">infrastructure works.</span></h2>
        <p>A promising scanner, printer, AI platform, or patient tool still depends on fast devices, secure data, stable connectivity, and knowledgeable support. We make those fundamentals dependable.</p>
        <a class="btn btn--primary btn--sm" href="/#contact">Call us to talk through your goals <?php echo icon('arrow', 'icon icon--arrow') ?></a>
      </div>

      <ul class="capability-list">
        <?php foreach ( $capabilities as $cap ) : ?>
          <li class="capability-card">
            <span class="capability-card__icon"><?php echo icon($cap['icon']) ?></span>
            <div>
              <h3 class="capability-card__title"><?php echo e($cap['title']) ?></h3>
              <p><?php echo e($cap['text']) ?></p>
            </div>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>

  <!-- =========================================================
       CTA BAND
       ========================================================= -->
  <section class="cta-band" id="contact" aria-labelledby="cta-title">
    <div class="container cta-band__grid">
      <div>
        <p class="eyebrow eyebrow--light">Start with a conversation</p>
        <h2 class="cta-band__title" id="cta-title">What could your practice do with technology that simply works?</h2>
      </div>
      <div class="cta-band__action">
        <p>Let's map the systems you rely on today and the innovations you want to explore tomorrow.</p>
        <a class="btn btn--primary" href="tel:<?php echo e(SITE_PHONE_E164) ?>"><?php echo icon('phone') ?> Call <?php echo e(SITE_PHONE) ?></a>
      </div>
    </div>
  </section>

</main>

<?php require dirname(__DIR__) . '/partials/footer.php'; ?>
