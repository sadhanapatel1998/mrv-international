<?php
$title = 'Gallery | MRV International Pre-School & Day Care, New Mahavir Nagar, Delhi';
$description = 'Photo gallery of MRV International Pre-School & Day Care, New Mahavir Nagar, Delhi: classroom activities, play time, celebrations, events and moments from our little learners.';
$keywords = 'MRV International Pre-School Gallery, Preschool Photos New Mahavir Nagar, Play School Gallery Delhi, Day Care Centre Photos, Pre-School Activities Delhi, School Events Gallery';
$canonical = 'https://mrvinternational.in/gallery';
ob_start();
?>

<main id="main">

    <!-- ===== PAGE BANNER / BREADCRUMB ===== -->
    <section class="page-banner" aria-labelledby="pageTitle">
        <div class="container-xl pb-inner">
            <h1 class="pb-title" id="pageTitle">Our Gallery</h1>
            <p class="pb-text">Happy moments, fun activities and joyful celebrations from MRV International Pre-School &amp; Day Care.</p>

            <nav aria-label="Breadcrumb">
                <ol class="pb-crumb">
                    <li><a href="./"><i class="bi bi-house-heart-fill" aria-hidden="true"></i>Home</a></li>
                    <li aria-current="page">Gallery</li>
                </ol>
            </nav>
        </div>

        <!-- Decorative doodles -->
        <div class="pb-deco" aria-hidden="true">
            <span class="pb-sun">
                <svg viewBox="0 0 100 100">
                    <g class="pb-sun-rays" stroke="#fbc02d" stroke-width="6" stroke-linecap="round">
                        <path d="M50 4v12M50 84v12M4 50h12M84 50h12M17 17l9 9M74 74l9 9M17 83l9-9M74 26l9-9" />
                    </g>
                    <circle cx="50" cy="50" r="22" fill="#fbc02d" />
                    <circle cx="43" cy="47" r="2.5" fill="#1c1c1c" />
                    <circle cx="57" cy="47" r="2.5" fill="#1c1c1c" />
                    <path d="M42 56q8 7 16 0" fill="none" stroke="#1c1c1c" stroke-width="2.5" stroke-linecap="round" />
                </svg>
            </span>
            <span class="pb-cloud pb-cloud--1"><svg viewBox="0 0 120 64">
                    <path fill="#fff" d="M28 60h66a24 24 0 0 0 2-48A32 32 0 0 0 38 14 23 23 0 0 0 28 60z" />
                </svg></span>
            <span class="pb-cloud pb-cloud--2"><svg viewBox="0 0 120 64">
                    <path fill="#fff" d="M28 60h66a24 24 0 0 0 2-48A32 32 0 0 0 38 14 23 23 0 0 0 28 60z" />
                </svg></span>
            <span class="pb-star pb-star--1"><svg viewBox="0 0 24 24">
                    <path d="M12 2l2.9 6.6 7.1.6-5.4 4.7 1.7 7-6.3-3.8-6.3 3.8 1.7-7L2 9.2l7.1-.6z" />
                </svg></span>
            <span class="pb-star pb-star--2"><svg viewBox="0 0 24 24">
                    <path d="M12 2l2.9 6.6 7.1.6-5.4 4.7 1.7 7-6.3-3.8-6.3 3.8 1.7-7L2 9.2l7.1-.6z" />
                </svg></span>
            <span class="pb-star pb-star--3"><svg viewBox="0 0 24 24">
                    <path d="M12 2l2.9 6.6 7.1.6-5.4 4.7 1.7 7-6.3-3.8-6.3 3.8 1.7-7L2 9.2l7.1-.6z" />
                </svg></span>
            <span class="pb-balloon">
                <svg viewBox="0 0 40 80">
                    <path d="M20 52c-3 8 4 12 0 18s2 8 0 10" fill="none" stroke="#2b8fd8" stroke-width="1.5" />
                    <ellipse cx="20" cy="24" rx="17" ry="22" fill="#e3242b" />
                    <path d="M16 46h8l-4 6z" fill="#e3242b" />
                    <ellipse cx="13" cy="16" rx="4" ry="7" fill="#fff" opacity=".45" />
                </svg>
            </span>
            <span class="pb-balloon pb-balloon--blue">
                <svg viewBox="0 0 40 80">
                    <path d="M20 52c-3 8 4 12 0 18s2 8 0 10" fill="none" stroke="#e3242b" stroke-width="1.5" />
                    <ellipse cx="20" cy="24" rx="17" ry="22" fill="#2b8fd8" />
                    <path d="M16 46h8l-4 6z" fill="#2b8fd8" />
                    <ellipse cx="13" cy="16" rx="4" ry="7" fill="#fff" opacity=".45" />
                </svg>
            </span>
        </div>
    </section>
    <!-- ===== PAGE BANNER END ===== -->


    <!-- ===== GALLERY ===== -->
    <section class="gallery" id="gallery" aria-labelledby="galleryTitle">
        <div class="container-xl">

            <div class="sec-head">
                <p class="sec-sub">Little Moments, Big Smiles</p>
                <h2 id="galleryTitle">Moments at MRV International</h2>
                <p class="sec-intro">A peek into the happy days at MRV International Pre-School &amp; Day Care, from classroom fun to colourful celebrations.</p>
            </div>

            <div class="gal-filters" role="group" aria-label="Filter photos">
                <button type="button" class="gal-filter is-active" data-filter="all" aria-pressed="true"><i class="bi bi-grid"></i>All</button>
                <button type="button" class="gal-filter" data-filter="classroom" aria-pressed="false"><i class="bi bi-easel"></i>Classroom</button>
                <button type="button" class="gal-filter" data-filter="activities" aria-pressed="false"><i class="bi bi-brush"></i>Activities</button>
                <button type="button" class="gal-filter" data-filter="celebrations" aria-pressed="false"><i class="bi bi-balloon"></i>Celebrations</button>
                <button type="button" class="gal-filter" data-filter="daycare" aria-pressed="false"><i class="bi bi-house-heart"></i>Day Care</button>
            </div>

            <div class="gal-grid" id="galGrid">
                <button type="button" class="gal-item g-big gal--red" data-cat="classroom" data-src="assets/images/gallery/g1.webp" data-caption="Learning together in the classroom">
                    <img src="assets/images/gallery/g1.webp" alt="Children learning together in the classroom" width="800" height="800" loading="lazy" decoding="async">
                    <span class="gal-tag">Classroom</span>
                    <span class="gal-zoom"><i class="bi bi-arrows-fullscreen"></i></span>
                </button>
                <button type="button" class="gal-item gal--blue" data-cat="activities" data-src="assets/images/gallery/g2.webp" data-caption="Art &amp; craft time">
                    <img src="assets/images/gallery/g2.webp" alt="Children painting during art and craft time" width="600" height="600" loading="lazy" decoding="async">
                    <span class="gal-tag">Activities</span>
                    <span class="gal-zoom"><i class="bi bi-arrows-fullscreen"></i></span>
                </button>
                <button type="button" class="gal-item g-tall gal--yellow" data-cat="celebrations" data-src="assets/images/gallery/g3.webp" data-caption="Festival celebration at school">
                    <img src="assets/images/gallery/g3.webp" alt="Children dressed up for a festival celebration" width="600" height="900" loading="lazy" decoding="async">
                    <span class="gal-tag">Celebrations</span>
                    <span class="gal-zoom"><i class="bi bi-arrows-fullscreen"></i></span>
                </button>
                <button type="button" class="gal-item gal--red" data-cat="daycare" data-src="assets/images/gallery/g4.webp" data-caption="Play time at day care">
                    <img src="assets/images/gallery/g4.webp" alt="Children playing with toys at day care" width="600" height="600" loading="lazy" decoding="async">
                    <span class="gal-tag">Day Care</span>
                    <span class="gal-zoom"><i class="bi bi-arrows-fullscreen"></i></span>
                </button>
                <button type="button" class="gal-item g-wide gal--blue" data-cat="activities" data-src="assets/images/gallery/g5.webp" data-caption="Music &amp; movement session">
                    <img src="assets/images/gallery/g5.webp" alt="Children dancing during a music and movement session" width="900" height="600" loading="lazy" decoding="async">
                    <span class="gal-tag">Activities</span>
                    <span class="gal-zoom"><i class="bi bi-arrows-fullscreen"></i></span>
                </button>
                <button type="button" class="gal-item gal--yellow" data-cat="classroom" data-src="assets/images/gallery/g6.webp" data-caption="Story time with our teacher">
                    <img src="assets/images/gallery/g6.webp" alt="Teacher reading a story to children" width="600" height="600" loading="lazy" decoding="async">
                    <span class="gal-tag">Classroom</span>
                    <span class="gal-zoom"><i class="bi bi-arrows-fullscreen"></i></span>
                </button>
                <button type="button" class="gal-item g-wide gal--red" data-cat="celebrations" data-src="assets/images/gallery/g7.webp" data-caption="Annual day fun">
                    <img src="assets/images/gallery/g7.webp" alt="Children performing on stage at the annual day" width="900" height="600" loading="lazy" decoding="async">
                    <span class="gal-tag">Celebrations</span>
                    <span class="gal-zoom"><i class="bi bi-arrows-fullscreen"></i></span>
                </button>
                <button type="button" class="gal-item gal--blue" data-cat="daycare" data-src="assets/images/gallery/g8.webp" data-caption="Healthy meal time">
                    <img src="assets/images/gallery/g8.webp" alt="Children having a meal together at day care" width="600" height="600" loading="lazy" decoding="async">
                    <span class="gal-tag">Day Care</span>
                    <span class="gal-zoom"><i class="bi bi-arrows-fullscreen"></i></span>
                </button>
            </div>

            <p class="gal-empty" id="galEmpty" hidden>More photos coming soon!</p>

            <div class="sec-cta gal-cta">
                <a href="contact-us" class="btn btn-sgs btn-lg">Enquire for Admission<i class="bi bi-arrow-right ms-2"></i></a>
                <a href="tel:+919250900572" class="btn btn-outline-sgs btn-lg"><i class="bi bi-telephone-fill me-2"></i>+91 9250900572</a>
            </div>

        </div>

        <!-- Lightbox -->
        <div class="gal-lightbox" id="galLightbox" role="dialog" aria-modal="true" aria-label="Photo viewer" hidden>
            <button type="button" class="gal-lb-btn gal-lb-close" aria-label="Close"><i class="bi bi-x-lg"></i></button>
            <button type="button" class="gal-lb-btn gal-lb-prev" aria-label="Previous photo"><i class="bi bi-chevron-left"></i></button>
            <figure class="gal-lb-figure">
                <img src="" alt="">
                <figcaption><span class="gal-lb-caption"></span><span class="gal-lb-count"></span></figcaption>
            </figure>
            <button type="button" class="gal-lb-btn gal-lb-next" aria-label="Next photo"><i class="bi bi-chevron-right"></i></button>
        </div>
    </section>
    <!-- ===== GALLERY END ===== -->

</main>


<?php
$content = ob_get_clean();
include_once  'layout.php';
?>