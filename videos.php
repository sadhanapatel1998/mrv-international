<?php
$title = 'Videos | MRV International Pre-School & Day Care, New Mahavir Nagar, Delhi';
$description = 'Watch videos of MRV International Pre-School & Day Care, New Mahavir Nagar, Delhi, featuring classroom activities, playtime, celebrations, school events and memorable moments of our little learners.';
$keywords = 'MRV International Pre-School Videos, Preschool Videos New Mahavir Nagar, Play School Videos Delhi, Day Care Videos, Preschool Activities Videos, School Events Videos Delhi';
$canonical = 'https://mrvinternational.in/videos';
ob_start();
?>

<main id="main">

    <!-- ===== PAGE BANNER / BREADCRUMB ===== -->
    <section class="page-banner" aria-labelledby="pageTitle">
        <div class="container-xl pb-inner">
            <h1 class="pb-title" id="pageTitle">Our Videos</h1>
            <p class="pb-text">Happy moments, fun activities and joyful celebrations from MRV International Pre-School &amp; Day Care.</p>

            <nav aria-label="Breadcrumb">
                <ol class="pb-crumb">
                    <li><a href="/"><i class="bi bi-house-heart-fill" aria-hidden="true"></i>Home</a></li>
                    <li aria-current="page">Videos</li>
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

</main>


<?php
$content = ob_get_clean();
include_once  'layout.php';
?>