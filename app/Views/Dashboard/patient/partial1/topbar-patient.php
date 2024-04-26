<!-- Top Bar Start -->
<div class="topbar">

    <style>
        /* Point rouge de base */
        .alert_new-message-dot {
            width: 7px;
            height: 7px;
            background-color: red;
            border-radius: 50%;
            /* position: absolute;*/
            top: 60px;
            /* Ajustez la position verticale selon vos besoins */
            right: 20px;
            /* Ajustez la position horizontale selon vos besoins */
            opacity: 1;
            /* animation: pulse 2s ease-in-out infinite;*/
        }

        .alert-badge {
            animation: pulse 2s ease-in-out infinite;
        }


        @keyframes black {
            0% {
                transform: scale(1);
                opacity: 1;
            }

            50% {
                transform: scale(0.5);
                opacity: 0.5;
            }

            100% {
                transform: scale(1);
                opacity: 0.8;
            }
        }

        .alert-badge.new_message {
            animation: black 1s infinite;
        }

        /* Appliquer l'animation à votre point rouge */

        .alert_new-message {
            background-color: #f4f4f4;

        }
    </style>

    <!-- Navbar -->
    <nav class="navbar-custom" id="navbar-custom">
        <ul class="list-unstyled topbar-nav float-end mb-0">
            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="ti ti-mail"></i>
                    <span class="alert-badge new_message"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-lg pt-0">

                <h6 class="dropdown-item-text font-15 m-0 py-3 border-bottom d-flex justify-content-between align-items-center">
                        Messages <div id="count_new_msg" class="badge bg-soft-primary badge-pill"></div>
                    </h6>
                    <div id="alert_msg" class="notification-menu" data-simplebar>

                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-end text-muted ps-2">40 min ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <img src="<?= base_url('public/assets/images/users/user-2.jpg'); ?>" alt="" class="thumb-sm rounded-circle">
                                </div>
                                <div class="media-body align-self-center ms-2 text-truncate">
                                    <h6 class="my-0 fw-normal text-dark">UX 3 Task complete.</h6>
                                    <small class="text-muted mb-0">Dummy text of the printing.</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                        <!-- item-->

                    </div>
                    <!-- All-->
                    <a href="<?= base_url('/patient/chat'); ?>" class="dropdown-item text-center text-primary">
                        View all <i class="fi-arrow-right"></i>
                    </a>
                </div>
            </li>

            <li class="dropdown notification-list" hidden>
                <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
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
                    <a href="<?= base_url('/prosante/chat'); ?>" class="dropdown-item text-center text-primary">
                        View all <i class="fi-arrow-right"></i>
                    </a>
                </div>
            </li>

            <li class="dropdown">
                <a class="nav-link dropdown-toggle nav-user" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <div class="d-flex align-items-center">
                        <img src="<?= base_url($patient['photo']); ?>" alt="profile-user" class="rounded-circle me-2 thumb-sm" />
                        <div>
                            <small class="d-none d-md-block font-11">Patient</small>
                            <span class="d-none d-md-block fw-semibold font-12"><?= $patient['nom']; ?><i class="mdi mdi-chevron-down"></i></span>
                        </div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="<?= base_url('patient/profile-patient'); ?>"><i class="ti ti-user font-16 me-1 align-text-bottom"></i> Profile</a>
                    <a class="dropdown-item" href="#"><i class="ti ti-settings font-16 me-1 align-text-bottom"></i> Paramettre</a>
                    <div class="dropdown-divider mb-0"></div>
                    <a class="dropdown-item" href="<?= base_url('dashboardPatient/logout'); ?>"><i class="ti ti-power font-16 me-1 align-text-bottom"></i>Deconnexion</a>
                </div>
            </li><!--end topbar-profile-->
        </ul><!--end topbar-nav-->

        <ul class="list-unstyled topbar-nav mb-0">
            <li>
                <button class="nav-link button-menu-mobile nav-icon" id="togglemenu">
                    <i class="ti ti-menu-2"></i>
                </button>
            </li>
            <!-- <li class="hide-phone app-search">
                <form role="search" action="#" method="get">
                    <input type="search" name="search" class="form-control top-search mb-0" placeholder="Type text...">
                    <button type="submit"><i class="ti ti-search"></i></button>
                </form>
            </li>                        -->
        </ul>
    </nav>
    <!-- end navbar-->
</div>
<!-- Top Bar End -->


<script>
    $(document).ready(function() {
        var messagesContainer = $('.messages-container');
        var sender_id = $('#message-input').data('session');
        var receiver_id = $('#message-input').data('receiver');

        function getMessages() {
            var message = $('#message-input').val(); // Récupérer la valeur du message à l'intérieur de la fonction

            $.ajax({
                url: '/patient/alert_message',
                method: 'POST',
                data: {
                    message: message,
                    sender_id: sender_id,
                    receiver_id: receiver_id
                },
                dataType: 'html',
                success: function(response) {
                    $('#alert_msg').html(response);
                },
                error: function(error) {
                    console.error('Aucun Nouveau message', error);
                }
            });
        }

        // Initial load of messages
        getMessages();

        // Polling for new messages every 5 seconds
        setInterval(function() {
            getMessages();
        }, 2000); // Increased the interval to 5000 milliseconds (5 seconds)
    });
</script>