<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>LOMITA | SchoolERP </title>

<META NAME="Descritpion" CONTENT="Plateforme de Gestion du complexe scolaire LOMITA, Outils de collaboration entre Parents et Ecoles">
<META NAME="Keywords" CONTENT="Lomita, Kamanyola, education, edtech, technologie, plateforme écolière, gestion école, primaire, secondaire, écolière, maternelle, RDC, Ecole numérique, Bukavu, Goma, kinshasa, Lubumbashi">
<META NAME="Language" CONTENT="fr">
<META NAME="Category" CONTENT="Edtech, logiciel de gestion scolaire et écolière">
<META NAME="Copyright" CONTENT="spaceline.org">
<META NAME="Author" CONTENT="SADICKY Dave">
  <!-- Favicons -->
  <link type="image/x-icon" href="{{asset('assets/img/favicon.png')}}" rel="shortcut icon">
  <link href="{{asset('public/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
   <!-- Vendor CSS Files -->
  <link href="{{asset('public/dist/css/style.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('public/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('public/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
 <!--  image cropie -->
  {{-- <link rel="stylesheet" href="{{asset('public/crop/croppie.css')}}"> --}}
  <link href="{{asset('public/assets/css/style.css')}}" rel="stylesheet">
<!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->
<!-- <script src='public/dist/js/api.js'></script> -->
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>
 <body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="/">CS LOMITA</a></h1>
    
    <a href="/" class="logo me-auto"><img src="{{asset('public/assets/img/logo chuo.png')}}" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/" class="active">Accueil</a></li>
          <li class="dropdown"><a href="#"><span>Plateforme</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/solutions"><span>Solutions </span></a>
              <li class="dropdown"><a href="#"><span>Espace Utilisateurs</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="{{route('eleve.login')}}">Elève</a></li>
                  <li><a href="{{route('teacher.login')}}">Enseignant</a></li>
                  <li><a href="{{route('parent.login')}}">Parents</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#">Temoignage</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="{{route('admin.login')}}" class="getstarted">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->