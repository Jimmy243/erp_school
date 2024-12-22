
@include("layouts.public.tete") 


  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url({{asset('public/assets/img/child.jpg')}}">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">  <span> CS LOMITA, Suivez la Vie <br>Scolaire de votre Enfant.</span></h2>
              <p class="animate__animated animate__fadeInUp"> Bienvenu</p>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url({{asset('public/assets/img/ch.jpg')}})">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Plateforme All-in-one Systeme de Gestion Scolaire du CS LOMITA<br></h2>
              <p class="animate__animated animate__fadeInUp">Pour Enseignants, Parents, Elèves, ...</p>
             </div>
          </div>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
        
        <div class="row content">
          <div class="col-lg-6">
            <h2>Nous Simplifions la gestion scolaire</h2>
            <h3>Pour la modernisation et la Numérisation de notre cher complexe</h3><br>
           <article class="entry">

              <div class="entry-img">
                <img src="{{asset('/public/assets/img/features-2.png')}}" alt="" class="img-fluid">
              </div>
            </article>
          
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
             <article class="entry">

              <div class="entry-img">
                <img src="{{asset('public/assets/img/5293.jpg')}}" alt="" class="img-fluid">
              </div>
            </article>
            <h2>
              Desormais vous avez le controle absolu des activites de vos enfants en un Seul Endroit.<h2>
                <br>

             <h3> Outil indispensable de collaboration automatisée entre Parents et notre Ecole.</h3> 
            
            <ul>
              <li><i class="ri-check-double-line"></i> Ecoles Maternelles</li>
              <li><i class="ri-check-double-line"></i> Ecoles Primaires</li>
              <li><i class="ri-check-double-line"></i> Ecoles Secondaires</li>
              <li><i class="ri-check-double-line"></i> Humanités</li>
            </ul>
           
          </div>
        </div>
     <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="section-title">
          <h2>Avantages</h2>
          <p>Pourquoi Choisir CS LOMITA</p>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Numérisation</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Communication et Notifications </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Réduction des taches</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Rapports </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Numérisation gratuite</h3>
                    <p class="fst-italic">Automatisation de notre Ecole</p>
                    <p>Facile pour gérer les élèves, les personnels, etc...</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{asset('public/assets/img/features-1.png')}}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Communication et Notifications en temps Réel</h3>
                    <p class="fst-italic">Recevez les notifications des activités effectuées par votre enfant</p>
                    <p>Le systeme de gestion scolaire automatise la majorité d'informations à être communiquée aux administrateurs, aux professeurs, et aux parents.
                      Un email ou un sms va vous être envoyé lorsque vous ou votre enfant effectue un paiement, est sanctionné pour une faute, 
                    ou  une communication générale ou particulière.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{asset('public/assets/img/features-2.png')}}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Réduction des tâches de l'administration</h3>
                    <p class="fst-italic">La Plateforme va vous faciliter la gestion des élèves et celle du personnel </p>
                    <p>Réduction de la charge de travail de près de 80% et du temps de traitement des données </p>
                   <br> Mettre fin à la paperasse.
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{asset('public/assets/img/features-3.png')}}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Generer des Rapports aussi rapidement</h3>
                    <p class="fst-italic">Gagner en temps dans la generation des rapports</p>
                    <p>Desormais effectuer les rapports sur toutes les activités de l'école en des simples clics</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{asset('public/assets/img/features-5.png')}}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">
         <div class="section-title">
          <h2>CS LOMITA</h2>
          <p>Fonctionnalités </p>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box">
              <i class="bi bi-briefcase"></i>
              <h4><a href="#">Scolarité</a></h4>
              <p>Suivi complet des activités des élèves par les parents </p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              <h4><a href="#">Inscription En ligne</a></h4>
              <p>Facilite l'inscription pour les parents en vue d'effectuer les demandes d'adhésion des enfants</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-bar-chart"></i>
              <h4><a href="#">Finances et Comptabilité</a></h4>
              <p>Facilite la gestion du budget, des factures de paiment</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-binoculars"></i>
              <h4><a href="#">Collaboration</a></h4>
              <p>Outils permttant la collaboration entre parents et l'école grace aux mails, SMS, et partage de documents</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-brightness-high"></i>
              <h4><a href="#">Gestion du Personnel </a></h4>
              <p>Gerez plus facilement et rapidement votre personnel</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-calendar4-week"></i>
              <h4><a href="#">Gestion des Examens</a></h4>
              <p>Gerez les cotes des devoirs; interrogations et examens rapidement</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->   

  </main><!-- End #main -->
  @include("layouts.public.pied") 