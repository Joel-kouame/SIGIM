

<div class="left-sidebar">
    <!-- LOGO -->
    <div class="brand">
        <a href="index.php" class="logo">
            <span>
                <img src="<?= base_url('public/assets/images/sigim.png') ?>" alt="logo-small" class="logo-sm">
            </span>
            <span>
                <img src="<?= base_url('public/assets/images/logo.png') ?>" alt="logo-large" class="logo-lg logo-light">
                <img src="<?= base_url('public/assets/images/logo-dark.png') ?>" alt="logo-large" class="logo-lg logo-dark">
            </span>
        </a>
    </div>
    <div class="sidebar-user-pro media border-end">                    
        <div class="position-relative mx-auto">
            <img src="<?= base_url('public/assets/images/users/user-4.jpg') ?>" alt="user" class="rounded-circle thumb-md">
            <span class="online-icon position-absolute end-0"><i class="mdi mdi-record text-success"></i></span>
        </div>
        <div class="media-body ms-2 user-detail align-self-center">
            <h5 class="font-14 m-0 fw-bold">Mr. Michael Hill </h5>  
            <p class="opacity-50 mb-0">michael.hill@exemple.com</p>          
        </div>                    
    </div>
    <div class="border-end">
        <ul class="nav nav-tabs menu-tab nav-justified" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#Main" role="tab" aria-selected="true">M<span>ain</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#Extra" role="tab" aria-selected="false">E<span>xtra</span></a>
            </li>
        </ul>
    </div>
    <!-- Tab panes -->
    
    <!--end logo-->
    <div class="menu-content h-100" data-simplebar>
        <div class="menu-body navbar-vertical">
            <div class="collapse navbar-collapse tab-content" id="sidebarCollapse">
                <!-- Navigation -->
                <ul class="navbar-nav tab-pane active" id="Main" role="tabpanel">
                    <li class="menu-label mt-0 text-primary font-12 fw-semibold">M<span>ain</span><br><span class="font-10 text-secondary fw-normal">Unique Dashboard</span></li>                    
                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarAnalytics" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarAnalytics">
                            <i class="ti ti-settings menu-icon"></i>
                            <span>Paramètre</span>
                        </a>
                        <div class="collapse " id="sidebarAnalytics">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Dashboard</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a href="analytics-customers.php" class="nav-link ">Région</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a href="analytics-reports.php" class="nav-link ">Ville</a>
                                </li>
                                <li class="nav-item">
                                    <a href="analytics-reports.php" class="nav-link ">Commune</a>
                                </li>
                                <li class="nav-item">
                                    <a href="analytics-reports.php" class="nav-link ">Service Général</a>
                                </li>
                                <!--end nav-item-->
                            </ul><!--end nav-->
                        </div><!--end sidebarAnalytics-->
                    </li><!--end nav-item-->


                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarPatient" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarTables">
                            <i class="ti ti-table menu-icon"></i>
                            <span>Patients</span>
                        </a>
                        <div class="collapse " id="sidebarPatient">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('Prosante/register-prosante'); ?>">Ajouter Patient</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="tables-datatable.php">Liste Patient</a>
                                </li><!--end nav-item-->
                            </ul><!--end nav-->
                        </div><!--end sidebarTables-->
                    </li><!--end nav-item-->


                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarCrypto" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarCrypto">
                            <i class="ti ti-plus menu-icon"></i>
                            <span>Santé</span>
                        </a>
                        <div class="collapse " id="sidebarCrypto">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="crypto-index.php">Dashboard</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="crypto-exchange.php">Hôpital</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="crypto-wallet.php">Professionnel de santé</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="crypto-news.php">Patient</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="crypto-ico.php">Dossier médical</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="crypto-settings.php">Service</a>
                                </li><!--end nav-item-->
                            </ul><!--end nav-->
                        </div><!--end sidebarCrypto-->
                    </li><!--end nav-item-->

                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarProjects" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarProjects">
                            <i class="ti ti-brand-asana menu-icon"></i>
                            <span>Rendez-vous</span>
                        </a>
                        <div class="collapse " id="sidebarProjects">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="projects-index.php">Dashboard</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="projects-clients.php">Consultation</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="projects-team.php">Examen</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="projects-project.php">Ordonnance</a>
                                </li><!--end nav-item--> 
                            </ul><!--end nav-->
                        </div><!--end sidebarProjects-->
                    </li><!--end nav-item-->

                    

                    

                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarTables" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarTables">
                            <i class="ti ti-table menu-icon"></i>
                            <span>Tables</span>
                        </a>
                        <div class="collapse " id="sidebarTables">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="tables-basic.php">Basic</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="tables-datatable.php">Datatables</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="tables-editable.php">Editable</a>
                                </li><!--end nav-item-->
                            </ul><!--end nav-->
                        </div><!--end sidebarTables-->
                    </li><!--end nav-item-->

                    
                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarAuthentication" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarAuthentication">
                            <i class="ti ti-shield-lock menu-icon"></i>
                            <span>Authentication</span>
                        </a>
                        <div class="collapse " id="sidebarAuthentication">
                            <ul class="nav flex-column">
                               <li class="nav-item">
                                    <a class="nav-link" href="auth-login.php">Log in</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="auth-register.php">Register</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="auth-recover-pw.php">Re-Password</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="auth-lock-screen.php">Lock Screen</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="auth-404.php">Error 404</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="auth-500.php">Error 500</a>
                                </li><!--end nav-item-->
                            </ul><!--end nav-->
                        </div><!--end sidebarAuthentication-->
                    </li><!--end nav-item-->
                </ul>
                <ul class="navbar-nav tab-pane" id="Extra" role="tabpanel">
                    <li>
                        <div class="update-msg text-center position-relative">
                            <button type="button" class="btn-close position-absolute end-0 me-2" aria-label="Close"></button>
                            <img src="<?= base_url('public/assets/images/speaker-light.png') ?>" alt="" class="" height="110">
                            <h5 class="mt-0">Mannat Themes</h5>
                            <p class="mb-3">We Design and Develop Clean and High Quality Web Applications</p>
                            <a href="javascript: void(0);" class="btn btn-outline-warning btn-sm">Upgrade your plan</a>
                        </div>
                    </li>
                </ul><!--end navbar-nav--->
            </div><!--end sidebarCollapse-->
        </div>
    </div>    
</div>
<!-- end left-sidenav-->