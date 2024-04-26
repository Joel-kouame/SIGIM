<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'partial1/title-meta.php' ; ?>

    <?php include 'partial1/head-css.php' ; ?>
</head>

<body id="body" class="auth-page" style="background-image: url('<?= base_url('public/assets/images/p-1.png'); ?>'); background-size: cover; background-position: center center;">
   <!-- Log In page -->
    <div class="container-md">
        <div class="row vh-100 d-flex justify-content-center">
            <div class="col-12 align-self-center">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-5 mx-auto">
                            <div class="card">
                                <div class="card-body p-0 auth-header-box">
                                    <div class="text-center p-3">
                                        <a href="index.php" class="logo logo-admin">
                                            <img src="<?= base_url('public/assets/images/logo1.png'); ?>" height="50" alt="logo" class="auth-logo">
                                        </a>
                                        <h4 class="mt-3 mb-1 fw-semibold text-white font-18">Merci d'avoir de nous faire confiance!</h4>   
                                        <p class="text-muted  mb-0">Retour au tableau de bord SIGIM.</p>  
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="ex-page-content text-center">
                                        <img src="<?= base_url('public/assets/images/4202055.jpg'); ?> " alt="0" class="" height="170">
                                        <h3 class="mt-5 mb-4">Votre alert a bien été transmis !</h3>  
                                        <h5 class="font-16 text-muted mb-5">Une unitée d'urgence viens vers vous dans quelque minutes</h5>                                    
                                    </div>          
                                    <a class="btn btn-primary w-100" href="<?= base_url('/patient/alerte'); ?>">Retour à la page d'acceuil <i class="fas fa-redo ml-1"></i></a>                         
                                </div><!--end card-body-->
                                <div class="card-body bg-light-alt text-center">
                                    &copy; <script>
                                        document.write(new Date().getFullYear())
                                    </script> SIGIM                                           
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