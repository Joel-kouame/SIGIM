<!DOCTYPE html>
<html lang="en">
    
    <head>
        <?php include 'partial1/title-meta.php'; ?>

        <link href="<?= base_url('public/assets/plugins/datatables/datatable.css');?>" rel="stylesheet" type="text/css" />

        <?php include 'partial1/head-css.php'; ?>
    </head>

    <body id="body" class="dark-sidebar">

    <?php include 'partial1/menu-hopital.php';  ?>

        <div class="page-wrapper">

            <!-- Page Content-->
            <div class="page-content-tab">

                <div class="container-fluid">

                    <?=
                        $page_title = "Liste des Patients";
                        $sub_title = "Admin Hopital";
                        include 'partial1/page-title.php';  ?>   
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Details sur les patients</h4>
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table" id="datatable_1">
                                            <thead class="thead-light">
                                              <tr class="text-align: center">
                                                <th>Nom</th>
                                                <th>Contact</th>
                                                <th>Email</th>
                                                <th>Localisation</th>
                                                <th>Action</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (isset($patient) && count($patient) > 0) : ?>
                                                    <?php foreach ($patient as $patients) : ?>
                                                        <tr>
                                                            <td><img src="<?= base_url($patients['photo']); ?>" alt="" class="rounded-circle thumb-sm me-1"><?= $patients['nom']. ' ' . $patients['prenom'] ?></td>
                                                            <td><?= $patients['telephone'] ?></td>
                                                            <td><?= $patients['email'] ?></td>
                                                            <td><?= $patients['lieu_habitation'] ?></td>
                                                            <td>
                                                                <div class="dropdown d-inline-block float-center">
                                                                    <a class="dropdown-toggle mr-n2 mt-n2" id="drop2" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                        <button class="btn btn-soft-primary">Afficher le mdp</button>
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop1">
                                                                        <input class="form-control" type="text" name="" id="" value="<?= $patients['mdp'] ?>">
                                                                    </div>
                                                                </div><!--end dropdown-->
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                <?php else : ?>
                                                    <tr>
                                                        <td colspan="6">Aucun service trouvé.</td>
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
                 
                <!--Start Footer-->
                <?php include 'partial1/footer.php';  ?>
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