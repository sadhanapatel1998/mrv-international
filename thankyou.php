<?php
$type = ($_GET['type'] ?? '') === 'franchise' ? 'franchise' : 'contact';

$title = 'Thank You | MRV International Pre-School & Day Care';
$description = 'Thank you for contacting MRV International Pre-School & Day Care. Our team will get back to you shortly.';
$keywords = 'MRV International Pre-School, Thank You';
$canonical = 'https://mrvinternational.in/thankyou';

$heading = $type === 'franchise'
    ? 'Thank You for Your Franchise Application!'
    : 'Thank You for Reaching Out!';

$subtext = $type === 'franchise'
    ? 'We have received your franchise partnership enquiry. Our franchise development team will review your details and connect with you within 24 hours.'
    : 'We have received your message. Our admissions & parent support team will contact you shortly to assist with your enquiry.';

ob_start();
?>

<main id="main">

    <!-- ===== PAGE BANNER ===== -->
    <section class="page-banner" aria-labelledby="pageTitle">
        <div class="container-xl pb-inner">
            
            <h1 class="pb-title" id="pageTitle"><?= htmlspecialchars($heading) ?></h1>
            <p class="pb-text"><?= htmlspecialchars($subtext) ?></p>
            <nav aria-label="Breadcrumb">
                <ol class="pb-crumb">
                    <li><a href="./"><i class="bi bi-house-heart-fill" aria-hidden="true"></i>Home</a></li>
                    <li aria-current="page">Thank You</li>
                </ol>
            </nav>
        </div>

        <div class="pb-deco" aria-hidden="true">
            <span class="pb-sun"><svg viewBox="0 0 100 100">
                    <g class="pb-sun-rays" stroke="#fbc02d" stroke-width="6" stroke-linecap="round">
                        <path d="M50 4v12M50 84v12M4 50h12M84 50h12M17 17l9 9M74 74l9 9M17 83l9-9M74 26l9-9" />
                    </g>
                    <circle cx="50" cy="50" r="22" fill="#fbc02d" />
                    <circle cx="43" cy="47" r="2.5" fill="#1c1c1c" />
                    <circle cx="57" cy="47" r="2.5" fill="#1c1c1c" />
                    <path d="M42 56q8 7 16 0" fill="none" stroke="#1c1c1c" stroke-width="2.5" stroke-linecap="round" />
                </svg></span>
            <span class="pb-cloud pb-cloud--1"><svg viewBox="0 0 120 64">
                    <path fill="#fff" d="M28 60h66a24 24 0 0 0 2-48A32 32 0 0 0 38 14 23 23 0 0 0 28 60z" />
                </svg></span>
            <span class="pb-star pb-star--2"><svg viewBox="0 0 24 24">
                    <path d="M12 2l2.9 6.6 7.1.6-5.4 4.7 1.7 7-6.3-3.8-6.3 3.8 1.7-7L2 9.2l7.1-.6z" />
                </svg></span>
            <span class="pb-balloon"><svg viewBox="0 0 40 80">
                    <path d="M20 52c-3 8 4 12 0 18s2 8 0 10" fill="none" stroke="#2b8fd8" stroke-width="1.5" />
                    <ellipse cx="20" cy="24" rx="17" ry="22" fill="#e3242b" />
                    <path d="M16 46h8l-4 6z" fill="#e3242b" />
                    <ellipse cx="13" cy="16" rx="4" ry="7" fill="#fff" opacity=".45" />
                </svg></span>
        </div>
    </section>

    <!-- ===== NEXT STEPS ===== -->
    <section class="py-5" aria-label="Next steps">
        <div class="container-xl">
            <div class="ct-form-wrap text-center mx-auto" style="max-width: 700px;">
                <span class="d-inline-flex align-items-center justify-content-center rounded-circle mb-3" style="width:72px;height:72px;background:#e8f7ec;color:#1b6b32;font-size:2rem;">
                    <i class="bi bi-check-lg" aria-hidden="true"></i>
                </span>
                <h2 class="ct-form-title">What Happens Next?</h2>
                <p class="ct-form-sub mb-4">Our team will review your request and reach out to you on your phone or email. Need immediate assistance? Call us directly on <a href="tel:+919250900572" class="fw-semibold text-decoration-none">+91 9250900572</a>.</p>
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="./" class="btn btn-sgs btn-lg">Back to Home</a>
                    <a href="<?= $type === 'franchise' ? 'franchise' : 'programs' ?>" class="btn btn-outline-sgs btn-lg"><?= $type === 'franchise' ? 'Back to Franchise' : 'Explore Programs' ?></a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
$content = ob_get_clean();
include_once 'layout.php';
?>

