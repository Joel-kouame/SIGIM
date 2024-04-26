<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'partial1/title-meta.php'; ?>

    <?php include 'partial1/head-css.php'; ?>
</head>

<body id="body" class="dark-sidebar">
    <?php include 'partial1/menu.php';  ?>
    <!-- Log In page -->
    <div class="container-md">
        <!-- Page-Title -->
        <?php
        $page_title = "Ajout ProSanté";
        $sub_title = "Admin Hôpital";
        include 'partial1/page-title.php';  ?>
        <!-- end page title end breadcrumb -->
        <div class="row vh-100 d-flex justify-content-center">
            <div class="col-12 align-self-center">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 mx-auto">
                            <div class="card">
                                <div class="card-body p-0 auth-header-box">
                                    <div class="text-center p-3">
                                        <a href="<?= base_url(); ?>" class="logo logo-admin">
                                            <img src="<?= base_url('public/assets/images/logo1.png'); ?>" height="50" alt="logo" class="auth-logo">
                                        </a>
                                        <h4 class="mt-3 mb-1 fw-semibold text-white font-18">Demarons avec SIGIM</h4>
                                        <p class="text-muted  mb-0">Inscriver un Professionnel de santé sur SIGIM.</p>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <form class="my-4" action="index.html">
                                        <div class="form-group mb-2">
                                            <label class="form-label" for="name_hopital">Nom</label>
                                            <input type="text" class="form-control" id="name_hopital" name="name_hopital" placeholder="nom">
                                        </div><!--end form-group-->

                                        <div class="form-group mb-2">
                                            <label class="form-label" for="username">Prenom</label>
                                            <input type="text" class="form-control" id="username" name="username" placeholder="prenom">
                                        </div><!--end form-group-->

                                        <div class="form-group mb-2">
                                            <label class="form-label" for="mobileNo">Mobile Number</label>
                                            <input type="number" class="form-control" id="mobileNo" name="mobile number" placeholder="Enter Mobile Number">
                                        </div><!--end form-group-->

                                        <div class="form-group mb-2">
                                            <label class="form-label" for="useremail">Email</label>
                                            <input type="email" class="form-control" id="useremail" name="user email" placeholder="Enter email">
                                        </div><!--end form-group-->

                                        <div class="form-group mb-2">
                                            <label class="form-label" for="userpassword">Password</label>
                                            <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password">
                                        </div><!--end form-group-->

                                        <div class="form-group mb-2">
                                            <label class="form-label" for="Confirmpassword">ConfirmPassword</label>
                                            <input type="password" class="form-control" name="password" id="Confirmpassword" placeholder="Enter Confirm password">
                                        </div><!--end form-group-->

                                        <div class="form-group row mt-3">
                                            <div class="col-12">
                                                <div class="form-check form-switch form-switch-success">
                                                    <input class="form-check-input" type="checkbox" id="customSwitchSuccess">
                                                    <label class="form-check-label" for="customSwitchSuccess">En vous inscrivant, vous acceptez les <a href="#" class="text-primary">Terms et conditions</a> de SIGIM</label>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end form-group-->

                                        <div class="form-group mb-0 row">
                                            <div class="col-12">
                                                <div class="d-grid mt-3">
                                                    <button class="btn btn-primary" type="button">Enregistrer <i class="fas fa-sign-in-alt ms-1"></i></button>
                                                </div>
                                            </div><!--end col-->
                                        </div> <!--end form-group-->
                                    </form><!--end form-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end card-body-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <!-- App js -->
    <script src="<?= base_url('public/assets/js/app.js'); ?>"></script>

</body>

</html>