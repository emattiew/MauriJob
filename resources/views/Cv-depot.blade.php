<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Arsha Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  

    

   

    

    

    
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Depot de CV</h2>
          <p> N'hésitez pas à nous envoyer votre CV nous sommes impatients de découvrir votre parcours professionnel</p>
        </div>


          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">titre	</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group">
                <label for="image">Votre Photo</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*" required>

              </div>
              <div class="form-group">
                <label for="name">competences</label>
                <textarea class="form-control" name="message" rows="5" required></textarea>
              </div>
              </div>
              <div class="form-group">
                <label for="name">experience</label>
                <textarea class="form-control" name="Experience" rows="5" required></textarea>
              </div>
              <div class="form-group">
                <label for="name">education</label>
                <textarea class="form-control" name="message" rows="5" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Envoyer</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>MauriJob</h3>
            <p>
              
              Nouakchott<br>
              Mauritanie <br><br>
              <strong>Phone:</strong> +222 42 46 51 49 <br>
              <strong>Email:</strong> MauriJob@Gmail.com<br>
            </p>
          </div>

          

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Arsha</span></strong>. All Rights Reserved
      </div>
      
      
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
<!-- Template Main CSS File -->
<style>
  /* Global Styles */
  body {
    font-family: 'Open Sans', sans-serif;
    background-color: #f8f9fa;
    color: #333;
    margin: 0;
    padding: 0;
    scroll-behavior: smooth;
  }
  a {
    color: #007bff;
    text-decoration: none;
  }
  a:hover {
    color: #0056b3;
    text-decoration: underline;
  }
  /* Header Styles */
  #header {
    background-color: #fff;
    box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;

    z-index: 1000;
  }
  #header .logo {
    font-size: 32px;
    margin: 15px 0;
  }
  #navbar ul li a {
    font-size: 16px;
    padding: 10px 15px;
    border-radius: 5px;
    transition: 0.3s;
  }
  #navbar ul li a:hover {
    background-color: #007bff;
    color: #fff;
  }
  /* Hero Section Styles */
  #hero {
    background: url('assets/img/hero-bg.jpg') top center;
    background-size: cover;
    padding: 200px 0;
    color: #fff;
    text-align: center;
  }
  #hero h1 {
    font-size: 48px;
    margin-bottom: 20px;
  }
 
  #hero p {
    font-size: 20px;
    margin-bottom: 30px;
  }
  /* Contact Section Styles */
  #contact {
    padding: 60px 0;
  }
  #contact h2 {
    margin-bottom: 30px;
    font-size: 36px;
  }
  #contact form input,
  #contact form textarea {
    margin-bottom: 20px;
    border-radius: 5px;
    border: 1px solid #ccc;
    padding: 10px;
    width: 100%;
  }
  #contact form input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
  }
  #contact form input[type="submit"]:hover {
    background-color: #0056b3;
  }
  /* Footer Styles */
  #footer {
    background-color: #343a40;
    color: #fff;
    padding: 40px 0;
  }
  #footer h4 {
    color: #fff;
    margin-bottom: 20px;
  }
  #footer ul li {
    margin-bottom: 10px;
  }
  #footer ul li a {
    color: #fff;
  }
  #footer ul li a:hover {
    color: #007bff;
  }
  .section-title p {
    text-align: left;
}

</style>

</body>

</html>