<!DOCTYPE html>
<html lang="en-IN">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <title><?= htmlspecialchars($title ?? 'MRV International Pre-School & Day Care | New Mahavir Nagar, Delhi') ?></title>
    <meta name="description" content="<?= htmlspecialchars($description ?? 'MRV International Pre-School & Day Care in New Mahavir Nagar, New Delhi, offers Playgroup, Nursery, LKG, UKG and safe day care facilities. Admissions Open. Call 9250900572.') ?>">
    <meta name="keywords" content="<?= htmlspecialchars($keywords ?? 'MRV International Pre-School, MRV Day Care, Preschool in New Mahavir Nagar, Play School in New Delhi, Nursery Admission Delhi, Playgroup, LKG, UKG, Day Care Centre in New Mahavir Nagar, Preschool Admission Delhi') ?>">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <link rel="canonical" href="<?= htmlspecialchars((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . strtok($_SERVER['REQUEST_URI'], '?')) ?>">
    <meta name="author" content="Hover Business Services LLP">
    <meta name="theme-color" content="#e3242b">
    <link rel="icon" type="image/png" href="assets/images/logo.png">

    <!-- Open Graph / Social Media SEO -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="MRV International Pre-School &amp; Day Care">
    <meta property="og:title" content="<?= htmlspecialchars($title ?? 'MRV International Pre-School & Day Care | New Mahavir Nagar, Delhi') ?>">
    <meta property="og:description" content="<?= htmlspecialchars($description ?? 'Pre-school and day care in New Mahavir Nagar, New Delhi. Playgroup to UKG. Admissions Open.') ?>">
    <meta property="og:url" content="<?= htmlspecialchars((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . strtok($_SERVER['REQUEST_URI'], '?')) ?>">
    <meta property="og:image" content="assets/images/logo.png">
    <meta property="og:locale" content="en_IN">


    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@600;700;800&amp;family=Poppins:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/about.css" rel="stylesheet">
    <link href="assets/css/franchise.css" rel="stylesheet">
    <link href="assets/css/breadcrumb.css" rel="stylesheet">
    <link href="assets/css/vision.css" rel="stylesheet">
    <link href="assets/css/team.css" rel="stylesheet">
    <link href="assets/css/services.css" rel="stylesheet">
    <link href="assets/css/contact.css" rel="stylesheet">

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": ["Preschool", "ChildCare"],
            "name": "MRV International Pre-School & Day Care",
            "url": "https://www.your-domain.com/",
            "logo": "https://www.your-domain.com/assets/images/logo.png",
            "image": "https://www.your-domain.com/assets/images/og-image.jpg",
            "description": "Pre-school and day care in New Mahavir Nagar, New Delhi offering Playgroup, Nursery, LKG, UKG and full-day child care.",
            "telephone": ["+919250900572", "+919250900573"],
            "email": "mrvonlinemarketing@gmail.com",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "36A, Krishna Park Extn, New Mahavir Nagar",
                "addressLocality": "New Delhi",
                "addressRegion": "Delhi",
                "postalCode": "110018",
                "addressCountry": "IN"
            },
            "areaServed": "New Mahavir Nagar, Krishna Park Extension, West Delhi"
        }
    </script>
</head>

<body>

    <!-- Header Section Start -->

    <?php require_once("include/header.php") ?>

    <!-- Header Section End -->

    <?= $content ?? '' ?>


    <!-- Footer Section Start -->

    <?php require_once("include/footer.php") ?>

    <!-- Footer Section end -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="assets/js/script.js" defer></script>
    <script src="assets/js/gallery.js" defer></script>
    <script src="assets/js/testimonials.js" defer></script>
    <script src="assets/js/footer.js" defer></script>
</body>

</html>