
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="met-profile">
                    <div class="row">
                        <div class="col-lg-6 align-self-center mb-3 mb-lg-0">
                            <div class="met-profile-main">
                                <div class="met-profile-main-pic">
                                    <img src="<?= base_url($prosante['photo'] ?: 'upload/images.jpg'); ?>" alt="" height="110" width="110" class="rounded-circle">
                                </div>
                                <div class="met-profile_user-detail">
                                    <h6><?= $prosante['reference'] ? : 'Prosanté'; ?></h6>
                                    <h5 class="met-user-name"><?= isset($prosante['nom']) ? $prosante['nom'] . ' ' : ''; ?> <?= isset($prosante['prenom']) ? $prosante['prenom'] : 'Prosanté'; ?></h5>
                                    <p class="mb-0 met-user-name-post"><b>Profession : </b><?= $prosante['profession']; ?> </p>                                          
                                </div>
                            </div>                                                
                        </div><!--end col-->
                        
                        <div class="col-lg-4 ms-auto align-self-center">
                            <ul class="list-unstyled personal-detail mb-0">
                                <li class=""><i class="las la-phone mr-2 text-secondary font-22 align-middle"></i> <b> Contact </b> : +225 <?= $prosante['contact'] ? : 'Prosanté'; ?></li>
                                <li class="mt-2"><i class="las la-envelope text-secondary font-22 align-middle mr-2"></i> <b> Email </b> : <?= session()->get('email'); ?></li>
                                <li class="mt-2"><i class="las fa-home text-secondary font-22 align-middle mr-2"></i> <b>Domicile </b> : <?= $prosante['domicile']; ?> </li>                                                   
                            </ul>
                            
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end f_profile-->                                                                                
            </div><!--end card-body-->   
        </div><!--end card-->
    </div><!--end col-->
</div><!--end row-->

          

            