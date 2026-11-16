<?php
/**
 * index.php — Chicagoland Dental IT home page
 */

require __DIR__ . '/partials/config.php';

$page_title       = 'Chicagoland Dental IT - Technology that keeps your practice smiling';
$page_description = 'Secure, responsive IT support built exclusively for dental practices. Free IT assessment, 24/7 monitoring, and a team that understands patient care.';
$body_class       = 'page-home';

require __DIR__ . '/partials/header.php';

$arrow = __DIR__ . '/partials/icon-arrow.php';
?>

<main id="main">

  <?php /*
       HERO
       */ ?>
  <section class="hero" aria-labelledby="hero-title">
    <div class="container hero__grid">
      <div class="hero__content">
        <p class="eyebrow">IT built exclusively for dental practices</p>
        <h1 class="hero__title" id="hero-title">
          Technology that keeps your practice <span class="text-accent underline-swoosh">smiling.</span>
        </h1>
        <p class="hero__lead">Secure, responsive IT support that understands your software, your team, and the pace of patient care.</p>

        <div class="hero__actions">
          <a class="btn btn--primary" href="#contact">Call for your free IT assessment <?php require $arrow; ?></a>
          <a class="btn btn--text" href="#team-video">
            <svg class="icon icon--play" aria-hidden="true" viewBox="0 0 24 24"><path d="M7 5v14l12-7z"/></svg>
            See how it works
          </a>
        </div>

        <div class="social-proof">
          <ul class="avatar-stack" aria-hidden="true">
            <li class="avatar avatar--blue">DR</li>
            <li class="avatar avatar--slate">KM</li>
            <li class="avatar avatar--navy">AL</li>
          </ul>
          <div>
            <span class="stars" aria-label="5 out of 5 stars">★★★★★</span>
            <p>Loved by dental teams</p>
          </div>
        </div>
      </div>

        <?php /*
        DASHBOARD
        */ ?>
      <div class="hero__visual" aria-hidden="true">
        <div class="dashboard">
          <p class="dashboard__title"><span class="dot dot--yellow"></span>Dashboard</p>
          <p class="dashboard__label">Practice health</p>
          <div class="dashboard__headline">
            <strong>Strong</strong>
            <span class="score-ring" style="--score:98">98</span>
          </div>
          <ul class="dashboard__rows">
            <li><span>Security</span><b class="is-good">Protected</b></li>
            <li><span>Backups</span><b class="is-good">Current</b></li>
            <li><span>Devices</span><b class="is-good">24 online</b></li>
          </ul>
          <div class="dashboard__bars">
            <i style="--h:35%"></i><i style="--h:55%"></i><i style="--h:45%"></i><i style="--h:70%"></i><i style="--h:60%"></i><i style="--h:85%"></i><i style="--h:100%" class="is-accent"></i>
          </div>
        </div>

        <div class="float-card float-card--status">
          <span class="float-card__icon"><svg class="icon" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></span>
          <div><small>Security status</small><strong>All systems protected</strong></div>
        </div>

        <div class="float-card float-card--response">
          <span class="float-card__icon float-card__icon--yellow"><svg class="icon" viewBox="0 0 24 24"><path d="M3 18v-6a9 9 0 0 1 18 0v6"/><path d="M21 19a2 2 0 0 1-2 2h-1v-6h3zM3 19a2 2 0 0 0 2 2h1v-6H3z"/></svg></span>
          <div><small>Average response time</small><strong>Under 2 minutes</strong></div>
        </div>
      </div>
    </div>

    <div class="container">
      <dl class="stats">
        <div class="stats__item"><dt>15+</dt><dd>Years serving dental</dd></div>
        <div class="stats__item"><dt>200+</dt><dd>Practices protected</dd></div>
        <div class="stats__item"><dt>99.9%</dt><dd>Client uptime</dd></div>
        <div class="stats__item"><dt>24/7</dt><dd>Systems monitoring</dd></div>
      </dl>
    </div>
  </section>

    <?php /*
       VSL
       */ ?>
  <section class="section team" id="why-us" aria-labelledby="team-title">
    <div class="container container--narrow text-center">
      <p class="eyebrow eyebrow--center">Meet your dental IT team</p>
      <h2 class="section-title" id="team-title">Less downtime. Less worry.<br><span class="text-accent">More time for patients.</span></h2>
      <p class="section-lead">See how dental-focused technology support can make every day in your practice feel easier.</p>
    </div>

    <div class="container container--media">
      <figure class="video-card" id="team-video">
        <button class="video-card__trigger" type="button" data-video-src="" aria-label="Play 2 minute overview video">
          <img src="<?php echo asset('img/team-placeholder.jpg') ?>" alt="The Cusp Dental IT support team in a dental office" width="1311" height="587" loading="lazy">
          <span class="video-card__play" aria-hidden="true">
            <svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
          </span>
          <span class="video-card__caption">
            <small>2 minute overview</small>
            What better dental IT feels like
          </span>
        </button>
      </figure>
      <p class="media-note">Suggested video placeholder: your team in a real practice, paired with a concise customer success story.</p>
    </div>
  </section>

    <?php /*
       TESTIMONIALS
       */ ?>
  <section class="section section--tint trust" aria-labelledby="trust-title">
    <div class="container">
      <h2 class="trust__title" id="trust-title">Trusted by practices using the tools you rely on</h2>
      <!-- Swap these for approved partner/vendor logos in /assets/img/vendors/ -->
      <ul class="vendor-list">
        <li>Dentrix</li>
        <li>Eaglesoft</li>
        <li>Curve</li>
        <li>Open Dental</li>
        <li>Carestream</li>
      </ul>

      <!-- Replace with real, approved client testimonials -->
      <div class="testimonials">
        <blockquote class="testimonial testimonial--featured">
          <span class="testimonial__mark" aria-hidden="true">“</span>
          <p>“Cusp doesn’t just fix computers. They understand how our practice operates, and they help us make smarter decisions before problems happen.”</p>
          <footer class="testimonial__author">
            <span class="avatar avatar--blue">JP</span>
            <div><cite>Dr. Jenna Patel</cite><small>Brightline Dental Group · 5 locations</small></div>
            <span class="stars" aria-label="5 out of 5 stars">★★★★★</span>
          </footer>
        </blockquote>

        <blockquote class="testimonial">
          <span class="stars" aria-label="5 out of 5 stars">★★★★★</span>
          <p>“The difference is night and day. Our team gets help fast, and I finally have confidence in our security.”</p>
          <footer class="testimonial__author">
            <span class="avatar avatar--yellow">MO</span>
            <div><cite>Dr. Marcus Owens</cite><small>Owens Family Dentistry</small></div>
          </footer>
        </blockquote>
      </div>
    </div>
  </section>

    <?php /*
       PROCESS
       */ ?>
  <section class="section process" id="how-it-works" aria-labelledby="process-title">
    <div class="container">
      <div class="section-head section-head--split">
        <div>
          <h2 class="eyebrow">How It Works</h2>
          <p class="section-title" id="process-title">From IT stress to<br><span class="text-accent">total confidence.</span></p>
        </div>
        <p class="section-lead">We make changing IT partners feel simple, transparent, and surprisingly&nbsp;painless.</p>
      </div>

      <?php
        $steps = array(
            array(
                'icon'  => 'clipboard',
                'title' => 'Assess your practice',
                'text'  => 'We map your network, software, security, and workflow—without disrupting patient care.',
            ),
            array(
                'icon'  => 'route',
                'title' => 'Build your IT roadmap',
                'text'  => 'You get a clear, prioritized plan shaped around your practice goals and compliance needs.',
            ),
            array(
                'icon'  => 'monitor',
                'title' => 'Move without the mess',
                'text'  => 'Our team handles the transition, communicates with vendors, and keeps downtime to a minimum.',
            ),
            array(
                'icon'  => 'headset',
                'title' => 'Stay ahead, every day',
                'text'  => 'Proactive monitoring and real human support keep your technology healthy as you grow.',
            ),
        );
        ?>
      <ol class="steps">
        <?php foreach ( $steps as $i => $step ) : ?>
          <li class="step">
            <span class="step__num" aria-hidden="true"><?php echo sprintf('%02d', $i + 1) ?></span>
            <span class="step__icon step__icon--<?php echo e($step['icon']) ?>" aria-hidden="true"></span>
            <h3 class="step__title"><?php echo e($step['title']) ?></h3>
            <p><?php echo e($step['text']) ?></p>
          </li>
        <?php endforeach; ?>
      </ol>

      <div class="callout-bar">
        <p><span class="check" aria-hidden="true"></span> No long-term guesswork. Just a clear plan and a team you can count on.</p>
        <a class="btn btn--dark btn--sm" href="#contact">Start with a conversation <?php require $arrow; ?></a>
      </div>
    </div>
  </section>

    <?php /*
       RESULTS
       */ ?>
  <section class="section section--dark results" id="results" aria-labelledby="results-title">
    <div class="container">
      <h2 class="eyebrow eyebrow--light">RESULTS</h2>
      <p class="section-title" id="results-title">See what happens when your IT finally <span class="text-yellow">works.</span></p>

      <?php
        $cases = array(
            array(
                'tag'   => 'Multi-location group',
                'theme' => 'blue',
                'stat'  => '41%',
                'unit'  => 'fewer support tickets',
                'title' => 'One secure standard across seven growing practices',
                'text'  => 'We consolidated vendors, upgraded security, and gave every location one responsive help desk.',
                'href'  => '/results/multi-location-group',
            ),
            array(
                'tag'   => 'General dentistry',
                'theme' => 'yellow',
                'stat'  => '18 hrs',
                'unit'  => 'saved each month',
                'title' => 'A front desk that can focus on patients again',
                'text'  => 'Reliable workstations and fast remote support ended recurring interruptions during busy hours.',
                'href'  => '/results/general-dentistry',
            ),
            array(
                'tag'   => 'Specialty practice',
                'theme' => 'navy',
                'stat'  => '99.9%',
                'unit'  => 'systems uptime',
                'title' => 'Imaging, backups, and security working together',
                'text'  => 'A resilient infrastructure plan brought speed and confidence to a technology-heavy practice.',
                'href'  => '/results/specialty-practice',
            ),
        );
        ?>
      <div class="case-grid">
        <?php foreach ( $cases as $case ) : ?>
          <article class="case-card case-card--<?php echo e($case['theme']) ?>">
            <header class="case-card__tag"><?php echo e($case['tag']) ?> <?php include $arrow; ?></header>
            <div class="case-card__stat">
              <strong><?php echo e($case['stat']) ?></strong>
              <span><?php echo e($case['unit']) ?></span>
            </div>
            <div class="case-card__body">
              <h3><?php echo e($case['title']) ?></h3>
              <p><?php echo e($case['text']) ?></p>
              <a class="link-arrow" href="<?php echo e($case['href']) ?>">Read the story <?php include $arrow; ?></a>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

    <?php /*
       CONTACT
       */ ?>
  <section class="section contact" id="contact" aria-labelledby="contact-title">
    <div class="container contact__grid">
      <div class="contact__intro">
        <h2 class="eyebrow" id="contact">CONTACT </h2>
        <p class="section-title section-title--lg">Your practice deserves IT that <span class="text-accent">just works.</span></p>

        <p>
          <a class="phone-cta" href="tel:<?php echo e(SITE_PHONE_E164) ?>">
          <span class="phone-cta__icon" aria-hidden="true">
            <svg class="icon" viewBox="0 0 24 24"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.4 1.8.7 2.7a2 2 0 0 1-.5 2.1L8 9.8a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.8.6 2.7.7a2 2 0 0 1 1.7 2z"/></svg>
          </span>
          <span><small>Call now to get started </small><strong><?php echo e(SITE_PHONE) ?></strong></span>
        </a>
        </p>

        <ul class="checklist">
          <li>No-obligation discovery call</li>
          <li>Practical advice from dental IT experts</li>
          <li>Clear recommendations, not technical jargon</li>
        </ul>
      
      </div>

      <div class="faq" id="faq">
        <p class="eyebrow">Frequently asked</p>
        <div class="accordion" data-accordion>
          <?php foreach ( $faqs as $i => $faq ) : $open = $i === 0; ?>
            <div class="accordion__item<?php echo $open ? ' is-open' : '' ?>">
              <h3 class="accordion__heading">
                <button class="accordion__trigger" type="button"
                        id="faq-btn-<?php echo $i ?>"
                        aria-controls="faq-panel-<?php echo $i ?>"
                        aria-expanded="<?php echo $open ? 'true' : 'false' ?>">
                  <?php echo e($faq['q']) ?>
                  <span class="accordion__chevron" aria-hidden="true"></span>
                </button>
              </h3>
              <div class="accordion__panel" id="faq-panel-<?php echo $i ?>" role="region" aria-labelledby="faq-btn-<?php echo $i ?>"<?php echo $open ? '' : ' hidden' ?>>
                <p><?php echo e($faq['a']) ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require __DIR__ . '/partials/footer.php'; ?>
