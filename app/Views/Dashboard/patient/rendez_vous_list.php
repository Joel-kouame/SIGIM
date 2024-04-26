<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'partial1/title-meta.php'; ?>

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
                $page_title = "Rendez-vous";
                $sub_title = "Utilisateur";
                include 'partial1/page-title.php';  ?>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-lg-9 w-100">
                        <div class="row justify-content-center">
                            <div class="col-lg-3">
                                <div class="card overflow-hidden">
                                    <div class="card-body" style="border: 1px solid green; border-radius: 5px">
                                        <div class="row d-flex">
                                            <div class="col-3 mb-5">
                                                <i class="ti ti-users font-36 align-self-center text-dark"></i>
                                            </div><!--end col-->
                                            <div class="col-12 ms-auto align-self-center">
                                                <?php if (isset($sum)) : ?>
                                                    <h3 class="my-0 font-22 fw-bold"><?= $sum ?> RENDEZ-VOUS VALIDE<?= ($sum !==1) ? 'S' :'' ; ?></h3>
                                                <?php else : ?>
                                                    <tr>
                                                        <td colspan="6">Aucun rendez-vous validé trouvé.</td>
                                                    </tr>
                                                <?php endif; ?>

                                                <!-- <button type="button" class="btn btn-outline-success my-2">Validés</button> -->
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div> <!--end col-->
                            <div class="col-lg-3">
                                <div class="card overflow-hidden">
                                    <div class="card-body" style="border: 1px solid blue; border-radius: 5px">
                                        <div class="row d-flex">
                                            <div class="col-3 mb-5">
                                                <i class="ti ti-clock font-36 align-self-center text-dark"></i>
                                            </div><!--end col-->
                                            <div class="col-12 ms-auto align-self-center">
                                               <?php if (isset($attente)) : ?>
                                                    <h3 class="my-0 font-22 fw-bold"><?= $attente ?> RENDEZ-VOUS EN ATTENTE</h3>
                                                <?php else : ?>
                                                    <tr>
                                                        <td colspan="6">Aucun rendez-vous en attente trouvé.</td>
                                                    </tr>
                                                <?php endif; ?> 
                                                <!-- <button type="button" class="btn btn-outline-primary my-2">En attente</button> -->
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div> <!--end col-->
                            <div class="col-lg-3">
                                <div class="card overflow-hidden">
                                    <div class="card-body" style="border: 1px solid red; border-radius: 5px">
                                        <div class="row d-flex">
                                            <div class="col-3 mb-5">
                                                <i class="ti ti-activity font-36 align-self-center text-dark"></i>
                                            </div>
                                            <div class="col-12 ms-auto align-self-center">
                                            <?php if (isset($annule)) : ?>
                                                    <h3 class="my-0 font-22 fw-bold"><?= $annule ?> RENDEZ-VOUS ANNULE<?= ($annule !==1) ? 'S' :'' ; ?></h3>
                                                <?php else : ?>
                                                    <tr>
                                                        <td colspan="6">Aucun rendez-vous annulé trouvé.</td>
                                                    </tr>
                                                <?php endif; ?>
                                                <!-- <button type="button" class="btn btn-outline-danger my-2">Annulé</button> -->
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div> <!--end col-->
                            <div class="col-lg-3">
                                <div class="card overflow-hidden">
                                    <div class="card-body" style="border: 1px solid orange; border-radius: 5px">
                                        <div class="row d-flex">
                                            <div class="col-3 mb-5">
                                                <i class="ti ti-activity font-36 align-self-center text-dark"></i>
                                            </div>
                                            <div class="col-12 ms-auto align-self-center">
                                                <h3 class="my-0 font-22 fw-bold">1 RENDEZ-VOUS</h3>
                                                <button type="button" class="btn btn-outline-warning my-2">Déja consulter</button>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div> <!--end col-->
                        </div><!--end row-->
                    </div><!--end col-->
                </div><!--end row-->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Mes rendez-vous</h4>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Nom</th>
                                                <th>Hopital</th>
                                                <th>Service</th>
                                                <th>Note au medecin</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (isset($rendezvous) && count($rendezvous) > 0) : ?>
                                                <?php
                                                $status = '';
                                                foreach ($rendezvous as $rendez_vous) : ?>
                                                    <tr>
                                                        <td><img src="<?= base_url($patient['photo']); ?>" alt="" class="rounded-circle thumb-sm me-1"><?= $rendez_vous['nom']; ?></td>
                                                        <td><?= $rendez_vous['hopital']; ?></td>
                                                        <td><?= $rendez_vous['service']; ?></td>
                                                        <td><?= $rendez_vous['motif']; ?></td>
                                                        <td>
                                                            <?php
                                                            if ($rendez_vous['status'] == 0) {
                                                                echo '<button class="btn btn-primary">En attente</boutton>';
                                                            }
                                                            if ($rendez_vous['status'] == 1) {
                                                                echo '<button class="btn btn-success">Validé</boutton>';
                                                            }
                                                            if ($rendez_vous['status'] == 2) {
                                                                echo '<button class="btn btn-danger">Annulé</boutton>';
                                                            }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown d-inline-block float-center">
                                                                <a class="dropdown-toggle mr-n2 mt-n2" id="drop1" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                    <i class="las la-ellipsis-h font-24 text-muted"></i>
                                                                </a>
                                                                <?php if ($rendez_vous['status'] == 0 | $rendez_vous['status'] == 1) : ?>
                                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop1">
                                                                        <a class="dropdown-item" href="<?= base_url('/rendezVous/annuler/') . $rendez_vous['id']; ?>">Annuler</a>
                                                                    </div>
                                                                <?php endif; ?>
                                                            </div><!--end dropdown-->
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            <?php else : ?>
                                                <tr>
                                                    <td colspan="6">Aucun rendez-vous trouvé.</td>
                                                </tr>
                                            <?php endif; ?>

                                        </tbody>
                                    </table><!--end /table-->
                                </div><!--end /tableresponsive-->
                                <div class="row">
                                    <a href="<?= base_url('/patient/create_rendez_vous'); ?>" class="mb-3">
                                        <div class="col">
                                            <button class="btn btn-outline-light btn-sm px-4 bg-primary text-white">+ Ajouter un Rendez-vous</button>
                                        </div><!--end col-->
                                    </a>
                                    <div class="col-auto">
                                        <nav aria-label="...">
                                            <ul class="pagination pagination-sm mb-0">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                                </li>
                                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">Next</a>
                                                </li>
                                            </ul><!--end pagination-->
                                        </nav><!--end nav-->
                                    </div> <!--end col-->
                                </div><!--end row-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
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
    <script src="<?= base_url('public/assets/plugins/dragula/dragula.min.js'); ?>"></script>
    <script src="<?= base_url('public/assets/pages/dragula.init.js'); ?>"></script>
    <!-- App js -->
    <script src="<?= base_url('public/assets/js/app.js'); ?>"></script>

</body>
<!--end body-->

</html>