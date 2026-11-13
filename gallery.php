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
            <p class="pb-text">Happy moments, fun activities and joyful celebrations from MRV International Pre-School
                &amp; Day Care.</p>

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
                <p class="sec-intro">A peek into the happy days at MRV International Pre-School &amp; Day Care, from
                    classroom fun to colourful celebrations.</p>
            </div>

            <div class="gal-filters" role="group" aria-label="Filter photos">
                <button type="button" class="gal-filter is-active" data-filter="all" aria-pressed="true"><i
                        class="bi bi-grid"></i>All</button>
                <button type="button" class="gal-filter" data-filter="classroom" aria-pressed="false"><i
                        class="bi bi-easel"></i>Classroom</button>
                <button type="button" class="gal-filter" data-filter="activities" aria-pressed="false"><i
                        class="bi bi-brush"></i>Activities</button>
                <button type="button" class="gal-filter" data-filter="celebrations" aria-pressed="false"><i
                        class="bi bi-balloon"></i>Celebrations</button>
                <button type="button" class="gal-filter" data-filter="daycare" aria-pressed="false"><i
                        class="bi bi-house-heart"></i>Day Care</button>
            </div>

            <div class="gal-grid" id="galGrid">
                <!-- 01 -->
                <button type="button" class="gal-item g-big gal--red" data-cat="activities"
                    data-src="assets/images/gallery/g1.jpg" data-caption="Sensory &amp; fine motor building block play">
                    <img src="assets/images/gallery/g1.jpg"
                        alt="Child building colourful towers with interlocking blocks" width="800" height="800"
                        loading="lazy" decoding="async">
                    <span class="gal-tag">Activities</span>
                    <span class="gal-zoom"><i class="bi bi-arrows-fullscreen"></i></span>
                </button>
                <!-- 02 -->
                <button type="button" class="gal-item gal--blue" data-cat="activities"
                    data-src="assets/images/gallery/g2.jpg" data-caption="Collaborative group activity in class">
                    <img src="assets/images/gallery/g2.jpg" alt="Children working collaboratively on block structures"
                        width="600" height="600" loading="lazy" decoding="async">
                    <span class="gal-tag">Activities</span>
                    <span class="gal-zoom"><i class="bi bi-arrows-fullscreen"></i></span>
                </button>
                <!-- 03 -->
                <button type="button" class="gal-item g-tall gal--yellow" data-cat="activities"
                    data-src="assets/images/gallery/g3.jpg"
                    data-caption="Focus &amp; fine motor blindfold activity preparation">
                    <img src="assets/images/gallery/g3.jpg"
                        alt="Young student preparing for sensory activity in classroom" width="600" height="900"
                        loading="lazy" decoding="async">
                    <span class="gal-tag">Activities</span>
                    <span class="gal-zoom"><i class="bi bi-arrows-fullscreen"></i></span>
                </button>
                <!-- 04 -->
                <button type="button" class="gal-item gal--red" data-cat="activities"
                    data-src="assets/images/gallery/g4.jpg"
                    data-caption="Blindfold sensory motor coordination challenge">
                    <img src="assets/images/gallery/g4.jpg"
                        alt="Little girl engaged in blindfolded tactile learning activity" width="600" height="600"
                        loading="lazy" decoding="async">
                    <span class="gal-tag">Activities</span>
                    <span class="gal-zoom"><i class="bi bi-arrows-fullscreen"></i></span>
                </button>
                <!-- 05 -->
                <button type="button" class="gal-item g-wide gal--blue" data-cat="celebrations"
                    data-src="assets/images/gallery/g5.jpg" data-caption="Labour's Day dress-up celebration">
                    <img src="assets/images/gallery/g5.jpg" alt="Students roleplaying on Labour's Day celebration"
                        width="900" height="600" loading="lazy" decoding="async">
                    <span class="gal-tag">Celebrations</span>
                    <span class="gal-zoom"><i class="bi bi-arrows-fullscreen"></i></span>
                </button>
                <!-- 06 -->
                <button type="button" class="gal-item gal--yellow" data-cat="activities"
                    data-src="assets/images/gallery/g6.jpg" data-caption="Concentration &amp; blindfold tactile task">
                    <img src="assets/images/gallery/g6.jpg"
                        alt="Smiling student practising blindfold stick balancing task" width="600" height="600"
                        loading="lazy" decoding="async">
                    <span class="gal-tag">Activities</span>
                    <span class="gal-zoom"><i class="bi bi-arrows-fullscreen"></i></span>
                </button>
                <!-- 23 -->
                <button type="button" class="gal-item gal--blue" data-cat="classroom"
                    data-src="assets/images/gallery/g23.jpg" data-caption="Interactive Classroom Learning Activities">
                    <img src="assets/images/gallery/g23.jpg"
                        alt="Students participating in interactive classroom learning activities" width="900"
                        height="600" loading="lazy" decoding="async">
                    <span class="gal-tag">Classroom</span>
                    <span class="gal-zoom"><i class="bi bi-arrows-fullscreen"></i></span>
                </button>

                <!-- 24 -->
                <button type="button" class="gal-item gal--blue" data-cat="classroom"
                    data-src="assets/images/gallery/g24.jpg" data-caption="Interactive Classroom Learning Activities">
                    <img src="assets/images/gallery/g24.jpg"
                        alt="Students participating in interactive classroom learning activities" width="900"
                        height="600" loading="lazy" decoding="async">
                    <span class="gal-tag">Library</span>
                    <span class="gal-zoom"><i class="bi bi-arrows-fullscreen"></i></span>
                </button>

                <!-- 07 -->
                <button type="button" class="gal-item gal--red" data-cat="activities"
                    data-src="assets/images/gallery/g7.jpg" data-caption="Trace the Strokes handwriting readiness">
                    <img src="assets/images/gallery/g7.jpg"
                        alt="Young girl practising pre-writing strokes on textured card" width="600" height="600"
                        loading="lazy" decoding="async">
                    <span class="gal-tag">Activities</span>
                    <span class="gal-zoom"><i class="bi bi-arrows-fullscreen"></i></span>
                </button>
                <!-- 08 -->
                <button type="button" class="gal-item gal--blue" data-cat="activities"
                    data-src="assets/images/gallery/g8.jpg" data-caption="Tactile stroke tracing practice">
                    <img src="assets/images/gallery/g8.jpg" alt="Child focused on tracing lines on corrugated card"
                        width="600" height="600" loading="lazy" decoding="async">
                    <span class="gal-tag">Activities</span>
                    <span class="gal-zoom"><i class="bi bi-arrows-fullscreen"></i></span>
                </button>
                <!-- 09 -->
                <button type="button" class="gal-item g-wide gal--yellow" data-cat="celebrations"
                    data-src="assets/images/gallery/g9.jpg" data-caption="Joyful classroom birthday celebration">
                    <img src="assets/images/gallery/g9.jpg" alt="Children gathered happily around a birthday cake"
                        width="900" height="600" loading="lazy" decoding="async">
                    <span class="gal-tag">Celebrations</span>
                    <span class="gal-zoom"><i class="bi bi-arrows-fullscreen"></i></span>
                </button>
                <!-- 10 -->
                <button type="button" class="gal-item gal--red" data-cat="activities"
                    data-src="assets/images/gallery/g10.jpg" data-caption="Tearing &amp; pasting shape activity">
                    <img src="assets/images/gallery/g10.jpg" alt="Preschoolers proudly displaying paper pasting artwork"
                        width="600" height="600" loading="lazy" decoding="async">
                    <span class="gal-tag">Activities</span>
                    <span class="gal-zoom"><i class="bi bi-arrows-fullscreen"></i></span>
                </button>
                <!-- 11 -->
                <button type="button" class="gal-item gal--blue" data-cat="celebrations"
                    data-src="assets/images/gallery/g11.jpg" data-caption="Birthday cheers with friends">
                    <img src="assets/images/gallery/g11.jpg" alt="Happy boys clapping during classroom birthday event"
                        width="600" height="600" loading="lazy" decoding="async">
                    <span class="gal-tag">Celebrations</span>
                    <span class="gal-zoom"><i class="bi bi-arrows-fullscreen"></i></span>
                </button>
                <!-- 12 -->
                <button type="button" class="gal-item gal--yellow" data-cat="celebrations"
                    data-src="assets/images/gallery/g12.jpg" data-caption="Celebration smiles &amp; balloons">
                    <img src="assets/images/gallery/g12.jpg"
                        alt="Excited child smiling in front of colourful birthday backdrop" width="600" height="600"
                        loading="lazy" decoding="async">
                    <span class="gal-tag">Celebrations</span>
                    <span class="gal-zoom"><i class="bi bi-arrows-fullscreen"></i></span>
                </button>
                <!-- 13 -->
                <button type="button" class="gal-item gal--red" data-cat="celebrations"
                    data-src="assets/images/gallery/g13.jpg" data-caption="Sweet birthday celebration moment">
                    <img src="assets/images/gallery/g13.jpg"
                        alt="Smiling little girl in pink dress celebrating her birthday" width="600" height="600"
                        loading="lazy" decoding="async">
                    <span class="gal-tag">Celebrations</span>
                    <span class="gal-zoom"><i class="bi bi-arrows-fullscreen"></i></span>
                </button>
                <!-- 14 -->
                <button type="button" class="gal-item g-tall gal--blue" data-cat="celebrations"
                    data-src="assets/images/gallery/g14.jpg" data-caption="Dressed up for school celebration">
                    <img src="assets/images/gallery/g14.jpg" alt="Dapper young boy in vest suit at school event"
                        width="600" height="900" loading="lazy" decoding="async">
                    <span class="gal-tag">Celebrations</span>
                    <span class="gal-zoom"><i class="bi bi-arrows-fullscreen"></i></span>
                </button>
                <!-- 15 -->
                <button type="button" class="gal-item g-big gal--yellow" data-cat="celebrations"
                    data-src="assets/images/gallery/g15.jpg"
                    data-caption="Traditional Navratri festive dress celebration">
                    <img src="assets/images/gallery/g15.jpg"
                        alt="Children dressed in festive mythological attire for Navratri" width="800" height="800"
                        loading="lazy" decoding="async">
                    <span class="gal-tag">Celebrations</span>
                    <span class="gal-zoom"><i class="bi bi-arrows-fullscreen"></i></span>
                </button>
                <!-- 16 -->
                <button type="button" class="gal-item gal--red" data-cat="celebrations"
                    data-src="assets/images/gallery/g16.jpg" data-caption="Dandiya fest colours &amp; dance">
                    <img src="assets/images/gallery/g16.jpg"
                        alt="Preschoolers in colourful chaniya choli with dandiya sticks" width="600" height="600"
                        loading="lazy" decoding="async">
                    <span class="gal-tag">Celebrations</span>
                    <span class="gal-zoom"><i class="bi bi-arrows-fullscreen"></i></span>
                </button>
                <!-- 17 -->
                <button type="button" class="gal-item gal--blue" data-cat="celebrations"
                    data-src="assets/images/gallery/g17.jpg" data-caption="Navratri Dandiya Fest celebration">
                    <img src="assets/images/gallery/g17.jpg"
                        alt="Little child in traditional yellow attire with flower garland" width="600" height="600"
                        loading="lazy" decoding="async">
                    <span class="gal-tag">Celebrations</span>
                    <span class="gal-zoom"><i class="bi bi-arrows-fullscreen"></i></span>
                </button>
                <!-- 18 -->
                <button type="button" class="gal-item gal--yellow" data-cat="activities"
                    data-src="assets/images/gallery/g18.jpg" data-caption="Creative handprint art activity">
                    <img src="assets/images/gallery/g18.jpg"
                        alt="Student showing painted hands during creative art session" width="600" height="600"
                        loading="lazy" decoding="async">
                    <span class="gal-tag">Activities</span>
                    <span class="gal-zoom"><i class="bi bi-arrows-fullscreen"></i></span>
                </button>
                <!-- 19 -->
                <button type="button" class="gal-item gal--red" data-cat="activities"
                    data-src="assets/images/gallery/g19.jpg" data-caption="Number lace math learning activity">
                    <img src="assets/images/gallery/g19.jpg"
                        alt="Happy child standing near completed number lace counting activity" width="600" height="600"
                        loading="lazy" decoding="async">
                    <span class="gal-tag">Activities</span>
                    <span class="gal-zoom"><i class="bi bi-arrows-fullscreen"></i></span>
                </button>
                <!-- 20 -->
                <button type="button" class="gal-item g-wide gal--blue" data-cat="celebrations"
                    data-src="assets/images/gallery/g20.jpg" data-caption="Festive Navratri &amp; Dussehra display">
                    <img src="assets/images/gallery/g20.jpg"
                        alt="Student dressed in kurta standing proudly by festival art board" width="900" height="600"
                        loading="lazy" decoding="async">
                    <span class="gal-tag">Celebrations</span>
                    <span class="gal-zoom"><i class="bi bi-arrows-fullscreen"></i></span>
                </button>

                <!-- 21 -->
                <button type="button" class="gal-item gal--blue" data-cat="celebrations"
                    data-src="assets/images/gallery/g21.jpg" data-caption="Festive Navratri &amp; Dussehra display">
                    <img src="assets/images/gallery/g21.jpg"
                        alt="Student dressed in kurta standing proudly by festival art board" width="900" height="600"
                        loading="lazy" decoding="async">
                    <span class="gal-tag">Celebrations</span>
                    <span class="gal-zoom"><i class="bi bi-arrows-fullscreen"></i></span>
                </button>

                <!-- 22 -->
                <button type="button" class="gal-item gal--blue" data-cat="classroom"
                    data-src="assets/images/gallery/g22.jpg" data-caption="Interactive Classroom Learning Activities">
                    <img src="assets/images/gallery/g22.jpg"
                        alt="Students participating in interactive classroom learning activities" width="900"
                        height="600" loading="lazy" decoding="async">
                    <span class="gal-tag">Classroom</span>
                    <span class="gal-zoom"><i class="bi bi-arrows-fullscreen"></i></span>
                </button>


                <!-- 25 -->
                <button type="button" class="gal-item gal--blue" data-cat="classroom"
                    data-src="assets/images/gallery/g25.jpg" data-caption="Interactive Classroom Learning Activities">
                    <img src="assets/images/gallery/g25.jpg"
                        alt="Students participating in interactive classroom learning activities" width="900"
                        height="600" loading="lazy" decoding="async">
                    <span class="gal-tag">Fitness Area</span>
                    <span class="gal-zoom"><i class="bi bi-arrows-fullscreen"></i></span>
                </button>

                <!-- 26 -->
                <button type="button" class="gal-item gal--blue" data-cat="classroom"
                    data-src="assets/images/gallery/g26.jpg" data-caption="Interactive Classroom Learning Activities">
                    <img src="assets/images/gallery/g26.jpg"
                        alt="Students participating in interactive classroom learning activities" width="900"
                        height="600" loading="lazy" decoding="async">
                    <span class="gal-tag">Classroom</span>
                    <span class="gal-zoom"><i class="bi bi-arrows-fullscreen"></i></span>
                </button>

                <!-- 27 -->
                <button type="button" class="gal-item gal--blue" data-cat="classroom"
                    data-src="assets/images/gallery/g27.jpg" data-caption="Interactive Classroom Learning Activities">
                    <img src="assets/images/gallery/g27.jpg"
                        alt="Students participating in interactive classroom learning activities" width="900"
                        height="600" loading="lazy" decoding="async">
                    <span class="gal-tag">Classroom</span>
                    <span class="gal-zoom"><i class="bi bi-arrows-fullscreen"></i></span>
                </button>

                <!-- 28 -->
                <button type="button" class="gal-item g-wide gal--blue" data-cat="classroom"
                    data-src="assets/images/gallery/g28.jpg" data-caption="Interactive Classroom Learning Activities">
                    <img src="assets/images/gallery/g28.jpg"
                        alt="Students participating in interactive classroom learning activities" width="900"
                        height="600" loading="lazy" decoding="async">
                    <span class="gal-tag">Classroom</span>
                    <span class="gal-zoom"><i class="bi bi-arrows-fullscreen"></i></span>
                </button>
            </div>

            <!-- <p class="gal-empty" id="galEmpty" hidden>More photos coming soon!</p> -->
            <div class="sec-cta gal-cta">
                <a href="contact-us" class="btn btn-sgs btn-lg">Enquire for Admission<i
                        class="bi bi-arrow-right ms-2"></i></a>
                <a href="tel:+919250900572" class="btn btn-outline-sgs btn-lg"><i
                        class="bi bi-telephone-fill me-2"></i>+91 9250900572</a>
            </div>

        </div>

        <!-- Lightbox -->
        <div class="gal-lightbox" id="galLightbox" role="dialog" aria-modal="true" aria-label="Photo viewer" hidden>
            <button type="button" class="gal-lb-btn gal-lb-close" aria-label="Close"><i class="bi bi-x-lg"></i></button>
            <button type="button" class="gal-lb-btn gal-lb-prev" aria-label="Previous photo"><i
                    class="bi bi-chevron-left"></i></button>
            <figure class="gal-lb-figure">
                <img src="" alt="">
                <figcaption><span class="gal-lb-caption"></span><span class="gal-lb-count"></span></figcaption>
            </figure>
            <button type="button" class="gal-lb-btn gal-lb-next" aria-label="Next photo"><i
                    class="bi bi-chevron-right"></i></button>
        </div>
    </section>
    <!-- ===== GALLERY END ===== -->

</main>


<?php
$content = ob_get_clean();
include_once 'layout.php';
?>