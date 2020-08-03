<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GESTION_DES_APPRENANTS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets/style.css" />
    <link rel="stylesheet"  href="assets/font-awesome-4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="assets/php/voir_la_liste.php">
    <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Fabrique Simplon</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Kelly - v2.0.0
  * Template URL: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    
</head>
<body>
 
<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <h1 class="logo"><a href="index.html">SIMPLON BURKINA </a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="/">Acceuil</a></li>
          <li><a href="enregistrer">Enregistrer un apprenant</a></li>
          <li><a href="tuteur">Enregistrer un tuteur</a></li>
          <li><a href="liste">liste des apprenants</a></li>
          <li><a href="contact">Contact</a></li>
        </ul>
      </nav><!-- .nav-menu -->

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>

    </div>

  </header><!-- End Header -->


  </header><!-- End Header -->                                 
     <div class=""><h4 class="titre_soustitre">ENREGISTRER UN APPRENANT</h4></div>
   </DIv>

                                                    <!-- Le formulaire -->
   
    
   <div class="le-div-general-du-formulaire">   
   @csrf
 <form action="/apprenants" method="POST" class="formulaire" enctype="multipart/form-data">
    
   <div class="div-du-sous-titre-parent-et-des-tirest">
   <div class="row la-ligne-blanche">
  <div class=" col les-tirest"></div>
  </div>
                                                 <!-- Partie du formulaire sur les apprénants -->
  <div class="row">
  <div class="col-6 partie-sur-information-apprenant " > INFORMATION SUR L'APPRENANT</div>
  </div>
  </div>


  <div class="formualire-apprenant"> 
     <div class="les-champs-du-formulaire"> 
      <div class="row champ">
     <div class="col ">
     <input type="text" class="form-control" placeholder="Nom" name="nomApprenant" required >
     </div>
     <div class="col">
     <input type="text" class="form-control" placeholder="Ville d'origine" name="ville" required>
     </div>
    </div>
    <div class="row champ">
    <div class="col">
      <input type="text" class="form-control" placeholder="Prenom" name="prenomApprenant" required >
    </div>
      <div class="col">
      <input type="text" class="form-control" placeholder="Etablissement d'origine" name="etablissement" required>
   </div>
    </div>
    <div class="row champ">
      <div class="col">
      <input type="date" class="form-control" placeholder="Date de naissance" name="dateDeNaissance" required>
      </div>
      <div class="col">
       <input type="text" class="form-control" placeholder="Formation d'origine" name="formation" required >
      </div>
      </div>
    <div class="row champ">
      <div class="col">
       <input type="text" class="form-control" placeholder="Lieu de naisance" name="lieuDeNaissance" required>
        </div>
        <div class="col">
        <input type="tel" class="form-control" placeholder="Telephone" name="telephoneApprenant" required>
        </div>
     </div>
    <div class="row champ">
       <div class="col">
        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="genre" required >
        <option value="Homme">Homme</option>
        <option value="Femme">Femme</option>
        </select>
     </div>
        
      </div>
      <div class="row champ">
          <div class="col">
         <SPAn class="photo"> ID PHOTO <input type="file"  placeholder="" name="photo" required></SPAn>
            </div>
    
         </div>
     </div>
     </div>
                  
 <div class="row la-classe-de-enregistrer-et-de-annuler">
   <div class="col">
   <input class="btn btn-primary Enregistrer" type="submit" value="Enregistrer" ></div>
   <div class="col">
  <input class="btn btn-primary Annuler" type="reset" value="Annuler">
</div>
 </div>
 </div>
</div>
</div>
</div>
</form>
</div>

                                         <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Simplon Burkina</span></strong>. All Rights Reserved
      </div>
     
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


<script src="php/barre_de_recherche.js"></script>
            <script src="dist/js/jquery.slim.min.js"></script>
            <script src="dist/js/bootstrap.min.js"></script>
         
</body>
</html>