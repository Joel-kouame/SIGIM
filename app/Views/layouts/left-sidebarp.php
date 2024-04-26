

<div class="left-sidebar">
    <!-- LOGO -->
    <div class="brand">
        <a href="<?= base_url(); ?>" class="logo">
            <span>
                <img src="<?= base_url('assets/images/sigim.png') ; ?>" alt="logo-small" class="logo-sm">
            </span>
            <span>
                <!-- <img src="../assets/images/sigim.png" alt="logo-large" class="logo-lg logo-light">
                <img src="../assets/images/sigim.png" alt="logo-large" class="logo-lg logo-dark"> -->
            </span>
        </a>
    </div>
    <div class="sidebar-user-pro media border-end">                    
        <div class="position-relative mx-auto">
            <img src="<?php if(isset($user['photo'])){ echo base_url($user['photo']) ; } ?>" alt="user" class="rounded-circle thumb-md">
            <span class="online-icon position-absolute end-0"><i class="mdi mdi-record text-success"></i></span>
        </div>
        <div class="media-body ms-2 user-detail align-self-center">
            <h5 class="font-14 m-0 fw-bold">M. <?= isset($user['nom']) ? $user['nom'] : 'Admin'; ?> </h5>  
            <p class="opacity-50 mb-0"><?= isset($user['nom']) ? $user['email'] : 'Admin'; ?></p>          
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
                    <li class="menu-label mt-0 text-primary font-12 fw-semibold"><span class="font-10 text-secondary fw-normal">Dashboard</span></li>                    
                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarCarnet" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarCarnet">
                            <i class="ti ti-settings menu-icon"></i>
                            <span>Carnet Numérique</span>
                        </a>
                        <div class="collapse " id="sidebarCarnet">
                            <ul class="nav flex-column">
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="index.php">Dashboard</a>
                                </li> -->
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a href="analytics-customers.php" class="nav-link ">Consultation</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a href="analytics-reports.php" class="nav-link ">Ordonnance</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a href="analytics-reports.php" class="nav-link ">Commune</a>
                                </li>
                                <li class="nav-item">
                                    <a href="analytics-reports.php" class="nav-link ">Service Général</a>
                                </li> -->
                                <!--end nav-item-->
                            </ul><!--end nav-->
                        </div><!--end sidebarAnalytics-->
                    </li><!--end nav-item-->

                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarPrise" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarPrise">
                            <i class="fas fa-plus-circle menu-icon"></i>
                            <span>Prise de rendez-vous</span>
                        </a>
                        <div class="collapse " id="sidebarPrise">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('/Patient/calender'); ?>">Nouveau rendez-vous</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="crypto-exchange.php">Liste des rendez-vous</a>
                                </li><!--end nav-item-->
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="crypto-wallet.php">Professionnel de santé</a>
                                </li> -->
                                <!--end nav-item-->
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="crypto-news.php">Patient</a>
                                </li> -->
                                <!--end nav-item-->
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="crypto-ico.php">Dossier médical</a>
                                </li> -->
                                <!--end nav-item-->
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="crypto-settings.php">Service</a>
                                </li> -->
                                <!--end nav-item-->
                            </ul><!--end nav-->
                        </div><!--end sidebarCrypto-->
                    </li><!--end nav-item-->

                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarProfile" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarProfile">
                            <i class="ti ti-user menu-icon"></i>
                            <span>Mon profile</span>
                        </a>
                        <div class="collapse " id="sidebarProfile">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="projects-index.php">Voir mon profile</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="projects-clients.php">Modifier mon prfile</a>
                                </li>
                                <!--end nav-item-->
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="projects-team.php">Examen</a>
                                </li> -->
                                <!--end nav-item-->
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="projects-project.php">Ordonnance</a>
                                </li> -->
                                <!--end nav-item--> 
                            </ul><!--end nav-->
                        </div><!--end sidebarProjects-->
                    </li><!--end nav-item-->

                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarConsultation" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarConsultation">
                            <i class="ti ti-table menu-icon"></i>
                            <span>Consultation en ligne</span>
                        </a>
                        <div class="collapse " id="sidebarConsultation">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="tables-basic.php">Faire une consultation</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="tables-datatable.php">Historique des consultations</a>
                                </li><!--end nav-item-->
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="tables-editable.php">Editable</a>
                                </li> -->
                                <!--end nav-item-->
                            </ul><!--end nav-->
                        </div><!--end sidebarTables-->
                    </li><!--end nav-item-->

                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarExamens" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarExamens">
                            <i class="fas fa-folder-open menu-icon"></i>
                            <span>Examens médicaux</span>
                        </a>
                        <div class="collapse " id="sidebarExamens">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('/Patient/examen'); ?>">Examens</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('/Patient/resultat'); ?>">Résultats</a>
                                </li><!--end nav-item-->
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="tables-editable.php">Editable</a>
                                </li> -->
                                <!--end nav-item-->
                            </ul><!--end nav-->
                        </div><!--end sidebarTables-->
                    </li><!--end nav-item-->

                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarChat" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarChat">
                            <i class="fas fa-mail-bulk menu-icon"></i>
                            <span>Chat en ligne</span>
                        </a>
                        <div class="collapse " id="sidebarChat">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Boîte de réception</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('/Patient/chat'); ?>">Chat</a>
                                </li><!--end nav-item-->
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="tables-editable.php">Editable</a>
                                </li> -->
                                <!--end nav-item-->
                            </ul><!--end nav-->
                        </div><!--end sidebarTables-->
                    </li><!--end nav-item-->


                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarMessagerie" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarMessagerie">
                            <i class="ti ti-mail menu-icon"></i>
                            <span>Messagerie</span>
                        </a>
                        <div class="collapse " id="sidebarMessagerie">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="tables-basic.php">Boîte de réception</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('/Patient/chat'); ?>">Chat</a>
                                </li><!--end nav-item-->
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="tables-editable.php">Editable</a>
                                </li> -->
                                <!--end nav-item-->
                            </ul><!--end nav-->
                        </div><!--end sidebarTables-->
                    </li><!--end nav-item-->

                </ul>
                <ul class="navbar-nav tab-pane" id="Extra" role="tabpanel">
                    <li>
                        <div class="update-msg text-center position-relative">
                            <button type="button" class="btn-close position-absolute end-0 me-2" aria-label="Close"></button>
                            <img src="<?= base_url('assets/images/speaker-light.png') ; ?>" alt="" class="" height="110">
                            <h5 class="mt-0">Mannat Themes</h5>
                            <p class="mb-3">We Design and Develop Clean and High Quality Web Applications</p>
                            <a href="javascript: void(0);" class="btn btn-outline-warning btn-sm">Upgrade your plan</a>
                        </div>
                    </li>
                </ul>
                <!--end navbar-nav--->
            </div><!--end sidebarCollapse-->
        </div>
    </div>    
</div>
<!-- end left-sidenav-->