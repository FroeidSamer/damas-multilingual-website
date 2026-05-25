<?php
include_once 'lang/lang_main.php';
?>
<!DOCTYPE html>
<html lang="<?= $lang; ?>">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!-- Basic Meta Tags -->
  <title><?= $words['companyName']; ?></title>
  <meta name="description" content="<?= $words['metaDescription']; ?>">
  <meta name="keywords" content="<?= $words['metaKeywords']; ?>">
  <meta name="author" content="Froeid S. Kostandy">

  <!-- Open Graph Meta Tags -->
  <meta property="og:title" content="CAPITAN - <?php echo $words['companyName']; ?>">
  <meta property="og:type" content="article">
  <meta property="og:description" content="<?= $words['metaDescription']; ?>">
  <meta property="og:url" content="https://damas-abbruch.de">
  <meta property="og:image" content="assets/img/meta-cover.webp">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="800">

  <!-- Twitter Card Meta Tags -->
  <meta name="twitter:card" content="summary_large_image">
<<<<<<< HEAD
  <meta name="twitter:title" content="CAPITAN - <?php echo $words['companyName']; ?>">
  <meta name="twitter:site" content="@capitanbaude">
=======
  <meta name="twitter:title" content="<?= $words['gtcPageTitle']; ?> - <?= $words['companyName']; ?>">
  <meta name="twitter:site" content="@damas-abbruch.de">
>>>>>>> ccfe4da4c4ebe56d5da27eefe2425de6eb3fe8eb
  <meta name="twitter:description" content="<?= $words['metaDescription']; ?>">
  <meta name="twitter:image" content="assets/img/meta-cover.webp">

  <!-- Favicons -->
  <link href="assets/img/logo/4- White Version300 ppi.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Preconnect - تحسين بسيط -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <!-- Fonts - أوزان محددة فقط -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page">
  <?php include 'includes/header.php'; ?>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="container">
        <h1><?= $words['gtcPageTitle']; ?></h1>
      </div>
    </div>

    <!-- GTC Content Section -->
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 mx-auto">

            <div class="content-section mb-5">
              <h2><?= $words['scopeApplicationTitle']; ?></h2>
              <p><?= str_replace('{{companyName}}', $words['companyName'], $words['scopeApplicationText']); ?></p>
            </div>

            <div class="content-section mb-5">
              <h2><?= $words['servicesTitleGTC']; ?></h2>
              <p><?= $words['servicesIntroText']; ?></p>
              <ul>
                <li><strong><?= $words['demolitionServicesText']; ?></strong></li>
                <li><strong><?= $words['guttingServicesText']; ?></strong></li>
                <li><strong><?= $words['caretakerServicesText']; ?></strong></li>
                <li><strong><?= $words['gardenMaintenanceText']; ?></strong></li>
                <li><strong><?= $words['finalCleaningServicesText']; ?></strong></li>
              </ul>
              <p><?= $words['specificScopeText']; ?></p>
            </div>

            <div class="content-section mb-5">
              <h2><?= $words['quotationsOrdersTitle']; ?></h2>
              <p><?= $words['quotationsOrdersText1']; ?></p>
              <p><?= $words['quotationsOrdersText2']; ?></p>
            </div>

            <div class="content-section mb-5">
              <h2><?= $words['pricingPaymentTitle']; ?></h2>
              <p><?= $words['pricingPaymentText1']; ?></p>
              <p><?= $words['pricingPaymentText2']; ?></p>
              <ul>
                <li><?= $words['paymentTerm1']; ?></li>
                <li><?= $words['paymentTerm2']; ?></li>
                <li><?= $words['paymentTerm3']; ?></li>
              </ul>
              <p><?= $words['pricingPaymentText3']; ?></p>
            </div>

            <div class="content-section mb-5">
              <h2><?= $words['projectExecutionTitle']; ?></h2>
              <p><?= $words['projectExecutionText1']; ?></p>
              <p><?= $words['projectExecutionText2']; ?></p>
            </div>

            <div class="content-section mb-5">
              <h2><?= $words['clientResponsibilitiesTitle']; ?></h2>
              <p><?= $words['clientResponsibilitiesText']; ?></p>
              <ul>
                <li><?= $words['clientResp1']; ?></li>
                <li><?= $words['clientResp2']; ?></li>
                <li><?= $words['clientResp3']; ?></li>
                <li><?= $words['clientResp4']; ?></li>
                <li><?= $words['clientResp5']; ?></li>
              </ul>
            </div>

            <div class="content-section mb-5">
              <h2><?= $words['cancellationChangesTitle']; ?></h2>
              <p><?= $words['cancellationChangesText']; ?></p>
              <ul>
                <li><?= $words['cancellationFee1']; ?></li>
                <li><?= $words['cancellationFee2']; ?></li>
                <li><?= $words['cancellationFee3']; ?></li>
                <li><?= $words['cancellationFee4']; ?></li>
              </ul>
            </div>

            <div class="content-section mb-5">
              <h2><?= $words['liabilityInsuranceTitle']; ?></h2>
              <p><?= $words['liabilityInsuranceText1']; ?></p>
              <p><?= $words['liabilityInsuranceText2']; ?></p>
              <ul>
                <li><?= $words['liabilityExclusion1']; ?></li>
                <li><?= $words['liabilityExclusion2']; ?></li>
                <li><?= $words['liabilityExclusion3']; ?></li>
                <li><?= $words['liabilityExclusion4']; ?></li>
              </ul>
            </div>

            <div class="content-section mb-5">
              <h2><?= $words['warrantyTitleGTC']; ?></h2>
              <p><?= $words['warrantyText1']; ?></p>
              <ul>
                <li><?= $words['warrantyExclusion1']; ?></li>
                <li><?= $words['warrantyExclusion2']; ?></li>
                <li><?= $words['warrantyExclusion3']; ?></li>
                <li><?= $words['warrantyExclusion4']; ?></li>
              </ul>
            </div>

            <div class="content-section mb-5">
              <h2><?= $words['environmentalSafetyTitle']; ?></h2>
              <p><?= $words['environmentalSafetyText']; ?></p>
            </div>

            <div class="content-section mb-5">
              <h2><?= $words['dataProtectionGTCTitle']; ?></h2>
              <p><?= $words['dataProtectionGTCText']; ?> <a href="datenschutz.php"><?= $words['privacyPolicyLink']; ?></a>.</p>
            </div>

            <div class="content-section mb-5">
              <h2><?= $words['disputeResolutionTitle']; ?></h2>
              <p><?= $words['disputeResolutionText']; ?></p>
            </div>

            <div class="content-section mb-5">
              <h2><?= $words['severabilityTitle']; ?></h2>
              <p><?= $words['severabilityText']; ?></p>
            </div>

            <div class="content-section mb-5">
              <h2><?= $words['contactInformationGTCTitle']; ?></h2>
              <p><?= $words['contactInformationGTCText']; ?></p>
              <p>
                <strong><?= $words['companyName']; ?></strong><br>
                <?= $words['companyAddress']; ?><br>
                <?= $words['phone']; ?>: <a href="tel:<?= str_replace(' ', '', $words['companyPhone']); ?>"><?= $words['companyPhone']; ?></a><br>
                <?= $words['email']; ?>: <a href="mailto:<?= $words['companyEmail']; ?>"><?= $words['companyEmail']; ?></a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </section>

  </main>

  <?php
  include 'includes/footer.php';
  include 'includes/cookie.php';
  ?>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js" defer></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js" defer></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js" defer></script>

</body>

</html>