<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'partial1/title-meta.php'; ?>
    <?php include 'partial1/head-css.php'; ?>
    <link href="<?= base_url('public/assets/css/style.css'); ?>" rel="stylesheet" type="text/css">
</head>

<body id="body" class="dark-sidebar">
    <?php include 'partial1/menu.php';  ?>

    <div class="page-wrapper">

        <!-- Page Content-->
        <div class="page-content-tab">

            <div class="container-fluid">
                <!-- Page-Title -->
                <?php
                $page_title = "Identification";
                $sub_title = "Professionnel de santé";
                include 'partial1/page-title.php'; ?>
                <!-- end page title end breadcrumb -->
                <?php if (isset($patients) && count($patients) > 0) : ?>
                    <?php foreach ($patients as $patient) : ?>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="met-profile">
                                            <div class="row">
                                                <div class="col-lg-4 align-self-center mb-3 mb-lg-0">
                                                    <div class="met-profile-main">
                                                        <div class="met-profile-main-pic">
                                                            <img src="<?= base_url($patient['photo']); ?>" alt="" height="90" class="rounded-circle">
                                                        </div>
                                                        <div class="met-profile_user-detail">
                                                            <h6 class=""><b><?= $patient['identifiant']; ?></b></h6>
                                                            <h5 class="met-user-name"><?= $patient['nom'] . ' ' . $patient['prenom']; ?></h5>
                                                            <p class="mb-0 met-user-name-post"><?= $patient['profession']; ?></p>
                                                        </div>
                                                    </div>
                                                </div><!--end col-->

                                                <div class="col-lg-4 ms-auto align-self-center">
                                                    <ul class="list-unstyled personal-detail mb-0">
                                                        <li class=""><i class="las la-phone mr-2 text-secondary font-22 align-middle"></i> <b> Contact </b> : +225 <?= $patient['telephone']; ?></li>
                                                        <li class="mt-2"><i class="las la-envelope text-secondary font-22 align-middle mr-2"></i> <b> Email </b> : <?= $patient['email']; ?></li>
                                                        <li class="mt-2"><i class="las fa-home text-secondary font-22 align-middle mr-2"></i> <b> Localisation </b> : <?= $patient['lieu_habitation']; ?></li>
                                                    </ul>

                                                </div><!--end col-->
                                                <div class="col-lg-4 align-self-center">
                                                    <div class="row">
                                                        <div class="col-auto d-block">
                                                            <p class="font-12 fw-normal">
                                                                <b>Contact Urgence:</b>
                                                                <ul>
                                                                <li><b>Nom:</b> <?= $patient['nom_urgence']; ?></li>
                                                                    <li><b>Contact:</b> <?= $patient['contact_urgent']; ?></li>
                                                                    <li><b>Liens parenté:</b> <?= $patient['parent']; ?></li>
                                                                </ul>
                                                            </p>
                                                        </div><!--end col-->
                                                    </div><!--end row-->                                               
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div><!--end f_profile-->
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Details patients </h4>
                                    </div><!--end card-header-->
                                    <div class="card-body">
                                        <ul>
                                            <li>
                                                <h5><u>Date de naissance</u> : </b> <?= $patient['date_de_naissance']; ?> à <b></b> <?= $patient['lieu_naissance']; ?></b></h5>
                                            </li>
                                            <li>
                                                <h5><u>Sexe</u> : </b> <?= $patient['sexe']; ?></h5>
                                            </li>
                                            <li>
                                                <h5><u>Groupe Sanguin</u> : </b> <?= $patient['groupe_sanguin']; ?></h5>
                                            </li>
                                            <li>
                                                <h5 class="text-danger"><u>Maladie particulière</u> : </b> <?= $patient['maladie_particuliere']; ?></h5>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                            <div class="col-6 bg-white">
                                <div class="tab-pane p-3 active" id="Post" role="tabpanel">
                                    <div class="row my-3">
                                        <div class="col-lg-9 w-100">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="card overflow-hidden">
                                                        <div class="card-body" style="background-color: #edfaf5; border-radius: 5px">
                                                            <div class="row d-flex">
                                                                <div class="mb-4">
                                                                    <h4 class="my-0 font-22 fw-bold">Nouvelle consultation !</h4>
                                                                </div><!--end col-->
                                                                <div class="col-12 ms-auto align-self-center">
                                                                    <p class="my-2">Cliquer ici pour ajouter des informations concernant la consultation</p>
                                                                    <a href="<?= base_url('prosante/ajout_information/') . $patient['user_id'] ; ?>">
                                                                        <button type="button" class="btn btn-outline-success my-2">Ajouter des informations</button>
                                                                    </a>
                                                                </div><!--end col-->
                                                            </div><!--end row-->
                                                        </div><!--end card-body-->
                                                    </div><!--end card-->
                                                </div> <!--end col-->
                                                <div class="col-lg-6">
                                                    <div class="card overflow-hidden">
                                                        <div class="card-body" style="background-color: #f1f5ff; border-radius: 5px">
                                                            <div class="row d-flex">
                                                                <div class="mb-4">
                                                                    <h4 class="my-0 font-22 fw-bold">En savoir d'avantage !</h4>
                                                                </div><!--end col-->
                                                                <div class="col-12 ms-auto align-self-center">
                                                                    <p class="my-2">Cliquer ici pour en savoir plus sur le patient, acceder a son carnet numérique</p>
                                                                    <!-- Button trigger modal -->
                                                                    <button type="button" class="btn btn-outline-primary my-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                                                        En savoir plus
                                                                    </button>
                                                                    <!-- Modal -->
                                                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header bg-white">
                                                                                    <h1 class="modal-title fs-5 text-dark" id="staticBackdropLabel">Saisissez votre référence et l'identifiant du patient</h1>
                                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <div class="col-8">
                                                                                        <form class="d-flex" role="search" action="<?= base_url('savoir'); ?>">
                                                                                            <input class="form-control me-2" type="search" name="reference" placeholder="Entrer votre référence" aria-label="Search">
                                                                                            <input class="form-control me-2" type="search" name="identifiant" placeholder="Identifier un patient" aria-label="Search">
                                                                                            <button class="btn btn-success" type="submit">Recherche</button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><!--end col-->
                                                            </div><!--end row-->
                                                        </div><!--end card-body-->
                                                    </div><!--end card-->
                                                </div> <!--end col-->
                                            </div><!--end row-->
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div>
                            </div>
                        </div><!--end row-->

                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="6">Aucun rendez-vous trouvé.</td>
                    </tr>
                <?php endif; ?>

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
    <!-- App js -->
    <script src="<?= base_url('public/assets/js/script.js'); ?>"></script>
    <script src="<?= base_url('public/assets/js/app.js'); ?> "></script>

</body>

</html>