<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'partial1/title-meta.php'; ?>

    <link href="<?= base_url('public/assets/plugins/tobii/tobii.min.css'); ?>" rel="stylesheet" type="text/css" />

    <?php include 'partial1/head-css.php'; ?>
</head>

<body id="body" class="dark-sidebar">
    <?php include 'partial1/menu.php';  ?>
    <div class="page-wrapper">

        <!-- Page Content-->
        <div class="page-content-tab">

            <div class="container-fluid">
                <!-- Page-Title -->
                <?=
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
                                        <a class="nav-link active" data-bs-toggle="tab" href="#Post" role="tab" aria-selected="false">Récent</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#Settings" role="tab" aria-selected="false">Paramettre</a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane p-3 active" id="Post" role="tabpanel">
                                        <div class="row my-3">
                                            <div class="col-lg-9 w-100">
                                                <div class="row justify-content-center">
                                                    <div class="col-lg-3">
                                                        <div class="card overflow-hidden">
                                                            <div class="card-body" style="background-color: #edfaf5; border-radius: 5px">
                                                                <div class="row d-flex">
                                                                    <div class="col-3 mb-4">
                                                                        <i class="fas fa-calendar-check font-36 align-self-center text-dark"></i>
                                                                    </div><!--end col-->
                                                                    <div class="col-12 ms-auto align-self-center">
                                                                        <h4 class="my-0 font-22 fw-bold">1 Rendez-vous validé</h4>
                                                                        <p class="my-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cons </p>
                                                                        <a href="projects-users.php">
                                                                            <button type="button" class="btn btn-outline-success my-2">Voir</button>
                                                                        </a>
                                                                    </div><!--end col-->
                                                                </div><!--end row-->
                                                            </div><!--end card-body-->
                                                        </div><!--end card-->
                                                    </div> <!--end col-->
                                                    <div class="col-lg-3">
                                                        <div class="card overflow-hidden">
                                                            <div class="card-body" style="background-color: #f1f5ff; border-radius: 5px">
                                                                <div class="row d-flex">
                                                                    <div class="col-3 mb-4">
                                                                        <i class="fas fa-comment-alt font-36 align-self-center text-dark"></i>
                                                                    </div><!--end col-->
                                                                    <div class="col-12 ms-auto align-self-center">
                                                                        <h4 class="my-0 font-22 fw-bold">3 Nouveaux messages</h4>
                                                                        <p class="my-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cons </p>
                                                                        <a href="projects-chat.php">
                                                                            <button type="button" class="btn btn-outline-primary my-2">Lire</button>
                                                                        </a>
                                                                    </div><!--end col-->
                                                                </div><!--end row-->
                                                            </div><!--end card-body-->
                                                        </div><!--end card-->
                                                    </div> <!--end col-->
                                                    <div class="col-lg-3">
                                                        <div class="card overflow-hidden">
                                                            <div class="card-body" style="background-color: #fef1f2; border-radius: 5px">
                                                                <div class="row d-flex">
                                                                    <div class="col-3 mb-4">
                                                                        <i class="fas fa-exclamation-circle font-36 align-self-center text-dark"></i>
                                                                    </div>
                                                                    <div class="col-12 ms-auto align-self-center">
                                                                        <h4 class="my-0 font-22 fw-bold">03 alerts traitées</h4>
                                                                        <p class="my-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cons </p>
                                                                        <a href="pages-tour.php">
                                                                            <button type="button" class="btn btn-outline-danger my-2">En savoir plus</button>
                                                                        </a>
                                                                    </div><!--end col-->
                                                                </div><!--end row-->
                                                            </div><!--end card-body-->
                                                        </div><!--end card-->
                                                    </div> <!--end col-->
                                                    <div class="col-lg-3">
                                                        <div class="card overflow-hidden">
                                                            <div class="card-body" style="background-color: #fff8f0; border-radius: 5px">
                                                                <div class="row d-flex">
                                                                    <div class="col-3 mb-4">
                                                                        <i class="fas fa-folder-open font-36 align-self-center text-dark"></i>
                                                                    </div>
                                                                    <div class="col-12 ms-auto align-self-center">
                                                                        <h4 class="my-0 font-22 fw-bold">Mon carnet numerique</h4>
                                                                        <p class="my-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cons </p>
                                                                        <a href="pages-tour.php">
                                                                            <button type="button" class="btn btn-outline-warning my-2">Consulter</button>
                                                                        </a>
                                                                    </div><!--end col-->
                                                                </div><!--end row-->
                                                            </div><!--end card-body-->
                                                        </div><!--end card-->
                                                    </div> <!--end col-->
                                                </div><!--end row-->
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div>
                                    <div class="tab-pane p-3" id="Settings" role="tabpanel">
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
                                                    <form action="<?= base_url('/prosante/profile'); ?>" method="post" enctype="multipart/form-data">
                                                        <?= csrf_field(); ?>
                                                        <?php if (!empty(session()->getFlashdata('success'))) : ?>
                                                            <div class="alert alert-success rounded-0"><?= session()->getFlashdata('success'); ?></div>
                                                        <?php endif ?>
                                                        <input type="text" name="my_id" value="<?= session()->get('id'); ?>" hidden>
                                                        <div class="card-body">
                                                            <div class="form-group mb-3 row">
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Photo :</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <input type="file" class="form-control" id="file" name="photo_prosante" value="<?= set_value('photo_prosante'); ?>" accept="image/png, image/jpeg, image/jpg" />
                                                                    <br>
                                                                    <p><?php if(isset($prosante['photo'])){ echo substr($prosante['photo'],15) ; }else{ echo set_value('photo_prosante') ; } ?></p>
                                                               
                                                                </div>
                                                                <span class="text-danger">
                                                                    <?= isset($validation) ? display_form_errors($validation, 'photo_prosante') : '' ?>
                                                                </span>
                                                            </div>
                                                            <div class="form-group mb-3 row" hidden>
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Nom :</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <input class="form-control" type="text" name="nom_prosante" value="<?php if(isset($prosante['nom'])){ echo $prosante['nom'] ; }else{ echo set_value('nom_prosante') ; } ?>" readonly="readonly">
                                                                </div>
                                                                <span class="text-danger">
                                                                    <?= isset($validation) ? display_form_errors($validation, 'nom_prosante') : '' ?>
                                                                </span>
                                                            </div>
                                                            <div class="form-group mb-3 row" hidden>
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Prénom :</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <input class="form-control" type="text" name="prenom_prosante" value="<?php if(isset($prosante['prenom'])){ echo $prosante['prenom'] ; }else{ echo set_value('prenom_prosante') ; } ?>" readonly="readonly">
                                                                </div>
                                                                <span class="text-danger">
                                                                    <?= isset($validation) ? display_form_errors($validation, 'prenom_prosante') : '' ?>
                                                                </span>
                                                            </div>
                                                            <div class="form-group mb-3 row">
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Contact :</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <div class="input-group">
                                                                        <span class="input-group-text"><i class="las la-phone"></i></span>
                                                                        <input type="text" class="form-control" placeholder="+225 0701 0203 04" aria-describedby="basic-addon1" name="contact_prosante" value="<?php if(isset($prosante['contact'])){ echo $prosante['contact'] ; }else{ echo set_value('contact_prosante') ; } ?>">
                                                                    </div>
                                                                    <span class="text-danger">
                                                                        <?= isset($validation) ? display_form_errors($validation, 'contact_prosante') : '' ?>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3 row" hidden>
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Email :</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <div class="input-group">
                                                                        <span class="input-group-text"><i class="las la-at"></i></span>
                                                                        <input type="text" class="form-control" placeholder="Email" aria-describedby="basic-addon1" name="email_prosante" value="<?php if(isset($prosante['email'])){ echo $prosante['email'] ; }else{ echo set_value('email_prosante') ; } ?>">

                                                                    </div>
                                                                    <span class="text-danger">
                                                                        <?= isset($validation) ? display_form_errors($validation, 'email_prosante') : '' ?>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3 row" hidden>
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Proféssion :</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <input class="form-control" type="text" name="profession_prosante" value="<?php if(isset($prosante['profession'])){ echo $prosante['profession'] ; }else{ echo set_value('profession_prosante') ; } ?>" readonly="readonly">
                                                                </div>
                                                                <span class="text-danger">
                                                                    <?= isset($validation) ? display_form_errors($validation, 'profession_prosante') : '' ?>
                                                                </span>
                                                            </div>
                                                            <div class="form-group mb-3 row" hidden>
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Service :</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <input class="form-control" type="text" name="service_prosante" value="<?php if(isset($prosante['service'])){ echo $prosante['service'] ; }else{ echo set_value('service_prosante') ; } ?>" readonly="readonly">
                                                                </div>
                                                                <span class="text-danger">
                                                                    <?= isset($validation) ? display_form_errors($validation, 'service_prosante') : '' ?>
                                                                </span>
                                                            </div>
                                                            <div class="form-group mb-3 row">
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Domicile :</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <input class="form-control" type="text" name="domicile_prosante" value="<?php if(isset($prosante['domicile'])){ echo $prosante['domicile'] ; }else{ echo set_value('domicile_prosante') ; } ?>">
                                                                </div>
                                                                <span class="text-danger">
                                                                    <?= isset($validation) ? display_form_errors($validation, 'domicile_prosante') : '' ?>
                                                                </span>
                                                            </div>
                                                            <div class="form-group mb-3 row">
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Choisir votre type de pieces :</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <select class="form-select" name="type_de_piece_prosante">
                                                                        <option selected><?php if(isset($prosante['type_de_piece'])){ echo $prosante['type_de_piece'] ; }else{ echo set_value('type_de_piece_prosante') ; } ?></option>
                                                                        <option>Attestation d'identitée</option>
                                                                        <option>Carte national d'identitée</option>
                                                                        <option>Permis de conduire</option>
                                                                        <option>Passeport</option>
                                                                    </select>
                                                                </div>
                                                                <span class="text-danger">
                                                                    <?= isset($validation) ? display_form_errors($validation, 'type_de_piece_prosante') : '' ?>
                                                                </span>
                                                            </div>
                                                            <div class="form-group mb-3 row">
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Ajouter votre pièce :</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <input type="file" class="form-control" id="file" name="piece_prosante" accept="file/pdf" value="<?= set_value('piece_prosante'); ?>" />
                                                                    <br>
                                                                    <p><?php if(isset($prosante['piece'])){ echo substr($prosante['piece'],23) ; }else{ echo set_value('piece_prosante') ; } ?></p>
                                                                </div>
                                                                <span class="text-danger">
                                                                    <?= isset($validation) ? display_form_errors($validation, 'piece_prosante') : '' ?>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-3 row">
                                                            <div class="col-lg-9 col-xl-8 offset-lg-3">
                                                                <button type="submit" class="btn btn-de-primary">Enregistrer</button>
                                                                <button type="reset" class="btn btn-de-danger">Annuler</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div> <!--end col-->
                                            <div class="col-lg-6 col-xl-6">
                                                <form action="<?= base_url('/prosante/updatepwprofile'); ?>" method="post">
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
                                                                    <input class="form-control" name="actual_password_prosante" type="password" placeholder="Mot de passe">
                                                                    <a href="#" class="text-primary font-12">Mot de passe Oublié ?</a>
                                                            
                                                                </div>
                                                                <span class="text-danger">
                                                                    <?= isset($validation) ? display_form_errors($validation, 'actual_password_prosante') : '' ?>
                                                                </span>
                                                            </div>
                                                            <div class="form-group mb-3 row">
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Nouveau mot de passe</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <input class="form-control" name="new_password_prosante" type="password" placeholder="Nouveau mot de passe">
                                                                </div>
                                                                <span class="text-danger">
                                                                    <?= isset($validation) ? display_form_errors($validation, 'new_password_prosante') : '' ?>
                                                                </span>
                                                            </div>
                                                            <div class="form-group mb-3 row">
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Confirmer mot de passe</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <input class="form-control" name="confirm_new_password_prosante" type="password" placeholder="Nouveau mot de passe">
                                                                </div>
                                                                <span class="text-danger">
                                                                    <?= isset($validation) ? display_form_errors($validation, 'confirm_new_password_prosante') : '' ?>
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