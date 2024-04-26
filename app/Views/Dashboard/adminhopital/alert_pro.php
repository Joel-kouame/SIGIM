<!DOCTYPE html>
<html lang="en">
    
    <head>
        <?= include 'partial1/title-meta.php'; ?>

        <link href="<?= base_url('public/assets/plugins/datatables/datatable.css');?>" rel="stylesheet" type="text/css" />

        <?= include 'partial1/head-css.php'; ?>
    </head>

    <body id="body" class="dark-sidebar">

    <?= include 'partial1/menu-hopital.php';  ?>

        <div class="page-wrapper">

            <!-- Page Content-->
            <div class="page-content-tab">

                <div class="container-fluid">

                    <?=
                        $page_title = "Alerte Patients";
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
                                              <tr class="text-align: center">
                                                <th>Nom</th>
                                                <th>Note medecin</th>
                                                <th>Localisation</th>
                                                <th data-type="date" data-format="YYYY/DD/MM">Date</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><img src="<?= base_url('public/assets/images/users/user-1.jpg'); ?>" alt="" class="rounded-circle thumb-sm me-1">Albert Gregoire</td>
                                                    <td>
                                                        <b class="text-danger">Cardique</b>
                                                        <p>Remonter gastrique frequente, douleurs forte au niveau du torax</p>
                                                    </td>
                                                    <td>Abidjan, Adjamé, Saint Michel, derriere l'eglise Bethanie</td>
                                                    <td>2005/02/11</td>
                                                </tr> <!-- end tr -->                                                                
                                            </tbody>
                                          </table>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                </div><!-- container -->

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