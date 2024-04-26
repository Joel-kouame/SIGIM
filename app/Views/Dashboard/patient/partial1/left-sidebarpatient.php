<div class="left-sidebar">
    <!-- LOGO -->
    <div class="brand">
        <a href="index.php" class="logo">
            <span>
                <img src="<?= base_url(); ?>" alt="logo-small" height="48px" width="auto" style="margin-top: 15px">
            </span>
            <span>
                <img src="<?= base_url(''); ?>" alt="logo-large" class="logo-lg">
            </span>
        </a>
    </div>
    <div class="sidebar-user-pro media border-end">
        <div class="position-relative mx-auto">
            <img src="<?= base_url($patient['photo']);?>" alt="user" class="rounded-circle thumb-md">
            <span class="online-icon position-absolute end-0"></i></span>
        </div>
        <div class="media-body ms-2 user-detail align-self-center">
            <h5 class="font-14 m-0 fw-bold"><?= $patient['nom']; ?></h5>
            <p class="opacity-50 mb-0"><?= session()->get('email'); ?></p>
        </div>
    </div>
    <!-- Tab panes -->

    <!--end logo-->
    <div class="menu-content h-100" data-simplebar>
        <div class="menu-body navbar-vertical">
            <div class="collapse navbar-collapse tab-content" id="sidebarCollapse">

                <?php //if (isset(session('patient')['id'])) { ?>
                    <!-- Navigation -->
                    <ul class="navbar-nav tab-pane active" id="Main" role="tabpanel">
                        <li class="menu-label mt-0 text-primary font-12 fw-semibold">U<span>tilisateur</span><br><span class="font-10 text-secondary fw-normal">espace Unique</span></li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/dashboardPatient'); ?>" role="button" aria-expanded="false" aria-controls="sidebarProjects">
                                <i class="fas fa-comment-alt menu-icon"></i>
                                <span>Tableau de bord</span>
                            </a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('Patient/carnet_patient') ;?>" role="button" aria-expanded="false" aria-controls="sidebarAnalytics">
                                <i class="fas fa-folder-open menu-icon"></i>
                                <span>Carnet Numerique</span>
                            </a>
                        </li><!--end nav-item-->
    
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarCrypto" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCrypto">
                                <i class="fas fa-calendar-check menu-icon"></i>
                                <span>Rendez-vous</span>
                            </a>
                            <div class="collapse " id="sidebarCrypto">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= base_url('/patient/afficher_rendez_vous'); ?>">Mes rendez-vous</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= base_url('/patient/create_rendez_vous'); ?>">Prendre un rendez-vous</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end sidebarCrypto-->
                        </li><!--end nav-item-->
    
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/patient/chat'); ?>" role="button" aria-expanded="false" aria-controls="sidebarProjects">
                                <i class="fas fa-comment-alt menu-icon"></i>
                                <span>Messagerie</span>
                            </a>
                        </li><!--end nav-item-->
                        <li class="nav-item" hidden><!-- boutoon alerte -->
                            <a class="nav-link" href="<?= base_url('/patient/alerte'); ?>" role="button" aria-expanded="false" aria-controls="sidebarProjects">
                                <i class="fas fa-exclamation-circle menu-icon"></i>
                                <span>Boutton Alert</span>
                            </a>
                        </li><!-- boutoon alerte -->
    
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/patient/profile-patient'); ?>" role="button" aria-expanded="false" aria-controls="sidebarAnalytics">
                                <i class="fas fa-user-alt menu-icon"></i>
                                <span>Profil</span>
                            </a>
                        </li><!--end nav-item-->
                <?php //} ?>

                    

            </div><!--end sidebarCollapse-->
        </div>
    </div>
</div>
<!-- end left-sidenav-->