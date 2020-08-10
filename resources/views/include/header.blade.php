<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GESTION_DES_APPRENANTS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('assets/dist/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('assets/style.css')}}" />
    <link rel="stylesheet"  href="{{asset('assets/font-awesome-4.7.0/css/font-awesome.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/php/voir_la_liste.php')}}">
    <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Fabrique Simplon</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="{{asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i')}}" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

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

      <h1 class="logo"><a href="{{asset('index.html')}}">SIMPLON BURKINA </a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
        <li class="active"><a href="{{asset('/')}}">Acceuil</a></li>
          <li><a href="{{route('apprenant.enregistrer')}}">Enregistrer un apprenant</a></li>
          <li><a href="{{route('tuteur.enregistrer')}}">Enregistrer un tuteur</a></li>
          <li><a href="{{route('apprenants.liste')}}">liste des apprenants</a></li>
          <li><a href="{{route('contact')}}">Contact</a></li>
        </ul>
      </nav><!-- .nav-menu -->

      <div class="header-social-links">
        <a href="{{asset('#')}}" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="{{asset('#')}}" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="{{asset('#')}}" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="{{asset('#')}}" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>

    </div>

  </header><!-- End Header -->

