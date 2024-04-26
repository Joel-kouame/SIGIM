<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="met-profile">
                    <div class="row">
                        <div class="col-lg-4 align-self-center mb-3 mb-lg-0">
                            <div class="met-profile-main">
                                <div class="met-profile-main-pic">
                                    <img src="<?= base_url($patient['photo'] ?: 'upload/images.jpg'); ?>" alt="" height="110" class="rounded-circle">
                                   
                                </div>
                                <div class="met-profile_user-detail">
                                    <h5><b>ID : </b><?= $patient['identifiant'] ? : 'Identifiant'; ?></h5> 
                                    <h5 class="met-user-name"><?= isset($patient['nom']) ? $patient['nom'] . ' ' : ''; ?><?= isset($patient['prenom']) ? $patient['prenom'] : 'Prosanté'; ?></h5>                                                     
                                    <p class="mb-0 met-user-name-post"><?= $patient['profession']; ?></p>                                                        
                                </div>
                            </div>                                                
                        </div><!--end col-->
                        
                        <div class="col-lg-4 ms-auto align-self-center">
                            <ul class="list-unstyled personal-detail mb-0">
                                <li class=""><i class="las la-phone mr-2 text-secondary font-22 align-middle"></i> <b> Contact </b> : +225 <?= $patient['telephone'] ? : 'Patient'; ?></li>
                                <li class="mt-2"><i class="las la-envelope text-secondary font-22 align-middle mr-2"></i> <b> Email </b> : <?= session()->get('email'); ?></li>
                                <li class="mt-2"><i class="las fa-home text-secondary font-22 align-middle mr-2"></i> <b> Lieu d'habitation </b> : <?= $patient['lieu_habitation']; ?> </li>                                                   
                            </ul>
                            
                        </div><!--end col-->
                        <div class="col-lg-4 align-self-center">
                            <div class="row">
                                <div class="col-auto text-end border-end">
                                    <img src="<?= base_url($patient['qr_image'] ? : 'upload/qrcode.png'); ?>" alt="" srcset="" height="100px" width="auto">
                                </div><!--end col-->
                                <div class="col-auto d-block">
                                    <p class="text-muted font-12 fw-normal">En cas d’urgence, votre code QR<br>peut faire la différence. Protégez-vous<br> ainsi que vos proches.</p>
                                    <a href="<?= base_url($patient['qr_image'] ? : 'upload/qrcode.png'); ?>" download="<?= base_url($patient['qr_image'] ? : 'upload/qrcode.png'); ?>">Télécharger</a>
                                </div><!--end col-->
                            </div><!--end row-->                                               
                        </div><!--end col-->
                        <div class="col-lg-4"></div>
                    </div><!--end row-->
                </div><!--end f_profile-->                                                                                
            </div><!--end card-body-->   
        </div><!--end card-->
    </div><!--end col-->
</div><!--end row-->