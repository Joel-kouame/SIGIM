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
            <img src="<?= base_url($fablab['photo'] ?: 'upload/images.jpg'); ?>" alt="" class="rounded-circle thumb-md">
            <span class="online-icon position-absolute end-0"></i></span>
        </div>
        <div class="media-body ms-2 user-detail align-self-center">
            <h5 class="font-14 m-0 fw-bold">Admin FabLab</h5>
            <p class="opacity-50 mb-0"><?= session()->get('email'); ?></p>
        </div>
    </div>
    <!-- Tab panes -->

    <!--end logo-->
    <div class="menu-content h-100" data-simplebar>
        <div class="menu-body navbar-vertical">
            <div class="collapse navbar-collapse tab-content" id="sidebarCollapse">
                <?php //if (isset(session('admin')['id'])) { ?>
                    <ul class="navbar-nav tab-pane active" id="Main" role="tabpanel">
                        <li class="menu-label mt-0 text-primary font-12 fw-semibold">A<span>dmin Fablab</span><br><span class="font-10 text-secondary fw-normal">Administrateur FABLAB</span></li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/Fablab/dash'); ?>">
                                <i class="fas fa-th-large menu-icon"></i>
                                <span>Tableau de bord</span>
                            </a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/adminfablab/datatable'); ?>">
                                <i class="fas fa-file-alt menu-icon"></i>
                                <span>Liste des hôpitaux</span>
                            </a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/adminfablab/forms_hopital'); ?>">
                                <i class="fas fa-clinic-medical menu-icon"></i>
                                <span>Ajouter un Hôpital</span>
                            </a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/fablab/profile'); ?>">
                                <i class="fas fa-user menu-icon"></i>
                                <span>Profile</span>
                            </a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/Fablab/ajout_info/' . 1); ?>">
                                <i class="fas fa-sync menu-icon"></i>
                                <span>Informations</span>
                            </a>
                        </li><!--end nav-item-->
                    </ul>
                <?php //} ?>
            </div><!--end sidebarCollapse-->
        </div>
    </div>
</div>
<!-- end left-sidenav-->
