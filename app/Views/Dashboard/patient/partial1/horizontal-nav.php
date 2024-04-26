
<!-- Top Bar Start -->
<div class="topbar">  
    <!-- LOGO -->
    <div class="brand">
        <a href="index.php" class="logo">
            <span>
                <img src="<?= base_url(''); ?>assets/images/logo1.png" alt="logo-small" class="logo-sm">
            </span>
            <span>
                <img src="<?= base_url(''); ?>assets/images/logo1.png" alt="logo-large" class="logo-lg logo-light">
                <img src="<?= base_url(''); ?>assets/images/logo4.png" alt="logo-large" class="logo-lg logo-dark">
            </span>
        </a>
    </div>
    <!--end logo-->  
    <!-- Navbar -->
    <nav class="navbar-custom">    
        <ul class="list-unstyled topbar-nav float-end mb-0"> 
            <li class="dropdown hide-phone">
                <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#" role="button"
                    aria-haspopup="false" aria-expanded="false">
                    <i class="ti ti-search"></i>
                </a>                
                <div class="dropdown-menu dropdown-menu-end dropdown-lg p-0">
                    <!-- Top Search Bar -->
                    <div class="app-search-topbar">
                        <form action="#" method="get">
                            <input type="search" name="search" class="from-control top-search mb-0" placeholder="Type text...">
                            <button type="submit"><i class="ti ti-search"></i></button>
                        </form>
                    </div>
                </div>
            </li>                      

            <li class="notification-list">
                <a class="nav-link arrow-none nav-icon offcanvas-btn" href="#" data-bs-toggle="offcanvas" data-bs-target="#Appearance" role="button" aria-controls="Rightbar">
                    <i class="ti ti-settings ti-spin"></i>
                </a>
            </li>                       
            
            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#" role="button"
                    aria-haspopup="false" aria-expanded="false">
                    <i class="ti ti-mail"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-lg pt-0">
                
                    <h6 class="dropdown-item-text font-15 m-0 py-3 border-bottom d-flex justify-content-between align-items-center">
                        Emails <span class="badge bg-soft-primary badge-pill">3</span>
                    </h6> 
                    <div class="notification-menu" data-simplebar>
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-end text-muted ps-2">2 min ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <img src="<?= base_url(''); ?>assets/images/users/user-1.jpg" alt="" class="thumb-sm rounded-circle">
                                </div>
                                <div class="media-body align-self-center ms-2 text-truncate">
                                    <h6 class="my-0 fw-normal text-dark">Your order is placed</h6>
                                    <small class="text-muted mb-0">Dummy text of the printing and industry.</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-end text-muted ps-2">10 min ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <img src="assets/images/users/user-4.jpg" alt="" class="thumb-sm rounded-circle">
                                </div>
                                <div class="media-body align-self-center ms-2 text-truncate">
                                    <h6 class="my-0 fw-normal text-dark">Meeting with designers</h6>
                                    <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-end text-muted ps-2">40 min ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <img src="assets/images/users/user-2.jpg" alt="" class="thumb-sm rounded-circle">
                                </div>
                                <div class="media-body align-self-center ms-2 text-truncate">
                                    <h6 class="my-0 fw-normal text-dark">UX 3 Task complete.</h6>
                                    <small class="text-muted mb-0">Dummy text of the printing.</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-end text-muted ps-2">1 hr ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <img src="<?= base_url(''); ?>assets/images/users/user-5.jpg" alt="" class="thumb-sm rounded-circle">
                                </div>
                                <div class="media-body align-self-center ms-2 text-truncate">
                                    <h6 class="my-0 fw-normal text-dark">Your order is placed</h6>
                                    <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-end text-muted ps-2">2 hrs ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <img src="assets/images/users/user-3.jpg" alt="" class="thumb-sm rounded-circle">
                                </div>
                                <div class="media-body align-self-center ms-2 text-truncate">
                                    <h6 class="my-0 fw-normal text-dark">Payment Successfull</h6>
                                    <small class="text-muted mb-0">Dummy text of the printing.</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                    </div>
                    <!-- All-->
                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                        View all <i class="fi-arrow-right"></i>
                    </a>
                </div>
            </li>

            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#" role="button"
                    aria-haspopup="false" aria-expanded="false">
                    <i class="ti ti-bell"></i>
                    <span class="alert-badge"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-lg pt-0">
                
                    <h6 class="dropdown-item-text font-15 m-0 py-3 border-bottom d-flex justify-content-between align-items-center">
                        Notifications <span class="badge bg-soft-primary badge-pill">2</span>
                    </h6> 
                    <div class="notification-menu" data-simplebar>
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-end text-muted ps-2">2 min ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <i class="ti ti-chart-arcs"></i>
                                </div>
                                <div class="media-body align-self-center ms-2 text-truncate">
                                    <h6 class="my-0 fw-normal text-dark">Your order is placed</h6>
                                    <small class="text-muted mb-0">Dummy text of the printing and industry.</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-end text-muted ps-2">10 min ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <i class="ti ti-device-computer-camera"></i>
                                </div>
                                <div class="media-body align-self-center ms-2 text-truncate">
                                    <h6 class="my-0 fw-normal text-dark">Meeting with designers</h6>
                                    <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-end text-muted ps-2">40 min ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">                                                    
                                    <i class="ti ti-diamond"></i>
                                </div>
                                <div class="media-body align-self-center ms-2 text-truncate">
                                    <h6 class="my-0 fw-normal text-dark">UX 3 Task complete.</h6>
                                    <small class="text-muted mb-0">Dummy text of the printing.</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-end text-muted ps-2">1 hr ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <i class="ti ti-drone"></i>
                                </div>
                                <div class="media-body align-self-center ms-2 text-truncate">
                                    <h6 class="my-0 fw-normal text-dark">Your order is placed</h6>
                                    <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-end text-muted ps-2">2 hrs ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <i class="ti ti-users"></i>
                                </div>
                                <div class="media-body align-self-center ms-2 text-truncate">
                                    <h6 class="my-0 fw-normal text-dark">Payment Successfull</h6>
                                    <small class="text-muted mb-0">Dummy text of the printing.</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                    </div>
                    <!-- All-->
                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                        View all <i class="fi-arrow-right"></i>
                    </a>
                </div>
            </li>

            <li class="dropdown">
                <a class="nav-link dropdown-toggle nav-user" data-bs-toggle="dropdown" href="#" role="button"
                    aria-haspopup="false" aria-expanded="false">
                    <div class="d-flex align-items-center">
                        <img src="assets/images/users/user-4.jpg" alt="profile-user" class="rounded-circle me-0 me-md-2 thumb-sm" />
                        <div class="user-name">
                            <small class="d-none d-lg-block font-11">Users</small>
                            <span class="d-none d-lg-block fw-semibold font-12">Gnin Kossia <i
                                    class="mdi mdi-chevron-down"></i></span>
                        </div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="#"><i class="ti ti-user font-16 me-1 align-text-bottom"></i> Profile</a>
                    <a class="dropdown-item" href="#"><i class="ti ti-settings font-16 me-1 align-text-bottom"></i> Settings</a>
                    <div class="dropdown-divider mb-0"></div>
                    <a class="dropdown-item" href="#"><i class="ti ti-power font-16 me-1 align-text-bottom"></i> Logout</a>
                </div>
            </li><!--end topbar-profile-->
            <li class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle nav-link" id="mobileToggle"  onclick="toggleMenu()" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a><!-- End mobile menu toggle-->
            </li> <!--end menu item--> 
        </ul><!--end topbar-nav-->

        <div class="navbar-custom-menu">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li class="nav-item dropdown parent-menu-item">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDashboards" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                            <span><i class="ti ti-smart-home menu-icon"></i>Tableau de bord</span>
                        </a>
                        <ul class="dropdown-menu animate slideIn" aria-labelledby="navbarDashboards"> 
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item  dropdown-toggle" data-bs-toggle="dropdown" href="#" id="analyticsDashboards" aria-labelledby="navbarDashboards">
                                    UTILISATEUR
                                </a>
                                <ul class="dropdown-menu animate slideIn">
                                    <li>
                                        <a href="<?= base_url(''); ?>index.php" class="dropdown-item " aria-labelledby="analyticsDashboards">Carnet Numérique</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url(''); ?>analytics-customers.php" class="dropdown-item " aria-labelledby="analyticsDashboards">Customers</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url(''); ?>analytics-reports.php" class="dropdown-item " aria-labelledby="analyticsDashboards">Reports</a>
                                    </li>
                                </ul>
                            </li> 
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item  dropdown-toggle" data-bs-toggle="dropdown" href="#" id="cryptoDashboards" aria-labelledby="navbarDashboards">
                                    Crypto
                                </a>
                                <ul class="dropdown-menu animate slideIn">
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>crypto-index.php" aria-labelledby="cryptoDashboards">Dashboard</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>crypto-exchange.php" aria-labelledby="cryptoDashboards">Exchange</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>crypto-wallet.php" aria-labelledby="cryptoDashboards">Wallet</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>crypto-news.php" aria-labelledby="cryptoDashboards">Crypto News</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>crypto-ico.php" aria-labelledby="cryptoDashboards">ICO List</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>crypto-settings.php" aria-labelledby="cryptoDashboards">Settings</a>
                                    </li><!--end /li-->
                                </ul>
                            </li> 
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item  dropdown-toggle" data-bs-toggle="dropdown" href="#" id="projectsDashboards" aria-labelledby="navbarDashboards">
                                    Projects
                                </a>
                                <ul class="dropdown-menu animate slideIn">
                                    <li>
                                        <a href="<?= base_url(''); ?>horizontal-index.php" class="dropdown-item " aria-labelledby="projectsDashboards">Dashboard</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>projects-clients.php" aria-labelledby="projectsDashboards">Clients</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>projects-team.php" aria-labelledby="projectsDashboards">Team</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>projects-project.php" aria-labelledby="projectsDashboards">Project</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>projects-task.php" aria-labelledby="projectsDashboards">Task</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>projects-kanban-board.php" aria-labelledby="projectsDashboards">Kanban Board</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>projects-chat.php" aria-labelledby="projectsDashboards">Chat</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>projects-users.php" aria-labelledby="projectsDashboards">Users</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>projects-create.php" aria-labelledby="projectsDashboards">Project Create</a>
                                    </li><!--end /li--> 
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item  dropdown-toggle" data-bs-toggle="dropdown" href="#" id="ecommerceDashboards" aria-labelledby="navbarDashboards">
                                    Ecommerce
                                </a>
                                <ul class="dropdown-menu animate slideIn">
                                    <li>
                                        <a href="<?= base_url(''); ?>ecommerce-index.php" class="dropdown-item "  aria-labelledby="ecommerceDashboards">Dashboard</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>ecommerce-products.php" aria-labelledby="ecommerceDashboards">Products</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>ecommerce-product-list.php" aria-labelledby="ecommerceDashboards">Product List</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>ecommerce-product-detail.php" aria-labelledby="ecommerceDashboards">Product Detail</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>ecommerce-cart.php" aria-labelledby="ecommerceDashboards">Cart</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>ecommerce-checkout.php" aria-labelledby="ecommerceDashboards">Checkout</a>
                                    </li><!--end /li-->
                                </ul>
                            </li>
                        </ul>
                    </li><!--end nav-item-->

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarApps" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span><i class="ti ti-apps menu-icon"></i>Apps</span>
                        </a>
                        <ul class="dropdown-menu animate slideIn" aria-labelledby="navbarApps"> 
                            
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item  dropdown-toggle" data-bs-toggle="dropdown" href="#" id="EmailsApps" aria-labelledby="navbarApps">
                                    Emails
                                </a>
                                <ul class="dropdown-menu animate slideIn">
                                    <li>
                                        <a href="<?= base_url(''); ?>apps-email-inbox.php" class="dropdown-item" aria-labelledby="EmailsApps">Inbox</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url(''); ?>apps-email-read.php" class="dropdown-item" aria-labelledby="EmailsApps">Read Email</a>
                                    </li>
                                </ul>
                            </li>                       
                            <li>
                                <a href="<?= base_url(''); ?>apps-chat.php" class="dropdown-item" aria-labelledby="navbarApps">
                                    Chat
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url(''); ?>apps-contact-list.php" class="dropdown-item" aria-labelledby="navbarApps">
                                    Contact List
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url(''); ?>apps-calendar.php" class="dropdown-item" aria-labelledby="navbarApps">
                                    Calendar
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url(''); ?>apps-invoice.php" class="dropdown-item" aria-labelledby="navbarApps">
                                    Invoice
                                </a>
                            </li>                    
                        </ul><!--end submenu-->
                    </li><!--end nav-item--> 
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarUI_Kit" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span><i class="ti ti-planet menu-icon"></i>UI Kit</span>
                        </a>
                        <ul class="dropdown-menu animate slideIn" aria-labelledby="navbarUI_Kit">                                    
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item  dropdown-toggle" data-bs-toggle="dropdown" href="#" id="UiKit" aria-labelledby="navbarUI_Kit"></a>
                                    UI Elements
                                </a>
                                <ul class="dropdown-menu animate slideIn">
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>ui-alerts.php" aria-labelledby="UiKit">Alerts</a>
                                    </li><!--end /li--> 
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>ui-avatar.php" aria-labelledby="UiKit">Avatar</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>ui-buttons.php" aria-labelledby="UiKit">Buttons</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>ui-badges.php" aria-labelledby="UiKit">Badges</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>ui-cards.php" aria-labelledby="UiKit">Cards</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>ui-carousels.php" aria-labelledby="UiKit">Carousels</a>
                                    </li><!--end /li-->                                
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>ui-dropdowns.php" aria-labelledby="UiKit">Dropdowns</a>
                                    </li><!--end /li-->                                   
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>ui-grids.php" aria-labelledby="UiKit">Grids</a>
                                    </li><!--end /li-->                                
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>ui-images.php" aria-labelledby="UiKit">Images</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>ui-list.php" aria-labelledby="UiKit">List</a>
                                    </li><!--end /li-->                                   
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>ui-modals.php" aria-labelledby="UiKit">Modals</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>ui-navs.php" aria-labelledby="UiKit">Navs</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>ui-navbar.php" aria-labelledby="UiKit">Navbar</a>
                                    </li><!--end /li--> 
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>ui-paginations.php" aria-labelledby="UiKit">Paginations</a>
                                    </li><!--end /li-->   
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>ui-popover-tooltips.php" aria-labelledby="UiKit">Popover & Tooltips</a>
                                    </li><!--end /li-->                                
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>ui-progress.php" aria-labelledby="UiKit">Progress</a>
                                    </li><!--end /li-->                                
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>ui-spinners.php" aria-labelledby="UiKit">Spinners</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>ui-tabs-accordions.php" aria-labelledby="UiKit">Tabs & Accordions</a>
                                    </li><!--end /li-->                               
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>ui-typography.php" aria-labelledby="UiKit">Typography</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>ui-videos.php" aria-labelledby="UiKit">Videos</a>
                                    </li><!--end /li-->                                                     
                                </ul>                                      
                            </li><!--end nav-item-->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item  dropdown-toggle" data-bs-toggle="dropdown" href="#" id="AdvancedUi" aria-labelledby="navbarUI_Kit">
                                    Advanced UI
                                </a>
                                <ul class="dropdown-menu animate slideIn">
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>advanced-animation.php" aria-labelledby="AdvancedUi">Animation</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>advanced-clipboard.php" aria-labelledby="AdvancedUi">Clip Board</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>advanced-dragula.php" aria-labelledby="AdvancedUi">Dragula</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>advanced-files.php" aria-labelledby="AdvancedUi">File Manager</a>
                                    </li><!--end /li--> 
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>advanced-highlight.php" aria-labelledby="AdvancedUi">Highlight</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>advanced-rangeslider.php" aria-labelledby="AdvancedUi">Range Slider</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>advanced-ratings.php" aria-labelledby="AdvancedUi">Ratings</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>advanced-ribbons.php" aria-labelledby="AdvancedUi">Ribbons</a>
                                    </li><!--end /li-->                                  
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>advanced-sweetalerts.php" aria-labelledby="AdvancedUi">Sweet Alerts</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>advanced-toasts.php" aria-labelledby="AdvancedUi">Toasts</a>
                                    </li><!--end /li-->
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item  dropdown-toggle" data-bs-toggle="dropdown" href="#"  id="UiForms" aria-labelledby="navbarUI_Kit">
                                    Forms
                                </a>
                                <ul class="dropdown-menu animate slideIn">
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>forms-elements.php" aria-labelledby="UiForms">Basic Elements</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>forms-advanced.php" aria-labelledby="UiForms">Advance Elements</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>forms-validation.php" aria-labelledby="UiForms">Validation</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>forms-wizard.php" aria-labelledby="UiForms">Wizard</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>forms-editors.php" aria-labelledby="UiForms">Editors</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>forms-uploads.php" aria-labelledby="UiForms">File Upload</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>forms-img-crop.php" aria-labelledby="UiForms">Image Crop</a>
                                    </li><!--end /li--> 
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item  dropdown-toggle" data-bs-toggle="dropdown" href="#" id="UiCharts" aria-labelledby="navbarUI_Kit">
                                    Charts
                                </a>
                                <ul class="dropdown-menu animate slideIn">
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>charts-apex.php" aria-labelledby="UiCharts">Apex</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>charts-justgage.php" aria-labelledby="UiCharts">JustGage</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>charts-chartjs.php" aria-labelledby="UiCharts">Chartjs</a>
                                    </li><!--end /li--> 
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>charts-toast-ui.php" aria-labelledby="UiCharts">Toast</a>
                                    </li><!--end /li-->
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item  dropdown-toggle" data-bs-toggle="dropdown" href="#" id="UiTables" aria-labelledby="navbarUI_Kit">
                                    Tables
                                </a>
                                <ul class="dropdown-menu animate slideIn">
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>tables-basic.php" aria-labelledby="UiTables">Basic</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>tables-datatable.php" aria-labelledby="UiTables">Datatables</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>tables-editable.php" aria-labelledby="UiTables">Editable</a>
                                    </li><!--end /li-->
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item  dropdown-toggle" data-bs-toggle="dropdown" href="#" id="UiIcons" aria-labelledby="navbarUI_Kit">
                                    Icons
                                </a>
                                <ul class="dropdown-menu animate slideIn">
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>icons-materialdesign.php" aria-labelledby="UiIcons">Material Design</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>icons-fontawesome.php" aria-labelledby="UiIcons">Font awesome</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>icons-tabler.php" aria-labelledby="UiIcons">Tabler</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>icons-feather.php" aria-labelledby="UiIcons">Feather</a>
                                    </li><!--end /li-->
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item  dropdown-toggle" data-bs-toggle="dropdown" href="#" id="UiMaps" aria-labelledby="navbarUI_Kit">
                                    Maps
                                </a>
                                <ul class="dropdown-menu animate slideIn">
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>maps-google.php" aria-labelledby="UiMaps">Google Maps</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>maps-leaflet.php" aria-labelledby="UiMaps">Leaflet Maps</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>maps-vector.php" aria-labelledby="UiMaps">Vector Maps</a>
                                    </li><!--end /li-->  
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item  dropdown-toggle" data-bs-toggle="dropdown" href="#" id="Ui_Email" aria-labelledby="navbarUI_Kit">
                                    Email Templates
                                </a>
                                <ul class="dropdown-menu animate slideIn">
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>email-templates-alert.php" aria-labelledby="Ui_Email">Alert Email</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>email-templates-basic.php" aria-labelledby="Ui_Email">Basic Action Email</a>
                                    </li><!--end /li-->                                    
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url(''); ?>email-templates-billing.php" aria-labelledby="Ui_Email">Billing Email</a>
                                    </li><!--end /li-->
                                </ul>
                            </li><!--end nav-item-->                     
                        </ul><!--end submenu-->
                    </li><!--end nav-item-->

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarPages" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span><i class="ti ti-file-diff menu-icon"></i>Pages</span>
                        </a>
                        <ul class="dropdown-menu  animate slideIn" aria-labelledby="navbarPages">
                            <li>
                                <a class="dropdown-item" href="<?= base_url(''); ?>pages-profile.php" aria-labelledby="navbarPages">Profile</a>
                            </li><!--end /li-->
                            <li>
                                <a class="dropdown-item" href="<?= base_url(''); ?>pages-tour.php" aria-labelledby="navbarPages">Tour</a>
                            </li><!--end /li-->
                            <li>
                                <a class="dropdown-item" href="<?= base_url(''); ?>pages-timeline.php" aria-labelledby="navbarPages">Timeline</a>
                            </li><!--end /li-->
                            <li>
                                <a class="dropdown-item" href="<?= base_url(''); ?>pages-treeview.php" aria-labelledby="navbarPages">Treeview</a>
                            </li><!--end /li-->
                            <li>
                                <a class="dropdown-item" href="<?= base_url(''); ?>horizontal-starter.php" aria-labelledby="navbarPages">Starter Page</a>
                            </li><!--end /li-->
                            <li>
                                <a class="dropdown-item" href="<?= base_url(''); ?>pages-pricing.php" aria-labelledby="navbarPages">Pricing</a>
                            </li><!--end /li-->
                            <li>
                                <a class="dropdown-item" href="<?= base_url(''); ?>pages-blogs.php" aria-labelledby="navbarPages">Blogs</a>
                            </li><!--end /li-->
                            <li>
                                <a class="dropdown-item" href="<?= base_url(''); ?>pages-faq.php" aria-labelledby="navbarPages">FAQs</a>
                            </li><!--end /li-->
                            <li>
                                <a class="dropdown-item" href="<?= base_url(''); ?>pages-gallery.php" aria-labelledby="navbarPages">Gallery</a>
                            </li><!--end /li-->                                            
                        </ul>
                    </li><!--end nav-item-->

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbar_auth" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span><i class="ti ti-shield-lock menu-icon"></i>Authentication</span>
                        </a>
                        <ul class="dropdown-menu  animate slideIn" aria-labelledby="navbar_auth">
                            <li>
                                <a class="dropdown-item" href="<?= base_url(''); ?>auth-login.php">Log in</a>
                            </li><!--end /li-->
                            <li>
                                <a class="dropdown-item" href="<?= base_url(''); ?>auth-register.php">Register</a>
                            </li><!--end /li-->
                            <li>
                                <a class="dropdown-item" href="<?= base_url(''); ?>auth-recover-pw.php">Re-Password</a>
                            </li><!--end /li-->
                            <li>
                                <a class="dropdown-item" href="<?= base_url(''); ?>auth-lock-screen.php">Lock Screen</a>
                            </li><!--end /li-->
                            <li>
                                <a class="dropdown-item" href="<?= base_url(''); ?>auth-404.php">Error 404</a>
                            </li><!--end /li-->
                            <li>
                                <a class="dropdown-item" href="<?= base_url(''); ?>auth-500.php">Error 500</a>
                            </li><!--end /li-->
                        </ul><!--end submenu-->
                    </li><!--end nav-item-->                    
                </ul><!-- End navigation menu -->
            </div> <!-- end navigation -->
        </div>
        <!-- Navbar -->
    </nav>
    <!-- end navbar-->
</div>
<!-- Top Bar End -->


