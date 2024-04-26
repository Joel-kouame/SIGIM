<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->include('layouts/title-meta'); ?>

    <!-- <link href="../assets/plugins/fullcalendar/main.css" rel="stylesheet" type="text/css" /> -->

    <?= $this->include('layouts/head-css'); ?>
</head>

<body id="body" class="dark-sidebar">

    <div class="page-wrapper">

        <!-- Top Bar Start -->

        <?= $this->include('layouts/left-sidebarp'); ?>
        <?= $this->include('layouts/topbarp'); ?>

        <!-- Page Content-->
        <div class="page-content-tab">

            <div class="container-fluid">
                <!-- Page-Title -->
                <?=
                $page_title = "Profile";
                $sub_title = "Pages";
                $this->include('layouts/page-title');
                ?>

                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="../assets/images/small/calendar.svg" alt="" class="img-fluid">
                                <ul class="list-group">

                            
                                <?php foreach($examen as $data){ ?>
                                    
                                    <li class="list-group-item align-items-center ">
                                        <div class="media">
                                            <img src="../assets/images/users/user-5.jpg" class="me-3 thumb-sm align-self-center rounded-circle" alt="...">
                                            <div class="media-body align-self-center">
                                                <h6 class="mt-0 mb-1 fw-bold"><?= $data['nom_examen'] ; ?></h6>
                                          
                                                <p class="text-muted mb-0"><?= str_replace('uploads/fichier_examen/','',$data['fichier_examen']) ; ?></p>
                                                <p class="text-muted mb-0"><?= $data['date_examen'] ; ?></p>
                                            </div><!--end media body-->
                                        </div>
                                    </li>
                                    
                                <?php } ?>


                                </ul>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <!--   <div id='calendar'></div>                                  
                                 <div style='clear:both'></div> -->


                                <div class="card-header">
                                    <h4 class="card-title">Planifier un rendez-vous</h4>
                                    <p class="text-muted mb-0">Basic example to demonstrate Bootstrap’s form styles.</p>
                                </div><!--end card-header-->


                                <div class="card-body">



                                    <form class="form" action="<?= base_url('/Patient/examensave'); ?>" method="post" enctype="multipart/form-data">
                                        <?php csrf_field(); ?>
                                        <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                                            <div class="alert icon-custom-alert alert-outline-danger alert-dismissible fade show rounded-0" role="alert">
                                                <i class="mdi mdi-check-all alert-icon"></i>
                                                <div class="alert-text">
                                                    <strong>Well done!</strong> You successfully read this important alert message.
                                                </div>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>
                                        <?php endif ?>

                                        <?php if (!empty(session()->getFlashdata('success'))) : ?>
                                            <div class="alert icon-custom-alert alert-outline-success alert-dismissible fade show rounded-0" role="alert">
                                                <i class="mdi mdi-check-all alert-icon"></i>
                                                <div class="alert-text">
                                                    <strong>Well done!</strong> You successfully read this important alert message.
                                                </div>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>
                                        <?php endif ?>
                                        <div class="mb-3">
                                        <span class="text-danger text-sm">
                                    <?= isset($validation)? display_form_errors($validation, 'id_dest'): '' ?>
                                   </span>
                                            <label for="exampleFormControlSelect1">Mon Medecin</label>
                                            <select class="form-select bg-light rounded-0" name="id_dest" id="exampleFormControlSelect1">
                                                <option value="1">Mr rene</option>
                                                <option value="2">Mr paul</option>
                                                <option value="3">Mr franck</option>
                                                <option value="4">Mme kony</option>
                                                <option value="5">judite</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1">Nom Examen :</label>
                                            <span class="text-danger text-sm">
                                    <?= isset($validation)? display_form_errors($validation, 'nom_examen'): '' ?>
                                   </span>
                                            <input type="text" name="nom_examen" class="form-control bg-light rounded-0" id="exampleFormControlInput1" placeholder="Mon sujet">
                                        </div>


                                       
                                        <br>

                                      
                                         <div class="input-group mb-3">
                                   <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon03">Button</button>
                                    <input type="file" name="nom_fichier" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                                  </div>  
                                                       

                                        <div class="mb-3">
                                            <div class="button-items text-end">
                                                <button type="submit" class="btn btn-primary rounded-0"><i class="mdi mdi-send me-2"></i>Enregistrer</button>

                                            </div>
                                        </div>


                                    </form>
                                </div><!--end card-body-->


                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!-- End row -->

            </div><!-- container -->

            <!--Start Rightbar-->

            <!--end Rightbar-->

            <script>
    // ajout de l'image
/*
    let inputFiles = document.querySelectorAll('.input-file');


    inputFiles.forEach((inputFile) => {
      inputFile.addEventListener('change', changePic)
    })



    function changePic(e) {

      /*let profilePic = document.querySelector('.profile-Pic-1');*/
   /*   let profilePic = e.target.parentElement.previousElementSibling.src = URL.createObjectURL(e.target.files[0]);

      console.log(profilePic);

    }
/*


    // supression de l'image


    let deleteFiles = document.querySelectorAll('.deleteFile');


    deleteFiles.forEach((deleteFile) => {
      deleteFile.addEventListener('click', deleteChangePic)
    })



    function deleteChangePic(e) {

      /*let profilePic = document.querySelector('.profile-Pic-1');*/
    /*  let profilePic = e.target.nextElementSibling.src = "../Images/produit/default.jpg";

      console.log(profilePic);

    }*/
  </script>

            <!--Start Footer-->
            <?= $this->include('layouts/footer');  ?>
            <!--end footer-->
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->

    <!-- Javascript  -->
    <!-- <script src="../assets/plugins/fullcalendar/main.min.js"></script>
        <script src="../assets/pages/calendar.init.js"></script> -->
    <!-- App js -->
    <script src="../assets/js/app.js"></script>

</body>

</html>