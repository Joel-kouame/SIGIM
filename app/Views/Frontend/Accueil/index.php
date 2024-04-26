<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
   <?= $this->include('partials/head-css'); ?>
</head>
<body>
   <!-- debut du header -->
   <?= $this->include('partials/header'); ?>
   <!-- fin header -->
   
   <!-- banner sction start -->
      <!-- banner section start -->
      <div class="banner-main-wrapper2 float_left">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="container">
                  <h4>la sante <span>, enfin accessible</span></h4>
                  <h3>Un systeme innovant qui <br>révolutionne les soins de santé.</h3>
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
                  <span style="margin-top: 10px;-size:1em">- Consulter vos rendez-vous à venir</span><br>
                  <span style="margin-top: 10px;-size:1em">- Suivre vos prescriptions</span><br>
                  <span style="margin-top: 10px;-size:1em">- Recevoir des rappels</span>
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
                     <h5>Carnet numérique</h5>
                     <p>Historique médical <br>Antécédents familiaux <br> Examens et tests, <br>Allergies <br>Traitement en cours</p>
                  </div>
                  <div class="hover-type">
                     <a href="<?= base_url('/information_carnet')?>" class="d-inline-block w-100 text-center">Voir mon DOSSIER</a>
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
                     <a href="service.html" class="d-inline-block w-100 text-center">En savoir plus !</a>
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
                  <img src="<?= base_url('public/asset/images/about2-img.jpg') ?>" alt="img" class="w-100">
               </div>
            </div>
            <div class="col-lg-8 col-md-12 col-12">
               <div class="sb-about-section">
                  <h3>A propos de <span>SIGMI</span></h3>
                  <h4>LA SANTE AU COEUR DE NOS PREOCUPATIONS
                  </h4>
                  <p>SIGIM est un système informatique de gestion des informations médicales qui révolutionne la façon dont les patients sont pris en charge. Il permet aux professionnels de la santé d'accéder aux informations dont ils ont besoin rapidement et facilement, ce qui permet de garantir une prise en charge plus précise et plus personnalisée.
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi dolorum magni amet fugit. Architecto reprehenderit ea sint placeat iste! Delectus, odio esse? Ea rerum non veniam est! Corrupti, quae incidunt.
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, error blanditiis. Saepe sint assumenda rem amet dolores qui rerum ut corporis, quia perspiciatis repellendus atque architecto ipsum. Velit, molestias temporibus!
                  </p>
                  <div class="mt-5">
                     <a href="<?= base_url('apropos')?>" class="page2-btn rdvc">lire plus</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- index-02 about section end -->
   <!-- index 02 emergency section start -->
   <div class="emergency2-main-wrapper float_left" style="margin-bottom: 80px">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 col-12 p-0">
               <div class="video-section">
                  <!-- Modal -->
                  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-centered"></div>
                  </div>
               </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 col-12 p-0">
               <div class="sb-emergency-section">
                  <div class="content">
                     <span><i class="fas fa-headphones-alt"></i></span>
                     <h4>Le Bouttons Alerte<br>disponible 24/7</h4>
                  </div>
                  <p>En d'urgence, en un <a href="#" class="urgences"> clic </a> faite sonner le téléphone du medecin traitant<br>
                     et cas d'indisponibilité l'alert est transferer aux secour d'urgence (Saper-Pompier, Samu)
                  </p>
                  <div class="content">
                     <span><i class="fas fa-phone"></i></span>
                     <h4>+225 0701 0203 04 </h4>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- index 02 emergency section end -->

    <!-- emergency sction start -->
   <div class="emergency-main-wrapper">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
               <div class="sb-emergency-main-wrapper ">
                  <div class="content">
                     <img src="<?= base_url('public/assets/images/logo1.png')?>" alt="" srcset="" height="100px" width="auto">
                  </div>
                  <h4 class="text-white f-10">Téléchargez notre application et vivez une nouvelle experience remarquable.
                  </h4>
                  <p class="my-3">Ne manquez pas l’opportunité de profiter de tous les avantages de notre application mobile! Téléchargez-la dès maintenant et accédez à des fonctionnalités exclusives, des offres spéciales et bien plus encore. C’est rapide, facile et gratuit!
                  </p>
                  <!-- <div class="content">
                  </div> -->
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- emergency section end -->

   <!-- index 02 page health section start -->
   <div class="health-main-wrapper float_left" style="margin-top: 80px">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
               <div class="sb-health-main-sec">
                  <h4>Besoin de prendre soin de votre <br>Santé familiale</h4>
                  <p class="my-4">Contactez-nous pour en savoir plus sur la façon dont nous pouvons<br>vous aider à améliorer votre santé.
                  </p>
                  <a href="service.html" class="page2-btn bg-white">EN SAVOIR PLUS</a>
                  <a href="contact-us.html" class="page2-btn">NOUS CONTACTER</a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--index- 02 page health section end  -->
   <!-- index 02 page gallery section start-->
   <div class="gallery-main-wrapper float_left">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
               <div class="page-2-heading">
                  <h4 class="text-color">
                     Our Gallery
                  </h4>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="gallery-box-section float_left">
      <div class="container">
         <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
               <div class="portfolio_img_wrapper">
                  <div class="portfolio_img">
                     <img src="<?= base_url('public/asset/images/gallery-img1.jpg') ?>" class="img-responsive" alt="team1_img">
                     <div class="portfolio_img_overlay">
                        <div class="portfolio_img_text">
                           <a href="<?= base_url('public/asset/images/gallery-img1.jpg') ?>" title="image3" class="img-link">
                              <img src="<?= base_url('public/asset/images/plus-Icon.png') ?>" alt="img" aria-hidden="true">
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
               <div class="portfolio_img_wrapper">
                  <div class="portfolio_img">
                     <img src="<?= base_url('public/asset/images/gallery-img2.jpg') ?>" class="img-responsive" alt="team1_img">
                     <div class="portfolio_img_overlay">
                        <div class="portfolio_img_text">
                           <a href="<?=base_url('public/asset/images/gallery-img2.jpg') ?>" title="image4" class="img-link">
                              <img src="<?= base_url('public/asset/images/plus-Icon.png') ?>" alt="img" aria-hidden="true">
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
               <div class="portfolio_img_wrapper">
                  <div class="portfolio_img">
                     <img src="<?= base_url('public/asset/images/gallery-img3.jpg') ?>" class="img-responsive" alt="team1_img">
                     <div class="portfolio_img_overlay">
                        <div class="portfolio_img_text">
                           <a href="<?= base_url('public/asset/images/gallery-img3.jpg') ?>" title="image5" class="img-link">
                              <img src="<?= base_url('public/asset/images/plus-Icon.png') ?>" alt="img" aria-hidden="true">
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
               <div class="portfolio_img_wrapper">
                  <div class="portfolio_img">
                     <img src="<?= base_url('public/asset/images/gallery-img4.jpg') ?>" class="img-responsive" alt="team1_img">
                     <div class="portfolio_img_overlay">
                        <div class="portfolio_img_text">
                           <a href="<?= base_url('public/asset/images/gallery-img4.jpg') ?>" title="image6" class="img-link">
                              <img src="<?= base_url('public/asset/images/plus-Icon.png') ?>" alt="img" aria-hidden="true">
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
               <div class="portfolio_img_wrapper">
                  <div class="portfolio_img">
                     <img src="<?= base_url('public/asset/images/gallery-img5.jpg') ?>" class="img-responsive" alt="team1_img">
                     <div class="portfolio_img_overlay">
                        <div class="portfolio_img_text">
                           <a href="<?= base_url('public/asset/images/gallery-img5.jpg') ?>" title="image1" class="img-link">
                              <img src="<?= base_url('public/asset/images/plus-Icon.png') ?>" alt="img" aria-hidden="true">
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
               <div class="portfolio_img_wrapper">
                  <div class="portfolio_img">
                     <img src="<?= base_url('public/asset/images/gallery-img6.jpg') ?>" class="img-responsive" alt="team1_img">
                     <div class="portfolio_img_overlay">
                        <div class="portfolio_img_text">
                           <a href="<?= base_url('public/asset/images/gallery-img6.jpg') ?>" title="image2" class="img-link">
                              <img src="<?= base_url('public/asset/images/plus-Icon.png') ?>" alt="img" aria-hidden="true">
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-12 col-md-12 col-12">
               <div class="text-center mt-5">
                  <a href="gallery.html" class="page2-btn bg-change">Voir plus Images</a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- index 02 page  gallery section End-->
   
   <!-- footer section start -->
   <!-- partner section start -->
   
   <!--Footer section start-->
        <?= $this->include('partials/footer'); ?>
   <!--Footer esction end-->
</body>

</html>