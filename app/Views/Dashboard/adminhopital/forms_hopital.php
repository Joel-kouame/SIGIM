<!DOCTYPE html>
<html lang="en">

<head>
    <?=
    include 'partial1/title-meta.php'; ?>

    <?= include 'partial1/head-css.php'; ?>
</head>

<body id="body" class="dark-sidebar">
    <?= include 'partial1/menu.php';  ?>

    <div class="page-wrapper">

        <!-- Page Content-->
        <div class="page-content-tab">

            <div class="container-fluid">
                <!-- Page-Title -->
                <?=
                $page_title = "Ajout Hopital";
                $sub_title = "Admin Fablab";
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
                                <form action="" method="post" id="custom-step">
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab">
                                            <a class="nav-link active" id="step1-tab" data-bs-toggle="tab" href="#step1">Identification Hopital</a>
                                            <a class="nav-link" id="step2-tab" data-bs-toggle="tab" href="#step2">Identification Directeur</a>
                                            <a class="nav-link" id="step4-tab" data-bs-toggle="tab" href="#step4">Confirmation</a>
                                        </div>
                                    </nav>
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane active" id="step1">
                                            <h4 class="card-title mt-3 my-4">Details de l'Hopital</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group mb-2">
                                                        <label class="form-label" for="Numero_hopital">Numéro d’identification de l’hôpital (SIRET, FINESS, etc.)</label>
                                                        <input type="number" class="form-control" id="Numero_hopital" name="Numero_hopital" placeholder="FINESS: 750100012" required="">
                                                    </div><!--end form-group-->
                                                </div><!--end col-->
                                                <div class="col-md-6">
                                                    <div class="form-group mb-2">
                                                        <label class="form-label" for="nom_hopital">Nom de l'hopital</label>
                                                        <input type="text" class="form-control" id="nom_hopital" name="nom_hopital" placeholder="nom de l'hopital" required="">
                                                    </div><!--end form-group-->
                                                </div><!--end col-->
                                            </div><!--end row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group mb-2">
                                                        <label class="form-label" for="Contact_hopital">Contact téléphonique</label>
                                                        <input type="number" class="form-control" id="contact_hopital" name="contact_hopital" placeholder="Exemple: +225 0701 0203 04" required="">
                                                    </div><!--end form-group-->
                                                </div><!--end col-->
                                                <div class="col-md-6">
                                                    <div class="form-group mb-2">
                                                        <label class="form-label" for="Email_hopital">Email</label>
                                                        <input type="email" class="form-control" id="Email_hopital" name="Email_hopital" placeholder="Exemple: hopital@gmail.com">
                                                    </div><!--end form-group-->
                                                </div><!--end col-->
                                            </div><!--end row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group mb-2">
                                                        <label class="form-label" for="Localité_hopital">Localité</label>
                                                        <input type="text" class="form-control" id="Localité_hopital" name="Localité_hopital" placeholder="Exemple: Côte d'Ivoire, Abidjan, Adjamé" required="">
                                                    </div><!--end form-group-->
                                                </div><!--end col-->
                                                <div class="col-md-6">
                                                    <label for="validationCustom04" class="form-label">Type d'etablissement</label>
                                                    <select class="form-select" id="validationCustom04" required="">
                                                        <option selected="" disabled="" value="">Choisir...</option>
                                                        <option>Hopital Public</option>
                                                        <option>Hopital Privée</option>
                                                        <option>Clinique</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Veillez selectionner un champs
                                                    </div>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                            <div class="">
                                                <button type="button" id="step1Next" class="btn btn-primary float-end">Next</button>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="step2">
                                            <h4 class="card-title mt-3 my-4">Details directeur</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group mb-2">
                                                        <label class="form-label" for="nom_directeur">Nom du directeur</label>
                                                        <input type="text" class="form-control" id="nom_directeur" name="nom_directeur" placeholder="nom du directeur" required="">
                                                    </div><!--end form-group-->
                                                </div><!--end col-->
                                                <div class="col-md-6">
                                                    <div class="form-group mb-2">
                                                        <label class="form-label" for="prenom_directeur">Prenom du directeur</label>
                                                        <input type="text" class="form-control" id="prenom_directeur" name="prenom_directeur" placeholder="prenom du directeur" required="">
                                                    </div><!--end form-group-->
                                                </div><!--end col-->
                                            </div><!--end row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group mb-2">
                                                        <label class="form-label" for="Contact_hopital">Contact téléphonique</label>
                                                        <input type="number" class="form-control" id="contact_hopital" name="contact_hopital" placeholder="Exemple: +225 0701 0203 04" required="">
                                                    </div><!--end form-group-->
                                                </div><!--end col-->
                                                <div class="col-md-6">
                                                    <div class="form-group mb-2">
                                                        <label class="form-label" for="Email_hopital">Email</label>
                                                        <input type="email" class="form-control" id="Email_hopital" name="Email_hopital" placeholder="Exemple: hopital@gmail.com">
                                                    </div><!--end form-group-->
                                                </div><!--end col-->
                                            </div><!--end row-->

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="validationCustom04" class="form-label">Veillez selectionner votre pièce d'identiée</label>
                                                    <select class="form-select" id="validationCustom04" required="">
                                                        <option selected="" disabled="" value="">Choisir...</option>
                                                        <option>Attestation d'identité</option>
                                                        <option>Carte Nationnal d'Identitée</option>
                                                        <option>Permis de conduire</option>
                                                        <option>Passport</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Veillez selectionner un champs
                                                    </div>
                                                </div><!--end col-->
                                                <div class="col-md-6">
                                                    <label for="validationCustom05" class="form-label">Ajouter votre pièce d'identitée</label>
                                                    <input type="file" class="form-control" id="file" name="file" accept="image/png, image/jpeg, .pdf" />
                                                </div><!--end col-->
                                            </div><!--end row-->
                                            <div class="my-3">
                                                <button type="button" id="step2Prev" class="btn btn-secondary float-start">Precedent</button>
                                                <button type="button" id="step2Next" class="btn btn-primary float-end">Suivant</button>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="step4">
                                            <h4 class="card-title mt-3">Confirmer les details</h4>
                                            <div class="form-check my-2">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Oui j'accepte les terms et conditions.
                                                </label>
                                            </div>
                                            <div>
                                                <button type="button" id="step4Prev" class="btn btn-secondary float-start">Precendent</button>
                                                <button type="button" id="step4Finish" class="btn btn-success float-end">Enregistrer</button>
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
    <script src="<?= base_url('public/assets/pages/form-wizard.js'); ?>"></script>
    <!-- App js -->
    <script src="<?= base_url('public/assets/js/app.js'); ?>"></script>

</body>

</html>