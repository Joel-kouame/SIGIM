<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'partial1/title-meta.php'; ?>

    <link href="<?= base_url('public/assets/plugins/fullcalendar/main.css'); ?>" rel="stylesheet" type="text/css" />

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
                $page_title = "Calendar";
                $sub_title = "Apss";
                include 'partial1/page-title.php';  ?>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="<?= base_url('public/assets/images/calendar.svg'); ?>" alt="" class="img-fluid">
                                <a href="<?= base_url('patient/afficher_rendez_vous'); ?>">
                                    <button class="btn btn-primary" type="submit">Voir mes rendez-vous</button>
                                </a>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-8">
                        <div class="card">
                            <?= csrf_field(); ?>
                            <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                                <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                            <?php endif ?>
                            <?php if (!empty(session()->getFlashdata('success'))) : ?>
                                <div class="alert alert-success flash-message"><?= session()->getFlashdata('success'); ?></div>
                            <?php endif ?>
                            <div class="card-header">
                                <h4 class="card-title">Prendre Rendez-vous</h4>
                                <p class="text-muted mb-0">Prendre soin de sa santé, c’est prendre soin de soi et de ses proches. N’attendez pas que les symptômes s’aggravent, contactez un professionnel de santé dès aujourd’hui et bénéficiez d’un accompagnement personnalisé.
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <form class="row g-3 needs-validation" novalidate="" action="<?= base_url('saveRendezvous'); ?>" method="post">
                                    <div class="col-md-6">
                                        <label for="validationCustom01" class="form-label">Nom</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="<?php if (isset($patient['nom'])) {echo $patient['nom'];} else {echo set_value('nom_patient');} ?>" name="nom_rendez_vous" readonly="readonly">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustom02" class="form-label">Prénoms</label>
                                        <input type="text" class="form-control" id="validationCustom02" name="prenom_rendez_vous" value="<?php if (isset($patient['prenom'])) {echo $patient['prenom'];} else {echo set_value('prenom_patient');} ?>" readonly="readonly">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustomUsername" class="form-label">Contact</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text" id="inputGroupPrepend"><i class="fa fa-phone"></i></span>
                                            <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="contact_rendez_vous" value="<?php if (isset($patient['telephone'])) {echo $patient['telephone'];} else {echo set_value('telephone_patient');} ?>" readonly="readonly">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustom04" class="form-label">Service un service</label>
                                        <select class="form-select" id="validationCustom04" required="" name="service_rendez_vous" value="<?= set_value('service_rendez_vous'); ?>">
                                            <option selected="" disabled="" value="">Choisir...</option>
                                            <?php if(isset($service) && $service >0 ): ;?>
                                                <?php foreach ($service as $services) : ?>
                                                    <option><?= $services['nom_service'] ;?></option>
                                                <?php endforeach; ?>
                                            <?php endif ;?>
                                        </select>
                                        <span class="text-danger">
                                            <?= isset($validation) ? display_form_errors($validation, 'service_rendez_vous') : '' ?>
                                        </span>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom04" class="form-label">Hôpital</label>
                                        <select class="form-select" id="validationCustom04" required="" name="hopital_rendez_vous" value="<?= set_value('hopital_rendez_vous'); ?>">
                                            <option selected="" disabled="" value="">Choisir un hopital</option>
                                            <?php if(isset($hopital) && $hopital >0 ): ;?>
                                                <?php foreach ($hopital as $hopitals) : ?>
                                                    <option value='<?= $hopitals['id'] ; ?>'><?= $hopitals['nom_hopt'] ;?></option>
                                                <?php endforeach; ?>
                                            <?php endif ;?>
                                        </select>
                                        <span class="text-danger">
                                            <?= isset($validation) ? display_form_errors($validation, 'hopital_rendez_vous') : '' ?>
                                        </span>
                                    </div>
                                    <div class="col-md-5">
                                        <label for="validationCustom05" class="form-label">Date</label>
                                        <input type="date" class="form-control" id="file" name="date_rendez_vous" required="" value="<?= set_value('date_rendez_vous'); ?>">
                                        <span class="text-danger">
                                            <?= isset($validation) ? display_form_errors($validation, 'date_rendez_vous') : '' ?>
                                        </span>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationCustom03" class="form-label">Message au medecin</label>
                                        <textarea class="form-control" cols="100" id="validationCustom03" rows="03" name="motif_rendez_vous" value="<?= set_value('motif_rendez_vous'); ?>"></textarea>
                                        <span class="text-danger">
                                            <?= isset($validation) ? display_form_errors($validation, 'motif_rendez_vous') : '' ?>
                                        </span>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required="">
                                            <label class="form-check-label" for="invalidCheck">
                                                Accepter les termes et les conditions de SIGIM
                                            </label>
                                            <div class="invalid-feedback">
                                                Accepter les conditions puis, envoyer.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit">PRENDRE UN RENDEZ-VOUS</button>
                                    </div>
                                </form><!--end form-->
                            </div><!--end card-body-->
                        </div>
                    </div>
                </div><!-- End row -->

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
    <!-- App js -->
    <script src="<?= base_url('public/assets/js/app.js'); ?>"></script>
    <script src="<?= base_url('public/assets/plugins/fullcalendar/main.min.js'); ?>"></script>
    <script src="<?= base_url('public/assets/pages/calendar.init.js'); ?>"></script>

</body>
<!--end body-->

</html>