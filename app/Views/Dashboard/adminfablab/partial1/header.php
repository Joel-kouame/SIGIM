<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="met-profile">
                    <div class="row">
                        <div class="col-lg-4 align-self-center mb-3 mb-lg-0">
                            <div class="met-profile-main">
                                <div class="met-profile-main-pic">
                                    <img src="<?= base_url($fablab['photo']) ? base_url($fablab['photo']) : 'Fablab'; ?>" alt="" width="110" height="110" class="rounded-circle">
                                </div>
                                <div class="met-profile_user-detail">
                                    <h6><?= isset($fablab['reference']) ? $fablab['reference'] : 'Fablab'; ?></h6>
                                    <h5 class="met-user-name"><?= $fablab['nom']; ?></h5>   
                                </div>
                            </div>                                                
                        </div><!--end col-->
                        <div class="col-lg-4 ms-auto align-self-center">
                            <ul class="list-unstyled personal-detail mb-0">
                                <li class=""><i class="las la-phone mr-2 text-secondary font-22 align-middle"></i> <b> Contact </b> : +225 <?= isset($fablab['contact']) ? $fablab['contact'] : 'Fablab'; ?></li>
                                <li class="mt-2"><i class="las la-envelope text-secondary font-22 align-middle mr-2"></i> <b> Email </b> : <?= isset($fablab['email']) ? $fablab['email'] : 'Fablab'; ?></li>
                                <li class="mt-2"><i class="las fa-home text-secondary font-22 align-middle mr-2"></i> <b> Localisation </b> : <?= isset($fablab['domicile']) ? $fablab['domicile'] : 'Fablab'; ?> </li>                                                   
                            </ul>
                        </div><!--end col-->
                        <div class="col-lg-4 align-self-center">
                            <div class="row">
                                <div class="col-auto text-end border-end">
                                    <button type="button" class="btn btn-soft-primary btn-icon-circle btn-icon-circle-sm mb-2">
                                        <i class="fab fa-facebook-f"></i>
                                    </button>
                                    <p class="mb-0 fw-semibold">Facebook</p>
                                    <h4 class="m-0 fw-bold"><span class="text-muted font-12 fw-normal"><?= isset($information['facebook']) ? $information['facebook'] : 'facebook'; ?></span></h4>
                                </div><!--end col-->
                                <div class="col-auto">
                                    <button type="button" class="btn btn-soft-info btn-icon-circle btn-icon-circle-sm mb-2">
                                        <i class="fab fa-whatsapp"></i>
                                    </button>
                                    <p class="mb-0 fw-semibold">Whatsapp</p>
                                    <h4 class="m-0 fw-bold"><span class="text-muted font-12 fw-normal"><?= isset($information['whatsapp']) ? $information['whatsapp'] : 'whatsapp'; ?></span></h4>
                                </div><!--end col-->
                            </div><!--end row-->                                               
                        </div>
                    </div><!--end row-->
                </div><!--end f_profile-->                                                                                
            </div><!--end card-body-->   
        </div><!--end card-->
    </div><!--end col-->
</div><!--end row-->