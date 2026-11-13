<?php
$title = 'Preschool & Day Care in New Mahavir Nagar | MRV International';
$description = 'MRV International Pre-School & Day Care, New Mahavir Nagar, Delhi. Playgroup, Nursery, LKG, UKG & safe day care. Admissions open – call 9250900572.';
$keywords = 'MRV International Pre-School, Preschool in New Mahavir Nagar, Play School in New Delhi, Nursery Admission Delhi, Day Care Centre in New Delhi';
$canonical = 'https://mrvinternational.in/';

require_once __DIR__ . '/mailer.php';

/* ---------- ADMISSION ENQUIRY HANDLER ---------- */
$enqErrors = [];
$enqOld = ['child_name' => '', 'parent_name' => '', 'email' => '', 'phone' => '', 'branch' => ''];
$enqSent = isset($_GET['enq']);
$validBranches = ['Vikaspuri', 'Tagore Garden', 'Janakpuri', 'Tilak Nagar', 'Krishna Park'];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['form_type'] ?? '') === 'admission_enquiry') {
    if (!empty($_POST['website'])) {
        header('Location: ./?enq=1#contact');
        exit;
    }

    foreach ($enqOld as $k => $v) {
        $enqOld[$k] = mrv_clean_input($_POST[$k] ?? '');
    }

    if (!preg_match('/^[\p{L}\s.\'-]{2,80}$/u', $enqOld['child_name'])) {
        $enqErrors['child_name'] = "Please enter a valid child's name (2–80 letters).";
    }
    if (!preg_match('/^[\p{L}\s.\'-]{2,80}$/u', $enqOld['parent_name'])) {
        $enqErrors['parent_name'] = "Please enter a valid parent's name (2–80 letters).";
    }
    if ($enqOld['email'] !== '' && (mb_strlen($enqOld['email']) > 120 || !filter_var($enqOld['email'], FILTER_VALIDATE_EMAIL))) {
        $enqErrors['email'] = 'Please enter a valid email address.';
    }
    if (!mrv_is_valid_phone($enqOld['phone'])) {
        $enqErrors['phone'] = 'Please enter a valid 10-digit mobile number.';
    }
    if (!in_array($enqOld['branch'], $validBranches, true)) {
        $enqErrors['branch'] = 'Please select a branch.';
    }

    if (!$enqErrors) {
        $sentOk = mrv_send_mail(
            'New Admission Enquiry - ' . $enqOld['child_name'] . ' (' . $enqOld['branch'] . ')',
            'New Admission Enquiry',
            [
                'Child Name' => $enqOld['child_name'],
                'Parent Name' => $enqOld['parent_name'],
                'Phone' => mrv_normalize_phone($enqOld['phone']),
                'Email' => $enqOld['email'],
                'Branch' => $enqOld['branch'],
            ],
            $enqOld['email'],
            $enqOld['parent_name']
        );

        if ($sentOk) {
            header('Location: ./?enq=1#contact');
            exit;
        }
        $enqErrors['form'] = 'Sorry, we could not send your enquiry right now. Please call us on +91 9250900572.';
    }
}

ob_start();
?>

