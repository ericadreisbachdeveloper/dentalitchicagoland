<?php global $slug, $pageurl, $metadescription, $bodyclass, $pagetitle, $ogimg, $ogimg_description, $ogimg_global;

if ( ! isset($metadescription) ) {
    $metadescription = '';
}
if ( ! isset($bodyclass) ) {
    $bodyclass = '';
}
if ( ! isset($pagetitle) ) {
    $pagetitle = '';
}
if ( ! isset($slug) ) {
    $slug = '';
}
if ( ! isset($ogimg) ) {
    $ogimg = $ogimg_global;
}
if ( ! isset($ogimg_description) ) {
    $ogimg_description = 'erica dreisbach - digital accessibility consultant - WordPress expert';
}
?>


<script nonce="<?php echo( htmlspecialchars($nonce) ); ?>" type="application/ld+json">
{
    "@context": "https://schema.org",
    "@graph": [
        {
            "@type": "WebSite",
            "@id": "<?php echo SITE; ?>/#website",
            "name": "Dental IT Chicagoland",
            "description": "Dentistry-specific IT and technology services in Chicago and near suburbs.",
            "inLanguage": "en-US",
            "url": "<?php echo SITE; ?>/"
        },
        {
            "@type": "ImageObject",
            "@id": "<?php echo SITE; ?>/#globalimage",
            "url": "<?php echo SITE; ?>/public/dentalitchicagoland.jpg",
            "width": 1048,
            "height": 548,
            "description": "Dentistry-specific technology"
        },
        {
            "@type": "ImageObject",
            "@id": "<?php echo SITE; ?>/#image",
            "url": "<?php echo SITE; ?>/public/erica-dreisbach-wordpress-expert.jpg",
            "width": 1048,
            "height": 548,
            "description": "erica dreisbach - digital accessibility consultant - WordPress expert"
        },
        {
            "@type": "Person",
            "@id": "<?php echo SITE; ?>/#ericadreisbach",
            "name": "erica dreisbach",
            "jobTitle": "Digital accessibility consultant and WordPress expert",
            "sameAs": "https://www.linkedin.com/in/ericadreisbach/",
            "gender": "https://schema.org/Female",
            "url": "<?php echo SITE; ?>/",
            "image": { "@id": "<?php echo SITE; ?>/#image" },
            "worksFor": { "@id": "<?php echo SITE; ?>/#webdeveloper" },
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Chicago",
                "addressRegion": "Illinois",
                "addressCountry": "US"
            }
        },
        {
            "@type": "ProfessionalService",
            "@id": "<?php echo SITE; ?>/#webdeveloper",
            "name": "Dark Black LLC",
            "legalName": "Dark Black LLC",
            "description": "Erica Dreisbach and Dark Black LLC design and develop ultra-fast, accessible, secure, WordPress websites.",
            "founder": { "@id": "<?php echo SITE; ?>/#ericadreisbach" },
            "image": { "@id": "<?php echo SITE; ?>/#globalimage" },
            "logo": {
                "@type": "ImageObject",
                "@id": "<?php echo SITE; ?>/#logo",
                "url": "<?php echo SITE; ?>/public/erica-dreisbach-dark-black-llc-logo.png",
                "width": 256,
                "height": 256,
                "description": "Logo for Chicago web developer erica dreisbach and Dark Black LLC."
            },
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Chicago",
                "addressRegion": "Illinois",
                "addressCountry": "US"
            },
            "telephone": "+13127253628",
            "priceRange": "$3,000 - $10,000 per website",
            "url": "<?php echo SITE; ?>/",
            "potentialAction": {
                "@type": "CommunicateAction",
                "target": "<?php echo SITE; ?>/#contact"
            }
        },
        {
            "@type": "BreadcrumbList",
            "@id": "<?php echo SITE; ?><?php if ( $slug !== '' ) { echo '/' . $slug; } ?>/#breadcrumb",
            "itemListElement": [
                {
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Home",
                    "item": "<?php echo SITE; ?>/"
                }
<?php if ( '' !== $slug ) : ?>
                ,{
                    "@type": "ListItem",
                    "position": 2,
                    "name": "<?php echo $pagetitle; ?>",
                    "item": "<?php echo SITE . '/' . $slug . '/'; ?>"
                }
<?php endif; ?>                
            ]
        }<?php if ( 'illinois-title-ii-accessibility-gaps' === $slug ) : ?>,
        {
            "@type": "NewsArticle",
            "@id": "<?php echo SITE; ?>/illinois-title-ii-accessibility-gaps/",
            "headline": "Independent Audit Finds Persistent Accessibility Gaps Across Illinois Municipal Websites Ahead of 2027 Federal Deadline",
            "description": "<?php echo $metadescription; ?>",
            "datePublished": "2026-10-23T09:00:00-05:00",
            "dateModified": "2026-10-23T10:30:00-05:00",
            "author": {
                "@id": "<?php echo SITE; ?>/#webdeveloper"
            },
            "publisher": {
               "@id": "<?php echo SITE; ?>/#webdeveloper"
            },
            "image": {
                "@type": "ImageObject",
                "url": "<?php echo SITE; ?>/public/261023-illinois-accessibility-gaps-1200x1080.jpg",
                "width": 1200,
                "height": 1080
            }
        }
