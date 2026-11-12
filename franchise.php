<?php
$title = 'Preschool & Daycare Franchise | MRV International';
$description = 'Start your own preschool & daycare franchise with MRV International. 360-degree academic, operational, training, technology and marketing support.';
$keywords = 'MRV International Franchise, Preschool Franchise India, Daycare Franchise Delhi, Play School Franchise Opportunity';
$canonical = 'https://mrvinternational.in/franchise';

/* ---------- FRANCHISE FORM HANDLER ---------- */
$fzErrors = [];
$fzOld = ['name' => '', 'phone' => '', 'email' => '', 'city' => '', 'message' => ''];
$fzSent = isset($_GET['applied']);
$validCities = ['Delhi NCR', 'Lucknow', 'Jaipur', 'Rewari', 'Rohtak', 'Panipat', 'Sonipat', 'Mathura', 'Punjab', 'Other'];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['form_type'] ?? '') === 'franchise_apply') {
    if (!empty($_POST['website'])) {
        header('Location: franchise?applied=1#apply');
        exit;
    }

    foreach ($fzOld as $k => $v) {
        $fzOld[$k] = trim(strip_tags($_POST[$k] ?? ''));
    }

    if (mb_strlen($fzOld['name']) < 2) {
        $fzErrors['name'] = 'Please enter your full name.';
    }
    if (!preg_match('/^[0-9+\-\s]{10,15}$/', $fzOld['phone'])) {
        $fzErrors['phone'] = 'Please enter a valid 10-digit phone number.';
    }
    if (!filter_var($fzOld['email'], FILTER_VALIDATE_EMAIL)) {
        $fzErrors['email'] = 'Please enter a valid email address.';
    }
    if (!in_array($fzOld['city'], $validCities, true)) {
        $fzErrors['city'] = 'Please select your preferred city.';
    }

    if (!$fzErrors) {
        $to      = 'mrvonlinemarketing@gmail.com';
        $subject = 'New Franchise Application - ' . $fzOld['name'] . ' (' . $fzOld['city'] . ')';
        $body    = "Name: {$fzOld['name']}\n"
            . "Phone: {$fzOld['phone']}\n"
            . "Email: {$fzOld['email']}\n"
            . "Preferred City: {$fzOld['city']}\n\n"
            . "Message:\n" . ($fzOld['message'] ?: 'None') . "\n";
        $headers = "From: no-reply@mrvinternational.in\r\n"
            . "Reply-To: {$fzOld['email']}\r\n"
            . "Content-Type: text/plain; charset=UTF-8\r\n";

        if (@mail($to, $subject, $body, $headers)) {
            header('Location: franchise?applied=1#apply');
            exit;
        }
        $fzErrors['form'] = 'Sorry, we could not send your application right now. Please call us on +91 9250900572.';
    }
}

ob_start();
?>

