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
                            <div class="col-lg-4">
                                <div class="card overflow-hidden">
                                    <div class="card-body" style="border: 1px solid green; border-radius: 5px">
                                        <div class="row d-flex">
                                            <div class="col-3 mb-5">
                                                <i class="fas fa-calendar-check font-36 align-self-center text-success"></i>
                                            </div><!--end col-->
                                            <div class="col-12 ms-auto align-self-center">
                                                <h3 class="my-0 font-22 fw-bold">RENDEZ-VOUS VALIDE</h3>
                                                <!-- <button type="button" class="btn btn-outline-success my-2">Validés</button> -->
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div> <!--end col-->
                            <div class="col-lg-4">
                                <div class="card overflow-hidden">
                                    <div class="card-body" style="border: 1px solid blue; border-radius: 5px">
                                        <div class="row d-flex">
                                            <div class="col-3 mb-5">
                                                <i class="fas fa-clock font-36 align-self-center text-primary"></i>
                                            </div><!--end col-->
                                            <div class="col-12 ms-auto align-self-center">
                                                <h3 class="my-0 font-22 fw-bold"> RENDEZ-VOUS EN ATTENTE</h3>
                                                <!-- <button type="button" class="btn btn-outline-primary my-2">En attente</button> -->
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div> <!--end col-->
                            <div class="col-lg-4">
                                <div class="card overflow-hidden">
                                    <div class="card-body" style="border: 1px solid red; border-radius: 5px">
                                        <div class="row d-flex">
                                            <div class="col-3 mb-5">
                                                <i class="fas fa-calendar-times font-36 align-self-center text-danger"></i>
                                            </div>
                                            <div class="col-12 ms-auto align-self-center">
                                                <h3 class="my-0 font-22 fw-bold">RENDEZ-VOUS ANNULE</h3>
                                                <!-- <button type="button" class="btn btn-outline-danger my-2">Annulé</button> -->
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div> <!--end col-->
                            <!-- <div class="col-lg-3">
                                <div class="card overflow-hidden">
                                    <div class="card-body" style="border: 1px solid orange; border-radius: 5px">
                                        <div class="row d-flex">
                                            <div class="col-3 mb-5">
                                                <i class="fas fa-calendar-alt font-36 align-self-center text-warning"></i>
                                            </div>
                                            <div class="col-12 ms-auto align-self-center">
                                                <h3 class="my-0 font-22 fw-bold">0 RDV EFFECTUE</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>  -->
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
                                <div class="kanban-board">
                                    <div class="kanban-col-12">
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
                                                                <td><img src="<?= base_url($patient['photo']); ?>" alt="" class="rounded-circle thumb-sm me-1"> <?= $rendez_vous['nom'].' '. $rendez_vous['prenom']; ?></td>
                                                                <td><?= $rendez_vous['id_hopital']; ?></td>
                                                                <td><?= $rendez_vous['service']; ?></td>
                                                                <td><?= $rendez_vous['motif']; ?></td>
                                                                <td>
                                                                    <?php
                                                                    if ($rendez_vous['status'] == 0) {
                                                                        echo '<i class="fas fa-clock font-20 align-self-center text-primary"></i>';
                                                                    }
                                                                    if ($rendez_vous['status'] == 1) {
                                                                        echo '<i class="fas fa-calendar-check font-20 align-self-center text-success"></i>';
                                                                    }
                                                                    if ($rendez_vous['status'] == 2) {
                                                                        echo '<i class="fas fa-calendar-times font-20 align-self-center text-danger"></i>';
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
                                                                                <!-- Button trigger modal -->
                                                                                <button type="button" class="mx-3 my-2 btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                                                                    Annuler
                                                                                </button>
                                                                            </div>
                                                                            <!-- Modal -->
                                                                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                                                <div class="modal-dialog">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Annuler le rendez-vous</h1>
                                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <i class="las fa-exclamation-circle font-36 text-center"></i>
                                                                                            <h5>Etes vous sûre de bien vouloir annuler cet rendez-vous ?</h5>
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <a href="<?= base_url('/rendezVous/annuler/') . $rendez_vous['id']; ?>">
                                                                                                <button type="button" class="btn btn-danger">Annuler</button>
                                                                                            </a>
                                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
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
                                    </div> 
                                </div>
                                <div class="row">
                                    <a href="<?= base_url('/patient/create_rendez_vous'); ?>" class="my-4">
                                        <button class="btn btn-outline-primary">+ Ajouter un Rendez-vous</button>
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