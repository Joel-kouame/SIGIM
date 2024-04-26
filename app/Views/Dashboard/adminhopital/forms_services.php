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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <?php include 'partial1/header.php';?>
                            <div class="card-header bg-success">
                                <h5 class="text-center text-white">AJOUTER UN SERVICE</h5>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <form action="<?= base_url('add_service'); ?>" method="post">
                                    <?php csrf_field(); ?>
                                    <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                                        <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                                    <?php endif ?>

                                    <?php if (!empty(session()->getFlashdata('success'))) : ?>
                                        <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                                    <?php endif ?>
                                  
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="exampleInputService">Nom du service</label>
                                                <input type="text" class="form-control" id="exampleInputService" aria-describedby="serviceHelp" placeholder="Entrer le nom du service" name="service">
                                                <span class="text-danger text-sm">
                                                    <?= isset($validation) ? display_form_errors($validation, 'service') : '' ?>
                                                </span>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputNombre">Nombre d'intervenants</label>
                                                <input type="number" class="form-control" id="exampleInput" placeholder="Entrer le nombre de personnes" name="nombre">
                                                <span class="text-danger text-sm">
                                                    <?= isset($validation) ? display_form_errors($validation, 'nombre') : '' ?>
                                                </span>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputDate">Date de création</label>
                                                <input type="date" class="form-control" id="exampleInput" placeholder="Exemple: 01/01/0001" name="date">
                                                <span class="text-danger text-sm">
                                                    <?= isset($validation) ? display_form_errors($validation, 'date') : '' ?>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">

                                            <div class="mb-4">
                                                <label for="exampleInputResponsable">Responsable de service</label>
                                                <input type="text" class="form-control" id="exampleInputResponsable" placeholder="Exemple: JEAN MAURO" name="nom_responsable">
                                                <span class="text-danger text-sm">
                                                    <?= isset($validation) ? display_form_errors($validation, 'nom_responsable') : '' ?>
                                                </span>
                                            </div>
                                            <div class="mb-4">
                                                <label for="exampleInputcontact">Contact du responsable</label>
                                                <input type="tel" class="form-control" id="exampleInputContact" placeholder="Exemple: +225 0102030405" name="contact_respo">
                                                <span class="text-danger text-sm">
                                                    <?= isset($validation) ? display_form_errors($validation, 'contact_respo') : '' ?>
                                                </span>
                                            </div>
                                            <div class="mb-4">
                                                <!-- <label for="exampleInputdescription">Description du service</label> -->
                                                <textarea name="description" id="" class="form-control" cols="74" rows="1" placeholder="Saisissez la description du service"></textarea>
                                                <span class="text-danger text-sm">
                                                    <?= isset($validation) ? display_form_errors($validation, 'description') : '' ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success">Ajouter</button>
                                </form>
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