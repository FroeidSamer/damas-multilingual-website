<!-- ======= Top Bar ======= -->
<div id="topbar" class="topbar d-flex align-items-center">
  <div class="container d-flex justify-content-between">
    <div class="contact-info d-flex align-items-center">
      <i class="bi bi-envelope d-flex align-items-center me-3">
        <a href="mailto:<?= $words['companyEmail']; ?>"><?= $words['companyEmail']; ?></a>
      </i>
      <i class="bi bi-phone d-flex align-items-center">
        <a href="tel:<?= str_replace(' ', '', $words['companyPhone']); ?>"><?= $words['companyPhone']; ?></a>
      </i>
    </div>
    <div class="social-links d-none d-md-flex align-items-center">
      <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
      <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
      <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
      <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
    </div>
  </div>
</div><!-- End Top Bar -->

<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

    <a href="index" class="logo d-flex align-items-center">
      <img src="assets/img/logo/1- Colored Version300 ppi.png" alt="">
    </a>

    <?php
    // Determine current page
    $current_page = basename($_SERVER['PHP_SELF']);
    $is_home = ($current_page == 'index.php');
    $base_url = $is_home ? '' : 'index';
    ?>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="<?= $base_url ?>#hero" class="<?= $is_home ? 'active' : '' ?>"><?= $words['home']; ?></a></li>
        <li><a href="<?= $base_url ?>#about"><?= $words['about']; ?></a></li>
        <li><a href="<?= $base_url ?>#services"><?= $words['services']; ?></a></li>
        <li><a href="<?= $base_url ?>#contact"><?= $words['contactUs']; ?></a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>
    <button id="lang-btn" class="btn btn-outline-primary" onclick="changeLanguage()"><?= tr('lang-btn'); ?></button>

  </div>
</header><!-- End Header -->