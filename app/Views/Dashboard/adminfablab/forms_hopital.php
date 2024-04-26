<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $title = "SIGIM";
    include 'partial1/title-meta.php'; ?>

    <?php include 'partial1/head-css.php'; ?>
</head>

<body id="body" class="dark-sidebar">
    <?php include 'partial1/menu-admin.php';  ?>

    <div class="page-wrapper">

        <!-- Page Content-->
        <div class="page-content-tab">

            <div class="container-fluid">
                <!-- Page-Title -->
                <?php
                $page_title = "Ajout Hopital";
                $sub_title = "Admin Fablab";
                include 'partial1/page-title.php'; ?>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <?php include 'partial1/header.php';?>
                            <div class="card-header bg-success">
                                <h5 class="text-center text-white">AJOUTER UN HOPITAL</h5>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <form action="<?= base_url('/Fablab/save_hopital'); ?>" enctype="multipart/form-data" method="post" id="custom-step">
                                    <?= csrf_field(); ?>
                                    <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                                        <div class="alert alert-danger rounded-0" role="alert"><?= session()->getFlashdata('fail'); ?></div>
                                    <?php endif ?>
                                    <?php if (!empty(session()->getFlashdata('success'))) : ?>
                                        <div class="alert alert-success rounded-0"><?= session()->getFlashdata('success'); ?></div>
                                    <?php endif ?>
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab">
                                            <a class="nav-link active" id="step1-tab" data-bs-toggle="tab" href="#step1">Identification Hopital</a>
                                            <a class="nav-link" id="step2-tab" data-bs-toggle="tab" href="#step2">Identification Directeur</a>
                                        </div>
                                    </nav>
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane active" id="step1">
                                            <h4 class="card-title mt-3 my-4">Détails sur l'Hopital</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group mb-2">
                                                        <label class="form-label" for="Numero_hopital">Numéro d’identification de l’hôpital (SIRET, FINESS, etc.)</label>
                                                        <input type="text" value="<?= set_value('num_ident_hopt'); ?>" class="form-control" id="Numero_hopital" name="num_ident_hopt" placeholder="FINESS: 750100012" required="">
                                                        <span class="text-danger">
                                                            <?= isset($validation) ? display_form_errors($validation, 'num_ident_hopt') : '' ?>
                                                        </span>
                                                    </div><!--end form-group-->
                                                </div><!--end col-->
                                                <div class="col-md-6">
                                                    <div class="form-group mb-2">
                                                        <label class="form-label" for="nom_hopital">Nom de l'hopital</label>
                                                        <input type="text" value="<?= set_value('nom_hopt'); ?>" class="form-control" id="nom_hopital" name="nom_hopt" placeholder="nom de l'hopital">
                                                        <span class="text-danger">
                                                            <?= isset($validation) ? display_form_errors($validation, 'nom_hopt') : '' ?>
                                                        </span>
                                                    </div><!--end form-group-->
                                                </div><!--end col-->
                                            </div><!--end row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group mb-2">
                                                        <label class="form-label" for="Contact_hopital">Contact téléphonique</label>
                                                        <input type="tel" value="<?= set_value('contact_hopt'); ?>" class="form-control" id="contact_hopital" name="contact_hopt" placeholder="Exemple: +225 0701 0203 04">
                                                        <span class="text-danger">
                                                            <?= isset($validation) ? display_form_errors($validation, 'contact_hopt') : '' ?>
                                                        </span>
                                                    </div><!--end form-group-->
                                                </div><!--end col-->
                                                <div class="col-md-6">
                                                    <div class="form-group mb-2">
                                                        <label class="form-label" for="Email_hopital">Email</label>
                                                        <input type="email" value="<?= set_value('email_hopt'); ?>" class="form-control" id="Email_hopital" name="email_hopt" placeholder="Exemple: hopital@gmail.com">
                                                        <span class="text-danger">
                                                            <?= isset($validation) ? display_form_errors($validation, 'email_hopt') : '' ?>
                                                        </span>
                                                    </div><!--end form-group-->
                                                </div><!--end col-->
                                            </div><!--end row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group mb-2">
                                                        <label class="form-label" for="Localité_hopital">Localité</label>
                                                        <input type="text" value="<?= set_value('local_hopt'); ?>" class="form-control" id="Localité_hopital" name="local_hopt" placeholder="Exemple: Côte d'Ivoire, Abidjan, Adjamé">
                                                        <span class="text-danger">
                                                            <?= isset($validation) ? display_form_errors($validation, 'local_hopt') : '' ?>
                                                        </span>
                                                    </div><!--end form-group-->
                                                </div><!--end col-->
                                                <div class="col-md-6">
                                                    <label for="validationCustom04" class="form-label">Type d'etablissement</label>
                                                    <span class="text-danger">
                                                            <?= isset($validation) ? display_form_errors($validation, 'type_etablissement_hopt') : '' ?>
                                                    </span>
                                                    <select class="form-select" name="type_etablissement_hopt" id="validationCustom04">
                                                        <option selected="" disabled="" value="">Choisir...</option>
                                                        <option value="hopital public">Hopital Public</option>
                                                        <option value="hopital privée">Hopital Privée</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Veillez selectionner un champs
                                                    </div>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                            <div class="">
                                                <button type="button" id="step1Next" class="btn btn-success float-end">Suivant</button>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="step2">
                                            <h4 class="card-title mt-3 my-4">Détails directeur</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group mb-2">
                                                        <label class="form-label" for="nom_directeur">Nom du directeur</label>
                                                        <input type="text" value="<?= set_value('nom_dr'); ?>" class="form-control" id="nom_directeur" name="nom_dr" placeholder="nom du directeur">
                                                        <span class="text-danger">
                                                            <?= isset($validation) ? display_form_errors($validation, 'nom_dr') : '' ?>
                                                        </span>
                                                    </div><!--end form-group-->
                                                </div><!--end col-->
                                                <div class="col-md-6">
                                                    <div class="form-group mb-2">
                                                        <label class="form-label" for="prenom_directeur">Prenom du directeur</label>
                                                        <input type="text" value="<?= set_value('prenom_dr'); ?>" class="form-control" id="prenom_directeur" name="prenom_dr" placeholder="prenom du directeur">
                                                        <span class="text-danger">
                                                            <?= isset($validation) ? display_form_errors($validation, 'prenom_dr') : '' ?>
                                                        </span>
                                                    </div><!--end form-group-->
                                                </div><!--end col-->
                                            </div><!--end row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group mb-2">
                                                        <label class="form-label" for="Contact_hopital">Contact téléphonique</label>
                                                        <input type="tel" value="<?= set_value('contact_dr'); ?>" class="form-control" id="contact_hopital" name="contact_dr" placeholder="Exemple: +225 0701 0203 04">
                                                        <span class="text-danger">
                                                            <?= isset($validation) ? display_form_errors($validation, 'contact_dr') : '' ?>
                                                        </span>
                                                    </div><!--end form-group-->
                                                </div><!--end col-->
                                                <div class="col-md-6">
                                                    <div class="form-group mb-2">
                                                        <label class="form-label" for="Email_hopital">Email</label>
                                                        <input type="email" value="<?= set_value('email_dr'); ?>" class="form-control" id="Email_hopital" name="email_dr" placeholder="Exemple: hopital@gmail.com">
                                                        <span class="text-danger">
                                                            <?= isset($validation) ? display_form_errors($validation, 'email_dr') : '' ?>
                                                        </span>
                                                    </div><!--end form-group-->
                                                </div><!--end col-->
                                            </div><!--end row-->

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="validationCustom04" class="form-label">Veillez selectionner votre pièce d'identiée</label>
                                                    <span class="text-danger">
                                                            <?= isset($validation) ? display_form_errors($validation, 'type_de_piece_dr') : '' ?>
                                                        </span>
                                                    <select class="form-select" name="type_de_piece_dr" id="validationCustom04">
                                                        <option selected="" disabled="" value="">Choisir...</option>
                                                        <option>Attestation d'identité</option>
                                                        <option>Carte Nationnal d'Identitée</option>
                                                        <option>Permis de conduire</option>
                                                        <option>Passport</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Veillez selectionner un champs
                                                    </div>
                                                </div><!--end col-->
                                                <div class="col-md-6">
                                                    <label for="validationCustom05" class="form-label">Ajouter votre pièce d'identitée</label>
                                                    <input type="file" value="<?= set_value('fichier_piece_dr'); ?>" class="form-control" id="file" name="fichier_piece_dr" />
                                                    <span class="text-danger">
                                                            <?= isset($validation) ? display_form_errors($validation, 'fichier_piece_dr') : '' ?>
                                                        </span>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                            <h4 class="card-title mt-3">Confirmer les details</h4>
                                            <div class="form-check my-2">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Oui j'accepte les terms et conditions.
                                                </label>
                                            </div>
                                            <div>
                                                <button type="button" id="step2Prev" class="btn btn-secondary float-start">Precendent</button>
                                                <button type="submit" id="step4Finish" class="btn btn-success float-end">Enregistrer</button>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </form><!--end form-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->

            </div><!-- container -->

            <!--Start Rightbar-->
            <?php include 'partial1/right-sidebar.php';  ?>
            <!--end Rightbar-->

            <!--Start Footer-->
            <?php include 'partial1/footer.php';  ?>
            <!--end footer-->
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->




    <!-- Javascript  -->
    <script src="<?= base_url('public/assets/pages/form-wizard.js'); ?>"></script>
    <!-- App js -->
    <script src="<?= base_url('public/assets/js/app.js'); ?>"></script>

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

</body>

</html>