<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
    include 'partial1/title-meta.php'; ?>

    <link href="<?= base_url('public/assets/plugins/hopscotch/hopscotch.css'); ?>" rel="stylesheet" type="text/css" />

    <?php include 'partial1/head-css.php'; ?>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
</head>

<body id="body" class="dark-sidebar">
    <?php include 'partial1/menu-patient.php';  ?>

    <div class="page-wrapper">

        <!-- Page Content-->
        <div class="page-content-tab">

            <div class="container-fluid">
                <!-- Page-Title -->
                <?=
            $page_title = "Boutton Alert";
            $sub_title = "Alert";
            include 'partial1/page-title.php';  ?>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-4">
                        <div class="card bg-soft-danger">
                            <div class="card-body"> 
                                <i class="fas fa-exclamation-circle font-36" style="margin: 10px 0px"></i>
                                <h3 class="text-dark my-0 font-20 fw-bold">Ne pas cliquer sur le bouton pour un test</h3>
                                <p class="text-dark mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, et! Cumque debitis voluptates consectetur quisquam ad fuga id harum nam magnam quasi ullam repellendus optio, dolorem beatae aperiam quo doloremque.</p>
                            </div><!--end card-body--> 
                        </div><!--end card-->
                    </div><!--end col-->  
                    <div class="col-4">
                        <div class="card bg-soft-danger">
                            <div class="card-body"> 
                                <i class="fas fa-exclamation-circle font-36" style="margin: 10px 0px"></i>
                                <h3 class="text-dark my-0 font-20 fw-bold">Ne pas cliquer sur le bouton pour un test</h3>
                                <p class="text-dark mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, et! Cumque debitis voluptates consectetur quisquam ad fuga id harum nam magnam quasi ullam repellendus optio, dolorem beatae aperiam quo doloremque.</p>
                            </div><!--end card-body--> 
                        </div><!--end card-->
                    </div><!--end col-->  
                    <div class="col-4">
                        <div class="card bg-soft-danger">
                            <div class="card-body"> 
                                <i class="fas fa-exclamation-circle font-36" style="margin: 10px 0px"></i>
                                <h3 class="text-dark my-0 font-20 fw-bold">Ne pas cliquer sur le bouton pour un test</h3>
                                <p class="text-dark mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, et! Cumque debitis voluptates consectetur quisquam ad fuga id harum nam magnam quasi ullam repellendus optio, dolorem beatae aperiam quo doloremque.</p>
                            </div><!--end card-body--> 
                        </div><!--end card-->
                    </div><!--end col-->                                       
                </div>
                <div class="row">
                    <div class="col-lg-5">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Alert Récente</h4>
                                <p class="text-dark mb-0">Lorem ipsum dolor sit amet consectetur, adipisici
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0 table-centered">
                                        <thead>
                                        <tr>
                                            <th>N°</th>
                                            <th>Date</th>
                                            <th>Heure</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>03</td>
                                            <td>11/01/2024</td>
                                            <td>13:01</td>
                                            <td><span class="badge badge-soft-success">Aprouvé</span></td>
                                        </tr>
                                        <tr>
                                            <td>01</td>
                                            <td>25/10/2023</td>
                                            <td>08:32</td>
                                            <td><span class="badge badge-soft-success">Apprové</span></td>
                                        </tr>
                                        <tr>
                                            <td>02</td>
                                            <td>19/01/2023</td>
                                            <td>23:48</td>
                                            <td><span class="badge badge-soft-success">Apprové</span></td>
                                        </tr>
                                        </tbody>
                                    </table><!--end /table-->
                                </div><!--end /tableresponsive-->
                            </div><!--end card-body-->
                            
                        </div><!--end card-->
                    </div>
                    <div class="col-6 bg-white" style="display: flex; justify-content: center; align-items: center">
                        <div class="col-4">
                            <div class="card bg-danger">
                                <script>
                                    function FrontImage (){ 
                                    $("#intro").fadeOut(900).delay(300).fadeIn(800); 
                                    } 
                                    $(document).ready(function(){ 
                                    setInterval(FrontImage,2200); // Utiliser le nom de la fonction sans guillemets
                                    });
                                </script>
                                <a href="<?= base_url('patient/auth-500'); ?>" id="intro" target="_blank" rel="noopener noreferrer">
                                    <div class="card-body"> 
                                        <i class="fas fa-exclamation-triangle font-36" style="margin: 10px 0px; color: white"></i>
                                        <h4 class="text-dark my-0 font-20 fw-bold text-white">Cliquer ici pour émmetre une alerte</h4>
                                    </div><!--end card-body--> 
                                </a>
                            </div><!--end card-->
                        </div><!--end col--> 
                    </div>
                </div>
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
    <script src="<?= base_url('public/assets/plugins/hopscotch/hopscotch.js'); ?>"></script> 
    <script src="<?= base_url('public/assets/pages/tour.init.js'); ?>"></script> 
    <!-- App js -->
    <script src="<?= base_url('public/assets/js/app.js'); ?>"></script>

</body>

</html>