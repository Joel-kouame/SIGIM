<!DOCTYPE html>
<html lang="en">

<head>

    <?php $title = "SIGIM"; ?>

    <?php include 'partial1/title-meta.php'; ?>

    <?php include 'partial1/head-css.php'; ?>
</head>

<body id="body" class="dark-sidebar">


    <div class="page-wrapper">
        <?= include 'partial1/menu.php';  ?>

        <!-- Page Content-->
        <div class="page-content-tab">

            <div class="container-fluid">

                <?php
                $page_title = "Professionnel de santé";
                $sub_title = "Dashboard"; ?>
                <?php include 'partial1/page-title.php'; ?>
                <?php include 'partial1/header.php'; ?>
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
                    <div class="tab-pane p-3 active" id="Post" role="tabpanel">
                        <div class="row my-3">
                            <div class="col-lg-9 w-100">
                                <div class="row justify-content-center">
                                    <div class="col-lg-3">
                                        <div class="card overflow-hidden">
                                            <div class="card-body" style="background-color: #edfaf5; border-radius: 5px">
                                                <div class="row d-flex">
                                                    <div class="col-3 mb-4">
                                                        <i class="fas fa-calendar-check font-36 align-self-center text-dark"></i>
                                                    </div><!--end col-->
                                                    <div class="col-12 ms-auto align-self-center">
                                                        <h4 class="my-0 font-22 fw-bold">liste des rendez-vous</h4>
                                                        <p class="my-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cons </p>
                                                        <a href="<?= base_url('prosante/rendez_vous_list');?>">
                                                            <button type="button" class="btn btn-outline-success my-2">Voir</button>
                                                        </a>
                                                    </div><!--end col-->
                                                </div><!--end row-->
                                            </div><!--end card-body-->
                                        </div><!--end card-->
                                    </div> <!--end col-->
                                    <div class="col-lg-3">
                                        <div class="card overflow-hidden">
                                            <div class="card-body" style="background-color: #f0fbfc; border-radius: 5px">
                                                <div class="row d-flex">
                                                    <div class="col-3 mb-4">
                                                        <i class="fas fa-comment-alt font-36 align-self-center text-dark"></i>
                                                    </div><!--end col-->
                                                    <div class="col-12 ms-auto align-self-center">
                                                        <h4 class="my-0 font-22 fw-bold">3 Nouveaux messages</h4>
                                                        <p class="my-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cons </p>
                                                        <a href="<?= base_url('/prosante/chat');?>">
                                                            <button type="button" class="btn btn-outline-primary my-2">Lire</button>
                                                        </a>
                                                    </div><!--end col-->
                                                </div><!--end row-->
                                            </div><!--end card-body-->
                                        </div><!--end card-->
                                    </div> <!--end col-->
                                    <div class="col-lg-3">
                                        <div class="card overflow-hidden">
                                            <div class="card-body" style="background-color: #fef1f2; border-radius: 5px">
                                                <div class="row d-flex">
                                                    <div class="col-3 mb-4">
                                                        <i class="fas fa-exclamation-circle font-36 align-self-center text-dark"></i>
                                                    </div>
                                                    <div class="col-12 ms-auto align-self-center">
                                                        <h4 class="my-0 font-22 fw-bold">03 alerts traitées</h4>
                                                        <p class="my-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cons </p>
                                                        <a href="<?= base_url('prosante/alertep');?>">
                                                            <button type="button" class="btn btn-outline-danger my-2">En savoir plus</button>
                                                        </a>
                                                    </div><!--end col-->
                                                </div><!--end row-->
                                            </div><!--end card-body-->
                                        </div><!--end card-->
                                    </div> <!--end col-->
                                    <div class="col-lg-3">
                                        <div class="card overflow-hidden">
                                            <div class="card-body" style="background-color: #fff8f0; border-radius: 5px">
                                                <div class="row d-flex">
                                                    <div class="col-3 mb-4">
                                                        <i class="fas fa-folder-open font-36 align-self-center text-dark"></i>
                                                    </div>
                                                    <div class="col-12 ms-auto align-self-center">
                                                        <h4 class="my-0 font-22 fw-bold">Mon carnet numerique</h4>
                                                        <p class="my-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cons </p>
                                                        <a href="pages-tour.php">
                                                            <button type="button" class="btn btn-outline-warning my-2">Consulter</button>
                                                        </a>
                                                    </div><!--end col-->
                                                </div><!--end row-->
                                            </div><!--end card-body-->
                                        </div><!--end card-->
                                    </div> <!--end col-->
                                </div><!--end row-->
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
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