<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $title = 'SIGIM';
    include 'partial1/title-meta.php'; ?>

    <link href="<?= base_url('public/assets/plugins/datatables/datatable.css'); ?>" rel="stylesheet" type="text/css" />

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
                $page_title = "Liste des Hopitaux";
                $sub_title = "Admin Fablab";
                include 'partial1/page-title.php';  ?>
                <!-- end page title end breadcrumb -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Export Table </h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table" id="datatable_2">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>N°</th>
                                                <th>Nom</th>
                                                <th>Contact</th>
                                                <th>Localisation</th>
                                                <th>Date d'adhesion</th>
                                                <th>Statut</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (isset($hopital) && count($hopital) > 0) : ?>
                                                <?php
                                                $status = '';
                                                foreach ($hopital as $hopital) : ?>
                                                    <tr>
                                                        <td><?= $hopital['id'] ?></td>
                                                        <td><?= $hopital['nom_hopt'] ?></td>
                                                        <td><?= $hopital['contact_hopt'] ?></td>
                                                        <td><?= $hopital['local_hopt'] ?></td>
                                                        <td><?= $hopital['created_at'] ?></td>
                                                        <td>
                                                            <?php
                                                            if ($hopital['status'] == 0) {
                                                                echo '<span class="text-success">Actif</span>';
                                                            }
                                                            if ($hopital['status'] == 1) {
                                                                echo '<span class="text-danger">Suspendu</span>';
                                                            }

                                                            ?>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown d-inline-block float-center">
                                                                <a class="dropdown-toggle mr-n2 mt-n2" id="drop2" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                    <i class="las la-ellipsis-h font-24 text-muted"></i>
                                                                </a>
                                                                <?php if ($hopital['status'] == 0) : ?>
                                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop1">
                                                                        <a class="dropdown-item" href="<?= base_url('hopital/suspendu/') . $hopital['id']; ?>">Suspendre</a>
                                                                    </div>

                                                                <?php elseif ($hopital['status'] == 1) : ?>
                                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop1">
                                                                        <a class="dropdown-item" href="<?= base_url('hopital/active/') . $hopital['id']; ?>">Activer</a>
                                                                    </div>

                                                                <?php endif; ?>
                                                            </div><!--end dropdown-->
                                                        </td>
                                                    </tr>


                                                <?php endforeach; ?>
                                            <?php else : ?>
                                                <tr>
                                                    <td colspan="6">Aucun hôpital trouvé.</td>
                                                </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                    <button type="button" class="btn btn-sm btn-de-primary csv">Export CSV</button>
                                    <button type="button" class="btn btn-sm btn-de-primary sql">Export SQL</button>
                                    <button type="button" class="btn btn-sm btn-de-primary txt">Export TXT</button>
                                    <button type="button" class="btn btn-sm btn-de-primary json">Export JSON</button>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->


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
    <script src="<?= base_url('public/assets/plugins/datatables/simple-datatables.js'); ?>"></script>
    <script src="<?= base_url('public/assets/pages/datatable.init.js'); ?>"></script>

    <!-- App js -->
    <script src="<?= base_url('public/assets/js/app.js'); ?>"></script>

</body>

</html>