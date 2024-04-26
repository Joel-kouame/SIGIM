<!DOCTYPE html>

<html lang="fr" dir="ltr">

<head>
   <?= $this->include('partials/head-css'); ?>
   <link href="<?= base_url('public/assets/plugins/select/selectr.min.css');?>" rel="stylesheet" type="text/css" />
</head>

<body>

   <div class="login-main-wrapper">
      <div class="container-fluid">
         <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-12 p-0">
               <div class="form-sidebar">
                  <div class="logo-section">
                     <a href="<?= base_url('/') ?>"><img src="<?= base_url('public/asset/images/logo1.png') ?>" alt="img" heigth="auto" width="230px"></a>
                  </div>
                  <div class="form-image d-xl-block d-lg-block d-none">
                     <img src="<?= base_url('public/asset/images/form-img.png') ?>" alt="img">
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12 p-0">
               <div class="login-main">
                  <h4>Inscrivez-vous maintenant</h4>
                  <p class="mb-3">Inscrivez-vous en saisissant les informations ci-dessous</p>
                  <form class="form" action="<?= base_url('/Patient/save_patient'); ?>" method="post" enctype="multipart/form-data">
                     <?php csrf_field(); ?>
                     <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                        <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                     <?php endif ?>

                     <?php if (!empty(session()->getFlashdata('success'))) : ?>
                        <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                     <?php endif ?>
                     <div class="row">
                        <div class="col-md-6 mt-2">
                           <!-- <label for="">Nom</label> -->
                           <input type="text" class="my-width" name="nom" placeholder="Nom*" value="<?= set_value('nom'); ?>">
                           <span class="text-danger text-sm">
                              <?= isset($validation) ? display_form_errors($validation, 'nom') : '' ?>
                           </span>
                        </div>
                        <div class="col col-md-6 mt-2">
                           <input type="text" class="my-width" name="prenom" placeholder="Prenoms*" value="<?= set_value('prenom'); ?>">
                           <span class="text-danger text-sm">
                              <?= isset($validation) ? display_form_errors($validation, 'prenom') : '' ?>
                           </span>
                        </div>
                        <div class=" col-md-6">
                           <input type="date" class="my-width" name="date" placeholder="Date de naissance*" value="<?= set_value('date'); ?>">
                           <span class="text-danger text-sm">
                              <?= isset($validation) ? display_form_errors($validation, 'date') : '' ?>
                           </span>
                        </div>

                        <div class=" col-md-6 mt-4">
                           <select name="sexe" id="sexe" class="form-select" style="background-color:#ebf5f5" value="<?= set_value('sexe'); ?>">
                              <option value="" selected disabled hidden>Sexe *</option>
                              <option value="Masculin">Masculin</option>
                              <option value="Feminin">Feminin</option>
                           </select>
                           <span class="text-danger text-sm">
                              <?= isset($validation) ? display_form_errors($validation, 'sexe') : '' ?>
                           </span>
                        </div>

                        <div class="col-md-6">
                           <input type="tel" class="my-width" name="tel" placeholder="Numéro de téléphone*" value="<?= set_value('tel'); ?>">
                           <span class="text-danger text-sm">
                              <?= isset($validation) ? display_form_errors($validation, 'tel') : '' ?>
                           </span>
                        </div>

                        <!-- <div class="col-md-6 mt-2">
                           <input type="text" class="my-width" name="profession" placeholder="Votre profession*" value="<?= set_value('profession'); ?>">
                           <span class="text-danger text-sm">
                              <?= isset($validation) ? display_form_errors($validation, 'profession') : '' ?>
                           </span>
                        </div> -->

                        <!-- <div class="col-md-6 mt-2">
                           <input type="text" class="my-width" name="lieu" placeholder="Votre lieu d'habitation*" value="<?= set_value('lieu'); ?>">
                           <span class="text-danger text-sm">
                              <?= isset($validation) ? display_form_errors($validation, 'lieu') : '' ?>
                           </span>
                        </div> -->
                        <div class="col-md-6">
                           <input type="email" class="my-width" name="email" placeholder="Email*" value="<?= set_value('email'); ?>">
                           <span class="text-danger text-sm">
                              <?= isset($validation) ? display_form_errors($validation, 'email') : '' ?>
                           </span>
                        </div>
                        <div class="col-lg-12 col-md-4 mt-4">
                           <select id="default" name="id_hopital">
                              <option selected="" disabled="" hidden>Selectionner un hopital proche de vous</option>
                              <?php if(isset($hopital) && $hopital >0 ): ;?>
                                 <?php foreach ($hopital as $hopitals) : ?>
                                    <option value='<?= $hopitals['id'] ; ?>'><?= $hopitals['nom_hopt'] ;?></option>
                                 <?php endforeach; ?>
                              <?php endif ;?>
                           </select>                                    
                        </div><!-- end col -->    
                        <div class="col-md-6">
                           <input type="password" class="my-width" name="password" placeholder="Mot de passe*" value="<?= set_value('password'); ?>">
                           <span class="text-danger text-sm">
                              <?= isset($validation) ? display_form_errors($validation, 'password') : '' ?>
                           </span>
                        </div>
                        <div class="col-md-6">
                           <input type="password" class="my-width" name="confirm_password" placeholder="confirmer le mot de passe*" value="<?= set_value('confirm_password'); ?>">
                           <span class="text-danger text-sm">
                              <?= isset($validation) ? display_form_errors($validation, 'confirm_password') : '' ?>
                           </span>
                        </div>

                        <!-- <div class=" col-md-12 mt-2">
                           <input type="file" class="my-width" name="photo" placeholder="Photo d'identité*" value="<?= set_value('photo'); ?>">
                           <span class="text-danger text-sm">
                              <?= isset($validation) ? display_form_errors($validation, 'photo') : '' ?>
                           </span>
                        </div> -->
                     </div>


                     <div class="col-md-6 mt-2 w-100">
                        <input type="checkbox" id="accept" class="me-2" required="">
                        <label for="accept">Oui, je comprends et je suis d’accord avec les <a href="javascript:;" class="text-color-pink">Termes et conditions</a>.</label>
                     </div>
                     <button type="submit" class="button-btn mt-4 text-capitalize">S'enregistrer
                        <span><i class="fas fa-angle-double-right"></i></span>
                     </button>
                     <p class="mt-2">Vous avez déjà un compte. <a href="<?= base_url('login'); ?>" class="text-color-pink">Connectez-vous maintenant</a></p>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Side Panel -->
   <!-- <script src="../assets/js/jquery-3.6.0.min.js"></script> -->
   <!-- <script src="../assets/js/bootstrap.min.js"></script> -->
   <!-- <script src="../assets/js/wow.js"></script> -->
   <!-- <script src="../assets/js/jquery.magnific-popup.js"></script> -->
   <!-- <script src="../assets/js/owl.carousel.min.js"></script> -->
   <!-- <script src="../assets/js/contact_form.js"></script> -->
   <!-- <script src="../assets/js/custom.js"></script> -->
   <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
   <!-- custom js-->

   <script>
      // Attendez que le DOM soit prêt
      document.addEventListener("DOMContentLoaded", function() {
         // Obtenir l’élément de message de réussite
         const successMessage = document.querySelector('.alert-success');

         // Vérifier si le message de réussite existe
         if (successMessage) {
            // Définir un délai d’expiration pour masquer le message de réussite après 20 secondes (20000 millisecondes)
            setTimeout(function() {
               successMessage.style.display = 'none';
            }, 20000);
         }
      });
   </script>
   <!-- Javascript  -->   
   <script src="<?= base_url('public/assets/plugins/select/selectr.min.js');?>"></script>
   <script src="<?= base_url('public/assets/pages/forms-advanced.js');?>"></script>
</body>

</html>