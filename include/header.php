<?php
$currentPage = basename($_SERVER['PHP_SELF'] ?? 'index.php', '.php');
$programPages = ['programs', 'toddler', 'pre-nursery', 'nursery', 'kindergarten', 'day-care', 'after-school'];
$isProgramsActive = in_array($currentPage, $programPages, true);
?>
<a class="skip-link" href="#main">Skip to main content</a>

<!-- ===== HEADER ===== -->
<header class="site-header" id="siteHeader">
    <div class="topbar" id="topbar">
        <div class="container-xl d-flex flex-wrap justify-content-center justify-content-md-between align-items-center gap-1">
            <span><i class="bi bi-megaphone-fill"></i>Admission open: 2026- 27, Pre Admissions open 2027- 28</span>
            <span class="topbar-links">
                <a href="contact-us#contact"><i class="bi bi-calendar-check"></i>Book a campus visit</a>
                <a href="tel:+919250900572"><i class="bi bi-telephone-fill"></i>Call +91 9250900572</a>
            </span>
        </div>
    </div>
    <nav class="navbar navbar-expand-xl" id="navbar" aria-label="Main navigation">
        <div class="container-xl">
            <a class="navbar-brand" href="./">
                <img src="assets/images/logo.png" alt="MRV International Pre-School &amp; Day Care" width="180" height="56"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation"><i class="bi bi-list"></i></button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ms-auto align-items-xl-center">
                    <li class="nav-item"><a class="nav-link<?= $currentPage === 'index' ? ' active' : '' ?>" href="./"<?= $currentPage === 'index' ? ' aria-current="page"' : '' ?>>Home</a></li>
                    <li class="nav-item"><a class="nav-link<?= $currentPage === 'about-us' ? ' active' : '' ?>" href="about-us"<?= $currentPage === 'about-us' ? ' aria-current="page"' : '' ?>>About us</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle<?= $isProgramsActive ? ' active' : '' ?>" href="programs" id="programsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"<?= $isProgramsActive ? ' aria-current="page"' : '' ?>>Programs</a>
                        <ul class="dropdown-menu" aria-labelledby="programsDropdown">
                            <li><a class="dropdown-item<?= $currentPage === 'programs' ? ' active' : '' ?>" href="programs">All Programs</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item<?= $currentPage === 'toddler' ? ' active' : '' ?>" href="toddler">Toddler (15–24 mos)</a></li>
                            <li><a class="dropdown-item<?= $currentPage === 'pre-nursery' ? ' active' : '' ?>" href="pre-nursery">Pre-Nursery (2–3 yrs)</a></li>
                            <li><a class="dropdown-item<?= $currentPage === 'nursery' ? ' active' : '' ?>" href="nursery">Nursery (3–4 yrs)</a></li>
                            <li><a class="dropdown-item<?= $currentPage === 'kindergarten' ? ' active' : '' ?>" href="kindergarten">Kindergarten (4–5 yrs)</a></li>
                            <li><a class="dropdown-item<?= $currentPage === 'day-care' ? ' active' : '' ?>" href="day-care">Day Care</a></li>
                            <li><a class="dropdown-item<?= $currentPage === 'after-school' ? ' active' : '' ?>" href="after-school">After School</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link<?= $currentPage === 'our-team' ? ' active' : '' ?>" href="our-team"<?= $currentPage === 'our-team' ? ' aria-current="page"' : '' ?>>Our Team</a></li>
                    <li class="nav-item"><a class="nav-link<?= $currentPage === 'franchise' ? ' active' : '' ?>" href="franchise"<?= $currentPage === 'franchise' ? ' aria-current="page"' : '' ?>>Franchise</a></li>
                    <li class="nav-item"><a class="nav-link<?= $currentPage === 'contact-us' ? ' active' : '' ?>" href="contact-us"<?= $currentPage === 'contact-us' ? ' aria-current="page"' : '' ?>>Contact us</a></li>
                </ul>
                <div class="nav-cta">
                    <a href="franchise" class="btn btn-outline-sgs">Partner With Us</a>
                    <a href="contact-us#contact" class="btn btn-sgs">Enquire Now</a>
                </div>
            </div>
        </div>
    </nav>
</header>