<main id="main">

    <!-- ===== BANNER ===== -->
    <section class="hero" aria-label="School banner">
        <div class="hero-slide">
            <div class="container-xl hero-content">
                <div class="row align-items-center gy-4 gx-lg-5">
                    <div class="col-lg-6 hero-text order-2 order-lg-1">
                        <span class="hero-kicker"><i class="bi bi-brightness-high-fill"></i>Since 1972 · Multiple
                            Intelligence-Based</span>
                        <h1 class="hero-title"><strong>Where Every Child's</strong><span>Unique Brilliance Shines</span>
                        </h1>
                        <p>India's first Multiple Intelligence-based preschool — hands-on learning that nurtures social,
                            emotional, language, logic, music, art, and physical skills in a joyful, pressure-free
                            environment.</p>
                        <div class="hero-actions">
                            <a href="contact-us" class="btn btn-sgs btn-lg">Start Your Child's Journey</a>
                            <a href="programs" class="btn btn-outline-sgs btn-lg">Explore Programs</a>
                        </div>
                        <ul class="hero-stats">
                            <li><strong>50+</strong><span>Years of Excellence</span></li>
                            <li><strong>15+</strong><span>Centres Across India</span></li>
                            <li><strong>MI</strong><span>Based Curriculum</span></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2">
                        <div class="hero-photo">
                            <img src="https://images.unsplash.com/photo-1503454537195-1dcabb73ffb9?w=700&h=875&fit=crop"
                                alt="Smiling children at MRV International Pre-School" width="600" height="500"
                                fetchpriority="high" decoding="async">
                            <span class="chip chip--yellow"><i class="bi bi-stars"></i>Admission Open 🎉</span>
                            <span class="chip chip--white"><i class="bi bi-shield-check"></i><span>Happy, Safe
                                    Learning<small>CCTV · AC Classrooms · Small Groups</small></span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Decorative doodles -->
        <div class="hero-deco" aria-hidden="true">
            <span class="deco deco-sun" data-depth="18"><svg viewBox="0 0 100 100">
                    <g class="sun-rays" stroke="#fbc02d" stroke-width="6" stroke-linecap="round">
                        <path d="M50 4v12M50 84v12M4 50h12M84 50h12M17 17l9 9M74 74l9 9M17 83l9-9M74 26l9-9" />
                    </g>
                    <circle cx="50" cy="50" r="22" fill="#fbc02d" />
                    <circle cx="43" cy="47" r="2.5" fill="#1c1c1c" />
                    <circle cx="57" cy="47" r="2.5" fill="#1c1c1c" />
                    <path d="M42 56q8 7 16 0" fill="none" stroke="#1c1c1c" stroke-width="2.5" stroke-linecap="round" />
                </svg></span>
            <span class="deco deco-cloud" data-depth="30"><svg viewBox="0 0 120 64">
                    <path fill="#fff" d="M28 60h66a24 24 0 0 0 2-48A32 32 0 0 0 38 14 23 23 0 0 0 28 60z" />
                </svg></span>
            <span class="deco deco-star deco-star--1" data-depth="24"><svg viewBox="0 0 24 24">
                    <path d="M12 2l2.9 6.6 7.1.6-5.4 4.7 1.7 7-6.3-3.8-6.3 3.8 1.7-7L2 9.2l7.1-.6z" />
                </svg></span>
            <span class="deco deco-star deco-star--2" data-depth="36"><svg viewBox="0 0 24 24">
                    <path d="M12 2l2.9 6.6 7.1.6-5.4 4.7 1.7 7-6.3-3.8-6.3 3.8 1.7-7L2 9.2l7.1-.6z" />
                </svg></span>
            <span class="deco deco-star deco-star--3" data-depth="16"><svg viewBox="0 0 24 24">
                    <path d="M12 2l2.9 6.6 7.1.6-5.4 4.7 1.7 7-6.3-3.8-6.3 3.8 1.7-7L2 9.2l7.1-.6z" />
                </svg></span>
            <span class="deco deco-balloon" data-depth="26"><svg viewBox="0 0 40 80">
                    <path d="M20 52c-3 8 4 12 0 18s2 8 0 10" fill="none" stroke="#2b8fd8" stroke-width="1.5" />
                    <ellipse cx="20" cy="24" rx="17" ry="22" fill="#e3242b" />
                    <path d="M16 46h8l-4 6z" fill="#e3242b" />
                    <ellipse cx="13" cy="16" rx="4" ry="7" fill="#fff" opacity=".45" />
                </svg></span>
        </div>
    </section>
    <!-- ===== BANNER END ===== -->

    <!-- ===== FEATURES ===== -->
    <section class="feat" aria-label="Our approach">
        <div class="container-xl">
            <div class="row g-4">
                <div class="col-md-4">
                    <article class="feat-item t-red">
                        <span class="feat-icon"><i class="bi bi-lightbulb"></i></span>
                        <div>
                            <h3>Multiple Intelligence</h3>
                            <p>Howard Gardner's framework helps us recognize and nurture every child's unique strengths
                                — not one-size-fits-all education.</p>
                        </div>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="feat-item t-blue">
                        <span class="feat-icon"><i class="bi bi-hand-index-thumb"></i></span>
                        <div>
                            <h3>Hands-On Learning</h3>
                            <p>Children learn by doing — through art, music, movement, discovery activities, and
                                real-life experiences that stick.</p>
                        </div>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="feat-item t-yellow">
                        <span class="feat-icon"><i class="bi bi-flower1"></i></span>
                        <div>
                            <h3>Holistic Growth</h3>
                            <p>We nurture emotional well-being, social skills, physical health, and moral character
                                alongside academics.</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- ===== FEATURES END ===== -->

    <!-- ===== PROGRAMS ===== -->
    <section class="services" id="programs" aria-labelledby="programsTitle">
        <div class="container-xl">
            <div class="sec-head">
                <p class="sec-sub">Golden Bells Program</p>
                <h2 id="programsTitle">Programs for Every Stage of Wonder</h2>
                <p class="sec-intro">Age-appropriate journeys from toddlerhood to kindergarten — and beyond.</p>
            </div>

            <div class="row g-4 svc-grid">
                <div class="col-md-6 col-lg-4">
                    <article class="svc-card t-red">
                        <div class="svc-media">
                            <img src="assets/images/services/playgroup.webp"
                                alt="Toddlers playing with colourful blocks" width="800" height="533" loading="lazy"
                                decoding="async">
                            <span class="svc-age"><i class="bi bi-emoji-smile"></i>15 – 24 months</span>
                            <span class="svc-num" aria-hidden="true">01</span>
                        </div>
                        <span class="svc-icon"><i class="bi bi-balloon-heart"></i></span>
                        <div class="svc-body">
                            <h3>Toddler</h3>
                            <p>Nurturing attachment, sensory play, and gross motor coordination.</p>
                            <a class="svc-link" href="toddler">Learn more<span class="visually-hidden"> about
                                    Toddler</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <article class="svc-card t-blue">
                        <div class="svc-media">
                            <img src="assets/images/services/learning-through-play.webp"
                                alt="Children in a hands-on group activity" width="800" height="533" loading="lazy"
                                decoding="async">
                            <span class="svc-age"><i class="bi bi-emoji-smile"></i>2 – 3 years</span>
                            <span class="svc-num" aria-hidden="true">02</span>
                        </div>
                        <span class="svc-icon"><i class="bi bi-puzzle"></i></span>
                        <div class="svc-body">
                            <h3>Pre-Nursery</h3>
                            <p>Self-control, hands-on activities, music, movement, and social rituals.</p>
                            <a class="svc-link" href="pre-nursery">Learn more<span class="visually-hidden"> about
                                    Pre-Nursery</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <article class="svc-card t-yellow">
                        <div class="svc-media">
                            <img src="assets/images/services/nursery.webp"
                                alt="Nursery children colouring and learning letters" width="800" height="533"
                                loading="lazy" decoding="async">
                            <span class="svc-age"><i class="bi bi-emoji-smile"></i>3 – 4 years</span>
                            <span class="svc-num" aria-hidden="true">03</span>
                        </div>
                        <span class="svc-icon"><i class="bi bi-palette"></i></span>
                        <div class="svc-body">
                            <h3>Nursery</h3>
                            <p>Letters, sounds, confidence building, and independent expression.</p>
                            <a class="svc-link" href="nursery">Learn more<span class="visually-hidden"> about
                                    Nursery</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <article class="svc-card t-red">
                        <div class="svc-media">
                            <img src="assets/images/services/kindergarten.webp"
                                alt="Kindergarten students reading together" width="800" height="533" loading="lazy"
                                decoding="async">
                            <span class="svc-age"><i class="bi bi-emoji-smile"></i>4 – 5 years</span>
                            <span class="svc-num" aria-hidden="true">04</span>
                        </div>
                        <span class="svc-icon"><i class="bi bi-mortarboard"></i></span>
                        <div class="svc-body">
                            <h3>Kindergarten</h3>
                            <p>Phonetics, writing strokes, and preparation for formal schooling.</p>
                            <a class="svc-link" href="kindergarten">Learn more<span class="visually-hidden"> about
                                    Kindergarten</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <article class="svc-card t-blue">
                        <div class="svc-media">
                            <img src="assets/images/services/day-care.webp"
                                alt="Children resting and playing under supervision at day care" width="800"
                                height="533" loading="lazy" decoding="async">
                            <span class="svc-age"><i class="bi bi-clock"></i>Extended Hours</span>
                            <span class="svc-num" aria-hidden="true">05</span>
                        </div>
                        <span class="svc-icon"><i class="bi bi-house-heart"></i></span>
                        <div class="svc-body">
                            <h3>Day Care</h3>
                            <p>Creative play, reading sessions, and a safe space while parents work.</p>
                            <a class="svc-link" href="day-care">Learn more<span class="visually-hidden"> about Day
                                    Care</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <article class="svc-card t-yellow">
                        <div class="svc-media">
                            <img src="assets/images/services/creative-activities.webp"
                                alt="Children drawing and doing creative activities after school" width="800"
                                height="533" loading="lazy" decoding="async">
                            <span class="svc-age"><i class="bi bi-stars"></i>Enrichment</span>
                            <span class="svc-num" aria-hidden="true">06</span>
                        </div>
                        <span class="svc-icon"><i class="bi bi-brush"></i></span>
                        <div class="svc-body">
                            <h3>After School</h3>
                            <p>Drawing, Jolly Phonics, storytelling, music, and brain development.</p>
                            <a class="svc-link" href="after-school">Learn more<span class="visually-hidden"> about After
                                    School</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- ===== PROGRAMS END ===== -->

    <!-- ===== ERUDITION CURRICULUM ===== -->
    <section class="erd" id="curriculum" aria-labelledby="erdTitle">
        <div class="container-xl">
            <div class="row align-items-center gy-5 gx-lg-5">

                <div class="col-lg-5">
                    <div class="erd-photo">
                        <img src="assets/images/activities/facilities-main.webp"
                            alt="Bright, colourful classroom at MRV International Pre-School" width="700" height="700"
                            loading="lazy" decoding="async">
                        <span class="erd-badge"><i class="bi bi-lightbulb-fill"></i>Multiple Intelligence Lens</span>
                    </div>
                </div>

                <div class="col-lg-7">
                    <p class="erd-sub">Designed by Dr. Pranavi Luthra</p>
                    <h2 id="erdTitle">Erudition Curriculum</h2>
                    <p class="erd-intro">Well-researched, age-appropriate, and theme-based — grounded in child
                        development principles and delivered through the Multiple Intelligence lens.</p>

                    <ul class="erd-list">
                        <li class="e-r"><i class="bi bi-people-fill"></i>Small group classes with personal attention
                        </li>
                        <li class="e-b"><i class="bi bi-camera-video-fill"></i>Air-conditioned, CCTV-monitored
                            classrooms</li>
                        <li class="e-y"><i class="bi bi-pc-display"></i>Montessori lab &amp; computer lab facilities
                        </li>
                        <li class="e-r"><i class="bi bi-book-half"></i>Unique reading room &amp; music-dance-art studio
                        </li>
                        <li class="e-b"><i class="bi bi-shield-check"></i>High security with trained, caring educators
                        </li>
                    </ul>


                </div>

            </div>
        </div>
    </section>
    <!-- ===== ERUDITION CURRICULUM END ===== -->

    <!-- ===== PARENT VOICES ===== -->
    <section class="testi" id="testimonials" aria-labelledby="testiTitle">
        <div class="container-xl">
            <div class="row align-items-center gy-4 gx-lg-5">
                <div class="col-lg-4">
                    <div class="testi-head">
                        <span class="testi-mark-big" aria-hidden="true"><i class="bi bi-chat-heart-fill"></i></span>
                        <p class="testi-sub">Parent Voices</p>
                        <h2 id="testiTitle">Loved by Families Across Delhi</h2>
                        <p class="testi-rate"><i class="bi bi-star-fill"></i>4.3 · Google &amp; Verified Reviews</p>
                        <div class="testi-nav">
                            <button type="button" class="testi-btn" id="testiPrev" aria-label="Previous testimonial"
                                aria-controls="testiTrack"><i class="bi bi-arrow-left"></i></button>
                            <button type="button" class="testi-btn" id="testiNext" aria-label="Next testimonial"
                                aria-controls="testiTrack"><i class="bi bi-arrow-right"></i></button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="testi-track" id="testiTrack" tabindex="0" aria-label="Parent reviews, scroll for more">
                        <article class="testi-card">
                            <blockquote class="testi-bubble">
                                <i class="bi bi-quote testi-mark" aria-hidden="true"></i>
                                <span class="testi-stars" role="img" aria-label="5 out of 5 stars"><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i></span>
                                <p>The teachers are so helpful and patient. My son's Hindi writing improved greatly with
                                    extra practice at school. I can see real progress.</p>
                            </blockquote>
                            <div class="testi-person">
                                <span class="testi-avatar" aria-hidden="true">MT</span>
                                <span><strong>Manoj Thakur</strong><small>Parent · Tilak Nagar</small></span>
                            </div>
                        </article>

                        <article class="testi-card testi--blue">
                            <blockquote class="testi-bubble">
                                <i class="bi bi-quote testi-mark" aria-hidden="true"></i>
                                <span class="testi-stars" role="img" aria-label="5 out of 5 stars"><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i></span>
                                <p>A positive environment where children are treated equally. My daughter in nursery
                                    always comes home happy and excited to share what she learned.</p>
                            </blockquote>
                            <div class="testi-person">
                                <span class="testi-avatar" aria-hidden="true">VS</span>
                                <span><strong>Vikrant Singh</strong><small>Parent · MRV International</small></span>
                            </div>
                        </article>

                        <article class="testi-card testi--white">
                            <blockquote class="testi-bubble">
                                <i class="bi bi-quote testi-mark" aria-hidden="true"></i>
                                <span class="testi-stars" role="img" aria-label="4 out of 5 stars"><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star"></i></span>
                                <p>Clean facilities and a holistic approach to early education. The multiple
                                    intelligence curriculum helps children discover their unique strengths.</p>
                            </blockquote>
                            <div class="testi-person">
                                <span class="testi-avatar" aria-hidden="true">PR</span>
                                <span><strong>Parent Review</strong><small>Tagore Garden · 4.3★ on
                                        JustDial</small></span>
                            </div>
                        </article>
                    </div>
                    <div class="testi-dots" id="testiDots" aria-hidden="true"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===== PARENT VOICES END ===== -->

    <!-- ===== GALLERY ===== -->
    <section class="gallery" id="gallery" aria-labelledby="galleryTitle">
        <div class="container-xl">

            <div class="sec-head">
                <p class="sec-sub">Little Moments, Big Smiles</p>
                <h2 id="galleryTitle">Moments at MRV International</h2>
                <p class="sec-intro">A peek into the happy days at MRV International Pre-School &amp; Day Care, from
                    classroom fun to colourful celebrations.</p>
            </div>

            <!-- <div class="gal-filters" role="group" aria-label="Filter photos">
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
            </div> -->

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
                    data-src="assets/images/gallery/g22.jpg" data-caption="Collaborative group activity in class">
                    <img src="assets/images/gallery/g22.jpg" alt="Children working collaboratively on block structures"
                        width="600" height="600" loading="lazy" decoding="async">
                    <span class="gal-tag">Classroom</span>
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
                <button type="button" class="gal-item gal--blue" data-cat="Classroom"
                    data-src="assets/images/gallery/g25.jpg" data-caption="Interactive Classroom Learning Activities">
                    <img src="assets/images/gallery/g25.jpg"
                        alt="Students participating in interactive classroom learning activities" width="900"
                        height="600" loading="lazy" decoding="async">
                    <span class="gal-tag">Fitness Area</span>
                    <span class="gal-zoom"><i class="bi bi-arrows-fullscreen"></i></span>
                </button>

                <!-- 26 -->
                <button type="button" class="gal-item gal--blue" data-cat="Classroom"
                    data-src="assets/images/gallery/g26.jpg" data-caption="Interactive Classroom Learning Activities">
                    <img src="assets/images/gallery/g26.jpg"
                        alt="Students participating in interactive classroom learning activities" width="900"
                        height="600" loading="lazy" decoding="async">
                    <span class="gal-tag">Classroom</span>
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
            </div>

            <!-- <p class="gal-empty" id="galEmpty" hidden>More photos coming soon!</p> -->
            <div class="sec-cta gal-cta">
                <a href="gallery" class="btn btn-sgs btn-lg">View all Gallery<i class="bi bi-arrow-right ms-2"></i></a>
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

    <!-- ===== FRANCHISE CTA ===== -->
    <section class="fr pt-0" aria-labelledby="frTitle">
        <div class="container-xl">
            <div class="svc-cta mt-0">
                <div>
                    <h2 id="frTitle">Start Your Own Preschool with Purpose</h2>
                    <p>Partner with a trusted brand backed by 50+ years of education excellence. 360° support for
                        academic, operational, training, and marketing.</p>
                </div>
                <a href="franchise" class="btn btn-yellow-sgs btn-lg">Explore Franchise</a>
            </div>
        </div>
    </section>
    <!-- ===== FRANCHISE END ===== -->

    <!-- ===== CONTACT ===== -->
    <section class="ct" id="contact" aria-labelledby="ctTitle">
        <div class="container-xl">
            <div class="row gy-5 gx-lg-5 align-items-center">
                <div class="col-lg-6">
                    <p class="sec-sub">Get in Touch</p>
                    <h2 class="ct-title" id="ctTitle">Ready to Visit Us?</h2>
                    <ul class="fac-list">
                        <li class="fac-item t-red">
                            <span class="fac-icon"><i class="bi bi-telephone-fill"></i></span>
                            <div>
                                <h3>Call Us</h3>
                                <p><a href="tel:+919250900572">+91 9250900572</a> · <a href="tel:+919250900573">+91
                                        9250900573</a></p>
                            </div>
                        </li>
                        <li class="fac-item t-blue">
                            <span class="fac-icon"><i class="bi bi-geo-alt-fill"></i></span>
                            <div>
                                <h3>Vikaspuri Centre</h3>
                                <p><a href="https://maps.app.goo.gl/iNbpjZG4gXoNg5W27" target="_blank" rel="noopener">WZ
                                        36A, Krishna Park, New Mahavir Nagar, New Delhi - 110018</a></p>
                            </div>
                        </li>
                        <li class="fac-item t-yellow">
                            <span class="fac-icon"><i class="bi bi-envelope-fill"></i></span>
                            <div>
                                <h3>Email</h3>
                                <p><a href="mailto:info@mrvinternational.in">info@mrvinternational.in</a></p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-6">
                    <form class="enq" id="enqForm" action="./#contact" method="post">
                        <input type="hidden" name="form_type" value="admission_enquiry">
                        <h3>Admission Enquiry</h3>
                        <?php if ($enqSent): ?>
                            <div class="ct-alert ct-alert--ok" role="status">
                                <i class="bi bi-check-circle-fill" aria-hidden="true"></i>
                                Thank you! Your admission enquiry has been submitted. Our team will contact you shortly.
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($enqErrors['form'])): ?>
                            <div class="ct-alert ct-alert--err" role="alert">
                                <i class="bi bi-exclamation-triangle-fill" aria-hidden="true"></i>
                                <?= htmlspecialchars($enqErrors['form']) ?>
                            </div>
                        <?php endif; ?>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="childName" class="form-label">Child Name <span
                                        aria-hidden="true">*</span></label>
                                <input type="text"
                                    class="form-control<?= isset($enqErrors['child_name']) ? ' is-invalid' : '' ?>"
                                    id="childName" name="child_name"
                                    value="<?= htmlspecialchars($enqOld['child_name']) ?>" autocomplete="off" required
                                    minlength="2">
                                <?php if (isset($enqErrors['child_name'])): ?><small
                                        class="ct-error"><?= htmlspecialchars($enqErrors['child_name']) ?></small><?php endif; ?>
                            </div>
                            <div class="col-md-6">
                                <label for="parentName" class="form-label">Parent Name <span
                                        aria-hidden="true">*</span></label>
                                <input type="text"
                                    class="form-control<?= isset($enqErrors['parent_name']) ? ' is-invalid' : '' ?>"
                                    id="parentName" name="parent_name"
                                    value="<?= htmlspecialchars($enqOld['parent_name']) ?>" autocomplete="name" required
                                    minlength="2">
                                <?php if (isset($enqErrors['parent_name'])): ?><small
                                        class="ct-error"><?= htmlspecialchars($enqErrors['parent_name']) ?></small><?php endif; ?>
                            </div>
                            <div class="col-md-6">
                                <label for="enqEmail" class="form-label">Email</label>
                                <input type="email"
                                    class="form-control<?= isset($enqErrors['email']) ? ' is-invalid' : '' ?>"
                                    id="enqEmail" name="email" value="<?= htmlspecialchars($enqOld['email']) ?>"
                                    autocomplete="email">
                                <?php if (isset($enqErrors['email'])): ?><small
                                        class="ct-error"><?= htmlspecialchars($enqErrors['email']) ?></small><?php endif; ?>
                            </div>
                            <div class="col-md-6">
                                <label for="enqPhone" class="form-label">Phone <span aria-hidden="true">*</span></label>
                                <input type="tel"
                                    class="form-control<?= isset($enqErrors['phone']) ? ' is-invalid' : '' ?>"
                                    id="enqPhone" name="phone" value="<?= htmlspecialchars($enqOld['phone']) ?>"
                                    autocomplete="tel" inputmode="tel" pattern="[0-9+\-\s]{10,15}" required>
                                <?php if (isset($enqErrors['phone'])): ?><small
                                        class="ct-error"><?= htmlspecialchars($enqErrors['phone']) ?></small><?php endif; ?>
                            </div>
                            <div class="col-12">
                                <label for="enqBranch" class="form-label">Branch <span
                                        aria-hidden="true">*</span></label>
                                <select class="form-select<?= isset($enqErrors['branch']) ? ' is-invalid' : '' ?>"
                                    id="enqBranch" name="branch" required>
                                    <option value="" <?= $enqOld['branch'] === '' ? 'selected' : '' ?> disabled>Select
                                        branch</option>
                                    <?php foreach ($validBranches as $b): ?>
                                        <option value="<?= htmlspecialchars($b) ?>" <?= $enqOld['branch'] === $b ? 'selected' : '' ?>><?= htmlspecialchars($b) ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?php if (isset($enqErrors['branch'])): ?><small
                                        class="ct-error"><?= htmlspecialchars($enqErrors['branch']) ?></small><?php endif; ?>
                            </div>
                            <div class="ct-hp" aria-hidden="true">
                                <label for="enqWebsite">Website</label>
                                <input type="text" id="enqWebsite" name="website" tabindex="-1" autocomplete="off">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-sgs btn-lg">Submit Enquiry</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Local Business structured data -->
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": ["Preschool", "ChildCare"],
                "@id": "https://mrvinternational.in/#school",
                "name": "MRV International Pre-School & Day Care",
                "url": "https://mrvinternational.in/",
                "description": "India's first Multiple Intelligence-based preschool since 1972, offering Toddler, Pre-Nursery, Nursery, Kindergarten, Day Care and After School programs in Delhi.",
                "image": "https://mrvinternational.in/assets/images/banner/banner03.webp",
                "foundingDate": "1972",
                "telephone": ["+919250900572", "+919250900573"],
                "email": "info@mrvinternational.in",
                "address": {
                    "@type": "PostalAddress",
                    "streetAddress": "H-368, Vikaspuri, Near Mamta Modern School",
                    "addressLocality": "New Delhi",
                    "addressRegion": "Delhi",
                    "addressCountry": "IN"
                },
                "areaServed": "Delhi",
                "hasMap": "https://www.google.com/maps/search/?api=1&query=H-368+Vikaspuri+Near+Mamta+Modern+School+New+Delhi"
            }
        </script>
    </section>
    <!-- ===== CONTACT END ===== -->

</main>


<?php
$content = ob_get_clean();
include_once 'layout.php';
?>