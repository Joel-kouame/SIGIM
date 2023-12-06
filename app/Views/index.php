<!DOCTYPE html>
<html lang="zxx" dir="ltr">
<head>
   <meta charset="utf-8" />
   <title>Systeme de Gestion des Informations Médicales</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <!--Template style -->
   <link rel="stylesheet" type="text/css" href="css/animate.css" />
   <link rel="stylesheet" type="text/css" href="css/animate.min.css" />
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
   <link rel="stylesheet" type="text/css" href="css/fonts.css" />
   <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
   <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
   <link rel="stylesheet" type="text/css" href="css/magnific-popup.css" />
   <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css" />
   <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css" />
   <link rel="stylesheet" type="text/css" href="css/style.css" />
   <link rel="stylesheet" type="text/css" href="css/responsive.css" />
   <!--favicon-->
   <link rel="shortcut icon" type="image/png" href="images/logo2.png" />
</head>

<body>
   <div id="preloader">
      <div id="status">
         <img src="images/preloader.gif" id="preloader_image" alt="loader">
      </div>
   </div>
   <!-- top to return -->
   <a href="javascript:;" id="return-to-top"><i class="fas fa-angle-double-up"></i></a>
   <!-- header start -->
   <?= $this->include('layout/header') ?>
   <!-- header end -->
   <!-- banner sction start -->
      <!-- banner section start -->
      <div class="banner-main-wrapper2 float_left">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="container">
                  <h4>la sante <span>, enfin accessible</span></h4>
                  <h3>Un systeme innovante qui <br>révolutionne les soins de santé.</h3>
                  <p>"Grâce à SIGIM, obtenez les meilleurs soins de santé, où que vous soyez." <br>SIGIM vous permet d'accéder à des soins de santé de qualité, <br>de manière rapide et efficace, où que vous soyez dans le monde.
                  </p>
                  <ul>
                     <li class="btn-color2"><a href="appoinment.html" class="page2-btn">Comment SIGIM peut vous aider ?</a></li>
                  </ul>
               </div>
            </div>
            <div class="carousel-item ">
            <div class="container">
               <h4>Prise de<span> Rendez-vous</span></h4>
               <h3>Santé, Innovation, Gain de temps</h3>
               <p>SIGIM offre une solution innovante pour obtenir un rendez-vous avec un<br> professionnel de santé en quelques clics. Notre approche personnalisée vous permet <br> de bénéficier d'une prévention adaptée à vos besoins.
               <ul>
                  <li><a href="service.html" class="page2-btn">Prendre RENDEZ-VOUS</a></li>
               </ul>
            </div>
            </div>
            <div class="carousel-item ">
               <div class="container">
                  <h4>Suivi de <span>traitement</span></h4>
                  <h3>Avec notre système de gestion<br> d'information medicale, vous pouvez :</h3>
                  <span style="margin-top: 10px; font-size:1em">- Consulter vos rendez-vous à venir</span><br>
                  <span style="margin-top: 10px; font-size:1em">- Suivre vos prescriptions</span><br>
                  <span style="margin-top: 10px; font-size:1em">- Recevoir des rappels</span>
                  <ul>
                     <li class="btn-color2"><a href="appoinment.html" class="page2-btn">En savoir plus sur SIGIM ?</a></li>
                  </ul>
               </div>
            </div>
         </div>
         <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
         </button>
         <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
         </button>
      </div>
   </div>
   <div class="service2-main-wrapper2 float_left">
      <div class="container">
         <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 col-12 p-0">
               <section class="resp-margin">
                  <div class="sb-service-section2 serve0">
                     <span class="d-inline-block"><i class="fas fa-heartbeat"></i></span>
                     <h5>Dossier médicale</h5>
                     <p>Historique médical <br>Antécédents familiaux <br> Examens et tests, <br>Allergies <br>Traitement en cours</p>
                  </div>
                  <div class="hover-type">
                     <a href="service.html" class="d-inline-block w-100 text-center">Voir mon DOSSIER</a>
                  </div>
               </section>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12 p-0">
               <section class="resp-margin">
                  <div class="sb-service-section2 serve1">
                     <span class="d-inline-block"><i class="fas fa-briefcase-medical"></i></span>
                     <h5>Conseil Medical</h5>
                     <p>
                        Apprenez-en plus sur des symptômes <br>Améliorer votre santé cardiaque. <br>Découvrez les différents types de traitement du cancer et leurs avantages.
                     </p>
                  </div>
                  <div class="hover-type">
                     <a href="service.html" class="d-inline-block w-100 text-center">View More</a>
                  </div>
               </section>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12 p-0">
               <section class="resp-margin">
                  <div class="sb-service-section2 serve2">
                     <span class="d-inline-block"><i class="fas fa-notes-medical"></i></span>
                     <h5>Professionnels de la santé</h5>
                     <p>
                        Partage de dossiers médicaux <br>Mise a jour d'un dossier <br>Accès à des informations médicales <br>Note medicale <br>Avis d'autre Medecin
                     </p>
                  </div>
                  <div class="hover-type">
                     <a href="service.html" class="d-inline-block w-100 text-center">Metre à jour</a>
                  </div>
               </section>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12 p-0">
               <section class="resp-margin">
                  <div class="sb-service-section2 serve3">
                     <span class="d-inline-block"><i class="fas fa-hospital-alt"></i></span>
                     <h5>Rendez - Vous</h5>
                     <p>Vous pouvez utiliser l'application SIGIM pour réserver des rendez-vous avec des professionnels de la santé quelque soit votre emplacement actuelle.
                     </p>
                  </div>
                  <div class="hover-type">
                     <a href="service.html" class="d-inline-block w-100 text-center">Prendre un Rendez-vous</a>
                  </div>
               </section>
            </div>
         </div>
      </div>
   </div>
   <!-- banner section end -->
   <!-- index-02 about section start-->
   <div class="about2-main-wrapper float_left">
      <div class="container">
         <div class="row">
            <div class="col-lg-4 d-none d-xl-block d-lg-block">
               <div class="">
                  <img src="images/about2-img.jpg" alt="img" class="w-100">
               </div>
            </div>
            <div class="col-lg-8 col-md-12 col-12">
               <div class="sb-about-section">
                  <h3>Apropos de <span>SIGMI</span></h3>
                  <h4>LA SANTE AU COEUR DE NOS PREOCUPATIONS
                  </h4>
                  <p>SIGIM est un système informatique de gestion des informations médicales qui révolutionne la façon dont les patients sont pris en charge. Il permet aux professionnels de la santé d'accéder aux informations dont ils ont besoin rapidement et facilement, ce qui permet de garantir une prise en charge plus précise et plus personnalisée.
                  </p>
                  <div class="counter-main">
                     <div class="count-up">
                        <div class="counter-icon">
                           <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64"
                              style="enable-background:new 0 0 64 64;" xml:space="preserve">
                              <path d="M44.6,43.8c0.252-0.188,0.4-0.485,0.4-0.8v-0.197c1.699-1.601,3.067-3.48,4.068-5.538C49.703,43.289,54.811,48,61,48
                                          c0.552,0,1-0.448,1-1V23c0-6.617-5.383-12-12-12h-1.875C44.769,5.608,38.805,2,32,2C21.861,2,13.576,9.989,13.051,20H12
                                          c-2.757,0-5,2.243-5,5s2.243,5,5,5h1.053c0.26,4.851,2.382,9.443,5.947,12.803V43c0,0.315,0.148,0.611,0.4,0.8
                                          c1.136,0.852,2.347,1.558,3.6,2.149v1.806c0,1.41-1.001,2.645-2.382,2.936l-9.635,2.029c-4.164,0.876-7.586,3.928-8.932,7.965
                                          C2.017,60.786,2,60.893,2,61v1h2v-0.833c1.156-3.292,3.976-5.771,7.395-6.491l1.675-0.353C17.365,58.51,24.383,61,32,61
                                          s14.635-2.49,18.93-6.677l1.675,0.353c3.419,0.72,6.239,3.199,7.395,6.491V62h2v-1c0-0.107-0.017-0.214-0.051-0.316
                                          c-1.346-4.037-4.768-7.089-8.932-7.965l-9.635-2.029C42.001,50.399,41,49.165,41,47.754v-1.806
                                          C42.253,45.357,43.464,44.652,44.6,43.8z M20.392,29.921L15,23.63v-0.673c5.699-0.348,10.457-3.624,12.238-8.085
                                          c3.031,4.588,11.348,7.866,21.523,8.113l-5.197,6.929l-11.4-1.9c-0.109-0.019-0.22-0.019-0.329,0L20.392,29.921z M52,22
                                          c1.654,0,3,1.346,3,3s-1.346,3-3,3h-1v-6H52z M45,39.891v-8.558L49,26v3C49,32.997,47.553,36.846,45,39.891z M50,13
                                          c5.514,0,10,4.486,10,10v22.95c-5.046-0.503-9-4.774-9-9.95v-6h1c2.757,0,5-2.243,5-5s-2.243-5-5-5h-1.051
                                          c-0.131-2.491-0.737-4.852-1.74-7H50z M32,4c9.37,0,16.993,7.62,16.999,16.988C37.517,20.741,28,16.268,28,11h-2
                                          c0,5.232-4.849,9.531-10.998,9.958C15.025,11.603,22.64,4,32,4z M9,25c0-1.654,1.346-3,3-3h1v6h-1C10.346,28,9,26.654,9,25z M15,29
                                          v-2.297l4,4.667v8.521C16.447,36.846,15,32.997,15,29z M21,40.22l3.804,0.761l0.393-1.961L21,38.18V35.82l4.196-0.839l-0.393-1.961
                                          L21,33.78v-1.933l11-1.833l11,1.833v1.933l-3.804-0.761l-0.393,1.961L43,35.82v2.361l-4.196,0.839l0.393,1.961L43,40.22v2.272
                                          c-6.547,4.646-15.453,4.646-22,0V40.22z M42.97,52.647l5.538,1.166C44.527,57.084,38.517,59,32,59s-12.527-1.916-16.508-5.187
                                          l5.538-1.166c2.3-0.484,3.97-2.542,3.97-4.893v-0.982c2.26,0.792,4.628,1.201,7,1.201s4.74-0.409,7-1.201v0.982
                                          C39,50.105,40.669,52.163,42.97,52.647z" />
                              <circle cx="25" cy="26" r="2" />
                              <circle cx="39" cy="26" r="2" />
                           </svg>
                        </div>
                        <div>
                           <h4 class="counter-count">4500</h4>
                           <p>Patients satisfais</p>
                        </div>
                     </div>
                     <div class="count-up">
                        <div class="counter-icon">
                           <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64"
                              style="enable-background:new 0 0 64 64;" xml:space="preserve">
                              <path d="M44.6,43.8c0.252-0.188,0.4-0.485,0.4-0.8v-0.197c1.699-1.601,3.067-3.48,4.068-5.538C49.703,43.289,54.811,48,61,48
                                          c0.552,0,1-0.448,1-1V23c0-6.617-5.383-12-12-12h-1.875C44.769,5.608,38.805,2,32,2C21.861,2,13.576,9.989,13.051,20H12
                                          c-2.757,0-5,2.243-5,5s2.243,5,5,5h1.053c0.26,4.851,2.382,9.443,5.947,12.803V43c0,0.315,0.148,0.611,0.4,0.8
                                          c1.136,0.852,2.347,1.558,3.6,2.149v1.806c0,1.41-1.001,2.645-2.382,2.936l-9.635,2.029c-4.164,0.876-7.586,3.928-8.932,7.965
                                          C2.017,60.786,2,60.893,2,61v1h2v-0.833c1.156-3.292,3.976-5.771,7.395-6.491l1.675-0.353C17.365,58.51,24.383,61,32,61
                                          s14.635-2.49,18.93-6.677l1.675,0.353c3.419,0.72,6.239,3.199,7.395,6.491V62h2v-1c0-0.107-0.017-0.214-0.051-0.316
                                          c-1.346-4.037-4.768-7.089-8.932-7.965l-9.635-2.029C42.001,50.399,41,49.165,41,47.754v-1.806
                                          C42.253,45.357,43.464,44.652,44.6,43.8z M20.392,29.921L15,23.63v-0.673c5.699-0.348,10.457-3.624,12.238-8.085
                                          c3.031,4.588,11.348,7.866,21.523,8.113l-5.197,6.929l-11.4-1.9c-0.109-0.019-0.22-0.019-0.329,0L20.392,29.921z M52,22
                                          c1.654,0,3,1.346,3,3s-1.346,3-3,3h-1v-6H52z M45,39.891v-8.558L49,26v3C49,32.997,47.553,36.846,45,39.891z M50,13
                                          c5.514,0,10,4.486,10,10v22.95c-5.046-0.503-9-4.774-9-9.95v-6h1c2.757,0,5-2.243,5-5s-2.243-5-5-5h-1.051
                                          c-0.131-2.491-0.737-4.852-1.74-7H50z M32,4c9.37,0,16.993,7.62,16.999,16.988C37.517,20.741,28,16.268,28,11h-2
                                          c0,5.232-4.849,9.531-10.998,9.958C15.025,11.603,22.64,4,32,4z M9,25c0-1.654,1.346-3,3-3h1v6h-1C10.346,28,9,26.654,9,25z M15,29
                                          v-2.297l4,4.667v8.521C16.447,36.846,15,32.997,15,29z M21,40.22l3.804,0.761l0.393-1.961L21,38.18V35.82l4.196-0.839l-0.393-1.961
                                          L21,33.78v-1.933l11-1.833l11,1.833v1.933l-3.804-0.761l-0.393,1.961L43,35.82v2.361l-4.196,0.839l0.393,1.961L43,40.22v2.272
                                          c-6.547,4.646-15.453,4.646-22,0V40.22z M42.97,52.647l5.538,1.166C44.527,57.084,38.517,59,32,59s-12.527-1.916-16.508-5.187
                                          l5.538-1.166c2.3-0.484,3.97-2.542,3.97-4.893v-0.982c2.26,0.792,4.628,1.201,7,1.201s4.74-0.409,7-1.201v0.982
                                          C39,50.105,40.669,52.163,42.97,52.647z" />
                              <circle cx="25" cy="26" r="2" />
                              <circle cx="39" cy="26" r="2" />
                           </svg>
                        </div>
                        <div>
                           <h4 class="counter-count">500</h4>
                           <p>Récompences</p>
                        </div>
                     </div>
                     <div class="count-up">
                        <div class="counter-icon">
                           <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64"
                              style="enable-background:new 0 0 64 64;" xml:space="preserve">
                              <path d="M44.6,43.8c0.252-0.188,0.4-0.485,0.4-0.8v-0.197c1.699-1.601,3.067-3.48,4.068-5.538C49.703,43.289,54.811,48,61,48
                                          c0.552,0,1-0.448,1-1V23c0-6.617-5.383-12-12-12h-1.875C44.769,5.608,38.805,2,32,2C21.861,2,13.576,9.989,13.051,20H12
                                          c-2.757,0-5,2.243-5,5s2.243,5,5,5h1.053c0.26,4.851,2.382,9.443,5.947,12.803V43c0,0.315,0.148,0.611,0.4,0.8
                                          c1.136,0.852,2.347,1.558,3.6,2.149v1.806c0,1.41-1.001,2.645-2.382,2.936l-9.635,2.029c-4.164,0.876-7.586,3.928-8.932,7.965
                                          C2.017,60.786,2,60.893,2,61v1h2v-0.833c1.156-3.292,3.976-5.771,7.395-6.491l1.675-0.353C17.365,58.51,24.383,61,32,61
                                          s14.635-2.49,18.93-6.677l1.675,0.353c3.419,0.72,6.239,3.199,7.395,6.491V62h2v-1c0-0.107-0.017-0.214-0.051-0.316
                                          c-1.346-4.037-4.768-7.089-8.932-7.965l-9.635-2.029C42.001,50.399,41,49.165,41,47.754v-1.806
                                          C42.253,45.357,43.464,44.652,44.6,43.8z M20.392,29.921L15,23.63v-0.673c5.699-0.348,10.457-3.624,12.238-8.085
                                          c3.031,4.588,11.348,7.866,21.523,8.113l-5.197,6.929l-11.4-1.9c-0.109-0.019-0.22-0.019-0.329,0L20.392,29.921z M52,22
                                          c1.654,0,3,1.346,3,3s-1.346,3-3,3h-1v-6H52z M45,39.891v-8.558L49,26v3C49,32.997,47.553,36.846,45,39.891z M50,13
                                          c5.514,0,10,4.486,10,10v22.95c-5.046-0.503-9-4.774-9-9.95v-6h1c2.757,0,5-2.243,5-5s-2.243-5-5-5h-1.051
                                          c-0.131-2.491-0.737-4.852-1.74-7H50z M32,4c9.37,0,16.993,7.62,16.999,16.988C37.517,20.741,28,16.268,28,11h-2
                                          c0,5.232-4.849,9.531-10.998,9.958C15.025,11.603,22.64,4,32,4z M9,25c0-1.654,1.346-3,3-3h1v6h-1C10.346,28,9,26.654,9,25z M15,29
                                          v-2.297l4,4.667v8.521C16.447,36.846,15,32.997,15,29z M21,40.22l3.804,0.761l0.393-1.961L21,38.18V35.82l4.196-0.839l-0.393-1.961
                                          L21,33.78v-1.933l11-1.833l11,1.833v1.933l-3.804-0.761l-0.393,1.961L43,35.82v2.361l-4.196,0.839l0.393,1.961L43,40.22v2.272
                                          c-6.547,4.646-15.453,4.646-22,0V40.22z M42.97,52.647l5.538,1.166C44.527,57.084,38.517,59,32,59s-12.527-1.916-16.508-5.187
                                          l5.538-1.166c2.3-0.484,3.97-2.542,3.97-4.893v-0.982c2.26,0.792,4.628,1.201,7,1.201s4.74-0.409,7-1.201v0.982
                                          C39,50.105,40.669,52.163,42.97,52.647z" />
                              <circle cx="25" cy="26" r="2" />
                              <circle cx="39" cy="26" r="2" />
                           </svg>
                        </div>
                        <div>
                           <h4 class="counter-count">250</h4>
                           <p>Hopitals partenaires</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- index-02 about section end -->
   <!-- index 02 emergency section start -->
   <div class="emergency2-main-wrapper float_left">
      <div class="container-fluid">
         <div class="row text-center">
            <div class="p-0">
               <div class="sb-emergency-section">gdgdgdgdg</div>
            </div>
         </div>
      </div>
   </div>
   <!-- index 02 emergency section end -->
   <!-- index 02 page service section start -->
   <div class="service2-main-wrapper float_left">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
               <div class="page-2-heading">
                  <h4>
                     Ce que, <span>Nous vous offrons</span>
                  </h4>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
               <div class="sb-service-box mt-5">
                  <i class="fas fa-university"></i>
                  <h6>Prise de rendez-vous en ligne</h6>
                  <p>Utilisation SIGIM pour réserver des rendez-vous avec des professionnels de la santé. Cela permet de simplifier le processus de prise de rendez-vous et d'éviter les temps d'attente.
                  </p>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
               <div class="sb-service-box mt-5">
                  <i class="fas fa-stethoscope"></i>
                  <h6>Accès à votre dossier médicale</h6>
                  <p>Accéder à votre dossiers médicale à tout moment et de n'importe où via l'application SIGIM. Cela permet de suivre sa santé et de partager leurs informations avec leurs professionnels de la santé.
                  </p>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
               <div class="sb-service-box mt-5">
                  <i class="fas fa-heartbeat"></i>
                  <h6>Consulter vos résultats en ligne</h6>
                  <p>Consulter vos résultats de santé à tout moment et de n'importe où, ce qui vous permet de rester informés de votre santé et de poser des questions à vos médecin si nécessaire.
                  </p>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
               <div class="sb-service-box">
                  <i class="fas fa-american-sign-language-interpreting"></i>
                  <h6>Suivi de traitement en ligne</h6>
                  <p>Rester au courant de votre santé et de votre traitement. Nous vous envoyons des notifications et des rappels pour les rendez-vous à venir, les médicaments à prendre, et plus encore.
                  </p>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
               <div class="sb-service-box">
                  <i class="fas fa-wheelchair"></i>
                  <h6>for Disable</h6>
                  <p>It is a long established fact that a reader
                     will be distracted by the readable the
                     content of a page when looking.
                  </p>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
               <div class="sb-service-box">
                  <i class="fas fa-american-sign-language-interpreting"></i>
                  <h6>Psychiatry </h6>
                  <p>It is a long established fact that a reader
                     will be distracted by the readable the
                     content of a page when looking.
                  </p>
               </div>
            </div>
         </div>
         <div class="col-lg-12 col-md-12 col-12">
            <div class="text-center mt-5">
               <a href="service.html" class="page2-btn bg-change">See all Service</a>
            </div>
         </div>
      </div>
   </div>
   <!-- </div> -->
   <!-- index 02 page service section end -->
   <!-- index 02 page team section start -->

   <!-- <div class="founder-main-wrapper float_left">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
               <div class="page-2-heading">
                  <h4>
                     Our <span>Founders</span>
                  </h4>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
               <div class="sb-founder-section pt-5">
                  <img src="images/founder-img1.png" alt="img">
                  <section>
                     <div class="sb-service-section2 bg-change2">
                        <h6>Dr. Aimee Devlin</h6>
                        <p>Psychiatrist</p>
                     </div>
                     <div class="hover-type">
                        <a href="appoinment.html" class="d-inline-block w-100 text-center">Appointment</a>
                     </div>
                  </section>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
               <div class="sb-founder-section pt-5">
                  <img src="images/founder-img2.png" alt="img">
                  <section>
                     <div class="sb-service-section2 bg-change2">
                        <h6>Dr. Aimee Devlin</h6>
                        <p>Psychiatrist</p>
                     </div>
                     <div class="hover-type">
                        <a href="appoinment.html" class="d-inline-block w-100 text-center">Appointment</a>
                     </div>
                  </section>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
               <div class="sb-founder-section pt-5">
                  <img src="images/founder-img3.png" alt="img">
                  <section>
                     <div class="sb-service-section2 bg-change2">
                        <h6>Dr. Aimee Devlin</h6>
                        <p>Psychiatrist</p>
                     </div>
                     <div class="hover-type">
                        <a href="appoinment.html" class="d-inline-block w-100 text-center">Appointment</a>
                     </div>
                  </section>
               </div>
            </div>
         </div>
         <div class="col-lg-12 col-md-12 col-12">
            <div class="text-center mt-5">
               <a href="all-dr.html" class="page2-btn bg-change">See all Doctors</a>
            </div>
         </div>
      </div>
   </div> -->
   
                  <div class="gallery-box-section gallery-main-wrapper float_left gallery-main-page">
                     <div class="container">
                     <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-12">
               <div class="page-2-heading">
                  <h4>
                     Our <span>Founders</span>
                  </h4>
               </div>
            </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                           <div class="portfolio_img_wrapper">
                              <div class="portfolio_img">
                                 <img src="images/gallery-img1.jpg" class="img-responsive" alt="team1_img" id="myImg">
                                 <div class="portfolio_img_overlay overlay-color">
                                    <div class="portfolio_img_text">
                                       <a href="images/gallery-img1.jpg" title="image3" class="img-link">
                                          <img src="images/plus-Icon.png" alt="img" aria-hidden="true">
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                           <div class="portfolio_img_wrapper">
                              <div class="portfolio_img">
                                 <img src="images/gallery-img2.jpg" class="img-responsive" alt="team1_img">
                                 <div class="portfolio_img_overlay overlay-color">
                                    <div class="portfolio_img_text">
                                       <a href="images/gallery-img2.jpg" title="image4" class="img-link">
                                          <img src="images/plus-Icon.png" alt="img" aria-hidden="true">
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                           <div class="portfolio_img_wrapper">
                              <div class="portfolio_img">
                                 <img src="images/gallery-img3.jpg" class="img-responsive" alt="team1_img">
                                 <div class="portfolio_img_overlay overlay-color">
                                    <div class="portfolio_img_text">
                                       <a href="images/gallery-img3.jpg" title="image5" class="img-link">
                                          <img src="images/plus-Icon.png" alt="img" aria-hidden="true">
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                           <div class="portfolio_img_wrapper">
                              <div class="portfolio_img">
                                 <img src="images/home3/gallery-img11.jpg" class="img-responsive" alt="team1_img">
                                 <div class="portfolio_img_overlay overlay-color">
                                    <div class="portfolio_img_text">
                                       <a href="images/home3/gallery-img11.jpg" title="image6" class="img-link">
                                          <img src="images/plus-Icon.png" alt="img" aria-hidden="true">
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                           <div class="portfolio_img_wrapper">
                              <div class="portfolio_img">
                                 <img src="images/gallery-img1.jpg" class="img-responsive" alt="team1_img">
                                 <div class="portfolio_img_overlay overlay-color">
                                    <div class="portfolio_img_text">
                                       <a href="images/gallery-img1.jpg" title="image1" class="img-link">
                                          <img src="images/plus-Icon.png" alt="img" aria-hidden="true">
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                           <div class="portfolio_img_wrapper">
                              <div class="portfolio_img">
                                 <img src="images/home3/gallery-img7.jpg" class="img-responsive" alt="team1_img">
                                 <div class="portfolio_img_overlay overlay-color">
                                    <div class="portfolio_img_text">
                                       <a href="images/home3/gallery-img7.jpg" title="image2" class="img-link">
                                          <img src="images/plus-Icon.png" alt="img" aria-hidden="true">
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                           <div class="portfolio_img_wrapper">
                              <div class="portfolio_img">
                                 <img src="images/home3/gallery-img8.jpg" class="img-responsive" alt="team1_img">
                                 <div class="portfolio_img_overlay overlay-color">
                                    <div class="portfolio_img_text">
                                       <a href="images/home3/gallery-img8.jpg" title="image3" class="img-link">
                                          <img src="images/plus-Icon.png" alt="img" aria-hidden="true">
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                           <div class="portfolio_img_wrapper">
                              <div class="portfolio_img">
                                 <img src="images/home3/gallery-img10.jpg" class="img-responsive" alt="team1_img">
                                 <div class="portfolio_img_overlay overlay-color">
                                    <div class="portfolio_img_text">
                                       <a href="images/gallery-img10.jpg" title="image5" class="img-link">
                                          <img src="images/plus-Icon.png" alt="img" aria-hidden="true">
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-12">
                           <div class="text-center mt-3">
                              <a href="javascript:;" class="button-btn mt-4">Load More
                                 <span><i class="fas fa-angle-double-right"></i></span>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>


   <!-- index 02 page team section end -->
   <!-- index 02 page gallery section start-->
   <!-- index 02 page  gallery section End-->
   <!-- index02 page Client section start -->


   <!-- <div class="client2-main-wrapper float_left">
      <div class="container">
         <div class="row align-items-end">
            <div class="col-lg-8 col-md-12 col-sm-12 col-12">
               <div class="slider-section">
                  <div class="page-2-heading mb-2 mt-5">
                     <h4 class="text-color text-start set-margin">
                        Gallery de <span>Partenaires</span>
                     </h4>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div> -->


   <!-- index 02 page client section end -->
   <!-- index 02 page health section start -->
   <div class="health-main-wrapper float_left">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
               <div class="sb-health-main-sec">
                  <h4>Need to Take Care of Your <br> <span>Family Health</span></h4>
                  <p class="my-4">It is a long established fact that a reader will be distracted by the
                     readable<br>
                     content of a page when looking at its layout.
                  </p>
                  <a href="service.html" class="page2-btn bg-white">View all service</a>
                  <a href="contact-us.html" class="page2-btn">Contact Us</a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--index- 02 page health section end  -->
   <!-- index 02 page blog section start -->
   <div class="blog-main-wrapper news2-page-main float_left">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col sm-12 col-12">
               <div class="sb-blog-main-section">
                  <div class="page-2-heading">
                     <h4 class="text-color">
                        Popular <span>News</span>
                     </h4>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
               <div class="blog-box">
                  <div class="img-icon">
                     <img src="images/blog-img1.jpg" alt="img">
                     <div class="img-overlay"></div>
                     <p class="bg-blue text-center">08<br>
                        july
                     </p>
                  </div>
                  <div class="blog-content">
                     <h3><a href="blog-single.html">Spending More and Getting Less
                           for Health Care</a>
                     </h3>
                     <ul>
                        <li><a href="javascript:;"><i class="far fa-user text-blue"></i> by
                              John Doe</a>
                        </li>
                        <li><a href="javascript:;"><i class="far fa-comments text-blue"></i>Comments 02
                           </a>
                        </li>
                     </ul>
                     <p>It is a long established fact that a reader will be
                        distracted by the readable content of a page
                        when looking at its layout.
                     </p>
                     <a href="blog-single.html" class="r-btn text-blue">Read More</a>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
               <div class="blog-box">
                  <div class="img-icon">
                     <img src="images/blog-img2.jpg" alt="img">
                     <div class="img-overlay"></div>
                     <p class="bg-blue text-center">20<br>
                        july
                     </p>
                  </div>
                  <div class="blog-content">
                     <h3><a href="blog-single.html">Aliq is notm hendr erit a augue insu image
                           pellen
                           tes</a>
                     </h3>
                     <ul>
                        <li><a href="javascript:;"><i class="far fa-user text-blue"></i> by
                              John Doe</a>
                        </li>
                        <li><a href="javascript:;"><i class="far fa-comments text-blue"></i>Comments 02
                           </a>
                        </li>
                     </ul>
                     <p>It is a long established fact that a reader will be
                        distracted by the readable content of a page
                        when looking at its layout.
                     </p>
                     <a href="blog-single.html" class="r-btn text-blue">Read More</a>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
               <div class="blog-box">
                  <div class="img-icon">
                     <img src="images/blog-img3.jpg" alt="img">
                     <div class="img-overlay"></div>
                     <p class="bg-blue text-center">28<br>
                        july
                     </p>
                  </div>
                  <div class="blog-content">
                     <h3><a href="blog-single.html">Brain damage is not caused by direct or
                           Health Care</a>
                     </h3>
                     <ul>
                        <li><a href="javascript:;"><i class="far fa-user text-blue"></i> by
                              John Doe</a>
                        </li>
                        <li><a href="javascript:;"><i class="far fa-comments text-blue"></i>Comments 02
                           </a>
                        </li>
                     </ul>
                     <p>It is a long established fact that a reader will be
                        distracted by the readable content of a page
                        when looking at its layout.
                     </p>
                     <a href="blog-single.html" class="r-btn text-blue">Read More</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- index 02 page blog section end -->
   <!--index 02 page partner section start -->
   <div class="partner-main-wrapper bg-section-color float_left">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
               <div class="sb-partner-wrapper">
                  <div class="owl-carousel owl-theme">
                     <div class="item">
                        <img src="images/p-logos1.png" alt="img">
                     </div>
                     <div class="item">
                        <img src="images/p-logos2.png" alt="img">
                     </div>
                     <div class="item">
                        <img src="images/p-logos3.png" alt="img">
                     </div>
                     <div class="item">
                        <img src="images/p-logos4.png" alt="img">
                     </div>
                     <div class="item">
                        <img src="images/p-logos5.png" alt="img">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- partner section start -->
   <!-- footer section start -->
   <?= $this->include('layout/footer') ?>                             
</body>

</html>