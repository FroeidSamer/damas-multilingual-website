<!-- footer -->
<footer id="footer" class="footer dark-background">

  <div class="container footer-top">
    <div class="row gy-4">
      <!-- Company Details - Primary Info -->
      <div class="col-lg-4 col-md-6 footer-about">
        <div class="text-center mb-3">
          <a href="index" class="logo d-flex align-items-center justify-content-center">
            <img src="assets/img/logo/3- Energetic Orange Version300 ppi.png" alt="<?= $words['companyName']; ?>" style="max-height: 60px;">
          </a>
        </div>
        <p class="text-center"><?= $words['contactIntro']; ?></p>
        <div class="social-links d-flex justify-content-center mt-4">
          <a href=""><i class="bi bi-twitter-x"></i></a>
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

      <!-- Quick Links -->
      <div class="col-lg-2 col-6 footer-links">
        <h4><?= $words['usefulLinks']; ?></h4>
        <ul>
          <li><a href="index#hero"><?= $words['home']; ?></a></li>
          <li><a href="index#about"><?= $words['about']; ?></a></li>
          <li><a href="index#services"><?= $words['services']; ?></a></li>
        </ul>
      </div>

      <!-- Contact Information -->
      <div class="col-lg-3 col-md-6 footer-contact">
        <h4><?= $words['contactUs']; ?></h4>
        <p><i class="bi bi-geo-alt"></i> <a href="#map"><?= $words['companyAddress']; ?></a></p>
        <p><i class="bi bi-telephone"></i> <a href="tel:<?= str_replace(' ', '', $words['companyPhone']); ?>"><?= $words['companyPhone']; ?></a></p>
        <p><i class="bi bi-envelope"></i> <a href="mailto:<?= $words['companyEmail']; ?>"><?= $words['companyEmail']; ?></a></p>
        <p class="mt-3"><a href="#map" class="map-link-footer">
            <i class="bi bi-geo-alt"></i> <?= $words['viewOnGoogleMaps']; ?>
          </a></p>
      </div>

      <!-- Newsletter -->
      <div class="col-lg-3 col-md-6 footer-newsletter">
        <p class="mb-3"><?= $words['newsletterSubscribe']; ?></p>
        <form action="assets/vendor/php-email-form/newsletter.php" method="post" class="newsletter-form-footer">
          <input type="email" name="email" placeholder="<?= $words['subscribeYourEmail']; ?>" required>
          <button type="submit"><i class="bi bi-send"></i></button>
        </form>
      </div>

    </div>
  </div>

  <div class="container copyright text-center mt-4">
    <!-- Footer Links -->
    <div class="footer-bottom-links mt-2">
      <a href="datenschutz"><?= $words['dataProtection']; ?></a>
      <span class="separator">|</span>
      <a href="impressum"><?= $words['imprint']; ?></a>
      <span class="separator">|</span>
      <a href="AGB"><?= $words['gtc']; ?></a>
    </div>
    <br>
    <p>© <span><?= $words['copyright']; ?></span> <strong class="px-1 sitename"><?= $words['companyName']; ?></strong> <span><?= $words['allRightsReserved']; ?></span></p>
  </div>

</footer> <!-- /footer -->

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
  <i class="bi bi-arrow-up-short"></i>
</a>

<!-- WhatsApp Button with Animation -->
<div class="phone-call cbh-phone cbh-green cbh-show cbh-static" id="clbh_phone_div">
  <a id="WhatsApp-button" href="https://wa.me/<?= str_replace([' ', '+'], '', $words['companyPhone']); ?>" target="_blank" class="phoneJs" title="WhatsApp">
    <div class="cbh-ph-circle"></div>
    <div class="cbh-ph-circle-fill"></div>
    <div class="cbh-ph-img-circle1">
      <i class="bi bi-whatsapp"></i>
    </div>
  </a>
</div>

<!-- Preloader -->
<div id="preloader"></div>