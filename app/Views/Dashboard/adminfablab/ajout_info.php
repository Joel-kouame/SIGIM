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
                <!-- Page-Title -->
                <?php
                $page_title = "Mise à jour des informations";
                $sub_title = "Admin Hopital";
                include 'partial1/page-title.php';  ?>
                <!-- end page title end breadcrumb -->
                <div class="row mt-4">
                    <div class="col-12">
                        <?= csrf_field(); ?>
                            <?php if (!empty(session()->getFlashdata('success'))) : ?>
                                <div class="alert alert-success rounded-0"><?= session()->getFlashdata('success'); ?></div>
                            <?php endif ?>
                        <div class="card justify-content-center">
                            
                            <?php include 'partial1/header.php' ;?>
                            <div class="card-header bg-success">
                                <h5 class="text-white text-center">MISE A JOUR DES INFORMATIONS</h5>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="kanban-board">
                                    <div class="kanban-col-12">
                                        <div class="table-responsive">
                                            <table class="table" id="datatable_2">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Telephone</th>
                                                        <th>Email</th>
                                                        <th>Boite postal</th>
                                                        <th>Adress</th>
                                                        <th>Facebook</th>
                                                        <th>Whatsapp</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><?= $information['telephone'] ?></td>
                                                        <td><?= $information['email'] ?></td>
                                                        <td><?= $information['boite_postal'] ?></td>
                                                        <td><?= $information['adress'] ?></td>
                                                        <td><?= $information['facebook'] ?></td>
                                                        <td><?= $information['whatsapp'] ?></td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Mettre à jour</button>
                                                                <!-- Modal -->
                                                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="staticBackdropLabel">Mise à jour des informations</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form action="<?= base_url('Fablab/updateInfo/' . $information['id']); ?>" method="post">
                                        
                                                                                <div class="mb-3">
                                                                                    <label>Numero de telephone :</label>
                                                                                    <input type="tel" class="form-control" aria-describedby="emailHelp" name="telephone" value="<?= isset($information['telephone']) ? $information['telephone'] : ''; ?>">
                                                                                    <span class="text-danger text-sm">
                                                                                        <?= isset($validation) ? display_form_errors($validation, 'telephone') : ''; ?>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="exampleInputEmail1">Email :</label>
                                                                                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="<?= isset($information['email']) ? $information['email'] : ''; ?>">
                                                                                    <span class="text-danger text-sm">
                                                                                        <?= isset($validation) ? display_form_errors($validation, 'email') : ''; ?>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="mb-4">
                                                                                    <label for="exampleInputnom1">Adress :</label>
                                                                                    <input type="text" class="form-control" id="exampleInputnom1" name="adress" value="<?= isset($information['adress']) ? $information['adress'] : ''; ?>">
                                                                                    <span class="text-danger text-sm">
                                                                                        <?= isset($validation) ? display_form_errors($validation, 'adress') : ''; ?>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="mb-4">
                                                                                    <label for="exampleInputnom1">Boite postal :</label>
                                                                                    <input type="text" class="form-control" id="exampleInputnom1" name="boite_postal" value="<?= isset($information['boite_postal']) ? $information['boite_postal'] : ''; ?>">
                                                                                </div>
                                                                                <div class="mb-4">
                                                                                    <label for="exampleInputnom1">Liens Facebook :</label>
                                                                                    <input type="text" class="form-control" id="exampleInputnom1" name="facebook" value="<?= isset($information['facebook']) ? $information['facebook'] : ''; ?>">
                                                                                </div>
                                                                                <div class="mb-4">
                                                                                    <label for="exampleInputnom1">Liens Whatsapp :</label>
                                                                                    <input type="text" class="form-control" id="exampleInputnom1" name="whatsapp" value="<?= isset($information['whatsapp']) ? $information['whatsapp'] : ''; ?>">
                                                                                </div>
                                                                                
                                                                                <button type="submit" class="btn btn-success">Mise à jour</button>
                                                                            </form>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Fermer</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
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

    <script>
        // Attendre que le document soit complètement chargé
        document.addEventListener("DOMContentLoaded", function() {
            // Cibler l'élément du message flash de succès
            const flashMessage = document.querySelector('.flash-message');

            // Vérifier si le message flash de succès existe
            if (flashMessage) {
                // Masquer le message flash de succès après 2 secondes
                setTimeout(function() {
                    flashMessage.style.display = 'none';
                }, 200);
            }
        });
    </script>
    <!-- App js -->
    <script src="<?= base_url('public/assets/js/app.js'); ?>"></script>
</body>
</html>