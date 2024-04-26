<!--index 02 page partner section start -->

   <!-- partner section end -->
   <div class="footer-main-wrapper page2-footer-main float_left">
      <div class="container">
         <div class="row footerr">
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
               <div class="sb-footer-section">
                  <div class="footer-logo">
                     <a href="javascript:;"> <img src="<?= base_url('public/asset/images/logo1.png') ?>" alt="img" heigth="auto" width="210px"></a>
                  </div>
                     <div>
                        <p class="text-white mt-3">Lorem ipsum dolor sit amet consecteMolestiae itaque exercitationem fuga? Odio, fugit repudiandae.</p>
                        <p class="text-white mt-3"><i class="fas fa-map-marker-alt me-2 my"></i><?= $information['adress']; ?></p>
                        </p>
                     </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
               <div class="links">
                  <h4>Liens Utiles</h4>
                  <ul>
                     <li><a href="<?= base_url('apropo')?>"><i class="fas fa-angle-right"></i>A propos de nous</a></li>
                     <li><a href="<?= base_url('faqs')?>"><i class="fas fa-angle-right"></i>FAQ</a></li>
                     <li><a href="<?= base_url('contact')?>"><i class="fas fa-angle-right"></i>Contact</a></li>
                     <li><a href="<?= base_url('blogs')?>"><i class="fas fa-angle-right"></i>Blog</a></li>
                  </ul>
               </div>
            </div>
            
            <div class="col-lg-4 col-sm-12 col-12">
               <h4>Nous joindre !</h4>
               <div class="sb-footer-section links">
                  <ul>
                     <li><a href="tel:+2250701020304"><i class="fas fa-phone"></i>Telephone : +225 <?= $information['telephone']; ?></a></li>
                     <li><a href="mailto:fablabsigim@gmail.com"><i class="fas fa-envelope"></i>Repondeur mail : <?= $information['email']; ?></a></li>
                     <li><a href="http://"><i class="fas fa-mail-bulk"></i>Boite postale: <?= $information['boite_postal']; ?></p></a></li>
                     <li>
                        <ul class="footer-media">
                           <li><a href="javascript:;"><i class="fab fa-facebook-f"></i></a></li>
                           <li><a href="javascript:;"><i class="fab fa-instagram"></i></a></li>
                           <li><a href="javascript:;"><i class="fab fa-whatsapp"></i></a></li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <section>
         <div class="container">
            <div class="row">
               <div class="col-lg-6 col-md-12 col-sm-12">
                  <p>© Copyright 2023 - Developpeur Voisinage Fablab <a href="https://uvci.edu.ci/">UVCI</a> | All Rights Reserved.</p>
               </div>
               <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                  <p class="last-para">Politique privée | Termes et conditions.</p>
               </div>
            </div>
         </div>
      </section>
   </div>

   <script src="<= base_url('public/asset/js/jquery-3.6.0.min.js') ?>"></script>
   <script src="<= base_url('public/asset/js/bootstrap.min.js') ?>"></script>
   <script src="<= base_url('public/asset/js/wow.js') ?>"></script>
   <script src="<= base_url('public/asset/js/jquery.magnific-popup.js') ?>"></script>
   <script src="<= base_url('public/asset/js/owl.carousel.min.js') ?>"></script>
   <script src="<= base_url('public/asset/js/contact_form.js') ?>"></script>
   <script src="<= base_url('public/asset/js/custom.js') ?>"></script>
   <!-- custom js-->
   <script>
      wow = new WOW(
         {
            animateClass: 'animated',
            offset: 100,
            callback: function (box) {
               console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
            }
         }
      );
      wow.init();
   </script>