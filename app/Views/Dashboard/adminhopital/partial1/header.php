<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="met-profile">
                    <div class="row">
                        <div class="col-lg-6 align-self-center mb-3 mb-lg-0">
                            <div class="met-profile-main">
                                <div class="met-profile-main-pic">
                                    <img src="<?= (isset($hopital['photo_hopt'])) ? base_url($hopital['photo_hopt']) : 'Hopital' ; ?>" alt="" height="100" width="100" class="rounded-circle">
                                </div>
                                <div class="met-profile_user-detail">
                                    <h6><span class="text-muted" ><b>Numéro: </span><?= isset($hopital['num_ident_hopt']) ? $hopital['num_ident_hopt'] : 'Hôpital'; ?></b></h6>
                                    <h5 class="met-user-name"><?= isset($hopital['nom_hopt']) ? $hopital['nom_hopt'] : 'Hôpital'; ?></h5>     
                                </div>
                            </div>                                                
                        </div><!--end col-->
                        
                        <div class="col-lg-4 ms-auto align-self-center">
                            <ul class="list-unstyled personal-detail mb-0">
                                <li class=""><i class="las la-phone mr-2 text-secondary font-22 align-middle"></i> <b> Contact </b> : +225 <?= isset($hopital['contact_hopt']) ? $hopital['contact_hopt'] : 'Hôpital'; ?></li>
                                <li class="mt-2"><i class="las la-envelope text-secondary font-22 align-middle mr-2"></i> <b> Email </b> : <?= isset($hopital['email_hopt']) ? $hopital['email_hopt'] : 'Hôpital'; ?></li>
                                <li class="mt-2"><i class="las fa-home text-secondary font-22 align-middle mr-2"></i> <b> Localisation </b> : <?= isset($hopital['local_hopt']) ? $hopital['local_hopt'] : 'Hôpital'; ?></li>                                                   
                            </ul>
                            
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end f_profile-->                                                                                
            </div><!--end card-body-->   
        </div><!--end card-->
    </div><!--end col-->
</div><!--end row-->