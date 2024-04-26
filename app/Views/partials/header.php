 <!-- top to return -->
 <a href="javascript:;" id="return-to-top" class="change-bg1"><i class="fas fa-angle-double-up"></i></a>
   <div class="main-header-wrapper2 float_left">
      <div class="sb-header-section2 d-xl-block d-lg-block d-md-none d-sm-none d-none">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-md-3">
                  <div class="logo-wrapper2">
                     <a href="<?= base_url('/')?>"> <img src="<?= base_url('public/asset/images/logo2.png') ?>" alt="img" heigth="auto" width="250px"></a>
                  </div>
               </div>
               <div class="col-lg-9 col-md-9">
                  <div class="menu-top-section2">
                     <ul>
                        <li><a href="tel:+2250757719315"><i class="fas fa-phone" style="margin-right: 10px"></i><?= $information['telephone']; ?></a></li>
                        <li><a href="mailto:fablabsigim@gmail.com;"><i class="fas fa-envelope" style="margin-right: 10px"></i><?= $information['email']; ?></a></li>
                        <li>
                           <ul class="">
                              <li><a href="facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                              <li><a href="whatsapp.com"><i class="fab fa-whatsapp"></i></a></li>
                              <li><a href="instagram.com"><i class="fab fa-instagram"></i></a></li>
                           </ul>
                        </li>
                        <li class="btn2">
                           <span class="text-light">
                              <a href="<?= base_url('/Patient/register'); ?>">Inscription</a> / <a href="<?= base_url('login'); ?>">Connexion </a>
                           </span>
                        </li>
                     </ul>
                  </div>
                  <div class="menu-section2">
                     <ul>
                        <li class="nav-item ps-rel">
                           <a class="nav-link" href="<?= base_url('/')?>">Accueil</a>
                        <!-- </li>
                        <li class="nav-item ps-rel">
                           <a class="nav-link" href="#">Services</a>
                        </li> -->
                        <li class="nav-item ps-rel">
                           <a class="nav-link" href="javascript:;">Services
                              <span><i class="fas fa-chevron-right"></i></span>
                           </a>
                           <ul class="dropdown-items">
                              <li><a href="<?= base_url('/information_carnet');?>">Dossier medicale</a></li>
                              <li><a href="all-dr.html">Gestion du personnel</a></li>
                              <li><a href="all-dr.html">Messagerie</a></li>
                              <li><a href="all-dr.html">Prise de rendez-vous</a></li>
                           </ul>
                        </li>
                        <li class="nav-item ps-rel">
                           <a class="nav-link" href="javascript:;">Abonnement
                              <span><i class="fas fa-chevron-right"></i></span>
                           </a>
                           <ul class="dropdown-items">
                              <li><a href="about-us.html">Patient ( <b class="text-primary">Gratuit</b> )</a></li>
                              <li><a href="all-dr.html">Hopital</a></li>
                           </ul>
                        </li>
                        <li class="nav-item">
                           <a href="<?= base_url('/apropos') ?>">A propos</a>
                        </li>
                        <li class="nav-item">
                           <a href="<?= base_url('/contact') ?>">Contact</a>
                        </li>
                        <li class="nav-item">
                           <a href="<?= base_url('/faqs') ?>">FAQ</a>
                        </li>
                        <li class="nav-item ps-rel">
                           <a class="nav-link" href="javascript:;"><i class="fas fa-user-circle" style='font-size:30px'></i>
                           </a>
                           <ul class="dropdown-items">
                              <li><a href="<?= base_url('login'); ?>">Carnet numérique</a></li>
                              <li><a href="<?= base_url('login'); ?>">Message</a></li>
                              <li><a href="<?= base_url('login'); ?>">Profile</a></li>
                           </ul>
                        </li>
                        <li><a href="<?= base_url('login'); ?>" class="page2-btn">PRISE DE RENDEZ-VOUS</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="mobile-menu-wrapper d-xl-none d-lg-none d-md-block d-sm-block">
         <div class="container">
            <div class="row">
               <div class=" col-md-6 col-sm-6 col-6">
                  <div class="mobile-logo">
                     <a href="javascript:;">
                        <img src="<?= base_url('public/asset/images/logo1.png') ?>" alt="img" width="150" heigth="50">
                     </a>
                  </div>
               </div>
               <div class="col-md-6 col-sm-6 col-6">
                  <div class="d-flex  justify-content-end">
                     <div class="d-flex align-items-center">
                        <div class="toggle-main-wrapper mt-2" id="sidebar-toggle">
                           <span class="line"></span>
                           <span class="line"></span>
                           <span class="line"></span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="sidebar">
         <div class="sidebar_logo">
            <a href="javascript:;"><img src="<?= base_url('public/asset/images/logo2.png') ?>" alt="img" width="150" heigth="50"></a>
         </div>
         <div id="toggle_close">&times;</div>
         <div id='cssmenu'>
            <ul class="float_left">
               <li><a href="<?= base_url('/')?>">Accueil</a></li>
               <li class="has-sub">
                  <a href="javascript:;">Services</a>
                  <ul class="dropdown-items">
                     <li><a href="about-us.html">Dossier medicale</a></li>
                     <li><a href="all-dr.html">Gestion du personnel</a></li>
                     <li><a href="all-dr.html">Messagerie</a></li>
                     <li><a href="all-dr.html">Prise de rendez-vous</a></li>
                  </ul>
               </li>
               <li class="has-sub">
                  <a href="javascript:;">Abonnement</a>
                  <ul class="dropdown-items">
                     <li><a href="about-us.html">Patient ( <b class="text-primary">Gratuit</b> )</a></li>
                     <li><a href="all-dr.html">Hopital</a></li>
                  </ul>
               </li>
               <li class="has-sub">
                  <a href="javascript:;">Pages</a>
                  <ul class="dropdown-items">
                     <li><a href="<?= base_url('/apropo') ?>">A propos</a></li>
                     <li><a href="<?= base_url('/contact') ?>">Contact</a></li>
                     <li><a href="<?= base_url('/faqs') ?>">FAQ</a></li>
                  </ul>
               </li>
               <li><a href="<?= base_url('/Patient/register') ?>">Inscription</a></li>
               <li><a href="<?= base_url('/login') ?>">Connexion</a></li>
               <li><a href="<?= base_url('login'); ?>" class="page2-btn text-white">PRISE DE RENDEZ-VOUS</a></li>
            </ul>
         </div>
      </div>
   </div>