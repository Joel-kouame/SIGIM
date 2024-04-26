<!DOCTYPE html>
<html lang="en">

<head>
    <?php
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
                $page_title = "Liste des services";
                $sub_title = "Admin Hopital";
                include 'partial1/page-title.php';  ?>
                <!-- end page title end breadcrumb -->
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Nos services</h4>
                                </div><!--end col-->
                            </div> <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>N°</th>
                                            <th>Service</th>
                                            <th>Responsable</th>
                                            <th>Contact</th>
                                            <th>Effectif</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php if (isset($service) && count($service) > 0) : ?>
                                            <?php foreach ($service as $service) : ?>
                                                <tr>
                                                    <td><?= $service['id'] ?></td>
                                                    <td><?= $service['nom_service'] ?></td>
                                                    <td><?= $service['nom_responsable'] ?></td>
                                                    <td><?= $service['contact_responsable'] ?></td>
                                                    <td><?= $service['nbre_intervenant'] ?></td>
                                                    <td>
                                                        <div class="dropdown d-inline-block float-center">
                                                            <a class="dropdown-toggle mr-n2 mt-n2" id="drop2" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                <i class="las la-ellipsis-h font-24 text-muted"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop1">
                                                                <a class="dropdown-item" href="<?= base_url('update_service') . $service['id']; ?>">Modifier</a>
                                                                <a class="dropdown-item" href="<?= base_url('delete_service/') . $service['id']; ?>">Retirer</a>
                                                            </div>
                                                        </div><!--end dropdown-->
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php else : ?>
                                            <tr>
                                                <td colspan="6">Aucun service trouvé.</td>
                                            </tr>
                                        <?php endif; ?>


                                    </tbody>
                                </table><!--end /table-->
                            </div><!--end /tableresponsive-->
                            <div class="row">
                                <a href="<?= base_url('adminhopital/forms_services'); ?>" class="mb-3">
                                    <div class="col">
                                        <button class="btn btn-outline-light btn-sm px-4 bg-primary text-white">+ Ajouter un service</button>
                                    </div><!--end col-->
                                </a>
                                <div class="col-auto">
                                    <nav aria-label="...">
                                        <ul class="pagination pagination-sm mb-0">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1">Précedent</a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">Suivant</a>
                                            </li>
                                        </ul><!--end pagination-->
                                    </nav><!--end nav-->
                                </div> <!--end col-->
                            </div><!--end row-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div>
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