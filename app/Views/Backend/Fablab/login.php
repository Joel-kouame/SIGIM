
<!DOCTYPE html>
<html lang="en">

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <?= $this->include('layouts-fablab/title-meta'); ?>
    
    <?= $this->include('layouts-fablab/head-css'); ?>
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
                                <div class="card-body p-0 auth-header-box">
                                    <div class="text-center p-3">
                                        <a href="index.html" class="logo logo-admin">
                                            <img src="<?= base_url('public/assets/images/sigim.png') ?>" height="50" alt="logo" class="auth-logo">
                                        </a>
                                        <h4 class="mt-3 mb-1 fw-semibold text-white font-18">Admin SIGIM</h4>   
                                        <p class="text-muted  mb-0">Connectez-vous pour continuer à SIGIM.</p>  
                                    </div>
                                </div>
                                <div class="card-body pt-0">                                    
                                    <form class="my-4" action="<?= base_url('/Fablab/login_fablab'); ?>" method="post">   

                                        <?= csrf_field(); ?>
                                        <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                                            <div class="alert alert-danger rounded-0" role="alert"><?= session()->getFlashdata('fail'); ?></div>
                                        <?php endif ?>
                                        <?php if (!empty(session()->getFlashdata('success'))) : ?>
                                            <div class="alert alert-success rounded-0"><?= session()->getFlashdata('success'); ?></div>
                                        <?php endif ?>   

                                        <div class="form-group mb-2">
                                            <label class="form-label" for="username">Username</label>
                                            <input type="email" class="form-control" id="username" name="email" placeholder="Enter username">     
                                            <span class="text-danger">
                                                <?= isset($validation) ? display_form_errors($validation, 'email') : '' ?>
                                            </span>                          
                                        </div><!--end form-group--> 
            
                                        <div class="form-group">
                                            <label class="form-label" for="userpassword">Password</label>                                            
                                            <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password">  
                                            <span class="text-danger">
                                                <?= isset($validation) ? display_form_errors($validation, 'password') : '' ?>
                                            </span>                          
                                        </div><!--end form-group--> 
            
                                        <div class="form-group row mt-3">
                                            <div class="col-sm-6">
                                                <div class="form-check form-switch form-switch-success">
                                                    <input class="form-check-input" type="checkbox" id="customSwitchSuccess">
                                                    <label class="form-check-label" for="customSwitchSuccess">Se souvenez de moi</label>
                                                </div>
                                            </div><!--end col--> 
                                            <div class="col-sm-6 text-end">
                                                <a href="auth-recover-pw.html" class="text-muted font-13"><i class="dripicons-lock"></i> Mot de passe oublié ?</a>                                    
                                            </div><!--end col--> 
                                        </div><!--end form-group--> 
            
                                        <div class="form-group mb-0 row">
                                            <div class="col-12">
                                                <div class="d-grid mt-3">
                                                    <button class="btn btn-primary" type="submit">S'identifier <i class="fas fa-sign-in-alt ms-1"></i></button>
                                                </div>
                                            </div><!--end col--> 
                                        </div> <!--end form-group-->                           
                                    </form><!--end form-->
                                    <div class="m-3 text-center text-muted">
                                        <p class="mb-0">Vous n’avez pas de compte ?  <a href="<?= base_url('/Fablab/register'); ?>" class="text-primary ms-2">S’inscrire gratuitement</a></p>
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

    <script>
         // Attendez que le DOM soit prêt
      document.addEventListener("DOMContentLoaded", function() {
         // Obtenir l’élément de message de réussite
         const successMessage = document.querySelector('.alert-success');

         // Vérifier si le message de réussite existe
         if (successMessage) {
            // Définir un délai d’expiration pour masquer le message de réussite après 20 secondes (20000 millisecondes)
            setTimeout(function() {
               successMessage.style.display = 'none';
            }, 20000);
         }
      });
    </script>
    
</body>

</html>