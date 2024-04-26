<!DOCTYPE html>
<html lang="en">

<head>

    <?php $title = "SIGIM";
    include 'partial1/title-meta.php'; ?>

    <?php include 'partial1/head-css.php'; ?>
</head>

<body id="body" class="dark-sidebar">

    <?php include 'partial1/menu-admin.php';  ?>

    <div class="page-wrapper">

        <!-- Page Content-->
        <div class="page-content-tab">

            <div class="container-fluid">

                <?php
                $page_title = "Analytics";
                $sub_title = "Dashboard";
                include 'partial1/page-title.php';
                include 'partial1/header.php'; ?>
                <div class="row">
                    <div class="content">
                        <div class="tab-pane">
                            <div class="row">
                                <div class="card">
                                    <div class="col-12 d-flex py-2">
                                        <img src="<?= base_url('public/assets/images/logo2.png') ?>" class="my-2" height="45" width="auto" alt="" srcset="">
                                        <p class="mx-4 my-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, impedit laboriosam, eius voluptatibus cupiditate, soluta distinctio voluptate libero nobis at quam tenetur reprehenderit debitis saepe commodi rem recusandae facere dolorum?</p>
                                        <div><button type="button" class="btn btn-primary">Télecharger</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"> 
                                <i class="fas fa-user-injured font-36 my-2"></i>
                                    <h3 class="text-dark my-0 font-20 fw-bold"> Patients</h3>
                                <p class="text-muted my-2 fw-semibold">Vous comptez 13 patients enregistrés dans votre hôpital via l'application SIGIM.</p>
                                <hr class="hr-dashed">
                                <div class="d-flex justify-content-between">
                                    <div class="align-self-center">
                                        <button type="button" class="btn btn-sm btn-success"></i>Voir la liste</button>
                                    </div>
                                </div>
                            </div><!--end card-body--> 
                        </div><!--end card-->
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"> 
                                <i class="fa fa-user-md font-36 my-2"></i>
                                <h3 class="text-dark my-0 font-20 fw-bold">22 Professionnels de santé</h3>
                                <p class="text-muted my-2 fw-semibold">Vous comptez 22 professionnels de santé enregistrés via l'application SIGIM.</p>
                                <hr class="hr-dashed">
                                <div class="d-flex justify-content-between">
                                    <div class="align-self-center">
                                        <button type="button" class="btn btn-sm btn-success"></i>En savoir plus</button>
                                    </div>
                                </div>
                            </div><!--end card-body--> 
                        </div><!--end card-->
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"> 
                                <i class="fas fa-layer-group font-36 my-2"></i>
                                <h3 class="text-dark my-0 font-20 fw-bold">34 Services</h3>
                                <p class="text-muted my-2 fw-semibold">Vous comptez 34 services enregistrés dans votre hôpital via l'application SIGIM.</p>
                                <hr class="hr-dashed">
                                <div class="d-flex justify-content-between">
                                    <div class="align-self-center">
                                        <button type="button" class="btn btn-sm btn-success"></i>Consulter</button>
                                    </div>
                                </div>
                            </div><!--end card-body--> 
                        </div><!--end card-->
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"> 
                                <i class="far fa-calendar-alt font-36 my-2"></i>
                                <h3 class="text-dark my-0 font-20 fw-bold">19 Rendez-vous</h3>
                                <p class="text-muted my-2 fw-semibold">Vous comptez 19 rendez-vous enregistrés dans votre hôpital via l'application SIGIM.</p>
                                <hr class="hr-dashed">
                                <div class="d-flex justify-content-between">
                                    <div class="align-self-center">
                                        <button type="button" class="btn btn-sm btn-success"></i>Voir la liste</button>
                                    </div>
                                </div>
                            </div><!--end card-body--> 
                        </div><!--end card-->
                    </div>
                   
                </div><!--end col-->


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
    <script src="<?= base_url('public/assets/plugins/fullcalendar/main.min.js'); ?>"></script>
    <script src="<?= base_url('public/assets/pages/calendar.init.js'); ?>"></script>
    <script src="<?= base_url('public/assets/plugins/apexcharts/apexcharts.min.js'); ?>"></script>
    <script src="<?= base_url('public/assets/pages/analytics-index.init.js'); ?>"></script>


    <!-- App js -->
    <script src="<?= base_url('public/assets/js/app.js'); ?>"></script>
    <script src="<?= base_url('public/assets/pages/toast.init.js'); ?>"></script>
</body>
<!--end body-->

</html>