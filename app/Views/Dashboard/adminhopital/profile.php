<!DOCTYPE html>
<html lang="en">

    <head>
        <?php include 'partial1/title-meta.php'; ?>

        <link href="<?= base_url('public/assets/plugins/tobii/tobii.min.css'); ?>" rel="stylesheet" type="text/css" />

        <?php include 'partial1/head-css.php'; ?>
    </head>

    <body id="body" class="dark-sidebar">
    <?php include 'partial1/menu-hopital.php';  ?>
    <div class="page-wrapper">

        <!-- Page Content-->
        <div class="page-content-tab">

            <div class="container-fluid">
                <!-- Page-Title -->
                <?php
            $page_title = "Profile";
            $sub_title = "Pages";
            include 'partial1/page-title.php';  ?>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <?php include 'partial1/header.php' ?>
                            <div class="card-body p-0">    
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#Post" role="tab" aria-selected="false"><button class="btn btn-soft-primary active">Mise à jour des informations</button></a>
                                    </li> 
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#Settings" role="tab" aria-selected="false"><button class="btn btn-soft-primary">Mot de passe</button></a>
                                    </li> 
                                </ul>
    
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane p-3 active" id="Post" role="tabpanel">
                                        <div class="row">
                                            <div class="col-lg-6 col-xl-12">
                                                <form class="needs-validation" action="<?= base_url('hopital/updateProfile') ; ?>" method="post" enctype="multipart/form-data">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <h4 class="card-title">Information Sur l'hopital</h4>
                                                                </div><!--end col-->
                                                            </div> <!--end row-->
                                                        </div><!--end card-header-->

                                                            <?= csrf_field(); ?>
                                                            <?php if (!empty(session()->getFlashdata('success'))) : ?>
                                                                <div class="alert alert-success rounded-0"><?= session()->getFlashdata('success'); ?></div>
                                                            <?php endif ?>
                                                            <input type="text" name="my_id" value="<?= session()->get('id'); ?>" hidden>
                                                            <div class="card-body">
                                                                <div class="row g-3">
                                                                    <div class="col-md-6">
                                                                        <label for="validationCustom01" class="form-label">Logo de l'hopital :</label>
                                                                        <input type="file" class="form-control" id="file" name="photo_hopt" value="<?= set_value('photo_hopt'); ?>" accept="image/png, image/jpeg, image/jpg" />
                                                                        <span class="text-danger">
                                                                            <?= isset($validation) ? display_form_errors($validation, 'photo_hopital') : '' ?>
                                                                        </span>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="form-label" for="Numero_hopital">Numéro d’identification de l’hôpital (SIRET, FINESS, etc.)</label>
                                                                        <input type="text" value="<?php if(isset($hopital['num_ident_hopt'])){ echo $hopital['num_ident_hopt'] ; }else{ echo set_value('num_ident_hop') ; } ?>" class="form-control" id="Numero_hopital" name="num_ident_hopt" readonly="readonly">
                                                                        <span class="text-danger">
                                                                            <?= isset($validation) ? display_form_errors($validation, 'num_ident_hopt') : '' ?>
                                                                        </span>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group mb-2">
                                                                            <label class="form-label" for="nom_hopital">Nom de l'hopital</label>
                                                                            <input type="text" value="<?php if(isset($hopital['nom_hopt'])){ echo $hopital['nom_hopt'] ; }else{ echo set_value('nom_hopt') ; } ?>" class="form-control" id="nom_hopital" name="nom_hopt" readonly="readonly">
                                                                            <span class="text-danger">
                                                                                <?= isset($validation) ? display_form_errors($validation, 'nom_hopt') : '' ?>
                                                                            </span>
                                                                        </div><!--end form-group-->
                                                                    </div><!--end col-->
                                                                    <div class="col-md-6">
                                                                        <div class="form-group mb-2">
                                                                            <label class="form-label" for="Contact_hopital">Contact téléphonique</label>
                                                                            <input type="tel" value="<?php if(isset($hopital['contact_hopt'])){ echo $hopital['contact_hopt'] ; }else{ echo set_value('contact_hopt') ; } ?>" class="form-control" id="contact_hopital" name="contact_hopt" readonly="readonly">
                                                                            <span class="text-danger">
                                                                                <?= isset($validation) ? display_form_errors($validation, 'contact_hopt') : '' ?>
                                                                            </span>
                                                                        </div><!--end form-group-->
                                                                    </div><!--end col-->
                                                                    <div class="col-md-6">
                                                                        <div class="form-group mb-2">
                                                                            <label class="form-label" for="Email_hopital">Email</label>
                                                                            <input type="email" value="<?php if(isset($hopital['email_hopt'])){ echo $hopital['email_hopt'] ; }else{ echo set_value('email_hopt') ; } ?>" class="form-control" id="Email_hopital" name="email_hopt" readonly="readonly">
                                                                            <span class="text-danger">
                                                                                <?= isset($validation) ? display_form_errors($validation, 'email_hopt') : '' ?>
                                                                            </span>
                                                                        </div><!--end form-group-->
                                                                    </div><!--end col-->  
                                                                    <div class="col-md-6">
                                                                        <div class="form-group mb-2">
                                                                            <label class="form-label" for="Localité_hopital">Localité</label>
                                                                            <input type="text" value="<?php if(isset($hopital['local_hopt'])){ echo $hopital['local_hopt'] ; }else{ echo set_value('local_hopt') ; } ?>" class="form-control" id="Localité_hopital" name="local_hopt">
                                                                            <span class="text-danger">
                                                                                <?= isset($validation) ? display_form_errors($validation, 'local_hopt') : '' ?>
                                                                            </span>
                                                                        </div><!--end form-group-->
                                                                    </div><!--end col-->
                                                                    <div class="col-md-6">
                                                                        <label for="validationCustom04" class="form-label">Type d'etablissement</label>
                                                                        <input type="text" class="form-control" value="<?php if(isset($hopital['type_etablissement_hopt'])){ echo $hopital['type_etablissement_hopt'] ; }else{ echo set_value('type_etablissement_hopt') ; } ?>" name="type_etablissement_hopt" readonly="readonly">
                                                                        <span class="text-danger">
                                                                                <?= isset($validation) ? display_form_errors($validation, 'type_etablissement_hopt') : '' ?>
                                                                        </span>
                                                                    </div><!--end col-->  
                                                                </div>
                                                            </div>
                                                        
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <h4 class="card-title">Information Sur le directeur</h4>
                                                                </div><!--end col-->
                                                            </div> <!--end row-->
                                                        </div><!--end card-header-->
                                                        <div class="card-body">
                                                            <div class="row g-3">
                                                                <div class="col-md-6">
                                                                    <div class="form-group mb-2">
                                                                        <label class="form-label" for="nom_directeur">Nom du directeur</label>
                                                                        <input type="text" value="<?php if(isset($hopital['nom_dr'])){ echo $hopital['nom_dr'] ; }else{ echo set_value('nom_dr') ; } ?>" class="form-control" id="nom_directeur" name="nom_dr">
                                                                        <span class="text-danger">
                                                                            <?= isset($validation) ? display_form_errors($validation, 'nom_dr') : '' ?>
                                                                        </span>
                                                                    </div><!--end form-group-->
                                                                </div><!--end col-->
                                                                <div class="col-md-6">
                                                                    <div class="form-group mb-2">
                                                                        <label class="form-label" for="prenom_directeur">Prenom du directeur</label>
                                                                        <input type="text" value="<?php if(isset($hopital['prenom_dr'])){ echo $hopital['prenom_dr'] ; }else{ echo set_value('prenom_dr') ; } ?>" class="form-control" id="prenom_directeur" name="prenom_dr" placeholder="prenom du directeur">
                                                                        <span class="text-danger">
                                                                            <?= isset($validation) ? display_form_errors($validation, 'prenom_dr') : '' ?>
                                                                        </span>
                                                                    </div><!--end form-group-->
                                                                </div><!--end col-->
                                                                <div class="col-md-6">
                                                                    <div class="form-group mb-2">
                                                                        <label class="form-label" for="Contact_hopital">Contact téléphonique</label>
                                                                        <input type="tel" value="<?php if(isset($hopital['contact_dr'])){ echo $hopital['contact_dr'] ; }else{ echo set_value('contact_dr') ; } ?>" class="form-control" id="contact_hopital" name="contact_dr" placeholder="Exemple: +225 0701 0203 04">
                                                                        <span class="text-danger">
                                                                            <?= isset($validation) ? display_form_errors($validation, 'contact_dr') : '' ?>
                                                                        </span>
                                                                    </div><!--end form-group-->
                                                                </div><!--end col-->
                                                                <div class="col-md-6">
                                                                    <div class="form-group mb-2">
                                                                        <label class="form-label" for="Email_hopital">Email</label>
                                                                        <input type="email" value="<?php if(isset($hopital['email_dr'])){ echo $hopital['email_dr'] ; }else{ echo set_value('email_dr') ; } ?>" class="form-control" id="Email_hopital" name="email_dr" placeholder="Exemple: hopital@gmail.com">
                                                                        <span class="text-danger">
                                                                            <?= isset($validation) ? display_form_errors($validation, 'email_dr') : '' ?>
                                                                        </span>
                                                                    </div><!--end form-group-->
                                                                </div><!--end col-->
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
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3 row">
                                                        <div class="col-lg-9 col-xl-8 offset-lg-3">
                                                            <button type="submit" class="btn btn-primary">Sauvegarder</button>
                                                            <button type="reset" class="btn btn-soft-danger">Renitialiser</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div> <!--end col-->                                                                            
                                        </div><!--end row-->
                                    </div>   
                                    <div class="tab-pane p-3" id="Settings" role="tabpanel">
                                        <div class="row">
                                            <div class="col-lg-6 col-xl-6">
                                                <form action="<?= base_url('/hopital/updatepwprofile/'); ?>" method="post">
                                                    <?= csrf_field(); ?>
                                                        <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                                                            <div class="alert alert-danger rounded-0" role="alert"><?= session()->getFlashdata('fail'); ?></div>
                                                        <?php endif ?>

                                                        <?php if (!empty(session()->getFlashdata('success'))) : ?>
                                                            <div class="alert alert-success rounded-0"><?= session()->getFlashdata('success'); ?></div>
                                                        <?php endif ?>
                                                        <input type="text" name="my_id" value="<?= session()->get('id'); ?>" hidden>

                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h4 class="card-title">Modifier le mot de passe</h4>
                                                        </div><!--end card-header-->
                                                        <div class="card-body">
                                                            <div class="form-group mb-3 row">
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Ancien mot de passe :</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <input class="form-control" name="actual_password_hopital" type="password" placeholder="Mot de passe">
                                                                    <a href="#" class="text-primary font-12">Mot de passe Oublié ?</a>
                                                            
                                                                </div>
                                                                <span class="text-danger">
                                                                    <?= isset($validation) ? display_form_errors($validation, 'actual_password_hopital') : '' ?>
                                                                </span>
                                                            </div>
                                                            <div class="form-group mb-3 row">
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Nouveau mot de passe</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <input class="form-control" name="new_password_hopital" type="password" placeholder="Nouveau mot de passe">
                                                                </div>
                                                                <span class="text-danger">
                                                                    <?= isset($validation) ? display_form_errors($validation, 'new_password_hopital') : '' ?>
                                                                </span>
                                                            </div>
                                                            <div class="form-group mb-3 row">
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Confirmer mot de passe</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <input class="form-control" name="confirm_new_password_hopital" type="password" placeholder="Nouveau mot de passe">
                                                                </div>
                                                                <span class="text-danger">
                                                                    <?= isset($validation) ? display_form_errors($validation, 'confirm_new_password_hopital') : '' ?>
                                                                </span>
                                                            </div>
                                                        </div><!--end card-body-->
                                                    </div><!--end card-->
                                                    <div class="form-group mb-3 row">
                                                        <div class="col-lg-9 col-xl-8 offset-lg-3">
                                                            <button type="submit" class="btn btn-de-primary">Modifier</button>
                                                            <button type="reset" class="btn btn-de-danger">Annuler</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div> <!-- end col -->                                                                             
                                        </div><!--end row-->
                                    </div>
                                </div>        
                            </div> <!--end card-body-->                            
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->

            </div><!-- container -->
                 
            <!--Start Footer-->
            <?php include 'partial1/footer.php';  ?>               
            <!--end footer-->
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->

    <!-- Javascript  -->
    <script src="<?= base_url('public/assets/plugins/tobii/tobii.min.js'); ?>"></script>
    <!-- App js -->
    <script src="<?= base_url('public/assets/js/app.js'); ?>"></script>
    <script>
        const tobii = new Tobii()
    </script>

</body>

</html>