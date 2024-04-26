<!DOCTYPE html>
<html lang="en">

<head>
    <?= include 'partial1/title-meta.php'; ?>

    <?= include 'partial1/head-css.php'; ?>
</head>

<body id="body" class="dark-sidebar">
    <?= include 'partial1/menu-hopital.php';  ?>

    <div class="page-wrapper">

        <!-- Page Content-->
        <div class="page-content-tab">

            <div class="container-fluid">
                <!-- Page-Title -->
                <?=
                    $page_title = "Ajouter un Service";
                    $sub_title = "Admin Hopital";
                    include 'partial1/page-title.php';  ?>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Ajout d'un nouveau service</h4>
                                <p class="text-muted mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p> 
                            </div><!--end card-header-->
                            <div class="card-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="nom_service">Nom du service</label>
                                        <input type="email" class="form-control" id="nom_service" aria-describedby="emailHelp" placeholder="Entrer le nom du service" name="nom_service">
                                    </div>
                                    <div class="mb-3">
                                        <label for="heure_service">Heure d'ouverture</label>
                                        <input type="text" class="form-control" id="heure_service" placeholder="Exemple : 08h30 - 16h40" name="heure_service">
                                    </div>  
                                    <div class="mb-4">
                                        <label for="exampleInputnom1">Responsable de service</label>
                                        <input type="text" class="form-control" id="exampleInputnom1" placeholder="JEAN MAURO" name="responsable_service">
                                    </div> 
                                    <button type="submit" class="btn btn-de-primary">Enregistrer</button>
                                    <a href="<?= base_url('liste_service');?>"><button type="button" class="btn btn-de-danger">Annuler</button></a>
                                </form>                                           
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
    <!-- App js -->
    <script src="<?= base_url('public/assets/js/app.js'); ?>"></script>

</body>

</html>