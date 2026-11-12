<?php
$title = 'Contact Us | MRV International Pre-School & Day Care, New Mahavir Nagar, Delhi';
$description = 'Contact MRV International Pre-School & Day Care, 36A Krishna Park Extension, New Mahavir Nagar, New Delhi 110018. Call 9250900572 for admissions, school visits and enquiries.';
$keywords = 'Contact MRV International Pre-School, Preschool Admission New Mahavir Nagar, Play School Contact Delhi, Day Care Enquiry New Delhi, Nursery Admission Enquiry';
$canonical = 'https://mrvinternational.in/contact-us';

/* ---------- FORM HANDLER ---------- */
$errors = [];
$old = ['name' => '', 'phone' => '', 'email' => '', 'program' => '', 'message' => ''];
$sent = isset($_GET['sent']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Honeypot (bots fill this hidden field)
    if (!empty($_POST['website'])) {
        header('Location: contact-us?sent=1#contact');
        exit;
    }

    foreach ($old as $k => $v) {
        $old[$k] = trim(strip_tags($_POST[$k] ?? ''));
    }

    if (mb_strlen($old['name']) < 2) {
        $errors['name'] = 'Please enter your name.';
    }
    if (!preg_match('/^[0-9+\-\s]{10,15}$/', $old['phone'])) {
        $errors['phone'] = 'Please enter a valid phone number.';
    }
    if ($old['email'] !== '' && !filter_var($old['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Please enter a valid email address.';
    }
    if (mb_strlen($old['message']) < 5) {
        $errors['message'] = 'Please write a short message.';
    }

    if (!$errors) {
        $to      = 'mrvonlinemarketing@gmail.com';
        $subject = 'New Enquiry from Website - ' . $old['name'];
        $body    = "Name: {$old['name']}\n"
            . "Phone: {$old['phone']}\n"
            . "Email: " . ($old['email'] ?: 'Not provided') . "\n"
            . "Programme: " . ($old['program'] ?: 'Not selected') . "\n\n"
            . "Message:\n{$old['message']}\n";
        $headers = "From: no-reply@mrvinternational.in\r\n";
        if ($old['email'] !== '') {
            $headers .= "Reply-To: {$old['email']}\r\n";
        }
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        if (@mail($to, $subject, $body, $headers)) {
            header('Location: contact-us?sent=1#contact');
            exit;
        }
        $errors['form'] = 'Sorry, we could not send your message right now. Please call us on +91 9250900572.';
    }
}

$mapQuery = '36A+Krishna+Park+Extension+New+Mahavir+Nagar+New+Delhi+110018';
ob_start();
?>

<main id="main">

    <!-- ===== PAGE BANNER / BREADCRUMB ===== -->
    <section class="page-banner" aria-labelledby="pageTitle">
        <div class="container-xl pb-inner">
            <h1 class="pb-title" id="pageTitle">Contact Us</h1>
            <p class="pb-text">We would love to hear from you. Reach out for admissions, school visits or any questions.</p>

            <nav aria-label="Breadcrumb">
                <ol class="pb-crumb">
                    <li><a href="./"><i class="bi bi-house-heart-fill" aria-hidden="true"></i>Home</a></li>
                    <li aria-current="page">Contact Us</li>
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


    <!-- ===== CONTACT ===== -->
    <section class="contact" id="contact" aria-labelledby="contactTitle">
        <div class="container-xl">

            <div class="sec-head">
                <p class="sec-sub">We're Just a Call Away</p>
                <h2 id="contactTitle">Get in Touch With Us</h2>
                <p class="sec-intro">Have a question about admissions, programs or day care? Call us, write to us or visit the school. Our team will be happy to help you.</p>
            </div>

            <!-- Info cards -->
            <div class="row g-4 ct-cards">
                <div class="col-md-6 col-lg-3">
                    <article class="ct-card ct-card--red">
                        <span class="ct-icon"><i class="bi bi-telephone-fill" aria-hidden="true"></i></span>
                        <h3>Call Us</h3>
                        <p><a href="tel:+919250900572">+91 9250900572</a></p>
                        <p><a href="tel:+919250900573">+91 9250900573</a></p>
                    </article>
                </div>
                <div class="col-md-6 col-lg-3">
                    <article class="ct-card ct-card--blue">
                        <span class="ct-icon"><i class="bi bi-envelope-fill" aria-hidden="true"></i></span>
                        <h3>Email Us</h3>
                        <p><a href="mailto:mrvonlinemarketing@gmail.com">mrvonlinemarketing@gmail.com</a></p>
                    </article>
                </div>
                <div class="col-md-6 col-lg-3">
                    <article class="ct-card ct-card--yellow">
                        <span class="ct-icon"><i class="bi bi-geo-alt-fill" aria-hidden="true"></i></span>
                        <h3>Visit Us</h3>
                        <address>
                            <a href="https://www.google.com/maps/search/?api=1&amp;query=<?= $mapQuery ?>" target="_blank" rel="noopener">WZ 36A, Krishna Park, New Mahavir Nagar, New Delhi - 110018</a>
                        </address>
                    </article>
                </div>
                <div class="col-md-6 col-lg-3">
                    <article class="ct-card ct-card--green">
                        <span class="ct-icon"><i class="bi bi-whatsapp" aria-hidden="true"></i></span>
                        <h3>WhatsApp</h3>
                        <p><a href="https://wa.me/919250900572" target="_blank" rel="noopener">Chat with us</a></p>
                    </article>
                </div>
            </div>

            <!-- Form + Map -->
            <div class="row g-4 g-lg-5 ct-main">

                <div class="col-lg-6">
                    <div class="ct-form-wrap">
                        <h3 class="ct-form-title">Send Us a Message</h3>
                        <p class="ct-form-sub">Fill in the form and we will get back to you soon.</p>

                        <?php if ($sent): ?>
                            <div class="ct-alert ct-alert--ok" role="status">
                                <i class="bi bi-check-circle-fill" aria-hidden="true"></i>
                                Thank you! Your message has been sent. We will contact you shortly.
                            </div>
                        <?php endif; ?>

                        <?php if (!empty($errors['form'])): ?>
                            <div class="ct-alert ct-alert--err" role="alert">
                                <i class="bi bi-exclamation-triangle-fill" aria-hidden="true"></i>
                                <?= htmlspecialchars($errors['form']) ?>
                            </div>
                        <?php endif; ?>

                        <form class="ct-form" method="post" action="contact-us#contact" novalidate>
                            <div class="row g-3">

                                <div class="col-sm-6">
                                    <label for="ctName" class="ct-label">Your Name <span aria-hidden="true">*</span></label>
                                    <input type="text" id="ctName" name="name" class="ct-input<?= isset($errors['name']) ? ' is-invalid' : '' ?>"
                                        value="<?= htmlspecialchars($old['name']) ?>" placeholder="Parent's name" autocomplete="name" required>
                                    <?php if (isset($errors['name'])): ?><small class="ct-error"><?= htmlspecialchars($errors['name']) ?></small><?php endif; ?>
                                </div>

                                <div class="col-sm-6">
                                    <label for="ctPhone" class="ct-label">Phone Number <span aria-hidden="true">*</span></label>
                                    <input type="tel" id="ctPhone" name="phone" class="ct-input<?= isset($errors['phone']) ? ' is-invalid' : '' ?>"
                                        value="<?= htmlspecialchars($old['phone']) ?>" placeholder="10-digit mobile number" autocomplete="tel" inputmode="tel" required>
                                    <?php if (isset($errors['phone'])): ?><small class="ct-error"><?= htmlspecialchars($errors['phone']) ?></small><?php endif; ?>
                                </div>

                                <div class="col-sm-6">
                                    <label for="ctEmail" class="ct-label">Email (optional)</label>
                                    <input type="email" id="ctEmail" name="email" class="ct-input<?= isset($errors['email']) ? ' is-invalid' : '' ?>"
                                        value="<?= htmlspecialchars($old['email']) ?>" placeholder="you@example.com" autocomplete="email">
                                    <?php if (isset($errors['email'])): ?><small class="ct-error"><?= htmlspecialchars($errors['email']) ?></small><?php endif; ?>
                                </div>

                                <div class="col-sm-6">
                                    <label for="ctProgram" class="ct-label">Programme</label>
                                    <select id="ctProgram" name="program" class="ct-input">
                                        <option value="">Select a programme</option>
                                        <?php foreach (['Playgroup', 'Nursery', 'LKG', 'UKG', 'Day Care'] as $p): ?>
                                            <option value="<?= $p ?>" <?= $old['program'] === $p ? 'selected' : '' ?>><?= $p ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="col-12">
                                    <label for="ctMessage" class="ct-label">Message <span aria-hidden="true">*</span></label>
                                    <textarea id="ctMessage" name="message" rows="5" class="ct-input<?= isset($errors['message']) ? ' is-invalid' : '' ?>"
                                        placeholder="Tell us about your child's age and what you would like to know" required><?= htmlspecialchars($old['message']) ?></textarea>
                                    <?php if (isset($errors['message'])): ?><small class="ct-error"><?= htmlspecialchars($errors['message']) ?></small><?php endif; ?>
                                </div>

                                <!-- Honeypot: keep hidden -->
                                <div class="ct-hp" aria-hidden="true">
                                    <label for="ctWebsite">Website</label>
                                    <input type="text" id="ctWebsite" name="website" tabindex="-1" autocomplete="off">
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-sgs btn-lg ct-submit">Send Message<i class="bi bi-send-fill ms-2" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="ct-map-wrap">
                        <div class="ct-map">
                            <iframe
                                title="Map showing MRV International Pre-School & Day Care in New Mahavir Nagar, New Delhi"
                                src="https://www.google.com/maps?q=<?= $mapQuery ?>&amp;output=embed"
                                width="600" height="450" style="border:0" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
                        </div>
                        <a class="btn btn-outline-sgs ct-directions" href="https://www.google.com/maps/search/?api=1&amp;query=<?= $mapQuery ?>" target="_blank" rel="noopener">
                            <i class="bi bi-signpost-split-fill me-2" aria-hidden="true"></i>Get Directions
                        </a>
                    </div>
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
                "telephone": ["+919250900572", "+919250900573"],
                "email": "mrvonlinemarketing@gmail.com",
                "address": {
                    "@type": "PostalAddress",
                    "streetAddress": "36A, Krishna Park Extension, New Mahavir Nagar",
                    "addressLocality": "New Delhi",
                    "addressRegion": "Delhi",
                    "postalCode": "110018",
                    "addressCountry": "IN"
                }
            }
        </script>
    </section>
    <!-- ===== CONTACT END ===== -->

</main>


<?php
$content = ob_get_clean();
include_once  'layout.php';
?>