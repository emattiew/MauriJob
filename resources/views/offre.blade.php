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
  <!-- Votre contenu d'en-tête ici -->

  <!-- ======= Hero Section ======= -->
  <!-- Votre section héroïque (hero section) ici -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Ajouter une offre d'emploi</h2>
        <p>Remplissez le formulaire ci-dessous pour publier une nouvelle offre d'emploi.</p>
      </div>
      <div class="d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
        <form action="/ajouter-offre" method="POST" role="form" class="php-email-form">
          @csrf
          <div class="row">
            <div class="form-group col-md-6">
              <label for="titre">Titre du poste</label>
              <input type="text" name="titre_poste" class="form-control" id="titre" required>
            </div>
            <div class="form-group col-md-6">
              <label for="ent_id">ID de l'entreprise</label>
              <input type="number" name="id_Ent" class="form-control" id="ent_id" required>
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea class="form-control" name="description" rows="5" required></textarea>
            </div>
            <div class="form-group">
              <label for="competences">Compétences requises</label>
              <textarea class="form-control" name="competences_requises" rows="5" required></textarea>
            </div>
            <div class="form-group col-md-6">
              <label for="date">Date de publication</label>
              <input type="date" name="date_publication" class="form-control" id="date" required>
            </div>
          </div>
          <div class="my-3">
            <div class="loading">Chargement</div>
            <div class="error-message"></div>
            <div class="sent-message">Votre offre a été publiée avec succès. Merci !</div>
          </div>
          <div class="text-center"><button type="submit">Publier l'offre</button></div>
        </form>
      </div>
    </div>
</div>
  </section><!-- End Contact Section -->

  <!-- ======= Footer ======= -->
  <!-- Votre pied de page (footer) ici -->

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

</body>

</html>