<main id="main">

    <!-- ===== HERO + APPLICATION FORM ===== -->
    <section class="fz-hero" id="apply" aria-labelledby="fzTitle">
        <div class="container-xl">
            <div class="row align-items-center gy-5 gx-lg-5">
                <div class="col-lg-6">
                    <span class="fz-kicker"><i class="bi bi-building-fill-add" aria-hidden="true"></i>MRV International Preschool &amp; Daycare Franchise</span>
                    <h1 id="fzTitle">Start Your Own Preschool with Purpose</h1>
                    <p class="fz-tag"><span>Building Transformational Preschools.</span><span>Developing Future Leaders.</span></p>

                    <ul class="fz-stats">
                        <li><strong>35+</strong><span>Years Leadership</span></li>
                        <li><strong>360°</strong><span>Franchise Support</span></li>
                        <li><strong>MI</strong><span>Based Curriculum</span></li>
                    </ul>

                    <div class="fz-founder">
                        <span class="fz-av" aria-hidden="true">PL</span>
                        <div>
                            <strong>Founded by Dr. Pranavi Luthra</strong>
                            <small>Educationist, Counsellor, Parenting Coach | Author</small>
                            <span class="fz-yrs">35+ Years of Educational Leadership</span>
                        </div>
                    </div>

                    <div class="fz-calls">
                        <a href="tel:+919250900572"><i class="bi bi-telephone-fill" aria-hidden="true"></i>+91 9250900572</a>
                        <a href="tel:+919250900573"><i class="bi bi-telephone-fill" aria-hidden="true"></i>+91 9250900573</a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <form class="fz-form" id="fzForm" action="franchise#apply" method="post">
                        <input type="hidden" name="form_type" value="franchise_apply">
                        <span class="fz-ribbon">Free Consultation</span>
                        <h2>Apply for Franchise Partnership</h2>
                        <p class="fz-form-sub">Take the first step — our team responds within 24 hours.</p>
                        <?php if ($fzSent): ?>
                            <div class="ct-alert ct-alert--ok" role="status">
                                <i class="bi bi-check-circle-fill" aria-hidden="true"></i>
                                Thank you! Your franchise application has been received. Our team will contact you within 24 hours.
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($fzErrors['form'])): ?>
                            <div class="ct-alert ct-alert--err" role="alert">
                                <i class="bi bi-exclamation-triangle-fill" aria-hidden="true"></i>
                                <?= htmlspecialchars($fzErrors['form']) ?>
                            </div>
                        <?php endif; ?>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="fzName" class="form-label">Full Name <span aria-hidden="true">*</span></label>
                                <input type="text" class="form-control<?= isset($fzErrors['name']) ? ' is-invalid' : '' ?>" id="fzName" name="name" value="<?= htmlspecialchars($fzOld['name']) ?>" placeholder="Your name" autocomplete="name" required minlength="2">
                                <?php if (isset($fzErrors['name'])): ?><small class="ct-error"><?= htmlspecialchars($fzErrors['name']) ?></small><?php endif; ?>
                            </div>
                            <div class="col-md-6">
                                <label for="fzPhone" class="form-label">Phone <span aria-hidden="true">*</span></label>
                                <input type="tel" class="form-control<?= isset($fzErrors['phone']) ? ' is-invalid' : '' ?>" id="fzPhone" name="phone" value="<?= htmlspecialchars($fzOld['phone']) ?>" placeholder="Mobile number" autocomplete="tel" inputmode="tel" pattern="[0-9+\-\s]{10,15}" required>
                                <?php if (isset($fzErrors['phone'])): ?><small class="ct-error"><?= htmlspecialchars($fzErrors['phone']) ?></small><?php endif; ?>
                            </div>
                            <div class="col-md-6">
                                <label for="fzEmail" class="form-label">Email <span aria-hidden="true">*</span></label>
                                <input type="email" class="form-control<?= isset($fzErrors['email']) ? ' is-invalid' : '' ?>" id="fzEmail" name="email" value="<?= htmlspecialchars($fzOld['email']) ?>" placeholder="Email address" autocomplete="email" required>
                                <?php if (isset($fzErrors['email'])): ?><small class="ct-error"><?= htmlspecialchars($fzErrors['email']) ?></small><?php endif; ?>
                            </div>
                            <div class="col-md-6">
                                <label for="fzCity" class="form-label">Preferred City <span aria-hidden="true">*</span></label>
                                <select class="form-select<?= isset($fzErrors['city']) ? ' is-invalid' : '' ?>" id="fzCity" name="city" required>
                                    <option value="" <?= $fzOld['city'] === '' ? 'selected' : '' ?> disabled>Select city</option>
                                    <?php foreach ($validCities as $c): ?>
                                        <option value="<?= htmlspecialchars($c) ?>" <?= $fzOld['city'] === $c ? 'selected' : '' ?>><?= htmlspecialchars($c) ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?php if (isset($fzErrors['city'])): ?><small class="ct-error"><?= htmlspecialchars($fzErrors['city']) ?></small><?php endif; ?>
                            </div>
                            <div class="col-12">
                                <label for="fzMsg" class="form-label">Message <small>(optional)</small></label>
                                <textarea class="form-control" id="fzMsg" name="message" rows="3" placeholder="Tell us about yourself and your interest..."><?= htmlspecialchars($fzOld['message']) ?></textarea>
                            </div>
                            <div class="ct-hp" aria-hidden="true">
                                <label for="fzWebsite">Website</label>
                                <input type="text" id="fzWebsite" name="website" tabindex="-1" autocomplete="off">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-sgs btn-lg w-100">Apply Now →</button>
                            </div>
                        </div>
                        <p class="fz-form-note"><i class="bi bi-telephone-fill" aria-hidden="true"></i>Or call us to book a discovery call: <a href="tel:+919250900572">+91 9250900572</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== BUILD A MEANINGFUL BUSINESS ===== -->
    <section class="fz-sec fz-build" aria-label="Franchise opportunity">
        <div class="container-xl">
            <div class="row align-items-center gy-5 gx-lg-5">
                <div class="col-lg-6">
                    <p class="fz-text">MRV International Preschool &amp; Daycare combines Multiple Intelligences, Montessori, SEL, child psychology, and AI-enabled school systems to build future-ready children.</p>
                    <p class="fz-text">Whether you are an educator, entrepreneur, homemaker, school owner, or professional looking for a meaningful business, MRVI provides complete guidance from planning to profitable operations.</p>
                    <div class="fz-btns">
                        <a href="contact-us" class="btn btn-sgs btn-lg">Request Franchise Brochure</a>
                        <a href="tel:+919250900572" class="btn btn-outline-sgs btn-lg">Book a Discovery Call</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="fz-stack">
                        <article class="fz-row fz-r">
                            <span class="fz-ic"><i class="bi bi-briefcase-fill" aria-hidden="true"></i></span>
                            <div>
                                <h3>Build a Meaningful Business</h3>
                                <p>Own a venture where purpose meets profit — a preschool that goes beyond academics.</p>
                            </div>
                        </article>
                        <article class="fz-row fz-b">
                            <span class="fz-ic"><i class="bi bi-emoji-smile-fill" aria-hidden="true"></i></span>
                            <div>
                                <h3>Transform Young Lives</h3>
                                <p>Shape confident, curious, emotionally secure children through proven early education.</p>
                            </div>
                        </article>
                        <article class="fz-row fz-y">
                            <span class="fz-ic"><i class="bi bi-piggy-bank-fill" aria-hidden="true"></i></span>
                            <div>
                                <h3>Create Financial Independence</h3>
                                <p>Build a sustainable, recurring-revenue business with complete operational guidance.</p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== WHY INVEST ===== -->
    <section class="fz-sec fz-why" aria-labelledby="fzWhyTitle">
        <div class="container-xl">
            <div class="fz-head">
                <p class="fz-sub">Why Now</p>
                <h2 id="fzWhyTitle">Why Invest in Preschool Education?</h2>
                <p class="fz-intro">The preschool industry continues to grow due to:</p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <article class="fz-card fz-r"><span class="fz-ic"><i class="bi bi-megaphone-fill" aria-hidden="true"></i></span>
                        <h3>Increasing Awareness</h3>
                        <p>Increasing awareness among parents about quality early childhood education.</p>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <article class="fz-card fz-b"><span class="fz-ic"><i class="bi bi-people-fill" aria-hidden="true"></i></span>
                        <h3>Dual-Income Families</h3>
                        <p>Growing number of working parents seeking trusted preschools and daycare.</p>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <article class="fz-card fz-y"><span class="fz-ic"><i class="bi bi-house-heart-fill" aria-hidden="true"></i></span>
                        <h3>Quality Daycare</h3>
                        <p>Rising demand for safe, nurturing daycare alongside preschool education.</p>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <article class="fz-card fz-g"><span class="fz-ic"><i class="bi bi-journal-bookmark-fill" aria-hidden="true"></i></span>
                        <h3>NEP Focus on ECE</h3>
                        <p>National Education Policy emphasis on Early Childhood Education.</p>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <article class="fz-card fz-r"><span class="fz-ic"><i class="bi bi-flower1" aria-hidden="true"></i></span>
                        <h3>Foundational Learning</h3>
                        <p>Growing importance of strong foundational learning in a child's formative years.</p>
                    </article>
                </div>
            </div>
            <p class="fz-note">Preschool education is one of the most meaningful businesses where social impact and financial sustainability grow together.</p>
        </div>
    </section>

    <!-- ===== IDEAL PARTNERS ===== -->
    <section class="fz-sec fz-ideal" aria-labelledby="fzIdealTitle">
        <div class="container-xl">
            <div class="fz-head">
                <p class="fz-sub">Ideal Partners</p>
                <h2 id="fzIdealTitle">Who Can Become an MRV Franchise Partner?</h2>
                <p class="fz-intro">You don't need prior education experience. Our ideal partners include:</p>
            </div>
            <ul class="fz-chips">
                <li><i class="bi bi-check2-circle" aria-hidden="true"></i>Women Entrepreneurs</li>
                <li><i class="bi bi-check2-circle" aria-hidden="true"></i>Homemakers</li>
                <li><i class="bi bi-check2-circle" aria-hidden="true"></i>Teachers</li>
                <li><i class="bi bi-check2-circle" aria-hidden="true"></i>School Owners</li>
                <li><i class="bi bi-check2-circle" aria-hidden="true"></i>Corporate Professionals</li>
                <li><i class="bi bi-check2-circle" aria-hidden="true"></i>Business Owners</li>
                <li><i class="bi bi-check2-circle" aria-hidden="true"></i>Education Enthusiasts</li>
                <li><i class="bi bi-check2-circle" aria-hidden="true"></i>Investors</li>
                <li><i class="bi bi-check2-circle" aria-hidden="true"></i>NRI Investors</li>
                <li><i class="bi bi-check2-circle" aria-hidden="true"></i>Retired Professionals</li>
                <li><i class="bi bi-check2-circle" aria-hidden="true"></i>Passionate Parents</li>
            </ul>
            <p class="fz-note">If you are passionate about children's education, we provide the systems, complete training and continuous support.</p>
        </div>
    </section>

    <!-- ===== WHY PARTNER ===== -->
    <section class="fz-sec fz-partner" aria-labelledby="fzPartnerTitle">
        <div class="container-xl">
            <div class="fz-head">
                <p class="fz-sub">Partnership</p>
                <h2 id="fzPartnerTitle">Why Partner with MRV International?</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <blockquote class="fz-quote">"To master your craft, learn from the experts, for in their wisdom lies the path to your excellence."</blockquote>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <p class="fz-text">MRV International leverages its extensive experience and comprehensive domain expertise to offer tailored solutions that empower industry verticals to thrive in today's competitive marketplace. By applying a thorough understanding of various industries, MRV International helps businesses enhance their operational efficiency, innovate strategically, and position themselves for long-term success.</p>
                        </div>
                        <div class="col-md-6">
                            <p class="fz-text">This in-depth knowledge allows them to guide organizations in overcoming challenges, maximizing opportunities, and achieving a distinct competitive advantage in Early education. Through collaboration and cutting-edge insights, MRV International drives growth and transformation of the franchise just to taste the success.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== ERUDITION ===== -->
    <section class="fz-sec fz-erd" aria-labelledby="fzErdTitle">
        <div class="container-xl">
            <div class="row align-items-center gy-5 gx-lg-5">
                <div class="col-lg-5">
                    <figure class="fz-photo">
                        <img src="assets/images/activities/facilities-main.webp" alt="MRV classroom" width="700" height="700" loading="lazy" decoding="async">
                        <figcaption><i class="bi bi-lightbulb-fill" aria-hidden="true"></i>MRV classroom</figcaption>
                    </figure>
                </div>
                <div class="col-lg-7">
                    <p class="fz-sub fz-sub--left">Erudition</p>
                    <h2 class="fz-h2" id="fzErdTitle">Specially Designed Curriculum — Erudition</h2>
                    <p class="fz-text">The curriculum designed by Dr. Pranavi Luthra is well-researched, age-appropriate, and theme-based, grounded in the philosophical, psychological, and sociological principles of child development. It focuses on the holistic development of children, addressing not only academics but also their emotional well-being, social skills, physical health, and moral growth.</p>
                    <p class="fz-text">The implementation and delivery of this curriculum are guided by Howard Gardner's Multiple Intelligence Theory, which recognizes that individuals possess different types of intelligence, such as linguistic, logical-mathematical, spatial, musical, bodily-kinesthetic, interpersonal, intrapersonal, and naturalistic. This ensures a well-rounded, personalized learning experience for each child.</p>
                    <ul class="fz-chips fz-chips--left">
                        <li>Linguistic</li>
                        <li>Logical-Mathematical</li>
                        <li>Spatial</li>
                        <li>Musical</li>
                        <li>Bodily-Kinesthetic</li>
                        <li>Interpersonal</li>
                        <li>Intrapersonal</li>
                        <li>Naturalistic</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== PROFESSIONAL TEAM ===== -->
    <section class="fz-sec fz-team" aria-labelledby="fzTeamTitle">
        <div class="container-xl">
            <div class="fz-head">
                <p class="fz-sub">Our Team</p>
                <h2 id="fzTeamTitle">Professional Team</h2>
                <p class="fz-intro"><em>'Your investment matters to us'</em><br>Thus our professional team stands by you to grow and succeed in your franchise business. There are two streams of expertise in the team — Education and Business.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6">
                    <article class="fz-card fz-card--left fz-b">
                        <span class="fz-ic"><i class="bi bi-graph-up-arrow" aria-hidden="true"></i></span>
                        <h3>Business Development &amp; Operations</h3>
                        <p>With a specialized Business development and operation team, the franchise gets support from marketing, legal compliance, financial planning, and business expansion.</p>
                    </article>
                </div>
                <div class="col-md-6">
                    <article class="fz-card fz-card--left fz-r">
                        <span class="fz-ic"><i class="bi bi-mortarboard-fill" aria-hidden="true"></i></span>
                        <h3>Education Team</h3>
                        <p>The education team provides regular training for implementing the curriculum, understanding the child, learning educational theories, and integrating the home into the learning program. The Franchise Manager checks the implementation of the program through personal and online audits, maintaining the core values of your brand.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== SUPPORT SYSTEM ===== -->
    <section class="fz-sec fz-support" aria-labelledby="fzSupTitle">
        <div class="container-xl">
            <div class="fz-head">
                <p class="fz-sub">Support</p>
                <h2 id="fzSupTitle">What You Receive: Unparalleled Support System</h2>
                <p class="fz-intro">Total handholding for Education &amp; Business know-how</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="fz-sgroup fz-b">
                        <h3 class="fz-gtitle"><span class="fz-ic"><i class="bi bi-briefcase-fill" aria-hidden="true"></i></span>Business</h3>
                        <div class="fz-block">
                            <h4>Establishment</h4>
                            <ul>
                                <li>Choosing the location, architecture &amp; interiors</li>
                                <li>Furniture and fixtures</li>
                                <li>Equipment, teaching aids, and tools</li>
                                <li>Recruitment of staff</li>
                            </ul>
                        </div>
                        <div class="fz-block">
                            <h4>Enrolments</h4>
                            <ul>
                                <li>Marketing collaterals</li>
                                <li>Launch event</li>
                                <li>Enrollment strategy</li>
                            </ul>
                        </div>
                        <div class="fz-block">
                            <h4>Operations</h4>
                            <ul>
                                <li>Policies, Procedures &amp; SOP's</li>
                                <li>Operations of all processes</li>
                                <li>School ERP</li>
                            </ul>
                        </div>
                        <div class="fz-block">
                            <h4>Financials</h4>
                            <ul>
                                <li>School fees and other charges</li>
                                <li>Incentive and bonuses</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="fz-sgroup fz-r">
                        <h3 class="fz-gtitle"><span class="fz-ic"><i class="bi bi-book-half" aria-hidden="true"></i></span>Education</h3>
                        <div class="fz-block">
                            <h4>Curriculum and Course Material</h4>
                            <ul>
                                <li>Monthly curriculum</li>
                                <li>Worksheets, TRC's, VCS &amp; ACS</li>
                                <li>Time Table and scheduling</li>
                            </ul>
                        </div>
                        <div class="fz-block">
                            <h4>Course Delivery Material and Guidelines</h4>
                            <ul>
                                <li>Celeration Manuals</li>
                                <li>Activities Manuals</li>
                                <li>Experiential Learning Manuals</li>
                                <li>AV Resources</li>
                            </ul>
                        </div>
                        <div class="fz-block">
                            <h4>Learning Outcomes Material</h4>
                            <ul>
                                <li>Review sheets</li>
                                <li>Observation Sheets</li>
                                <li>Recall sheets</li>
                            </ul>
                        </div>
                        <div class="fz-block">
                            <h4>Training</h4>
                            <p>Continuous and ongoing training for business and Education process</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== TECHNOLOGY & AI ===== -->
    <section class="fz-sec fz-tech" aria-labelledby="fzTechTitle">
        <div class="container-xl">
            <div class="fz-head">
                <span class="fz-techic" aria-hidden="true"><i class="bi bi-laptop"></i></span>
                <p class="fz-sub">Technology &amp; AI</p>
                <h2 id="fzTechTitle">Modern Schools Need Modern Systems</h2>
                <p class="fz-intro">Every franchise receives technology support for:</p>
            </div>
            <ul class="fz-chips">
                <li>Admission Management</li>
                <li>Fee Management</li>
                <li>Student Records</li>
                <li>Parent Communication</li>
                <li>Attendance</li>
                <li>CRM</li>
                <li>Marketing Support</li>
                <li>AI Content Support</li>
                <li>Social Media Assistance</li>
                <li>School Management Systems</li>
            </ul>
            <p class="fz-note">Technology allows school owners to spend less time managing paperwork and more time leading education.</p>
        </div>
    </section>

    <!-- ===== OUR PROMISE ===== -->
    <section class="fz-sec fz-promise" aria-labelledby="fzPromTitle">
        <div class="container-xl">
            <div class="fz-head">
                <p class="fz-sub">Commitment</p>
                <h2 id="fzPromTitle">Our Promise to You</h2>
                <p class="fz-intro">We don't just license a brand — we build lasting partnerships rooted in trust and results.</p>
            </div>
            <div class="row g-4">
                <div class="col-sm-6 col-lg-3">
                    <article class="fz-card fz-r"><span class="fz-ic"><i class="bi bi-eye-fill" aria-hidden="true"></i></span>
                        <h3>Transparent Systems</h3>
                        <p>Clear processes, open communication, and no hidden surprises at any stage.</p>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <article class="fz-card fz-b"><span class="fz-ic"><i class="bi bi-people-fill" aria-hidden="true"></i></span>
                        <h3>Continuous Handholding</h3>
                        <p>Dedicated support from launch through every stage of your school’s growth.</p>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <article class="fz-card fz-y"><span class="fz-ic"><i class="bi bi-heart-fill" aria-hidden="true"></i></span>
                        <h3>Ethical, Child-First Approach</h3>
                        <p>Every decision prioritises children's wellbeing, safety, and holistic development.</p>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <article class="fz-card fz-g"><span class="fz-ic"><i class="bi bi-link-45deg" aria-hidden="true"></i></span>
                        <h3>Long-Term Partnership</h3>
                        <p>Not just licensing — a committed alliance where we grow together.</p>
                    </article>
                </div>
            </div>
            <p class="fz-grow">We grow together.</p>
        </div>
    </section>

    <!-- ===== PROCESS + FINAL CTA ===== -->
    <section class="fz-sec fz-process" aria-labelledby="fzProcTitle">
        <div class="container-xl">
            <div class="fz-head">
                <p class="fz-sub">Ready to Begin?</p>
                <h2 id="fzProcTitle">Apply for Franchise Partnership</h2>
                <p class="fz-intro">Let's Build a Preschool That Parents Trust<br>And Children Love to Come To</p>
            </div>

            <ol class="fz-steps">
                <li class="fz-step fz-r"><span class="fz-num">01</span>
                    <h3>We review your application</h3>
                    <p>Our team assesses your profile and interest area.</p>
                </li>
                <li class="fz-step fz-b"><span class="fz-num">02</span>
                    <h3>Introductory discussion</h3>
                    <p>A one-on-one call to understand your goals and vision.</p>
                </li>
                <li class="fz-step fz-y"><span class="fz-num">03</span>
                    <h3>Location &amp; feasibility check</h3>
                    <p>We evaluate site potential and market opportunity.</p>
                </li>
                <li class="fz-step fz-g"><span class="fz-num">04</span>
                    <h3>Detailed proposal &amp; agreement</h3>
                    <p>Receive a tailored franchise plan and next steps.</p>
                </li>
            </ol>

            <div class="fz-cta">
                <h2>Start Your Application</h2>
                <p>Join the MRV International family and build a preschool with purpose.</p>
                <div class="fz-cta-act">
                    <a href="#apply" class="btn btn-yellow-sgs btn-lg">Apply Now →</a>
                    <span class="fz-or">or call us</span>
                    <a href="tel:+919250900572" class="fz-tel"><i class="bi bi-telephone-fill" aria-hidden="true"></i>+91 9250900572</a>
                    <a href="tel:+919250900573" class="fz-tel"><i class="bi bi-telephone-fill" aria-hidden="true"></i>+91 9250900573</a>
                    <a href="https://wa.me/919250900572" class="fz-wa" target="_blank" rel="noopener"><i class="bi bi-whatsapp" aria-hidden="true"></i>WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>



</main>


<?php
$content = ob_get_clean();
include_once  'layout.php';
?>