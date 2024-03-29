<?php
if ($_GET['formSend'] !== null){
    $isSend = $_GET['formSend'];
    $page = $_SERVER['PHP_SELF'];
    $sec = "5";
    header("Refresh: $sec; url=$page");
}else {
    $isSend = false;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>JH Carcleaning - Under construction </title>
  <meta content="Onze website is momenteel in onderhoud. Kom snel eens terug en zie JH Carcleaning in een nieuw jasje!" name="description">
  <meta content="Carcleaning, under construction, in onderhoud, onderhoud, Vlaanderen, carwash, car, maintenance, under construction" name="keywords">
  <meta content="Willem Devriendt" name="Author">

  <!-- Favicons -->
  <link href="#" rel="icon">
  <link href="#" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: ComingSoon - v4.9.0
  * Template URL: https://bootstrapmade.com/comingsoon-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center">

      <h1>Excuses voor het ongemak!</h1>
      <h2>Deze website is tijdelijk offline, er wordt hard gewerkt aan vernieuwingen.</h2>
      <div class="countdown d-flex justify-content-center" data-count="2023/05/31">
        <div>
          <h3>%d</h3>
          <h4>Dagen</h4>
        </div>
        <div>
          <h3>%h</h3>
          <h4>Uren</h4>
        </div>
        <div>
          <h3>%m</h3>
          <h4>Minuten</h4>
        </div>
        <div>
          <h3>%s</h3>
          <h4>Seconden</h4>
        </div>
      </div>

      <div class="social-links text-center">
        <a href="https://www.facebook.com/JHProfessionalCarCleaning" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://be.linkedin.com/in/jh-car-cleaning-bvba-b9256292" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header><!-- End #header -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6">
            <h2>Kom zeker terug!</h2>
            <h3>Binnenkort zie je hier onze website in een nieuw jasje.</h3>
          </div>
          <!--<div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
            <ul>
              <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequa</li>
              <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in</li>
            </ul>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
          </div>
        </div>

      </div>
    </section>-->
    <!-- End About Us Section -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Neem contact op</h2>
        </div>

        <div class="row justify-content-center">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">

              <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-whatsapp"></i>
                  <h4>Whatsapp:</h4>
                  <p><a href="https://wa.me/+32499755677">+32 499 75 56 77</a></p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p><a href="mailto:info@jh-carcleaning.be">info@jh-carcleaning.be</a></p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-phone"></i>
                  <h4>Bel:</h4>
                  <p><a href="tel:+32499755677">+32 499 75 56 77</a></p>
                </div>
              </div>
            </div>

          </div>

        </div>

        <div class="row justify-content-center">
          <div class="col-lg-10">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Naam" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Onderwerp" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Bericht" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message" style="display: <?= $isSend? 'block': 'none' ?>">Uw bericht is verstuurd. Hartelijk dank!</div>
            </div>
            <div class="text-center"><button type="submit">Verstuur bericht</button></div>
          </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span><a href="photogenica.be" target="blank" style="color:#fff;">Photogenica</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/comingsoon-free-html-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End #footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>