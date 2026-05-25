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
  <meta name="twitter:title" content="<?= $words['imprintPageTitle']; ?> - <?= $words['companyName']; ?>">
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
        <h1><?= $words['imprintPageTitle']; ?></h1>
        <p><?= str_replace('{{companyName}}', $words['companyName'], $words['imprintPageDescription']); ?></p>
      </div>
    </div>

    <!-- Google Maps Section -->
    <section class="map-section" style="padding: 0; margin: 0;">
      <div class="map-container" style="height: 450px; width: 100%;">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2533.159299120991!2d8.664160388696513!3d50.58699240445341!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47bc8c2047bc58c9%3A0x47dfe93178f440fe!2sWestanlage%2062%2C%2035390%20Gie%C3%9Fen%2C%20Germany!5e0!3m2!1sen!2seg!4v1763547567568!5m2!1sen!2seg"
          width="100%"
          height="450"
          style="border:0;"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </section>

    <!-- Imprint Information Section -->
    <section class="imprint-info-section" style="padding: 60px 0; background-color: #f9f9f9;">
      <div class="container">
        <div class="row gy-4">

          <!-- Information According to § 5 TMG -->
          <div class="col-lg-4 col-md-6">
            <div class="info-card" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 3px 15px rgba(0,0,0,0.08); height: 100%;">
              <h3 style="color: var(--secondary-color); font-size: 18px; font-weight: 700; margin-bottom: 20px; border-bottom: 2px solid var(--accent-color); padding-bottom: 10px;">
                <?= $words['informationTMGTitle']; ?>
              </h3>
              <p style="margin-bottom: 8px; line-height: 1.8;">
                <strong style="color: var(--secondary-color);"><?= $words['companyOwner']; ?></strong>
              </p>
              <p style="margin-bottom: 0; line-height: 1.8; color: #666;">
                <?= $words['companyAddress']; ?>
              </p>
            </div>
          </div>

          <!-- Contact -->
          <div class="col-lg-4 col-md-6">
            <div class="info-card" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 3px 15px rgba(0,0,0,0.08); height: 100%;">
              <h3 style="color: var(--secondary-color); font-size: 18px; font-weight: 700; margin-bottom: 20px; border-bottom: 2px solid var(--accent-color); padding-bottom: 10px;">
                <?= $words['contact']; ?>
              </h3>
              <p style="margin-bottom: 10px; line-height: 1.8;">
                <strong style="color: var(--secondary-color);"><?= $words['telephone']; ?>:</strong><br>
                <a href="tel:<?= str_replace(' ', '', $words['companyPhone']); ?>" style="color: var(--accent-color); text-decoration: none;">
                  <?= $words['companyPhone']; ?>
                </a>
              </p>
              <p style="margin-bottom: 10px; line-height: 1.8;">
                <strong style="color: var(--secondary-color);">E-Mail:</strong><br>
                <a href="mailto:<?= $words['companyEmail']; ?>" style="color: var(--accent-color); text-decoration: none;">
                  <?= $words['companyEmail']; ?>
                </a>
              </p>
              <p style="margin-bottom: 0; line-height: 1.8;">
                <strong style="color: var(--secondary-color);"><?= $words['taxNumberLabel']; ?>:</strong> <?= $words['taxId']; ?>
              </p>
            </div>
          </div>

          <!-- Supervisory Authority -->
          <div class="col-lg-4 col-md-6">
            <div class="info-card" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 3px 15px rgba(0,0,0,0.08); height: 100%;">
              <h3 style="color: var(--secondary-color); font-size: 18px; font-weight: 700; margin-bottom: 20px; border-bottom: 2px solid var(--accent-color); padding-bottom: 10px;">
                <?= $words['supervisoryAuthorityTitle']; ?>
              </h3>
              <p style="line-height: 1.8; color: #666; margin-bottom: 0;">
                <?= $words['supervisoryAuthorityText']; ?>
              </p>
            </div>
          </div>

          <!-- Represented By -->
          <div class="col-lg-4 col-md-6">
            <div class="info-card" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 3px 15px rgba(0,0,0,0.08); height: 100%;">
              <h3 style="color: var(--secondary-color); font-size: 18px; font-weight: 700; margin-bottom: 20px; border-bottom: 2px solid var(--accent-color); padding-bottom: 10px;">
                <?= $words['representedByTitle']; ?>
              </h3>
              <p style="margin-bottom: 0; line-height: 1.8; color: #666;">
                <?= $words['companyOwner']; ?>
              </p>
            </div>
          </div>

          <!-- Responsible for the content -->
          <div class="col-lg-4 col-md-6">
            <div class="info-card" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 3px 15px rgba(0,0,0,0.08); height: 100%;">
              <h3 style="color: var(--secondary-color); font-size: 18px; font-weight: 700; margin-bottom: 20px; border-bottom: 2px solid var(--accent-color); padding-bottom: 10px;">
                <?= $words['responsibleContentTitle']; ?>
              </h3>
              <p style="margin-bottom: 8px; line-height: 1.8;">
                <strong style="color: var(--secondary-color);"><?= $words['companyOwner']; ?></strong>
              </p>
              <p style="margin-bottom: 0; line-height: 1.8; color: #666;">
                <?= $words['companyAddress']; ?>
              </p>
            </div>
          </div>

          <!-- Commercial Register -->
          <div class="col-lg-4 col-md-6">
            <div class="info-card" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 3px 15px rgba(0,0,0,0.08); height: 100%;">
              <h3 style="color: var(--secondary-color); font-size: 18px; font-weight: 700; margin-bottom: 20px; border-bottom: 2px solid var(--accent-color); padding-bottom: 10px;">
                <?= $words['commercialRegisterTitle']; ?>
              </h3>
              <p style="margin-bottom: 0; line-height: 1.8; color: #666;">
                <?= $words['commercialRegisterText']; ?>
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