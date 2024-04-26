<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'partial1/title-meta.php'; ?>

    <link href="<?= base_url('public/assets/plugins/tobii/tobii.min.css'); ?>" rel="stylesheet" type="text/css" />

    <?php include 'partial1/head-css.php'; ?>
</head>

<body id="body" class="dark-sidebar">
    <?php include 'partial1/menu-patient.php';  ?>
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
                                        <a class="nav-link" data-bs-toggle="tab" href="#Settings" role="tab" aria-selected="false">Paramettre</a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane p-3 active" id="Settings" role="tabpanel">
                                        <div class="row">
                                            <div class="col-lg-6 col-xl-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <h4 class="card-title">Information Personnelle</h4>
                                                            </div><!--end col-->
                                                        </div> <!--end row-->
                                                    </div><!--end card-header-->

                                                    <form action="<?= base_url('/patient/profile-patient'); ?>" method="post" enctype="multipart/form-data">
                                                        <?= csrf_field(); ?>
                                                        <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                                                            <div class="alert alert-danger rounded-0" role="alert"><?= session()->getFlashdata('fail'); ?></div>
                                                        <?php endif ?>

                                                        <?php if (!empty(session()->getFlashdata('success'))) : ?>
                                                            <div class="alert alert-success rounded-0"><?= session()->getFlashdata('success'); ?></div>
                                                        <?php endif ?>
                                                        <input type="text" name="my_id" value="<?= session()->get('id'); ?>" hidden>
                                                        <div class="card-body">
                                                            <div class="form-group mb-3 row">
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Photo :</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <input type="file" name="photo_patient" class="form-control" id="file" value="<?= set_value('photo_patient'); ?>" name="file" accept="image/png, image/jpeg" value="" />
                                                                </div>
                                                                <span class="text-danger">
                                                                    <?= isset($validation) ? display_form_errors($validation, 'photo_patient') : '' ?>
                                                                </span>
                                                            </div>
                                                            <div class="form-group mb-3 row">
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Nom :</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <input class="form-control" name="nom_patient" type="text" value="<?php if (isset($patient['nom'])) {echo $patient['nom'];} else {echo set_value('nom_patient');} ?>">
                                                                </div>
                                                                <span class="text-danger">
                                                                    <?= isset($validation) ? display_form_errors($validation, 'nom_patient') : '' ?>
                                                                </span>
                                                            </div>
                                                            <div class="form-group mb-3 row">
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Prénom :</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <input class="form-control" type="text" name="prenom_patient" value="<?php if (isset($patient['prenom'])) { echo $patient['prenom'];} else { echo set_value('prenom_patient');} ?>">
                                                                </div>
                                                                <span class="text-danger">
                                                                    <?= isset($validation) ? display_form_errors($validation, 'prenom_patient') : '' ?>
                                                                </span>
                                                            </div>
                                                            <div class="form-group mb-3 row">
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Lieu de naissance :</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <input class="form-control" type="text" name="lieu_naissance" value="<?php if (isset($patient['lieu_naissance'])) { echo $patient['lieu_naissance'];} else { echo set_value('lieu_naissance_patient');} ?>">
                                                                </div>
                                                                <span class="text-danger">
                                                                    <?= isset($validation) ? display_form_errors($validation, 'prenom_patient') : '' ?>
                                                                </span>
                                                            </div>
                                                            <div class="form-group mb-3 row">
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Proféssion :</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <input class="form-control" type="text" name="profession_patient" value="<?php if (isset($patient['profession'])) { echo $patient['profession'];} else {echo set_value('profession_patient');} ?>">
                                                                </div>
                                                                <span class="text-danger">
                                                                    <?= isset($validation) ? display_form_errors($validation, 'profession_patient') : '' ?>
                                                                </span>
                                                            </div>

                                                            <div class="form-group mb-3 row">
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Contact :</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <div class="input-group">
                                                                        <span class="input-group-text"><i class="las la-phone"></i></span>
                                                                        <input type="tel" class="form-control" name="telephone_patient" value="<?php if (isset($patient['telephone'])) {echo $patient['telephone'];} else { echo set_value('telephone_patient');} ?>" placeholder="Phone" aria-describedby="basic-addon1">
                                                                    </div>
                                                                    <span class="text-danger">
                                                                        <?= isset($validation) ? display_form_errors($validation, 'telephone_patient') : '' ?>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3 row">
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Email :</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <div class="input-group">
                                                                        <span class="input-group-text"><i class="las la-at"></i></span>
                                                                        <input type="email" class="form-control" name="email_patient" value="<?php if (isset($patient['email'])) {echo $patient['email'];} else { echo set_value('email_patient');} ?>" placeholder="Email" aria-describedby="basic-addon1">
                                                                    </div>
                                                                    <span class="text-danger">
                                                                        <?= isset($validation) ? display_form_errors($validation, 'email_patient') : '' ?>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3 row">
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Lieu d'habitation :</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <input class="form-control" type="text"  name="lieu_habitation" value="<?= $patient['lieu_habitation']; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3 row">
                                                                <label for="country" class="ol-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Choisir votre pièce :</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <select class="form-select" id="country" name="type_piece">
                                                                        <option value="" selected disabled hidden>Choisir votre pièce d'identité...</option>
                                                                        <option value="Attestation d'identité">Attestation d'identité</option>
                                                                        <option value="Carte National d'Identité">Carte National d'Identité</option>
                                                                        <option value="Permis de conduire">Permis de conduire</option>
                                                                        <option value="Passeport">Passeport</option>
                                                                        <option value="Carte de séjour">Carte de séjour</option>
                                                                    </select>
                                                                </div>
                                                                <div class="invalid-feedback">
                                                                    Please select a valid country.
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3 row">
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Charger votre pièce :</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <input class="form-control" type="file" name="piece_identite" value="<?= set_value('piece_identite'); ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="my-4">Personne a contacter en cas d'urgence</h6>
                                                                <hr>
                                                            </div><!--end col-->
                                                            <div class="form-group mb-3 row">
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Nom et prénoms :</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <input class="form-control" type="text" name="nom_urgence" value="<?php if (isset($patient['nom_urgence'])) { echo $patient['nom_urgence'];} else { echo set_value('non_urgence_patient');} ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3 row">
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Contact :</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <input class="form-control" type="tel" name="contact" placeholder="+225 0701020304" value="<?php if (isset($patient['contact_urgent'])) { echo $patient['contact_urgent'];} else { echo set_value('non_urgence_patient');} ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3 row">
                                                                <label for="country" class="ol-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Lien parenté :</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <select class="form-select" id="country" required="" name="parent">
                                                                        <option value="">Choisir un lien parenté ...</option>
                                                                        <option>Père / Mère</option>
                                                                        <option>Epoux / Epouse</option>
                                                                        <option>Frère / Soeur</option>
                                                                        <option>Oncle / Tante</option>
                                                                        <option>Cousin / Cousine</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group mb-3 row">
                                                                <div class="col-lg-9 col-xl-8 offset-lg-3">
                                                                    <button type="submit" class="btn btn-de-primary">Modifier</button>
                                                                    <button type="reset" class="btn btn-de-danger">Annuler</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div> <!--end col-->

                                            <div class="col-lg-6 col-xl-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="card-title">Modifier le mot de passe</h4>
                                                    </div><!--end card-header-->
                                                    <form action="<?= base_url('/patient/profile-patient-updatepwd'); ?>" method="post">
                                                    <?= csrf_field(); ?>
                                                        <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                                                            <div class="alert alert-danger rounded-0" role="alert"><?= session()->getFlashdata('fail'); ?></div>
                                                        <?php endif ?>

                                                        <?php if (!empty(session()->getFlashdata('success'))) : ?>
                                                            <div class="alert alert-success rounded-0"><?= session()->getFlashdata('success'); ?></div>
                                                        <?php endif ?>
                                                        <input type="text" name="my_id" value="<?= session()->get('id'); ?>" hidden>
                                                    <div class="card-body">
                                                            <div class="form-group mb-3 row">
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Ancien mot de passe :</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <input class="form-control" name="actual_password_patient" type="password" placeholder="Mot de passe">
                                                                    <a href="#" class="text-primary font-12">Mot de passe Oublié ?</a>
                                                            
                                                                </div>
                                                                <span class="text-danger">
                                                                    <?= isset($validation) ? display_form_errors($validation, 'actual_password_patient') : '' ?>
                                                                </span>
                                                            </div>
                                                            <div class="form-group mb-3 row">
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Nouveau mot de passe</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <input class="form-control" name="new_password_patient" type="password" placeholder="Nouveau mot de passe">
                                                                </div>
                                                                <span class="text-danger">
                                                                    <?= isset($validation) ? display_form_errors($validation, 'new_password_patient') : '' ?>
                                                                </span>
                                                            </div>
                                                            <div class="form-group mb-3 row">
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Confirmer mot de passe</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <input class="form-control" name="confirm_new_password_patient" type="password" placeholder="Nouveau mot de passe">
                                                                </div>
                                                                <span class="text-danger">
                                                                    <?= isset($validation) ? display_form_errors($validation, 'confirm_new_password_patient') : '' ?>
                                                                </span>
                                                            </div>
                                                        </div><!--end card-body-->
                                                        <div class="form-group mb-3 row">
                                                        <div class="col-lg-9 col-xl-8 offset-lg-3">
                                                            <button type="submit" class="btn btn-de-primary">Modifier</button>
                                                            <button type="reset" class="btn btn-de-danger">Annuler</button>
                                                        </div>
                                                    </div>
                                                    </form>
                                                </div><!--end card-->
                                            </div> <!-- end col -->
                                        </div><!--end row-->
                                    </div>
                                </div>
                            </div> <!--end card-body-->
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
    <script src="<?= base_url('public/assets/plugins/tobii/tobii.min.js'); ?>"></script>
    <!-- App js -->
    <script src="<?= base_url('public/assets/js/app.js'); ?>"></script>
    <script>
        const tobii = new Tobii()
    </script>

</body>

</html>
