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
  <meta property="og:title" content="Damas Abbruch & Entkernung - <?php echo $words['companyName']; ?>">
  <meta property="og:type" content="article">
  <meta property="og:description" content="<?= $words['metaDescription']; ?>">
  <meta property="og:url" content="https://damas-abbruch.de">
  <meta property="og:image" content="assets/img/meta-cover.webp">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="800">

  <!-- Twitter Card Meta Tags -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Damas Abbruch & Entkernung - <?php echo $words['companyName']; ?>">
  <meta name="twitter:site" content="@damas-abbruch.de">
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
  <?php
  include 'includes/header.php';
  ?>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
      <div class="hero-carousel swiper">
        <div class="swiper-wrapper">

          <!-- Slide 1: Welcome -->
          <div class="swiper-slide">
            <img src="assets/img/sliders/slider_1.webp" loading="lazy" alt="" data-aos="fade-in">
            <div class="container text-center" data-aos="fade-up" data-aos-delay="100">
              <div class="row justify-content-center">
                <div class="col-lg-8">
                  <h2><?= $words['welcomeTo'] . " " . $words['companyName']; ?></h2>
                  <p><?= $words['yourReliablePartner']; ?></p>
                  <a href="#about" class="btn-get-started"><?= $words['read-more']; ?></a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2: Professional Demolition & Gutting -->
          <div class="swiper-slide">
            <img src="assets/img/sliders/slider_2.webp" loading="lazy" alt="" data-aos="fade-in">
            <div class="container text-center" data-aos="fade-up" data-aos-delay="100">
              <div class="row justify-content-center">
                <div class="col-lg-8">
                  <h2><?= $words['professionalDemolitionGutting']; ?></h2>
                  <p><?= $words['preciseSafeEfficient']; ?></p>
                  <a href="#about" class="btn-get-started"><?= $words['read-more']; ?></a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3: Reliable Caretaker Service -->
          <div class="swiper-slide">
            <img src="assets/img/sliders/slider_3.webp" loading="lazy" alt="" data-aos="fade-in">
            <div class="container text-center" data-aos="fade-up" data-aos-delay="100">
              <div class="row justify-content-center">
                <div class="col-lg-8">
                  <h2><?= $words['reliableCaretakerService']; ?></h2>
                  <p><?= $words['completePropertySupport']; ?></p>
                  <a href="#about" class="btn-get-started"><?= $words['read-more']; ?></a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 4: Garden Care & Final Construction Cleaning -->
          <div class="swiper-slide">
            <img src="assets/img/sliders/slider_4.webp" loading="lazy" alt="" data-aos="fade-in">
            <div class="container text-center" data-aos="fade-up" data-aos-delay="100">
              <div class="row justify-content-center">
                <div class="col-lg-8">
                  <h2><?= $words['gardenCareCleaning']; ?></h2>
                  <p><?= $words['fromTidyOutdoor']; ?></p>
                  <a href="#about" class="btn-get-started"><?= $words['read-more']; ?></a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <!-- Pagination -->
        <div class="swiper-pagination"></div>

        <!-- Navigation -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </section><!-- /Hero Section -->
    <!-- Section Separator -->
    <div class="section-separator"></div>
    <!-- About Section -->
    <section id="about" class="about section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2><?= $words['about']; ?></h2>
        <p><span><?= $words['learn-more']; ?></span> <span class="description-title"><?= $words['aboutUs']; ?></span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <!-- Main Description Section - Two Columns -->
        <div class="row gy-4 mb-5">

          <!-- Left Column with Image -->
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="content-card with-image">
              <div class="card-image">
                <img src="assets/img/about1.webp" alt="DAMAS Demolition Team at Work" class="img-fluid">
              </div>
              <div class="card-text-content">
                <h3><?= $words['shortTitle']; ?></h3>
                <p class="description-text">
                  <?= $words['aboutUsDescription']; ?>
                </p>
              </div>
            </div>
          </div>

          <!-- Right Column -->
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="content-card keypoints-card">
              <div class="power-keypoints">
                <h5><?= $words['powerKeyPoints']; ?></h5>
                <ul>
                  <li>
                    <i class="bi bi-check-circle-fill"></i>
                    <div>
                      <strong><?= $words['experiencedProfessional']; ?></strong>
                      <span><?= $words['expertiseInDemolition']; ?></span>
                    </div>
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i>
                    <div>
                      <strong><?= $words['completeServiceOneSource']; ?></strong>
                      <span><?= $words['fromInteriorStripping']; ?></span>
                    </div>
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i>
                    <div>
                      <strong><?= $words['cleanPrecise']; ?></strong>
                      <span><?= $words['carefulWorkAttention']; ?></span>
                    </div>
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i>
                    <div>
                      <strong><?= $words['reliableOnTime']; ?></strong>
                      <span><?= $words['weKeepCommitments']; ?></span>
                    </div>
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i>
                    <div>
                      <strong><?= $words['safetyFirst']; ?></strong>
                      <span><?= $words['properExecutionStandards']; ?></span>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>

        </div>

        <!-- Closing Text -->
        <div class="closing-section" data-aos="fade-up" data-aos-delay="250">
          <p class="closing-text">
            <?= $words['closingText']; ?>
          </p>
        </div>

        <!-- Spacer Divider -->
        <div class="section-separator"></div>

        <!-- Mission, Plan, Vision Boxes -->
        <div class="mission-vision-header" data-aos="fade-up">
          <h3><?= $words['our_approach']; ?></h3>
          <p><?= $words['three_pillars']; ?></p>
        </div>

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="300">

          <!-- Mission Box -->
          <div class="col-lg-4 col-md-6">
            <div class="icon-box mission-box">
              <div class="icon-wrapper">
                <i class="bi bi-bullseye"></i>
              </div>
              <h4><?= $words['ourMission']; ?></h4>
              <p class="box-subtitle"><?= $words['qualityYouCanSee']; ?></p>
              <p class="box-description"><?= $words['missionDescription']; ?></p>
            </div>
          </div>

          <!-- Plan Box -->
          <div class="col-lg-4 col-md-6">
            <div class="icon-box plan-box">
              <div class="icon-wrapper">
                <i class="bi bi-calendar-check"></i>
              </div>
              <h4><?= $words['ourPlan']; ?></h4>
              <p class="box-subtitle"><?= $words['structuredEfficientGoal']; ?></p>
              <p class="box-description"><?= $words['planDescription']; ?></p>
            </div>
          </div>

          <!-- Vision Box -->
          <div class="col-lg-4 col-md-6">
            <div class="icon-box vision-box">
              <div class="icon-wrapper">
                <i class="bi bi-lightbulb"></i>
              </div>
              <h4><?= $words['ourVision']; ?></h4>
              <p class="box-subtitle"><?= $words['settingNewStandard']; ?></p>
              <p class="box-description"><?= $words['visionDescription']; ?></p>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->
    <!-- Section Separator -->
    <div class="section-separator"></div>
    <!-- Services Section -->
    <section id="services" class="services section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2><?= $words['services']; ?></h2>
        <p><?= $words['learn-more']; ?> <span class="description-title"><?= $words['ourServices']; ?></span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <!-- Services Introduction -->
        <div class="row mb-5">
          <div class="col-12" data-aos="fade-up" data-aos-delay="100">
            <div class="services-intro text-center">
              <h3><?= $words['allFromOneSource']; ?></h3>
              <p><?= $words['servicesIntro']; ?></p>
            </div>
          </div>
        </div>

        <!-- Services Grid - 3 Columns -->
        <div class="row gy-4">

          <!-- Demolition Service -->
          <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="service-image">
                <img src="assets/img/services/service_1.webp" alt="Demolition Service" class="img-fluid">
              </div>
              <div class="service-content">
                <h4>
                  <span class="icon"><i class="bi bi-building-dash"></i></span>
                  <?= $words['demolition']; ?>
                </h4>
                <p class="service-description"><?= $words['demolitionDescription']; ?></p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <!-- Gutting Service -->
          <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="service-image">
                <img src="assets/img/services/service_2.webp" alt="Gutting Service" class="img-fluid">
              </div>
              <div class="service-content">
                <h4> <span class="icon"><i class="bi bi-hammer"></i></span>
                  <?= $words['gutting']; ?></h4>
                <p class="service-description"><?= $words['guttingDescription']; ?></p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <!-- Caretaker Service -->
          <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="service-image">
                <img src="assets/img/services/service_3.webp" alt="Caretaker Service" class="img-fluid">
              </div>
              <div class="service-content">
                <h4> <span class="icon"><i class="bi bi-house-gear"></i></span>
                  <?= $words['caretakerService']; ?></h4>
                <p class="service-description"><?= $words['caretakerDescription']; ?></p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <!-- Garden Maintenance -->
          <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="service-image">
                <img src="assets/img/services/service_4.webp" alt="Garden Maintenance" class="img-fluid">
              </div>
              <div class="service-content">
                <h4> <span class="icon"><i class="bi bi-tree"></i></span>
                  <?= $words['gardenMaintenance']; ?></h4>
                <p class="service-description"><?= $words['gardenDescription']; ?></p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <!-- Final Construction Cleaning -->
          <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="service-image">
                <img src="assets/img/services/service_5.webp" alt="Final Construction Cleaning" class="img-fluid">
              </div>
              <div class="service-content">
                <h4> <span class="icon"><i class="bi bi-brush"></i></span>
                  <?= $words['finalConstructionCleaning']; ?></h4>
                <p class="service-description"><?= $words['cleaningDescription']; ?></p>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

        <!-- Services Closing Text -->
        <div class="row mt-5">
          <div class="col-12" data-aos="fade-up" data-aos-delay="700">
            <div class="services-closing text-center">
              <p><?= $words['servicesClosing']; ?></p>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Services Section -->
    <!-- Section Separator -->
    <div class="section-separator"></div>
    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section dark-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2><?= $words['testimonials']; ?></h2>
        <p><?= $words['whatClientsSay']; ?></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <!-- Testimonial 1 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="testimonial-item">
              <div class="testimonial-content">
                <p><?= $words['testimonial1Quote']; ?></p>
                <h3><?= $words['testimonial1Author']; ?></h3>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <!-- Testimonial 2 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="testimonial-item">
              <div class="testimonial-content">
                <p><?= $words['testimonial2Quote']; ?></p>
                <h3><?= $words['testimonial2Author']; ?></h3>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <!-- Testimonial 3 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="testimonial-item">
              <div class="testimonial-content">
                <p><?= $words['testimonial3Quote']; ?></p>
                <h3><?= $words['testimonial3Author']; ?></h3>
              </div>
            </div>
          </div><!-- End testimonial item -->

        </div>

      </div>

    </section><!-- /Testimonials Section -->
    <!-- CTA Section -->
    <section id="cta" class="cta section dark-background">
      <!-- Section Separator -->
      <div class="section-separator"></div>
      <div class="container">
        <div class="row gy-4 align-items-center">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3><?= $words['startProjectToday']; ?></h3>
            <p><?= $words['ctaDescription']; ?></p>
          </div>

          <div class="col-lg-6 text-center text-lg-end" data-aos="fade-up" data-aos-delay="200">
            <a href="#contact" class="cta-btn"><?= $words['contactUsNow']; ?></a>
          </div>

        </div>
      </div>

    </section><!-- /CTA Section -->
    <!-- Section Separator -->
    <div class="section-separator"></div>
    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2><?= $words['contact']; ?></h2>
        <h3 class="contact-main-title"><?= $words['contactTitle']; ?></h3>
        <p class="contact-intro-text"><?= $words['contactIntroText']; ?></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <!-- Google Map - Full Width Top -->
        <div class="row">
          <div class="col-12" data-aos="fade-up" data-aos-delay="100">
            <div id="map" class="map-container">
              <iframe
                style="border:0; width: 100%; height: 400px;"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2533.159299120991!2d8.664160388696513!3d50.58699240445341!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47bc8c2047bc58c9%3A0x47dfe93178f440fe!2sWestanlage%2062%2C%2035390%20Gie%C3%9Fen%2C%20Germany!5e0!3m2!1sen!2seg!4v1763547567568!5m2!1sen!2seg"
                frameborder="0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
              </iframe>
            </div>
          </div>
        </div>

        <!-- Contact Cards Row -->
        <div class="row gy-4 mt-4" data-aos="fade-up" data-aos-delay="200">

          <!-- Location Card -->
          <div class="col-lg-4 col-md-6">
            <div class="contact-card">
              <div class="contact-icon">
                <i class="bi bi-geo-alt"></i>
              </div>
              <h4><?= $words['location']; ?>:</h4>
              <p><a href="#map"><?= $words['companyAddress']; ?></a></p>
            </div>
          </div>

          <!-- Email Card -->
          <div class="col-lg-4 col-md-6">
            <div class="contact-card">
              <div class="contact-icon">
                <i class="bi bi-envelope"></i>
              </div>
              <h4><?= $words['email']; ?>:</h4>
              <p><a href="mailto:<?= $words['companyEmail']; ?>"><?= $words['companyEmail']; ?></a></p>
            </div>
          </div>

          <!-- Phone Card -->
          <div class="col-lg-4 col-md-6">
            <div class="contact-card">
              <div class="contact-icon">
                <i class="bi bi-telephone"></i>
              </div>
              <h4><?= $words['call']; ?>:</h4>
              <p><a href="tel:<?= str_replace(' ', '', $words['companyPhone']); ?>"><?= $words['companyPhone']; ?></a></p>
            </div>
          </div>

        </div>

        <!-- Contact Form -->
        <div class="row mt-5">
          <div class="col-12" data-aos="fade-up" data-aos-delay="300">
            <form action="assets/vendor/php-email-form/contact.php" method="post" class="contact-form">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="<?= $words['yourName']; ?>" required>
                </div>

                <div class="col-md-6">
                  <input type="email" name="email" class="form-control" placeholder="<?= $words['yourEmail']; ?>" required>
                </div>

                <div class="col-12">
                  <input type="text" name="subject" class="form-control" placeholder="<?= $words['subject']; ?>" required>
                </div>

                <div class="col-12">
                  <textarea name="message" class="form-control" rows="6" placeholder="<?= $words['message']; ?>" required></textarea>
                </div>

                <div class="col-12 text-center">
                  <button type="submit" class="btn-submit"><?= $words['sendMessage']; ?></button>
                </div>

              </div>
            </form>
          </div>
        </div>

      </div>

    </section><!-- /Contact Section -->

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

  <!-- Google Maps - Lazy Loading (التحسين الوحيد المهم) -->
  <script>
    let mapLoaded = false;

    function loadGoogleMaps() {
      if (mapLoaded) return;

      const iframe = document.querySelector('#map iframe');
      if (iframe && iframe.dataset.src) {
        iframe.src = iframe.dataset.src;
        mapLoaded = true;
      }
    }

    // تحميل الخريطة عند السكرول للقسم
    if ('IntersectionObserver' in window) {
      const mapObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            loadGoogleMaps();
            mapObserver.disconnect();
          }
        });
      }, {
        rootMargin: '200px'
      });

      window.addEventListener('DOMContentLoaded', () => {
        const mapElement = document.getElementById('map');
        if (mapElement) {
          mapObserver.observe(mapElement);
        }
      });
    } else {
      // للمتصفحات القديمة
      window.addEventListener('DOMContentLoaded', loadGoogleMaps);
    }
  </script>
</body>

</html>