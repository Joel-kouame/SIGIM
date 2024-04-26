<!DOCTYPE html>
<html lang="en">

<head>
    <?= include 'partial1/title-meta.php'; ?>

    <link href="<?= base_url('public/assets/plugins/datatables/datatable.css'); ?>" rel="stylesheet" type="text/css" />

    <?= include 'partial1/head-css.php'; ?>
</head>

<body id="body" class="dark-sidebar">

    <?= include 'partial1/menu.php';  ?>

    <div class="page-wrapper">

        <!-- Page Content-->
        <div class="page-content-tab">

            <div class="container-fluid">

                <?=
                $page_title = "Liste des rendez-vous";
                $sub_title = "Professionnel de santé";
                include 'partial1/page-title.php';  ?>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Details des rendez-vous </h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table" id="datatable_1">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Nom</th>
                                                <th>Contact</th>
                                                <th>Service</th>
                                                <th data-type="date" data-format="YYYY/DD/MM">Date</th>
                                                <th>Heure</th>
                                                <th>Message au medecin</th>
                                                <th>Statut</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (isset($rendezvous) && count($rendezvous) > 0) : ?>
                                                <?php
                                                    $status = '';
                                                    foreach ($rendezvous as $rendez_vous) : ?>
                                                    <tr>
                                                        <td><?= $rendez_vous['nom'] . ' ' . $rendez_vous['prenom']; ?></td>
                                                        <td><?= $rendez_vous['contact']; ?></td>
                                                        <td><?= $rendez_vous['service']; ?></td>
                                                        <td><?= $rendez_vous['date']; ?></td>
                                                        <td><?= $rendez_vous['heure']; ?></td>
                                                        <td><?= $rendez_vous['motif']; ?></td>
                                                        <td>
                                                            <?php
                                                                switch ($rendez_vous['status']) {
                                                                    case 0:
                                                                        $status = '<span class="text-primary">En attente</span>';
                                                                        break;

                                                                    case 1:
                                                                        $status = '<span class="text-success">Validé</span>';
                                                                        break;

                                                                    case 2:
                                                                        $status = '<span class="text-danger">Annulé</span>';
                                                                        break;
                                                                        // etc.
                                                                }
                                                                echo $status;
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown d-inline-block float-center">
                                                                <a class="dropdown-toggle mr-n2 mt-n2" id="drop2" data-bs-toggle="dropdown" href="<?= base_url('rendezVous/valider/') . $rendez_vous['id']; ?>" role="button" aria-haspopup="false" aria-expanded="false">
                                                                    <i class="las la-ellipsis-h font-24 text-muted"></i>
                                                                </a>
                                                                <!-- <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop2"> -->
                                                                <?php if ($rendez_vous['status'] == 0) : ?>
                                                                    <div class="dropdown-menu dropdown-menu-end justify-content-center" aria-labelledby="drop2">
                                                                        <div>
                                                                            <!-- Bouton pour valider -->
                                                                            <button type="button" class="mx-3 btn btn-soft-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                                Valider
                                                                            </button>
                                                                        </div>
                                                                        <div>
                                                                            <!-- Bouton pour annuler -->
                                                                            <button type="button" class="mx-3 my-3 btn btn-soft-danger" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                                                                Annuler
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Modal -->
                                                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-centered">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Valider rendez-vous</h1>
                                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <i class="las fa-exclamation-circle font-36 text-center"></i>
                                                                                    <h5>Etes vous sûre de bien vouloir valider cet rendez-vous ?</h5>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <a href="<?= base_url('rendezVous/valider/') . $rendez_vous['id']; ?>">
                                                                                        <button type="button" class="btn btn-success">Valider</button>
                                                                                    </a>
                                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-centered">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Annuler un rendez-vous</h1>
                                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <i class="las fa-exclamation-circle font-36 text-center"></i>
                                                                                    <h5>Etes vous sûre de bien vouloir Annuler cet rendez-vous ?</h5>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <a href="<?= base_url('rendezVous/annuler/') . $rendez_vous['id']; ?>">
                                                                                        <button type="button" class="btn btn-danger">Annuler</button>
                                                                                    </a>
                                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php endif; ?>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                <?php else : ?>
                                                    <tr>
                                                        <td colspan="6">Aucun rendez-vous trouvé.</td>
                                                    </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div><!-- container -->
        </div>
        <!--Start Rightbar-->
        <?= include 'partial1/right-sidebar.php';  ?>
        <!--end Rightbar-->

        <!--Start Footer-->
        <?= include 'partial1/footer.php';  ?>
        <!--end footer-->
    </div>
    <!-- end page content -->
    </div>
    <!-- end page-wrapper -->

    <!-- Javascript  -->
    <script src="<?= base_url('public/assets/plugins/apexcharts/apexcharts.min.js'); ?>"></script>
    <script src="<?= base_url('public/assets/plugins/datatables/simple-datatables.js'); ?>"></script>
    <script src="<?= base_url('public/assets/pages/analytics-customers.init.js'); ?>"></script>
    <!-- App js -->
    <script src="<?= base_url('public/assets/js/app.js'); ?>"></script>

</body>
<!--end body-->

</html>
