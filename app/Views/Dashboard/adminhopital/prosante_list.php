<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'partial1/title-meta.php'; ?>
    <link href="<?= base_url('public/assets/plugins/datatables/datatable.css'); ?>" rel="stylesheet" type="text/css" />
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
                $page_title = "List des professionnelle de santé";
                $sub_title = "Admin Hopital";
                include 'partial1/page-title.php';  ?>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table" id="datatable_1">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>N°</th>
                                                <th>Nom</th>
                                                <th>Contact</th>
                                                <th>Domicile</th>
                                                <th>Profession</th>
                                                <th>Service</th>
                                                <th>Statut</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php if (isset($prosante) && count($prosante) > 0) : ?>
                                            <?php foreach ($prosante as $prosantes) : ?>
                                                <tr>
                                                    <td><?= $prosantes['id']; ?></td>
                                                    <td><img src="<?= base_url($prosantes['photo']); ?>" alt="" class="rounded-circle thumb-sm me-1"><?= $prosantes['nom']; ?></td>
                                                    <td><?= $prosantes['contact']; ?></td>
                                                    <td><?= $prosantes['domicile']; ?></td>
                                                    <td><?= $prosantes['profession']; ?></td>
                                                    <td><?= $prosantes['service']; ?></td>
                                                    <td>
                                                        <?php
                                                        if ($prosantes['status'] == 0) {
                                                            echo '<span class="text-success">Actif</span>';
                                                        }
                                                        if ($prosantes['status'] == 1) {
                                                            echo '<span class="text-danger">Suspendu</span>';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown d-inline-block float-center">
                                                            <a class="dropdown-toggle mr-n2 mt-n2" id="drop2" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                <i class="las la-ellipsis-h font-24 text-muted"></i>
                                                            </a>
                                                            <?php if ($prosantes['status'] == 0) : ?>
                                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop1">
                                                                    <a class="dropdown-item" href="<?= base_url('') . $prosantes['id']; ?>">Suspendre</a>
                                                                </div>
                                                            <?php elseif ($prosantes['status'] == 1) : ?>
                                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop1">
                                                                    <a class="dropdown-item" href="<?= base_url('') . $prosantes['id']; ?>">Activer</a>
                                                                </div>
                                                            <?php endif; ?>
                                                        </div><!--end dropdown-->
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php else : ?>
                                            <tr>
                                                <td colspan="7">Aucun professionnel de santé trouvé.</td>
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