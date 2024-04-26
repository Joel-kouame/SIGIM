<div class="left-sidebar">
    <!-- LOGO -->
    <div class="brand">
        <a href="index.php" class="logo">
            <span>
                <img src="<?= base_url('public/assets/images/logo1.pn'); ?>" alt="logo-small" height="48px" width="auto" style="margin-top: 15px">
            </span>
            <span>
                <img src="<?= base_url('public/assets/images/logo4.png'); ?>" alt="logo-large" class="logo-lg">
            </span>
        </a>
    </div>
    <div class="sidebar-user-pro media border-end">                    
        <div class="position-relative mx-auto">
            <img src="<?= (isset($hopital['photo_hopt'])) ? base_url($hopital['photo_hopt']) : 'Hopital' ; ?>" alt="user" class="rounded-circle thumb-md">
            <span class="online-icon position-absolute end-0"></i></span>
        </div>
        <div class="media-body ms-2 user-detail align-self-center">
            <h5 class="font-14 m-0 fw-bold">Hôpital</h5>  
            <p class="opacity-50 mb-0"><?= isset($hopital['email_hopt']) ? $hopital['email_hopt'] : 'Hôpital'; ?></p>          
        </div>                    
    </div>
    <!-- Tab panes -->
    
    <!--end logo-->
    <div class="menu-content h-100" data-simplebar>
        <div class="menu-body navbar-vertical">
            <div class="collapse navbar-collapse tab-content" id="sidebarCollapse">
                <!-- Navigation -->
                <ul class="navbar-nav tab-pane active" id="Main" role="tabpanel">
                    <li class="menu-label mt-0 text-primary font-12 fw-semibold">A<span>dmin Hopitale</span><br><span class="font-10 text-secondary fw-normal">Administrateur de l'hopitale</span></li> 
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Hopital/dash');?>" role="button"
                            aria-expanded="false" aria-controls="sidebarProjects">
                            <i class="ti ti-brand-hipchat menu-icon"></i>
                            <span>Tableau de bord</span>
                        </a>
                    </li><!--end nav-item-->
                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarElements" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarElements">
                            <i class="ti ti-planet menu-icon"></i>
                        <span>Professionel de sante</span>
                        </a>
                        <div class="collapse " id="sidebarElements">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('/prosante/prosante_list'); ?>">Liste du personnel</a>
                                </li><!--end nav-item--> 
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('/Hopital/register'); ?>">Ajouter</a>
                                </li><!--end nav-item-->
                            </ul><!--end nav-->
                        </div><!--end sidebarElements-->
                    </li><!--end nav-item-->
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('adminhopital/rendez_vous_list');?>" role="button"
                            aria-expanded="false" aria-controls="sidebarProjects">
                            <i class="ti ti-brand-hipchat menu-icon"></i>
                            <span>liste des rendez-vous</span>
                        </a>
                    </li><!--end nav-item-->
                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarElements1" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarElements">
                            <i class="ti ti-planet menu-icon"></i>
                        <span>Services</span>
                        </a>
                        <div class="collapse " id="sidebarElements1">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('/services_list');?>">Liste des services</a>
                                </li><!--end nav-item--> 
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('/adminhopital/forms_services');?>">Ajouter un services</a>
                                </li><!--end nav-item-->
                            </ul><!--end nav-->
                        </div><!--end sidebarElements-->
                    </li><!--end nav-item-->
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/patient_liste');?>" role="button"
                            aria-expanded="false" aria-controls="sidebarPages">
                            <i class="ti ti-file-diff menu-icon"></i>
                            <span>Liste des patients</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/hopital/profile');?>" role="button"
                            aria-expanded="false" aria-controls="sidebarProjects">
                            <i class="ti ti-brand-hipchat menu-icon"></i>
                            <span>Profile</span>
                        </a>
                    </li><!--end nav-item-->
                </ul>
            </div><!--end sidebarCollapse-->
        </div>
    </div>    
</div>
<!-- end left-sidenav-->