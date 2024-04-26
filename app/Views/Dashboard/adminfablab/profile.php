<!DOCTYPE html>
<html lang="en">

    <head>
        <?php include 'partial1/title-meta.php'; ?>

        <link href="<?= base_url('public/assets/plugins/tobii/tobii.min.css'); ?>" rel="stylesheet" type="text/css" />

        <?php include 'partial1/head-css.php'; ?>
    </head>

    <body id="body" class="dark-sidebar">
    <?php include 'partial1/menu-admin.php';  ?>
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
                                                    <form action="<?= base_url('fablab/updateProfile'); ?>" method="post" enctype="multipart/form-data">

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
                                                                    <input type="file" class="form-control" id="file" name="photo_fablab" value="<?= set_value('photo_fablab'); ?>" accept="image/png, image/jpeg, image/jpg" />
                                                                    <br>
                                                                </div>
                                                                <span class="text-danger">
                                                                    <?= isset($validation) ? display_form_errors($validation, 'photo_fablab') : '' ?>
                                                                </span>
                                                            </div>
                                                            <div class="form-group mb-3 row">
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Nom :</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <input class="form-control" type="text" name="nom_fablab" value="<?php if(isset($fablab['nom'])){ echo $fablab['nom'] ; }else{ echo set_value('nom_fablab') ; } ?>" readonly="readonly">
                                                                </div>
                                                                <span class="text-danger">
                                                                    <?= isset($validation) ? display_form_errors($validation, 'nom_fablab') : '' ?>
                                                                </span>
                                                            </div>
                                                            <div class="form-group mb-3 row">
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Prénom :</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <input class="form-control" type="text" name="prenom_fablab" value="<?php if(isset($fablab['prenom'])){ echo $fablab['prenom'] ; }else{ echo set_value('prenom_fablab') ; } ?>">
                                                                </div>
                                                                <span class="text-danger">
                                                                    <?= isset($validation) ? display_form_errors($validation, 'prenom_fablab') : '' ?>
                                                                </span>
                                                            </div>
                                                            <div class="form-group mb-3 row">
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Contact :</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <div class="input-group">
                                                                        <span class="input-group-text"><i class="las la-phone"></i></span>
                                                                        <input type="text" class="form-control" placeholder="+225 0701 0203 04" aria-describedby="basic-addon1" name="contact_fablab" value="<?php if(isset($fablab['contact'])){ echo $fablab['contact'] ; }else{ echo set_value('contact_fablab') ; } ?>">
                                                                    </div>
                                                                    <span class="text-danger">
                                                                        <?= isset($validation) ? display_form_errors($validation, 'contact_fablab') : '' ?>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3 row">
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Email :</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <div class="input-group">
                                                                        <span class="input-group-text"><i class="las la-at"></i></span>
                                                                        <input type="text" class="form-control" placeholder="Email" aria-describedby="basic-addon1" name="email_fablab" value="<?php if(isset($fablab['email'])){ echo $fablab['email'] ; }else{ echo set_value('email_fablab') ; } ?>" readonly="readonly">

                                                                    </div>
                                                                    <span class="text-danger">
                                                                        <?= isset($validation) ? display_form_errors($validation, 'email_fablab') : '' ?>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3 row">
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Domicile :</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <input class="form-control" type="text" name="domicile_fablab" value="<?php if(isset($fablab['domicile'])){ echo $fablab['domicile'] ; }else{ echo set_value('domicile_fablab') ; } ?>">
                                                                </div>
                                                                <span class="text-danger">
                                                                    <?= isset($validation) ? display_form_errors($validation, 'domicile_fablab') : '' ?>
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
                                                <form action="<?= base_url('/fablab/updatepwprofile'); ?>" method="post">
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
                                                                    <input class="form-control" name="actual_password_fablab" type="password" placeholder="Mot de passe" required="">
                                                                    <a href="#" class="text-primary font-12">Mot de passe Oublié ?</a>
                                                            
                                                                </div>
                                                                <span class="text-danger">
                                                                    <?= isset($validation) ? display_form_errors($validation, 'actual_password_fablab') : '' ?>
                                                                </span>
                                                            </div>
                                                            <div class="form-group mb-3 row">
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Nouveau mot de passe</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <input class="form-control" name="new_password_fablab" type="password" placeholder="Nouveau mot de passe" required="">
                                                                </div>
                                                                <span class="text-danger">
                                                                    <?= isset($validation) ? display_form_errors($validation, 'new_password_fablab') : '' ?>
                                                                </span>
                                                            </div>
                                                            <div class="form-group mb-3 row">
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Confirmer mot de passe</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <input class="form-control" name="confirm_new_password_fablab" type="password" placeholder="Nouveau mot de passe" required="">
                                                                </div>
                                                                <span class="text-danger">
                                                                    <?= isset($validation) ? display_form_errors($validation, 'confirm_new_password_fablab') : '' ?>
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