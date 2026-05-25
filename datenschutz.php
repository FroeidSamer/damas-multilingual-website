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
  <meta name="twitter:title" content="<?= $words['dataProtection']; ?> - <?= $words['companyName']; ?>">
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
        <h1><?= $words['dataProtectionTitle']; ?></h1>
        <p><?= $words['privacyPolicySubtitle']; ?></p>
      </div>
    </div>

    <!-- Data Protection Section -->
    <section class="content-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">

            <h2><?= $words['dataProtectionAtGlance']; ?></h2>

            <h3><?= $words['generalInformation']; ?></h3>
            <p><?= $words['dataProtectionIntro']; ?></p>

            <h3><?= $words['dataCollectionWebsite']; ?></h3>
            <p><strong><?= $words['whoResponsibleData']; ?></strong></p>
            <p><?= $words['dataProcessingOperator']; ?></p>

            <p><strong><?= $words['howCollectData']; ?></strong></p>
            <p><?= $words['dataCollectedProvided']; ?></p>
            <p><?= $words['dataCollectedAutomatically']; ?></p>

            <p><strong><?= $words['whatUseDataFor']; ?></strong></p>
            <p><?= $words['dataUsageDescription']; ?></p>

            <p><strong><?= $words['whatRightsData']; ?></strong></p>
            <p><?= $words['dataRightsDescription']; ?></p>
            <p><?= $words['contactDataProtection']; ?></p>

            <h2><?= $words['hostingTitle']; ?></h2>
            <p><?= $words['hostingIntro']; ?></p>

            <h3><?= $words['externalHosting']; ?></h3>
            <p><?= $words['externalHostingDescription']; ?></p>
            <p><?= $words['externalHostingDetails']; ?></p>

            <h2><?= $words['generalInfoMandatory']; ?></h2>

            <h3><?= $words['dataProtectionInfo']; ?></h3>
            <p><?= $words['dataProtectionDescription']; ?></p>
            <p><?= $words['dataProtectionIntro2']; ?></p>
            <p><?= $words['dataTransmissionWarning']; ?></p>

            <h3><?= $words['informationResponsibleParty']; ?></h3>
            <p><?= $words['responsiblePartyDescription']; ?></p>
            <p>
              <strong><?= $words['companyName']; ?></strong><br>
              <?= $words['companyOwner']; ?><br>
              <?= $words['street']; ?><br>
              <?= $words['postalCode']; ?>
            </p>
            <p>
              <strong><?= $words['phone']; ?>:</strong> <a href="tel:<?= str_replace(' ', '', $words['companyPhone']); ?>"><?= $words['companyPhone']; ?></a><br>
              <strong><?= $words['email']; ?>:</strong> <a href="mailto:<?= $words['companyEmail']; ?>"><?= $words['companyEmail']; ?></a>
            </p>
            <p><?= $words['responsiblePartyText']; ?></p>

            <h3><?= $words['storageDuration']; ?></h3>
            <p><?= $words['storageDurationText']; ?></p>

            <h3><?= $words['revocationConsent']; ?></h3>
            <p><?= $words['revocationConsentText']; ?></p>

            <h3><?= $words['rightObjectData']; ?></h3>
            <p><strong><?= $words['rightObjectDataText']; ?></strong></p>

            <h3><?= $words['rightComplaint']; ?></h3>
            <p><?= $words['rightComplaintText']; ?></p>

            <h3><?= $words['rightDataPortability']; ?></h3>
            <p><?= $words['rightDataPortabilityText']; ?></p>

            <h3><?= $words['informationDeletion']; ?></h3>
            <p><?= $words['informationDeletionText']; ?></p>

            <h3><?= $words['rightRestriction']; ?></h3>
            <p><?= $words['rightRestrictionText']; ?></p>
            <ul>
              <li><?= $words['rightRestrictionItem1']; ?></li>
              <li><?= $words['rightRestrictionItem2']; ?></li>
              <li><?= $words['rightRestrictionItem3']; ?></li>
              <li><?= $words['rightRestrictionItem4']; ?></li>
            </ul>

            <h2><?= $words['dataCollectionWebsiteTitle']; ?></h2>

            <h3><?= $words['cookiesTitle']; ?></h3>
            <p><?= $words['cookiesText']; ?></p>

            <h3><?= $words['contactFormTitle']; ?></h3>
            <p><?= $words['contactFormText']; ?></p>
            <p><?= $words['contactFormProcessing']; ?></p>

            <h3><?= $words['inquiryEmailTitle']; ?></h3>
            <p><?= $words['inquiryEmailText']; ?></p>

            <h2><?= $words['socialMediaTitle']; ?></h2>
            <p><?= $words['socialMediaText']; ?></p>

            <h2><?= $words['contactInformationTitle']; ?></h2>
            <p><?= $words['dataProtectionContactText']; ?></p>
            <p>
              <strong><?= $words['companyName']; ?></strong><br>
              <?= $words['companyOwner']; ?><br>
              <strong><?= $words['email']; ?>:</strong> <a href="mailto:<?= $words['companyEmail']; ?>"><?= $words['companyEmail']; ?></a><br>
              <strong><?= $words['phone']; ?>:</strong> <a href="tel:<?= str_replace([' ', '+'], '', $words['companyPhone']); ?>"><?= $words['companyPhone']; ?></a>
            </p>

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