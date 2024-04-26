<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'partial1/title-meta.php'; ?>
    <link href="<?= base_url('public/assets/plugins/datatables/datatable.css');?>" rel="stylesheet" type="text/css" />
    <?php include 'partial1/head-css.php'; ?>
</head>

<body id="body" class="dark-sidebar">
    <?php include 'partial1/menu.php';  ?>

    <div class="page-wrapper">

        <!-- Page Content-->
        <div class="page-content-tab">

            <div class="container-fluid">
                <!-- Page-Title -->
                <?php
            $page_title = "Invoice";
            $sub_title = "Apps";
            include 'partial1/page-title.php';  ?>
                <!-- end page title end breadcrumb -->
                <?php if (isset($patients) && count($patients) > 0) : ?>
                    <?php foreach ($patients as $patient) : ?>
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <div class="card">
                            <div class="card-body invoice-head"> 
                                <div class="row">  
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="met-profile">
                                                    <div class="row">
                                                        <div class="col-lg-4 align-self-center mb-3 mb-lg-0">
                                                            <div class="met-profile-main">
                                                                <div class="met-profile-main-pic">
                                                                    <img src="<?= base_url($patient['photo']); ?>" alt="" height="110" class="rounded-circle">
                                                                </div>
                                                                <div class="met-profile_user-detail">
                                                                    <h6 class=""><b><?= $patient['identifiant']; ?></b></h6>
                                                                    <h5 class="met-user-name"><?= $patient['nom'] . ' ' . $patient['prenom']; ?></h5>                                                        
                                                                    <p class="mb-0 met-user-name-post"><?= $patient['profession']; ?></p>                                                        
                                                                </div>
                                                            </div>                                                
                                                        </div><!--end col-->
                                                        
                                                        <div class="col-lg-4 ms-auto align-self-center">
                                                            <ul class="list-unstyled personal-detail mb-0">
                                                                <li class=""><i class="las la-phone mr-2 text-secondary font-22 align-middle"></i> <b> Contact </b> : +225 <?= $patient['telephone']; ?></li>
                                                                <li class="mt-2"><i class="las la-envelope text-secondary font-22 align-middle mr-2"></i> <b> Email </b> : <?= $patient['email']; ?></li>
                                                                <li class="mt-2"><i class="las fa-home text-secondary font-22 align-middle mr-2"></i> <b> Localisation </b> : <?= $patient['lieu_habitation']; ?></li>                                                   
                                                            </ul>
                                                            
                                                        </div><!--end col-->
                                                        <div class="col-lg-4 align-self-center">
                                                            <div class="row">
                                                                <div class="col-auto d-block">
                                                                    <p class="font-12 fw-normal">
                                                                        <b>Contact Urgence:</b>
                                                                        <ul>
                                                                        <li><b>Nom:</b> <?= $patient['nom_urgence']; ?></li>
                                                                            <li><b>Contact:</b> <?= $patient['contact_urgent']; ?></li>
                                                                            <li><b>Liens parenté:</b> <?= $patient['parent']; ?></li>
                                                                        </ul>
                                                                    </p>
                                                                </div><!--end col-->
                                                            </div><!--end row-->                                               
                                                        </div><!--end col-->
                                                    </div><!--end row-->
                                                </div><!--end f_profile-->                                                                                
                                            </div><!--end card-body-->   
                                        </div><!--end card-->
                                    </div><!--end col--> 
                                </div><!--end row-->     
                            </div><!--end card-body-->

                            <div class="card-body p-0">    
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#Post" role="tab" aria-selected="false">Consultations</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#Gallery" role="tab" aria-selected="false">Ordonnances</a>
                                    </li>  
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#Settings" role="tab" aria-selected="false">Alergies</a>
                                    </li> 
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#examens" role="tab" aria-selected="false">Examens & Resultats</a>
                                    </li> 
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane p-3 active" id="Post" role="tabpanel">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="card-title">Détails sur les Consultations</h4>
                                                    </div><!--end card-header-->
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table class="table" id="datatable_1">
                                                                <thead class="thead-light">
                                                                <tr class="text-align: center">
                                                                    <th data-type="date" data-format="YYYY/DD/MM">Date</th>
                                                                    <th>Nom medecin</th>
                                                                    <th>Service</th>
                                                                    <th>Motif</th>
                                                                    <th>Infos</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php if (isset($infos) && count($infos) > 0) : ?>
                                                                        <?php foreach ($infos as $item) : ?>
                                                                            <tr>
                                                                                <td><?= $item['created_at']; ?></td>
                                                                                <td>
                                                                                    <?= $item['nom'] . ' ' . $item['prenom']; ?>
                                                                                </td>
                                                                                <td><?= $item['service']; ?></td>
                                                                                <td><?= $item['observation']; ?></td>
                                                                                <td>
                                                                                    <!-- Button trigger modal -->
                                                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                                        Lire plus
                                                                                    </button>

                                                                                    <!-- Modal -->
                                                                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                        <div class="modal-dialog modal-dialog-centered">
                                                                                            <div class="modal-content">
                                                                                                <div class="modal-header">
                                                                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Détails Sur Les Consultations</h1>
                                                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                                </div>
                                                                                                <div class="modal-body">
                                                                                                    <ul>
                                                                                                        <li>
                                                                                                            <h5>Constante</h5>
                                                                                                            <ul>
                                                                                                                <li>Poids : <?= $item['poids']; ?></li>
                                                                                                                <li>Taille : <?= $item['taille']; ?></li>
                                                                                                                <li>Temperature : <?= $item['temperature']; ?></li>
                                                                                                            </ul>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <h5>Diagnostics</h5>
                                                                                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate rem suscipit quasi voluptates molestias error! Ea harum labore vitae quia accusamus enim quis, magnam nam totam inventore eveniet sapiente laboriosam?</p>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <h5><a href="#Gallery">Ordonnances
                                                                                                                    <ul>
                                                                                                                        <li>...</li>
                                                                                                                    </ul>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <h5>Resultats :</h5>
                                                                                                            <ul>
                                                                                                                <li>...</li>
                                                                                                            </ul>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                                <div class="modal-footer">
                                                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr> <!-- end tr -->
                                                                        <?php endforeach; ?>
                                                                    <?php else : ?>
                                                                        <tr>
                                                                            <td colspan="2">Aucune consultation trouvée.</td>
                                                                        </tr>
                                                                    <?php endif; ?>
                                  
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </div>
                                    <div class="tab-pane p-3" id="Gallery" role="tabpanel">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="card-title">Liste des ordonnances</h4>
                                                    </div><!--end card-header-->
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table class="table" id="datatable_1">
                                                                <thead class="thead-light">
                                                                <tr class="text-align: center">
                                                                    <th>Libelé</th>
                                                                    <th>Service</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>      
                                                                    <tr>
                                                                        <td><h5 class="text-primary">Ordonnance du 26/01/2024</h5></td>
                                                                        <td>Medecine géneral</td>
                                                                        <td>
                                                                            <!-- Button trigger modal -->
                                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                                                            Voir les médicaments
                                                                            </button>
                                                                            <!-- Modal -->
                                                                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                                                <div class="modal-dialog">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Liste des médicaments</h1>
                                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <div class="table-responsive">
                                                                                                <table class="table" id="datatable_1">
                                                                                                    <thead class="thead-light">
                                                                                                        <tr>
                                                                                                            <th>Médicament</th>
                                                                                                            <th>Posologie</th>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody>
                                                                                                        <tr>
                                                                                                            <td>Novalgin 200mg</td>
                                                                                                            <td>1/J</td>
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr> <!-- end tr -->                                                                   
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </div>                                                
                                    <div class="tab-pane p-3" id="Settings" role="tabpanel">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="card-title">Lise des alergies</h4>
                                                    </div><!--end card-header-->
                                                    <div class="card-body"> 
                                                        <div class="table-responsive">
                                                            <table class="table mb-0"> 
                                                                <thead class="thead-light">
                                                                <tr class="text-align: center">
                                                                    <th data-type="date" data-format="YYYY/DD/MM">Date</th>
                                                                    <th>Nom maladie</th>
                                                                    <th>Nom medecin</th>
                                                                </tr>
                                                                </thead>                                                       
                                                                <tbody>
                                                                    <tr class="border-0">
                                                                        <td>2024/01/26</td>
                                                                        <td class="border-0"><i class="mdi mdi-circle-outline me-1 text-dark"></i>DIABETIQUE<br></td>
                                                                        <td>Dr. SORO UNSIONKO</td>
                                                                    </tr>                               
                                                                </tbody>
                                                            </table>
                                                        </div><!--table responsive-->
                                                    </div><!--end card-body-->
                                                </div><!--end card-->
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </div>
                                    <div class="tab-pane p-3" id="examens" role="tabpanel">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="row align-items-center">
                                                            <div class="col">                      
                                                                <h4 class="card-title">Categories</h4>                      
                                                            </div><!--end col-->
                                                        </div>  <!--end row-->                                  
                                                    </div><!--end card-header-->
                                                    <div class="card-body">
                                                        <div class="files-nav">                                     
                                                            <div class="nav flex-column nav-pills" id="files-tab" aria-orientation="vertical">
                                                                <a class="nav-link active" id="files-projects-tab" data-bs-toggle="pill" href="#files-projects" aria-selected="true">
                                                                
                                                                    <i data-feather="folder" class="align-self-center icon-dual-file icon-sm me-2"></i>
                                                                    <div class="d-inline-block align-self-center">
                                                                        <h5 class="m-0">EXAMENS</h5>
                                                                        <small>80GB/200GB Used</small>                                                    
                                                                    </div>
                                                                </a>
                                                                <a class="nav-link" id="files-pdf-tab" data-bs-toggle="pill" href="#files-pdf" aria-selected="false">
                                                                    <i data-feather="folder" class="align-self-center icon-dual-file icon-sm me-2"></i>
                                                                    <div class="d-inline-block align-self-center">
                                                                        <h5 class="m-0">RESULTATS</h5>
                                                                        <small>80GB/200GB Used</small>                                                    
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div><!--end card-body-->
                                                </div><!--end card-->
                                            </div><!--end col-->

                                            <div class="col-lg-9">
                                                <div class="">                                    
                                                    <div class="tab-content" id="files-tabContent">
                                                        <div class="tab-pane fade show active" id="files-projects">
                                                            <h4 class="card-title mt-0 mb-3">Projects</h4>                                         
                                                            <div class="file-box-content">
                                                                <div class="file-box">
                                                                    <a href="#" class="download-icon-link">
                                                                        <i class="las la-download file-download-icon"></i>
                                                                    </a>
                                                                    <div class="text-center">
                                                                        <i class="lar la-file-code text-danger"></i>
                                                                        <h6 class="text-truncate">Examens.pdf</h6>
                                                                        <small class="text-muted">12 Dec 2023 / 8MB</small>
                                                                    </div>                                                        
                                                                </div>                                          
                                                            </div> 
                                                        </div><!--end tab-pane-->

                                                        <div class="tab-pane fade" id="files-pdf">
                                                            <h4 class="mt-0 card-title mb-3">PDF Files</h4>
                                                            <div class="file-box-content">
                                                                <div class="file-box">
                                                                    <a href="#" class="download-icon-link">
                                                                        <i class="las la-download file-download-icon"></i>
                                                                    </a>
                                                                    <div class="text-center">
                                                                        <i class="lar la-file-pdf text-danger"></i>
                                                                        <h6 class="text-truncate">Résultats.pdf</h6>
                                                                        <small class="text-muted">12 Dec 2024 / 8MB</small>
                                                                    </div>                                                        
                                                                </div>                                               
                                                            </div> 
                                                        </div><!--end tab-pane-->
                                                    </div>  <!--end tab-content-->                                                                              
                                                </div><!--end card-body-->
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div>
                                </div>        
                            </div> <!--end card-body-->  
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->

                <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="6">Aucun carnet trouvé.</td>
                    </tr>
                <?php endif; ?>

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
    <script src="<?= base_url('public/assets/plugins/apexcharts/apexcharts.min.js'); ?>"></script>
    <script src="<?= base_url('public/assets/plugins/datatables/simple-datatables.js'); ?>"></script>
    <script src="<?= base_url('public/assets/pages/analytics-customers.init.js'); ?>"></script>
    <!-- App js -->
    <script src="<?= base_url('public/assets/js/script.js'); ?>"></script>
    <script src="<?= base_url('public/assets/js/app.js'); ?>"></script>
</body>
</html>