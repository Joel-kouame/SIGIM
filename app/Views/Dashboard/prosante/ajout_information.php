<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = "SIGIM";
    include 'partial1/title-meta.php'; ?>
    <?php include 'partial1/head-css.php'; ?>
    <!-- Sweet Alert -->
    <link href="<?= base_url('public/assets/plugins/sweet-alert2/sweetalert2.min.css');?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('public/assets/plugins/animate/animate.min.css');?>" rel="stylesheet" type="text/css">
</head>

<body id="body" class="dark-sidebar">

    <?php include 'partial1/menu.php';?>

    <div class="page-wrapper">

        <!-- Page Content-->
        <div class="page-content-tab">

           

            <div class="container-fluid">
                <!-- Page-Title -->
                <?php
                $page_title = "Ajouter des informations";
                $sub_title = "Professionnel de santé";
                include 'partial1/page-title.php';  ?>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Faire un ajout</h4>
                                <p class="text-muted mb-0">You can use Steps Wizard with Bootstrap 5.</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                            <form action="<?= base_url('prosante/save_consultation'); ?>" method="post" id="custom-step">
                                <?php csrf_field(); ?>
                                    <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                                        <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                                    <?php endif ?>

                                    <?php if (!empty(session()->getFlashdata('success'))) : ?>
                                        <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                                    <?php endif ?>
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab">
                                            <a class="nav-link active" id="step1-tab" data-bs-toggle="tab" href="#step1">Consultation</a>
                                            <a class="nav-link" id="step2-tab" data-bs-toggle="tab" href="#step2">Laboratoire</a>
                                            <a class="nav-link" id="step4-tab" data-bs-toggle="tab" href="#step4">Confirmation</a> 
                                        </div>
                                    </nav>
                                    <input type="text" name="id_patient" value="<?= $patient['user_id'] ; ?>" hidden>
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane active" id="step1">
                                            <h4 class="card-title mt-3 my-4">Constante :</h4>
                                            <div class="row">
                                                <input type="text" name="id_patient" value="<?= $patient['user_id'] ; ?>" hidden>
                                                <div class="col-md-3">
                                                    <div class="form-group mb-2">
                                                        <label class="form-label" for="poids">Poids :</label>
                                                        <input type="text" class="form-control" id="poids" name="poids" placeholder="50kg" >
                                                    </div><!--end form-group-->
                                                </div><!--end col-->
                                                <div class="col-md-3">
                                                    <div class="form-group mb-2">
                                                        <label class="form-label" for="Tailles">Taille :</label>
                                                        <input type="text" class="form-control" id="Taille" name="taille" placeholder="1 m 30" >
                                                    </div><!--end form-group-->
                                                </div><!--end col-->
                                                <div class="col-md-3">
                                                    <div class="form-group mb-2">
                                                        <label class="form-label" for="tension">Tension artérielle :</label>
                                                        <input type="text" class="form-control" id="tension" name="tension" placeholder="" >
                                                    </div><!--end form-group-->
                                                </div><!--end col-->
                                                <div class="col-md-3">
                                                    <div class="form-group mb-2">
                                                        <label class="form-label" for="Temperature">Température :</label>
                                                        <input type="text" class="form-control" id="Temperature" name="temperature" placeholder="37°" >
                                                    </div><!--end form-group-->
                                                </div><!--end col-->
                                            </div><!--end row-->
                                            <div class="row">
                                                <h4 class="card-title mt-3 my-4">Obervation medecin :</h4>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-2">
                                                        <label class="form-label" for="note_medecin">Diagnostics Medecin</label>
                                                        <textarea class="form-control" name="observation" id="" cols="5" rows="2"></textarea>
                                                    </div><!--end form-group-->
                                                </div><!--end col-->
                                                <div class="col-md-5">
                                                    <label for="validationCustom04" class="form-label">Examens</label>
                                                    <select class="form-select" id="validationCustom04" name="examen">
                                                        <option selected="" disabled="" value="">Choisir un examen</option>
                                                        <option>EXAMEN 1</option>
                                                        <option>EXAMEN 2</option>
                                                    </select>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                            <div class="tab-pane" id="step4">
                                                <div class="my-3">
                                                    <h4 class="card-title mt-2">ORDONNANCE :</h4>
                                                    <marquee><h5><b>Entrer le nom du médicament puis la posologie separé d'un " / "</b></h5></marquee>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group mb-2">
                                                            <label class="form-label" for="Tailles">Medicament 1 :</label>
                                                            <input type="text" class="form-control" id="Taille" name="medicament1" placeholder="nom_medicament / posologie" >
                                                        </div><!--end form-group-->
                                                    </div><!--end col-->
                                                    <div class="col-md-4">
                                                        <div class="form-group mb-2">
                                                            <label class="form-label" for="Tailles">Medicament 2 :</label>
                                                            <input type="text" class="form-control" id="Taille" name="medicament2" placeholder="nom_medicament / posologie" >
                                                        </div><!--end form-group-->
                                                    </div><!--end col-->
                                                    <div class="col-md-4">
                                                        <div class="form-group mb-2">
                                                            <label class="form-label" for="Tailles">Medicament 3 :</label>
                                                            <input type="text" class="form-control" id="Taille" name="medicament3" placeholder="nom_medicament / posologie" >
                                                        </div><!--end form-group-->
                                                    </div><!--end col-->
                                                </div>
                                                <div>
                                                    <!-- <button type="button" id="step4Prev" class="btn btn-secondary float-start">Precendent</button> -->
                                                    <button type="submit" id="step4Finish" class="btn btn-success float-end">Enregistrer</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="step2">
                                            <h4 class="card-title mt-3 my-4">Ajouter d'autre information</h4>
                                            <div class="row">
                                                <div class="col-4">
                        
                                                    <form action="<?= base_url('add_alergie'); ?>" method="post">

                                                        <?= csrf_field(); ?>
                                                        <?php if (!empty(session()->getFlashdata('success'))) : ?>
                                                            <div class="alert alert-success flash-message"><?= session()->getFlashdata('success'); ?></div>
                                                        <?php endif ?>

                                                        <div class="form-group mb-2">
                                                            <input type="text" name="id_patient" value="<?= $patient['user_id'] ; ?>" hidden>
                                                                                    
                                                            <div class="d-flex">
                                                                <label lass="form-label"></label>
                                                                <input type="text" class="form-control" id="nom_medicament" name="nom_alergie" placeholder="Nom alergie" required="">
                                                                <span class="text-danger text-sm">
                                                                    <?= isset($validation) ? display_form_errors($validation, 'nom_alergie') : '' ?>
                                                                </span>
                                                                <input type="text" class="form-control ms-3" id="posologie" name="reaction_alergique" placeholder="Reaction alergique">
                                                            </div>
                                                        </div>
                                                        <button type="submit" name="Enregistrer" id="BtnEnregistrer" class="btn btn-success waves-effect waves-light submit my-3">Enregistrer</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form><!--end form-->
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



    <!-- Javascript  -->
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
                }, 2000);
            }
        });
    </script>

    <!-- Sweet-Alert  -->
    <script src="<?= base_url('public/assets/plugins/sweet-alert2/sweetalert2.min.js') ;?>"></script>
    <script src="<?= base_url('public/assets/pages/sweet-alert.init.js') ;?>"></script>
    <script src="<?= base_url('public/assets/pages/form-wizard.js'); ?>"></script>
    <!-- App js -->
    <script src="<?= base_url('public/assets/js/app.js'); ?>"></script>

</body>

</html>