# Cusp Dental IT — PHP site

## Run locally
    php -S localhost:8000
Then open http://localhost:8000

## Structure
    index.php                 Home page (sections: hero, team video, trust, process, results, contact/FAQ)
    partials/
      config.php              Site constants, helpers (e(), asset()), nav items, FAQ data
      header.php              <head>, meta/OG, fonts, CSS; includes favicons, schema, nav
      nav.php                 Primary nav + mobile toggle
      favicons.php            Favicon / app icon links
      schema.php              JSON-LD (Organization, WebSite, FAQPage built from $faqs)
      footer.php              Footer, JS, closing tags
      icon-arrow.php          Reusable inline SVG arrow
    assets/
      css/main.css            Compiled (expanded)
      css/main.min.css        Compiled (compressed) — linked by header.php
      sass/                   7-1-style architecture (abstracts, base, layout, components, sections)
      js/main.js              Mobile nav, sticky header shadow, FAQ accordion, video embed
      img/                    Logo, step icons, team placeholder, OG image
      favicons/               ico, svg, png sizes, apple-touch, manifest

## Build CSS
    npm i -g sass
    sass assets/sass/main.scss assets/css/main.min.css --style=compressed --no-source-map
    sass --watch assets/sass/main.scss:assets/css/main.css

## To replace before launch
- SITE_URL / phone / email in partials/config.php
- assets/img/team-placeholder.jpg (cropped from the mockup) and og-image.jpg
- Testimonials and case-study stats in index.php with real, approved ones
- Vendor names in .vendor-list with approved logos if desired
- Add a video URL to data-video-src on the .video-card__trigger button
- Logo mark SVG is an approximation of the mockup's mark — swap in the real file
