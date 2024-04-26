<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php $this->include('layouts-hopital/title-meta'); ?>
    <?php $this->include('layouts-hopital/head-css'); ?>
</head>

<body id="body" class="auth-page" style="background-image: url('public/assets/images/p-1.png'); background-size: cover; background-position: center center;">
    <!-- Log In page -->
    <div class="container-md">
        <div class="row vh-100 d-flex justify-content-center">
            <div class="col-12 align-self-center">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 mx-auto">
                            <div class="card">
                                <div class="card-body p-2 auth-header-box">
                                    <div class="text-center p-6">
                                        <a href="index.html" class="logo logo-admin">
                                            <img src="<?= base_url('public/assets/images/sigim.png') ?>" height="50" alt="logo" class="auth-logo">
                                        </a>
                                        <h4 class="mt-1 mb-1 fw-semibold text-white font-18">Admin FABLAB SIGIM</h4>
                                        <p class="text-muted  mb-0">Inscrivez-vous pour continuer à SIGIM.</p>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <form class="my-4" action="<?= base_url('/Hopital/save_hopital'); ?>" method="post">
                                        <?= csrf_field(); ?>
                                        <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                                            <div class="alert alert-danger rounded-0" role="alert"><?= session()->getFlashdata('fail'); ?></div>
                                        <?php endif ?>

                                        <?php if (!empty(session()->getFlashdata('success'))) : ?>
                                            <div class="alert alert-success rounded-0"><?= session()->getFlashdata('success'); ?></div>
                                        <?php endif ?>
                                        <div class="form-group mb-2">
                                            <label class="form-label" for="username">Nom</label>
                                            <input type="text" class="form-control" id="username" name="nom" value="<?= set_value('nom'); ?>" placeholder="Enter nom">
                                            <span class="text-danger">
                                                <?= isset($validation) ? display_form_errors($validation, 'nom') : '' ?>
                                            </span>
                                        </div><!--end form-group-->

                                        <div class="form-group mb-2">
                                            <label class="form-label" for="rename">Prenom</label>
                                            <input type="text" class="form-control" id="rename" name="prenom" value="<?= set_value('prenom'); ?>" placeholder="Enter prenom">
                                            <span class="text-danger">
                                                <?= isset($validation) ? display_form_errors($validation, 'prenom') : '' ?>
                                            </span>
                                        </div><!--end form-group-->

                                        <div class="form-group mb-2">
                                            <label class="form-label" for="userservice">Service</label>
                                            <input type="text" class="form-control" id="userservice" name="service" value="<?= set_value('service'); ?>" placeholder="Service">
                                            <span class="text-danger">
                                                <?= isset($validation) ? display_form_errors($validation, 'service') : '' ?>
                                            </span>
                                        </div><!--end form-group-->

                                        <div class="form-group mb-2">
                                            <label class="form-label" for="useremail">Email</label>
                                            <input type="email" class="form-control" id="useremail" name="email" value="<?= set_value('email'); ?>" placeholder="Enter email">
                                            <span class="text-danger">
                                                <?= isset($validation) ? display_form_errors($validation, 'email') : '' ?>
                                            </span>
                                        </div><!--end form-group-->

                                        <div class="form-group mb-2">
                                            <label class="form-label" for="userpassword">Password</label>
                                            <input type="password" class="form-control" name="mdp" value="<?= set_value('mdp'); ?>" id="userpassword" placeholder="Enter password">
                                            <span class="text-danger">
                                                <?= isset($validation) ? display_form_errors($validation, 'mdp') : '' ?>
                                            </span>
                                        </div><!--end form-group-->

                                        <div class="form-group mb-2">
                                            <label class="form-label" for="Confirmpassword">ConfirmPassword</label>
                                            <input type="password" class="form-control" name="mdp_c" value="<?= set_value('mdp_c'); ?>" id="Confirmpassword" placeholder="Enter Confirm password">
                                            <span class="text-danger">
                                                <?= isset($validation) ? display_form_errors($validation, 'mdp_c') : '' ?>
                                            </span>
                                        </div><!--end form-group-->

                                        <!-- <div class="form-group mb-2">
                                            <label class="form-label" for="mobileNo">Mobile Number</label>
                                            <input type="text" class="form-control" id="mobileNo" name="mobile" placeholder="Enter Mobile Number">                               
                                        </div> -->
                                        <!--end form-group-->

                                        <div class="form-group row mt-3">
                                            <div class="col-12">
                                                <div class="form-check form-switch form-switch-success">
                                                    <input class="form-check-input" type="checkbox" id="customSwitchSuccess">
                                                    <label class="form-check-label" for="customSwitchSuccess">En vous inscrivant, vous acceptez <a href="#" class="text-primary">les conditions d’utilisation </a>du SIGIM</label>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end form-group-->

                                        <div class="form-group mb-0 row">
                                            <div class="col-12">
                                                <div class="d-grid mt-3">
                                                    <button class="btn btn-primary" type="submit">S'inscrire <i class="fas fa-sign-in-alt ms-1"></i></button>
                                                </div>
                                            </div><!--end col-->
                                        </div> <!--end form-group-->
                                    </form><!--end form-->
                                    <div class="m-3 text-center text-muted">
                                        <p class="mb-0">Vous avez déjà un compte ? <a href="<?= base_url('/login'); ?>" class="text-primary ms-2">Connectez-vous maintenant</a></p>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end card-body-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <!-- App js -->
    <script type="text/javascript" src="<?= base_url('public/assets/js/app.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>