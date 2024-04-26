<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
   <?= $this->include('partials/head-css'); ?>
</head>
<body>
    <!-- debut header -->
    <?= $this->include('partials/header'); ?>
    <!-- fin header -->

    <!-- debut body -->
    <!-- contact us page start -->
   <!-- breadcrumb  start-->
   <div class="contact-main-wrapper">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
               <div class="sb-contact-section">
                  <nav aria-label="breadcrumb">
                     <h4>A propos de nous</h4>
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Accueil</a></li>
                        <li class="breadcrumb-item " aria-current="page">A propos</li>
                     </ol>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- breadcrumb  end-->
   <!-- about us page start -->
   <div class="image-about-wrapper float_left padd-100">
      <div class="container ">
         <div class="row plr-50">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
               <div class="sb-team-section">
                  <h5 class="home1-section-heading2">Qui sommes nous</h5>
                  <p class="text-center">It is a long established fact that a reader will be distracted by the readable
                     <br>content of a page when looking at its layout.
                  </p>
               </div>
            </div>
            <div class="tab-one-wrapper float-start w-100 mt-4">
               <div class="container">
                  <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                     <div class="tab-one">
                        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                           <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
                              role="tab" aria-controls="home" aria-selected="true">SIGIM</button>
                           <span class="tab-border"></span>
                        </li>
                        <li class="nav-item" role="presentation">
                           <button class="nav-link" id="planning-tab" data-bs-toggle="tab" data-bs-target="#planning" type="button"
                              role="tab" aria-controls="planning" aria-selected="false">NOTRE HISTOIRE</button>
                        </li>
                        <li class="nav-item" role="presentation">
                           <button class="nav-link" id="research-tab" data-bs-toggle="tab" data-bs-target="#research" type="button"
                              role="tab" aria-controls="research" aria-selected="false">NOTRE MISSION</button>
                        </li>
                        <li class="nav-item" role="presentation">
                           <button class="nav-link" id="target-tab" data-bs-toggle="tab" data-bs-target="#target" type="button"
                              role="tab" aria-controls="target" aria-selected="false">NOTRE VALEUR</button>
                        </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                           <div class="tab-one-home">
                              <div class="row align-items-center">
                              <div class="col-lg-6 col-md-12 col-sm-12">
                                 <div class="tab-one-img">
                                    <img src="<?= base_url('asset/images/tab/about.png');?>" alt="img">
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-12 col-sm-12">
                                 <div class="tab-one-content">
                                    <h4>A propos</h4>
                                    <h1>Business</h1>
                                    <div class="tab-one-pera">
                                    <p><b>SIGIM</b> est un système informatique de gestion des informations médicales (SIGIM) développé en Côte d'Ivoire en 2023. Notre mission est de révolutionner la gestion des données médicales en Afrique en offrant une solution logicielle innovante, accessible et sécurisée. Notre vision est de devenir la plateforme de référence pour la gestion des dossiers médicaux et le suivi des patients sur le continent africain.</p>
                                    <a class="bg-pr" href="javascript:;">En savoir plus</a>
                                    </div>
                                 </div>
                              </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="planning" role="tabpanel" aria-labelledby="planning-tab">
                           <div class="tab-one-home">
                              <div class="row align-items-center">
                              <div class="col-lg-6 col-md-12 col-sm-12">
                                 <div class="tab-one-img">
                                    <img src="<?= base_url('asset/images/tab/about.png');?>" alt="img">
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-12 col-sm-12">
                                 <div class="tab-one-content">
                                    <h4>A propos</h4>
                                    <h1>Business Planning</h1>
                                    <div class="tab-one-pera">
                                       <p>L'idée de SIGIM est née du constat des défis majeurs auxquels sont confrontés les professionnels de la santé en Afrique : <br>
                                          <ol class="mt-2">
                                             <li>Manque d'accès à des outils de gestion des dossiers médicaux informatisés</li>
                                             <li>Difficultés de suivi des patients</li>
                                             <li>Fuites de données et manque de sécurité</li>
                                          </ol>
                                       C'est pour répondre à ces défis qu'une équipe de développeurs passionnés et expérimentés a décidé de créer SIGIM. Notre objectif est de mettre à la disposition des institutions sanitaires africaines une solution logicielle performante et abordable qui leur permettra d'améliorer la qualité des soins et de garantir la sécurité des données médicales.</p>
                                       <a href="javascript:;">Decouvrir</a>
                                    </div>
                                 </div>
                              </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="research" role="tabpanel" aria-labelledby="research-tab">
                           <div class="tab-one-home">
                              <div class="row align-items-center">
                              <div class="col-lg-6 col-md-12 col-sm-12">
                                 <div class="tab-one-img">
                                    <img src="<?= base_url('asset/images/tab/about.png');?>" alt="img">
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-12 col-sm-12">
                                 <div class="tab-one-content">
                                    <h4>A propos</h4>
                                    <h1>Business Research</h1>
                                    <div class="tab-one-pera">
                                    <p>Notre mission est de faciliter le suivi des patients et la gestion du personnel de santé dans les     institutions sanitaires en Afrique. Nous nous engageons à fournir une solution logicielle innovante, fiable et sécurisée qui répond aux besoins spécifiques des professionnels de la santé africains.</p>
                                    <a href="javascript:;">En savoir plus</a>
                                    </div>
                                 </div>
                              </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="target" role="tabpanel" aria-labelledby="target-tab">
                           <div class="tab-one-home">
                              <div class="row align-items-center">
                              <div class="col-lg-6 col-md-12 col-sm-12">
                                 <div class="tab-one-img">
                                    <img src="<?= base_url('asset/images/tab/about.png');?>" alt="img">
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-12 col-sm-12">
                                 <div class="tab-one-content">
                                    <h4>A propos</h4>
                                    <h1>Business Target</h1>
                                    <div class="tab-one-pera">
                                    <p>Nos valeurs fondamentales sont l'innovation, la qualité, l'éthique et l'inclusion. <br>
                                       <ol>
                                          <li><b class="text-black">Innovation:</b> Nous sommes convaincus que l'innovation est essentielle pour améliorer la qualité des soins de santé en Afrique. C'est pourquoi nous nous engageons à développer des solutions logicielles de pointe qui répondent aux besoins spécifiques des professionnels de la santé africains.</li>
                                          <li><b class="text-black">Qualité:</b> Nous offrons une solution logicielle de haute qualité qui est fiable, sécurisée et facile à utiliser.</li>
                                          <li><b class="text-black">Ethique:</b>Nous sommes attachés au respect des données médicales et à la confidentialité des patients.</li>
                                          <li><b class="text-black">Inclusion:</b>Nous nous engageons à rendre notre solution logicielle accessible à tous les professionnels de la santé, quelle que soit leur taille ou leur localisation.</li>
                                       </ol> </p>
                                    <a href="javascript:;">Lire plus</a>
                                    </div>
                                 </div>
                              </div>
                              </div>
                           </div>
                        </div>
                        </div>
                     </div>
                  </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- about us page end -->
   <!-- secvices section start  -->
   <div class="services-main-wrapper float_left">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12">
               <div class="sb-service-section">
                  <h5 class="home1-section-heading2">Nos services de qualité</h5>
                  <p>SIGIM propose une large gamme de services pour les institutions sanitaires et les patients. <br> Nos services incluent 
                  </p>
                  <div class="slider-service-section">
                     <div class="owl-carousel owl-theme">
                        <div class="item wow fadeInUp" data-wow-delay=".15s">
                           <div class="slider-box ">
                              <span class="icon"><i class="far fa-heart"></i></span>
                              <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                 <defs>
                                    <style>
                                       .cls-1 {
                                          fill: #e12454;
                                          width: 45px;
                                       }
                                    </style>
                                 </defs>
                                 <title>stethoscope-outline</title>
                                 <path class="cls-1"
                                    d="M512,256a89.59,89.59,0,1,0-102.39,88.69V358.4a128.14,128.14,0,0,1-128,128c-67.06,0-122.22-51.83-127.56-117.54a38.41,38.41,0,0,0,25.17-36.06v-7.28c30-12.37,45.84-37.64,50.63-53l45.61-148.24a77.27,77.27,0,0,0-10-66.38A75.4,75.4,0,0,0,256,46.51c0-.57,0-1.13,0-1.71a44.83,44.83,0,1,0-10.72,29.07A51.77,51.77,0,0,1,251,116.79L205.4,265a65.26,65.26,0,0,1-31.78,35,38.4,38.4,0,0,0-66.2,1,64.87,64.87,0,0,1-33.9-36L27.92,116.79A51.81,51.81,0,0,1,34.62,72.3l.22-.3a44.8,44.8,0,1,0-9.19-28,75.07,75.07,0,0,0-12.22,14,77.27,77.27,0,0,0-10,66.38l45.62,148.3c4.92,15.73,21.55,42,53.35,54v6.22a38.41,38.41,0,0,0,26,36.34C133.93,448.84,200.53,512,281.61,512c84.69,0,153.59-68.91,153.59-153.6V344.69A89.61,89.61,0,0,0,512,256ZM211.22,64a19.2,19.2,0,1,1,19.2-19.2A19.22,19.22,0,0,1,211.22,64ZM70.43,25.6a19.2,19.2,0,1,1-19.2,19.2A19.22,19.22,0,0,1,70.43,25.6ZM128,320a12.8,12.8,0,1,1,25.6,0v12.8a12.8,12.8,0,1,1-25.6,0Zm294.38,0a64,64,0,1,1,64-64A64.07,64.07,0,0,1,422.41,320Zm0-102.4A38.4,38.4,0,1,0,460.8,256,38.4,38.4,0,0,0,422.41,217.6Zm0,51.2A12.8,12.8,0,1,1,435.2,256,12.81,12.81,0,0,1,422.41,268.8Z" />
                              </svg>
                              <h5>Carnet numérique</h5>
                              <p><b class="text-primary">Accès</b> facile et rapide aux dossiers médicaux, <b class="text-primary">Historique</b> complet des consultations et des traitements, <b class="text-primary">Partage</b> sécurisé des informations avec les confrères</p>
                              <a href="#" class="button-btn mt-4">Voir mon carnet
                                 <span><i class="fas fa-angle-double-right"></i></span>
                              </a>
                           </div>
                        </div>

                        <div class="item">
                           <div class="slider-box wow fadeInUp" data-wow-delay=".35s">
                              <span class="icon"><i class="far fa-heart"></i></span>
                              <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                 <defs>
                                    <style>
                                       .cls-1 {
                                          fill: #e12454;
                                          width: 45px;
                                       }
                                    </style>
                                 </defs>
                                 <title>stethoscope-outline</title>
                                 <path class="cls-1"
                                    d="M512,256a89.59,89.59,0,1,0-102.39,88.69V358.4a128.14,128.14,0,0,1-128,128c-67.06,0-122.22-51.83-127.56-117.54a38.41,38.41,0,0,0,25.17-36.06v-7.28c30-12.37,45.84-37.64,50.63-53l45.61-148.24a77.27,77.27,0,0,0-10-66.38A75.4,75.4,0,0,0,256,46.51c0-.57,0-1.13,0-1.71a44.83,44.83,0,1,0-10.72,29.07A51.77,51.77,0,0,1,251,116.79L205.4,265a65.26,65.26,0,0,1-31.78,35,38.4,38.4,0,0,0-66.2,1,64.87,64.87,0,0,1-33.9-36L27.92,116.79A51.81,51.81,0,0,1,34.62,72.3l.22-.3a44.8,44.8,0,1,0-9.19-28,75.07,75.07,0,0,0-12.22,14,77.27,77.27,0,0,0-10,66.38l45.62,148.3c4.92,15.73,21.55,42,53.35,54v6.22a38.41,38.41,0,0,0,26,36.34C133.93,448.84,200.53,512,281.61,512c84.69,0,153.59-68.91,153.59-153.6V344.69A89.61,89.61,0,0,0,512,256ZM211.22,64a19.2,19.2,0,1,1,19.2-19.2A19.22,19.22,0,0,1,211.22,64ZM70.43,25.6a19.2,19.2,0,1,1-19.2,19.2A19.22,19.22,0,0,1,70.43,25.6ZM128,320a12.8,12.8,0,1,1,25.6,0v12.8a12.8,12.8,0,1,1-25.6,0Zm294.38,0a64,64,0,1,1,64-64A64.07,64.07,0,0,1,422.41,320Zm0-102.4A38.4,38.4,0,1,0,460.8,256,38.4,38.4,0,0,0,422.41,217.6Zm0,51.2A12.8,12.8,0,1,1,435.2,256,12.81,12.81,0,0,1,422.41,268.8Z" />
                              </svg>
                              <h5>Gestion du personnel de santé</h5>
                              <p><b class="text-primary">Planification</b> des vacations et des absences
                                 <b class="text-primary">Suivi</b> des temps de présence et des congés
                                 <b class="text-primary">Communication</b> interne fluide et efficace
                              </p>
                              <a href="appoinment.html" class="button-btn mt-4">faire un abonnement
                                 <span><i class="fas fa-angle-double-right"></i></span>
                              </a>
                           </div>
                        </div>
                        
                        <div class="item">
                           <div class="slider-box wow fadeInUp" data-wow-delay=".25s">
                              <span class="icon"><i class="far fa-heart"></i></span>
                              <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                 <defs>
                                    <style>
                                       .cls-1 {
                                          fill: #e12454;
                                          width: 45px;
                                       }
                                    </style>
                                 </defs>
                                 <title>stethoscope-outline</title>
                                 <path class="cls-1"
                                    d="M512,256a89.59,89.59,0,1,0-102.39,88.69V358.4a128.14,128.14,0,0,1-128,128c-67.06,0-122.22-51.83-127.56-117.54a38.41,38.41,0,0,0,25.17-36.06v-7.28c30-12.37,45.84-37.64,50.63-53l45.61-148.24a77.27,77.27,0,0,0-10-66.38A75.4,75.4,0,0,0,256,46.51c0-.57,0-1.13,0-1.71a44.83,44.83,0,1,0-10.72,29.07A51.77,51.77,0,0,1,251,116.79L205.4,265a65.26,65.26,0,0,1-31.78,35,38.4,38.4,0,0,0-66.2,1,64.87,64.87,0,0,1-33.9-36L27.92,116.79A51.81,51.81,0,0,1,34.62,72.3l.22-.3a44.8,44.8,0,1,0-9.19-28,75.07,75.07,0,0,0-12.22,14,77.27,77.27,0,0,0-10,66.38l45.62,148.3c4.92,15.73,21.55,42,53.35,54v6.22a38.41,38.41,0,0,0,26,36.34C133.93,448.84,200.53,512,281.61,512c84.69,0,153.59-68.91,153.59-153.6V344.69A89.61,89.61,0,0,0,512,256ZM211.22,64a19.2,19.2,0,1,1,19.2-19.2A19.22,19.22,0,0,1,211.22,64ZM70.43,25.6a19.2,19.2,0,1,1-19.2,19.2A19.22,19.22,0,0,1,70.43,25.6ZM128,320a12.8,12.8,0,1,1,25.6,0v12.8a12.8,12.8,0,1,1-25.6,0Zm294.38,0a64,64,0,1,1,64-64A64.07,64.07,0,0,1,422.41,320Zm0-102.4A38.4,38.4,0,1,0,460.8,256,38.4,38.4,0,0,0,422.41,217.6Zm0,51.2A12.8,12.8,0,1,1,435.2,256,12.81,12.81,0,0,1,422.41,268.8Z" />
                              </svg>
                              <h5>Messagerie instantanée</h5>
                              <p><b class="text-primary">Échanges</b> rapides et précis d'informations entre professionnel de santé et patients
                                 <b class="text-primary">Amélioration</b> de la coordination des soins
                                 <b class="text-primary">Meilleure</b> satisfaction des patients
                              </p>
                              <a href="appoinment.html" class="button-btn mt-4">Discuter
                                 <span><i class="fas fa-angle-double-right"></i></span>
                              </a>
                           </div>
                        </div>
                        <div class="item">
                           <div class="slider-box wow fadeInUp" data-wow-delay=".25s">
                              <span class="icon"><i class="far fa-heart"></i></span>
                              <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                 <defs>
                                    <style>
                                       .cls-1 {
                                          fill: #e12454;
                                          width: 45px;
                                       }
                                    </style>
                                 </defs>
                                 <title>stethoscope-outline</title>
                                 <path class="cls-1"
                                    d="M512,256a89.59,89.59,0,1,0-102.39,88.69V358.4a128.14,128.14,0,0,1-128,128c-67.06,0-122.22-51.83-127.56-117.54a38.41,38.41,0,0,0,25.17-36.06v-7.28c30-12.37,45.84-37.64,50.63-53l45.61-148.24a77.27,77.27,0,0,0-10-66.38A75.4,75.4,0,0,0,256,46.51c0-.57,0-1.13,0-1.71a44.83,44.83,0,1,0-10.72,29.07A51.77,51.77,0,0,1,251,116.79L205.4,265a65.26,65.26,0,0,1-31.78,35,38.4,38.4,0,0,0-66.2,1,64.87,64.87,0,0,1-33.9-36L27.92,116.79A51.81,51.81,0,0,1,34.62,72.3l.22-.3a44.8,44.8,0,1,0-9.19-28,75.07,75.07,0,0,0-12.22,14,77.27,77.27,0,0,0-10,66.38l45.62,148.3c4.92,15.73,21.55,42,53.35,54v6.22a38.41,38.41,0,0,0,26,36.34C133.93,448.84,200.53,512,281.61,512c84.69,0,153.59-68.91,153.59-153.6V344.69A89.61,89.61,0,0,0,512,256ZM211.22,64a19.2,19.2,0,1,1,19.2-19.2A19.22,19.22,0,0,1,211.22,64ZM70.43,25.6a19.2,19.2,0,1,1-19.2,19.2A19.22,19.22,0,0,1,70.43,25.6ZM128,320a12.8,12.8,0,1,1,25.6,0v12.8a12.8,12.8,0,1,1-25.6,0Zm294.38,0a64,64,0,1,1,64-64A64.07,64.07,0,0,1,422.41,320Zm0-102.4A38.4,38.4,0,1,0,460.8,256,38.4,38.4,0,0,0,422.41,217.6Zm0,51.2A12.8,12.8,0,1,1,435.2,256,12.81,12.81,0,0,1,422.41,268.8Z" />
                              </svg>
                              <h5> Prise de rendez-vous en ligne</h5>
                              <p><b class="text-primary">Réduction</b> du temps passé au téléphone. <b class="text-primary">Meilleure</b> gestion du planning des consultations. <b class="text-primary">Diminution</b> des rendez-vous non honorés.
                              </p>
                              <a href="appoinment.html" class="button-btn mt-4">PRENDRE UN RDV
                                 <span><i class="fas fa-angle-double-right"></i></span>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- secvices section End  -->

   <!-- our team section start -->
   <div class="team-main-wrapper">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
               <div class="sb-team-section">
                  <h5 class="home1-section-heading2">Nos développeur dévoués</h5>
                  <p>It is a long established fact that a reader will be distracted by the readable
                     <br>content of a page when looking at its layout.
                  </p>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
               <div class="team-section">
                  <div class="image">
                     <img src="../asset/images/team-4.png" alt="img">
                     <div class='contact-action '>
                        <div class='item plus-sign ' onclick="actionToggleOne();"> + </div>
                        <span class='item icon-bg'> <i class="fab fa-facebook-f"></i></span>
                        <span class='item icon-bg'> <i class="fab fa-linkedin"></i> </span>
                     </div>
                  </div>
                  <h5><a href="dr-single.html">Mr. Paul AKPOSSAN</a></h5>
                  <p><a href="dr-single.html">Ingenieur Developpeur</a></p>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
               <div class="team-section">
                  <div class="image">
                     <img src="../asset/images/team-2.png" alt="img">
                     <div class='contact-action action-1'>
                        <div class='item plus-sign' onclick="actionToggleTwo();"> + </div>
                        <span class='item icon-bg'> <i class="fab fa-facebook-f"></i></span>
                        <span class='item icon-bg'> <i class="fab fa-linkedin"></i> </span>
                     </div>
                  </div>
                  <h5><a href="dr-single.html">Mr. Seydou TUO</a></h5>
                  <p><a href="dr-single.html">Développeur Fullstack</a></p>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
               <div class="team-section">
                  <div class="image">
                     <img src="../asset/images/team-4.png" alt="img">
                     <div class='contact-action action-2'>
                        <div class='item plus-sign' onclick="actionToggleThree();"> + </div>
                        <span class='item icon-bg'> <i class="fab fa-facebook-f"></i></span>
                        <span class='item icon-bg'> <i class="fab fa-linkedin"></i> </span>
                     </div>
                  </div>
                  <h5><a href="dr-single.html">Mr. Angelo DAGO</a></h5>
                  <p><a href="dr-single.html">Développeur BackEnd</a></p>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
               <div class="team-section">
                  <div class="image">
                     <img src="../asset/images/team-2.png" alt="img">
                     <div class='contact-action action-3'>
                        <div class='item plus-sign' onclick="actionToggleFour();"> + </div>
                        <span class='item icon-bg'> <i class="fab fa-facebook-f"></i></span>
                        <span class='item icon-bg'> <i class="fab fa-linkedin"></i> </span>
                     </div>
                  </div>
                  <h5><a href="dr-single.html">Mr. Joel KOUAME</a></h5>
                  <p><a href="dr-single.html">Développeur FrontEnd</a></p>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- testimonial section start -->
    <!-- fin body -->
    
   <!--Footer section start-->
   <?= $this->include('partials/footer'); ?>
   <!--Footer esction end-->
   <script>
      function actionToggleOne() {
         let action = document.querySelector('.contact-action');
         action.classList.toggle('open1');
      }
      function actionToggleTwo() {
         let action = document.querySelector('.action-1');
         action.classList.toggle('open2');
      }
      function actionToggleThree() {
         let action = document.querySelector('.action-2');
         action.classList.toggle('open3');
      }
      function actionToggleFour() {
         let action = document.querySelector('.action-3');
         action.classList.toggle('open4');
      }
   </script>
</body>

</html>