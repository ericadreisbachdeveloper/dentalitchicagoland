<?php
/**
 * schema.php
 * JSON-LD structured data: Organization / ProfessionalService, WebSite, FAQPage.
 * FAQ entries come from $faqs in config.php so they always match the page.
 *
 * NOTE: Only include review/rating markup that reflects genuine, verifiable
 * reviews; it has been left out here on purpose.
 */

$schema = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        [
            '@type'       => ['Organization', 'ProfessionalService'],
            '@id'         => SITE_URL . '/#organization',
            'name'        => SITE_NAME,
            'url'         => SITE_URL . '/',
            'logo'        => SITE_URL . '/assets/img/logo-mark.svg',
            'image'       => SITE_URL . '/assets/img/og-image.jpg',
            'description' => 'Managed IT support, cybersecurity, backups and monitoring built exclusively for dental practices.',
            'telephone'   => SITE_PHONE_E164,
            'email'       => SITE_EMAIL,
            'areaServed'  => 'US',
            'knowsAbout'  => ['Dental IT support', 'HIPAA security', 'Dental imaging systems', 'Practice management software', 'Managed backups'],
            'contactPoint' => [
                '@type'             => 'ContactPoint',
                'telephone'         => SITE_PHONE_E164,
                'contactType'       => 'sales',
                'availableLanguage' => 'English',
            ],
            // 'sameAs' => ['https://www.linkedin.com/company/...'],
        ],
        [
            '@type'     => 'WebSite',
            '@id'       => SITE_URL . '/#website',
            'url'       => SITE_URL . '/',
            'name'      => SITE_NAME,
            'publisher' => ['@id' => SITE_URL . '/#organization'],
        ],
        [
            '@type'      => 'FAQPage',
            '@id'        => SITE_URL . '/#faq',
            'mainEntity' => array_map(static fn ($f) => [
                '@type'          => 'Question',
                'name'           => $f['q'],
                'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f['a']],
            ], $faqs),
        ],
    ],
];
?>
  <script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?></script>