<?php endif; ?>
<?php if ( 'faq' === $slug ) : ?>,
        {
            "@type": "FAQPage",
            "@id": "<?php echo SITE; ?>/faq/#webpage",
            "url": "<?php echo SITE; ?>/faq/",
            "name": "Frequently Asked Questions",
            "description": "Answers to frequently asked questions about working with Chicago web developer erica dreisbach, including typical cost and timeline.",
            "inLanguage": "en-US",
            "isPartOf": { "@id": "<?php echo SITE; ?>/#website" },
            "about": { "@id": "<?php echo SITE; ?>/#webdeveloper" },
            "creator": { "@id": "<?php echo SITE; ?>/#ericadreisbach" },
            "breadcrumb": { "@id": "<?php echo SITE; ?><?php if ( $slug !== '' ) { echo '/' . $slug; } ?>/#breadcrumb" },
            "primaryImageOfPage": { "@id": "<?php echo SITE; ?>/#image" },
            "mainEntity": [
                {
                    "@type": "Question",
                    "name": "How do you get Google Lighthouse 100 scores on WordPress? That's crazy.",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "View the Lighthouse report for PREMEDIA: https://pagespeed.web.dev/analysis/https-premediatrial-com/kxa96h4isj?form_factor=desktop. To achieve perfect scores, many techniques are applied at once: <ul><li>Using a minimal plugin stack to keep stylesheet and script footprint small</li><li>Ditching popular but bloated pagebuilders in favor of native Gutenberg blocks</li><li>Limiting third-party tech to analytics and form security</li><li>Generating disciplined image libraries using best-in-class compression</li><li>Leveraging webhost caching layers so speed starts at the point of deployment rather than cobbled on within WordPress</li><li>Selecting design with responsive layout shifts in mind</li></ul>"
                    }
                },
                {
                    "@type": "Question",
                    "name": "How does a perfect Lighthouse score translate into search performance?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "No one knows exactly. However I can vouch for my own website appearing at the top of search results for \"who is the best freelance web developer in Chicago?\""
                    }
                },
                {
                    "@type": "Question",
                    "name": "How long will it take to build my website? How much will it cost?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "It varies a lot, but most of the sites I build take 8-12 weeks from kickoff to launch and cost more than $3,000. All of the sites featured on <a href='https://ericadreisbach.com/#work'>my portfolio</a> fit that description.</p><p>Occasionally I'm available for smaller projects, but that's rare. If budget is a major constraint, know that many sites are best served with a high-quality low-cost SquareSpace template. And on that note, here is some <a href='https://ericadreisbach.com/free-advice/'>free advice</a>."
                    }
                },
                {
                    "@type": "Question",
                    "name": "What's your process?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "I schedule at least one initial meeting with clients to talk in-depth about the site: technical needs, design aesthetic, content generation or migration, budget constraints &c. From these conversations I create a milestone and delivery schedule, as well as an estimate that then becomes a soft cap on hours — with the understanding that if I run into challenges or if the spec changes along the way we'll adjust as needed. Nearly all of my projects come in on time and under budget. I work hard to keep it that way!"
                    }
                },
                {
                    "@type": "Question",
                    "name": "Do you do visual and user interface design?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Yes! Examples of my designs include: <ul><li><a href='https://ericadreisbach.com/'>ericadreisbach.com</a></li><li><a href='https://ericadreisbach.com/adacheng/'>Renegade Ada Cheng</a></li><li><a href='https://ericadreisbach.com/nousot/'>Nousot</a></li><li><a href='https://ericadreisbach.com/worsham/'>Worsham College</a></li><li><a href='https://ericadreisbach.com/howl2go/'>Howl2GO</a></li><li><a href='https://ericadreisbach.com/gem/'>Government Energy Management</a></li><li><a href='https://readinginmotion.org/'>Reading in Motion</a></li></ul>I'm fluent in the full Adobe Creative Suite and am just as versatile making adjustments to a PSD or Figma build as I am updating code. That said, I work with existing graphic and UI design for the majority of my projects."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Do you customize existing themes?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Absolutely! <a href='https://ericadreisbach.com/#contact'>Let's talk!</a>"
                    }
                },
                {
                    "@type": "Question",
                    "name": "Who are your clients?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "I've produced work for large companies, tech startups, nonprofits, small businesses, bloggers, and more. I have specific domain expertise in health care, education, and manufacturing."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Are you available to maintain sites long-term or work on retainer?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Absolutely! <a href='https://ericadreisbach.com/#contact'>Let's talk!</a>"
                    }
                },
                {
                    "@type": "Question",
                    "name": "What are your specialties?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Accessibility and remediation. WordPress. Web security. Performant refactors. Turning Google Analytics data into actionable insights. <a href='https://ericadreisbach.com/#skills'>More on my expertise</a>."
                    }
                },
                {
                    "@type": "Question",
                    "name": "What's your background?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "I grew up in northeastern Vermont (the Northeast Kingdom). After college I had a five-year mini-career in marketing for nonprofits. Eventually I was more focused on hacking around on the organization website and coding the monthly enewsletter than on messaging and branding and other important marketing things.</p><p>Since 2009 I've been a full time programmer-designer-developer, with a short stint in 2010 writing SEO blogs. In January 2016 I incorporated as <a href='https://darkblackllc.com/'>Dark Black LLC</a>."
                    }
                },
                {
                    "@type": "Question",
                    "name": "What's the best way to get in touch?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "I love email. You may have once heard an oracle tell of true-hearted web developers that maintain an empty inbox. I am one such of whom the oracle spake.</p><p>You can expect an email reply within an hour during Central business hours and usually within 20 minutes, but you will probably never reach me on the phone without making an appointment first. I am not available to clients on Slack or other real-time messaging platforms.My favorite attachments from clients are PDFs and screenshots (jpg or png). My least favorites are Microsoft Word® docx or PowerPoint® pptx."
                    }
                }
            ]
        }
<?php endif; ?>
    ]
}
</script>
