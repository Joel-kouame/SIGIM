<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = "SIGIM";
    include 'partial1/title-meta.php'; ?>

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
                $page_title = "Ajouter un Service";
                $sub_title = "Admin Hopital";
                include 'partial1/page-title.php';  ?>
                <!-- end page title end breadcrumb -->
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <?php include 'partial1/header.php';?>
                            <div class="card-header bg-soft-success">
                                <h5 class="text-center"><b>AJOUTER UN PROFESSIONNEL DE SANTE</b></h5>
                            </div><!--end card-header-->
                            <div class="card-body col-8">
                                <form class="my-4" action="<?= base_url('/prosante/register'); ?>" method="post" enctype="multipart/form-data">
                                    <?= csrf_field(); ?>
                                    <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                                        <div class="alert alert-danger rounded-0" role="alert"><?= session()->getFlashdata('fail'); ?></div>
                                    <?php endif ?>

                                    <?php if (!empty(session()->getFlashdata('success'))) : ?>
                                        <div class="alert alert-success rounded-0"><?= session()->getFlashdata('success'); ?></div>
                                    <?php endif ?>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group mb-2">
                                                <label class="form-label" for="name">Nom :</label>
                                                <input type="text" class="form-control" id="name" name="nom" value="<?= set_value('nom'); ?>">
                                                <span class="text-danger">
                                                    <?= isset($validation) ? display_form_errors($validation, 'nom') : '' ?>
                                                </span>
                                            </div><!--end form-group-->
                                            <div class="form-group mb-2">
                                                <label class="form-label" for="contact">Contact :</label>
                                                <input type="text" class="form-control" id="contact" name="contact" value="<?= set_value('contact'); ?>">
                                                <span class="text-danger">
                                                    <?= isset($validation) ? display_form_errors($validation, 'contact') : '' ?>
                                                </span>
                                            </div><!--end form-group-->
                                            <div class="form-group mb-2">
                                                <label class="form-label" for="service">Service :</label>
                                                <input type="text" class="form-control" id="service" value="<?= set_value('service'); ?>" name="service" placeholder="service">
                                                <span class="text-danger">
                                                    <?= isset($validation) ? display_form_errors($validation, 'service') : '' ?>
                                                </span>
                                            </div><!--end form-group-->
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group mb-2">
                                                <label class="form-label" for="prenom">Prénom :</label>
                                                <input type="text" class="form-control" id="prenom" value="<?= set_value('prenom'); ?>" name="prenom">
                                                <span class="text-danger">
                                                    <?= isset($validation) ? display_form_errors($validation, 'prenom') : '' ?>
                                                </span>
                                            </div><!--end form-group-->
                                            <div class="form-group mb-2">
                                                <label class="form-label" for="useremail">Email :</label>
                                                <input type="email" class="form-control" id="useremail" value="<?= set_value('email'); ?>" name="email" placeholder="Enter email">
                                                <span class="text-danger">
                                                    <?= isset($validation) ? display_form_errors($validation, 'email') : '' ?>
                                                </span>
                                            </div><!--end form-group-->
                                            <div class="form-group mb-2">
                                                <label for="validationCustom04" class="form-label">Profession :</label>
                                                <select class="form-select" id="validationCustom04" required="" name="profession" value="<?= set_value('profession'); ?>">
                                                    <option selected="" disabled="" value="">Choisir une profession</option>
                                                    <option>MEDECIN</option>
                                                    <option>INFIRMIER</option>
                                                    <option>SAGE-FEMME</option>
                                                    <option>AIDE SOIGNANTE</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Veillez selectionner un champs
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0 row">
                                        <div class="col-12">
                                            <div class="mt-3">
                                                <button class="btn btn-success" name="inscription" type="submit">Enregistrer <i class="fas fa-sign-in-alt ms-1"></i></button>
                                            </div>
                                        </div><!--end col-->
                                    </div> <!--end form-group-->
                                </form><!--end form-->
                            </div><!--end card-body-->
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
    <!-- App js -->
    <script src="<?= base_url('public/assets/js/app.js'); ?>"></script>

</body>

</html>