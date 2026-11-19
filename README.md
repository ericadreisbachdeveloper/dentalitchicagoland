# Dental IT Chicagoland — PHP site

## Structure

    public/                    ← web server document root (the only web-accessible folder)
      index.php                Home page        → /
      services/index.php       Services page    → /services/
      assets/
        css/                   Compiled CSS (main.css in dev, main.min.css in production)
        js/                    Compiled JS (esbuild output)
        img/                   Design images, icons, logo
        favicons/
      media/                   Content images served from this host (open to all)
      .htaccess                Folder listing off, dotfiles blocked, security headers

    partials/                  config.php, header.php, nav.php, footer.php, schema.php, icons.php …
    src/
      sass/                    Sass source  → public/assets/css/
      js/                      JS source    → public/assets/js/
    build/                     generate-manifest.js (your existing script)
    package.json
    .dev                       Dev marker (created by `npm run dev`, never deployed)

Pages load partials with paths relative to their own location:

    public/index.php            require dirname(__DIR__)    . '/partials/header.php';
    public/services/index.php   require dirname(__DIR__, 2) . '/partials/header.php';

Asset and filesystem paths live in partials/config.php (ROOT_PATH, PUBLIC_PATH, asset()).

## Local development (MAMP)

1. MAMP → Settings → Server → Document root: choose this project's **public** folder.
   (MAMP Pro: set it per host.)
2. `npm install`
3. `npm run dev` — creates `.dev`, watches Sass → main.css, watches JS.
   PHP loads main.css while `.dev` exists.
4. `npm run build` — deletes `.dev`, compiles main.min.css and production JS.

## Deploying

Upload **public/** as the document root and **partials/** beside it (one level up).
Do not upload: src/, node_modules/, build/, package*.json, README.md, .dev

If the host forces a folder called `public_html`, upload the contents of public/
into public_html/ and put partials/ one level above it. config.php detects
either name.

## To replace before launch
- SITE_URL / SITE_EMAIL in partials/config.php
- Placeholder photos in public/assets/img/ (cropped from the mockups)
- Testimonials and case-study stats with real, approved ones
- Video URL in data-video-src on the home page video button
