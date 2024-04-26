<div class="left-sidebar">
    <!-- LOGO -->
    <div class="brand"> 
        <a href="<?= base_url('index.php'); ?>" class="logo"> 
            <span>
                <img src="<?= base_url(''); ?>" alt="logo-small" height="48px" width="auto" style="margin-top: 15px">
            </span>
            <span>
                <img src="<?= base_url(''); ?>" alt="logo-large" class="logo-lg">
            </span>
        </a>
    </div>

    <div class="sidebar-user-pro media border-end">
        <div class="position-relative mx-auto">
            <img src="<?= base_url($prosante['photo'] ?: 'upload/images.jpg'); ?>" alt="user" class="rounded-circle thumb-md">
            <span class="online-icon position-absolute end-0"></i></span>
        </div>
        <div class="media-body ms-2 user-detail align-self-center">
            <h5 class="font-14 m-0 fw-bold"><?= $prosante['nom']; ?></h5>
            <p class="opacity-50 mb-0"><?= session()->get('email'); ?></p>
        </div>
    </div>
    <!-- Tab panes -->


    <!--end logo-->
    <div class="menu-content h-100" data-simplebar>
        <div class="menu-body navbar-vertical">
            <div class="collapse navbar-collapse tab-content" id="sidebarCollapse">

                
                <?php //if (isset(session('Prosante')['id'])) { ?>
                    <ul class="navbar-nav tab-pane active" id="Main" role="tabpanel">
                        <li class="menu-label mt-0 text-primary font-12 fw-semibold">P<span>rofessionel de sante</span><br><span class="font-10 text-secondary fw-normal">Personel de l'hopitale</span></li></li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('dashboardProsante'); ?>" role="button" aria-expanded="false" aria-controls="sidebarPages">
                                <i class="fab fa-flipboard menu-icon"></i>
                                <span>Tableau de bord</span>
                            </a>
                        </li><!--end nav-item-->
                        
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('prosante/alertep'); ?>" role="button" aria-expanded="false" aria-controls="sidebarPages">
                                <i class="fas fa-exclamation-circle menu-icon"></i>
                                <span>Alerts</span>
                            </a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/prosante/chat'); ?>" role="button" aria-expanded="false" aria-controls="sidebarProjects">
                                <i class="fas fa-comment-dots menu-icon"></i>
                                <span>Messagerie</span>
                            </a>
                        </li><!--end nav-item-->

                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('prosante/profile'); ?>" role="button" aria-expanded="false" aria-controls="sidebarAnalytics">
                                <i class=" 	fas fa-user-circle menu-icon"></i>
                                <span>Profile</span>
                            </a>
                        </li><!--end nav-item-->
                        <li class="nav-item" hidden>
                            <a class="nav-link" href="<?= base_url('prosante/identification_patient'); ?>" role="button" aria-expanded="false" aria-controls="sidebarAnalytics">
                                <i class="ti ti-stack menu-icon"></i>
                                <span>Identification</span>
                            </a>
                        </li><!--end nav-item-->
                    </ul>
                <?php //} ?>

            </div><!--end sidebarCollapse-->
        </div>
    </div>
</div>
<!-- end left-sidenav-->