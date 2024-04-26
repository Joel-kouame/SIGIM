<?= $this->include('Function/Timer'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'partial1/title-meta.php'; ?>

    <?php include 'partial1/head-css.php'; ?>
</head>

<body id="body" class="dark-sidebar">
    <?php include 'partial1/menu-patient.php';
    ?>

    <div class="page-wrapper">

        <!-- Page Content-->
        <div class="page-content-tab">

            <div class="container-fluid">
                <!-- Page-Title -->
                <?=
                $page_title = "Chat";
                $sub_title = "Projects";
                $this->include('layouts/page-title.php');  ?>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="chat-box-left">
                            <ul class="nav nav-tabs mb-3 nav-justified" id="myTab" role="tablist">

                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="personal_chat_tab" data-bs-toggle="tab" href="#personal_chat" role="tab">Personal</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="general_chat_tab" data-bs-toggle="tab" href="#general_chat" role="tab">General</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="group_chat_tab" data-bs-toggle="tab" href="#group_chat" role="tab">Groups</a>
                                </li>

                            </ul>
                            <div class="chat-search mb-3">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" id="chat-search" name="chat-search" class="form-control" placeholder="Search">
                                        <button type="button" class="btn btn-outline-light shadow-none"><i class="la la-search"></i></button>
                                    </div>
                                </div>
                            </div><!--end chat-search-->

                            <div class="chat-body-left" data-simplebar>
                                <div class="tab-content chat-list" id="pills-tabContent">

                                    <div class="tab-pane fade show active" id="personal_chat">

                                        <style>
                                            /* Point rouge de base */
                                            .new-message-dot {
                                                width: 3px;
                                                height: 3px;
                                                background-color: red;
                                                border-radius: 50%;
                                                position: absolute;
                                                top: 60px;
                                                /* Ajustez la position verticale selon vos besoins */
                                                right: 20px;
                                                /* Ajustez la position horizontale selon vos besoins */
                                                opacity: 1;
                                                animation: pulse 2s ease-in-out infinite;
                                            }

                                            @keyframes blink {
                                                0% {
                                                    transform: scale(1);
                                                    opacity: 1;
                                                }

                                                50% {
                                                    transform: scale(2.5);
                                                    opacity: 0.5;
                                                }

                                                100% {
                                                    transform: scale(1);
                                                    opacity: 0.8;
                                                }
                                            }

                                            /* Appliquer l'animation à votre point rouge */
                                            .new-message-dot.new-message-blink {
                                                animation: blink 1s infinite;
                                            }
                                        </style>

                                        <?php foreach ($contacts as $contact) : ?>
                                            <a href="<?= base_url('patient/chat/' . $contact['id_prosante']); ?>" class="media <?php if ($contact['conversations'] != NULL) {

if (($contact['conversations']['sender_id'] !== session()->get('id')) and ($contact['conversations']['last_message_status'] == 0)) {
    echo 'new-message';
}
                                                
                                            } ?>">
                                                <div class="media-left">
                                                    <img src="<?php if (!empty($contact['photo'])) {
                                                                    echo base_url($contact['photo']);
                                                                } ?>" alt="user" class="rounded-circle thumb-md">
                                                    <?php if ($contact['user_status'] == 1) {  ?>
                                                        <span class="round-10 bg-success"></span>
                                                    <?php } ?>
                                                </div><!-- media-left -->

                                                <div class="media-body">

                                                    <?php if ($contact['conversations'] == NULL) { ?>


                                                        <div class="d-inline-block">
                                                            <h6><?= $contact['nom'] ?></h6>
                                                            <p><?= substr('Aucun Message ...', 0, 30); ?></p>
                                                        </div>
                                                       

                                                    <?php } else { ?>

                                                     

                                                        <div class="d-inline-block">
                                                            <h6><?= $contact['nom'] ?></h6>
                                                            <p <?php if (($contact['conversations']['sender_id'] !== session()->get('id')) and ($contact['conversations']['last_message_status'] == 0)) { ?> style="font-weight:bold" <?php  } ?>><?= substr($contact['conversations']['last_message'], 0, 30); ?></p>
                                                        </div>
                                                        <div>
                                                            <span><?= dateSince($contact['conversations']['last_message_time']); ?></span>
                                                            <?php if (($contact['conversations']['sender_id'] !== session()->get('id')) and ($contact['conversations']['last_message_status'] == 0)) { ?><div class="new-message-dot new-message-blink"></div><?php } else if (($contact['conversations']['sender_id'] == session()->get('id')) and ($contact['conversations']['last_message_status'] == 1)) { ?><i style="font-size: smaller;" class="text-success">vue</i><?php } ?>
                                                        </div>

                                                    <?php } ?>

                                                </div><!-- end media-body -->

                                            </a> <!--end media-->
                                        <?php endforeach; ?>

                                    </div><!--end general chat-->

                                    <div class="tab-pane fade" id="general_chat">

                                        <a href="" class="media new-message">
                                            <div class="media-left">
                                                <div class="avatar-box thumb-md align-self-center me-2">
                                                    <span class="thumb-md justify-content-center d-flex align-items-center bg-soft-success rounded-circle me-2">
                                                        <i class="fab fa-quinscape"></i>
                                                    </span>
                                                </div>
                                            </div><!-- media-left -->
                                            <div class="media-body">
                                                <div>
                                                    <h6>Design Group</h6>
                                                    <p>Good morning! How are you?</p>
                                                </div>
                                                <div>
                                                    <span>20 Feb</span>
                                                    <span>1</span>
                                                </div>
                                            </div><!-- end media-body -->
                                        </a> <!--end media-->
                                    </div><!--end personal chat-->


                                    <div class="tab-pane fade" id="group_chat">
                                        <a href="" class="media new-message">
                                            <div class="media-left">
                                                <div class="avatar-box thumb-md align-self-center me-2">
                                                    <span class="thumb-md justify-content-center d-flex align-items-center bg-soft-success rounded-circle me-2">
                                                        <i class="fab fa-quinscape"></i>
                                                    </span>
                                                </div>
                                            </div><!-- media-left -->
                                            <div class="media-body">
                                                <div>
                                                    <h6>Design Group</h6>
                                                    <p>Good morning! How are you?</p>
                                                </div>
                                                <div>
                                                    <span>20 Feb</span>
                                                    <span>1</span>
                                                </div>
                                            </div><!-- end media-body -->
                                        </a> <!--end media-->
                                        <a href="" class="media">
                                            <div class="media-left">
                                                <div class="avatar-box thumb-md align-self-center me-2">
                                                    <span class="thumb-md justify-content-center d-flex align-items-center bg-soft-primary rounded-circle me-2">
                                                        <i class="fab fa-connectdevelop"></i>
                                                    </span>
                                                </div>
                                            </div><!-- media-left -->
                                            <div class="media-body">
                                                <div>
                                                    <h6>Front end Developers</h6>
                                                    <p>Have A Nice day...</p>
                                                </div>
                                                <div>
                                                    <span>15 Feb</span>
                                                </div>
                                            </div><!-- end media-body -->
                                        </a> <!--end media-->
                                        <a href="" class="media">
                                            <div class="media-left">
                                                <div class="avatar-box thumb-md align-self-center me-2">
                                                    <span class="thumb-md justify-content-center d-flex align-items-center bg-soft-warning rounded-circle me-2">
                                                        <i class="far fa-gem"></i>
                                                    </span>
                                                </div>
                                            </div><!-- media-left -->
                                            <div class="media-body">
                                                <div>
                                                    <h6>UI/UX Designers</h6>
                                                    <p>Congratulations everybody... </p>
                                                </div>
                                                <div>
                                                    <span>14 Feb</span>
                                                </div>
                                            </div><!-- end media-body -->
                                        </a><!--end media-->
                                        <a href="" class="media">
                                            <div class="media-left">
                                                <div class="avatar-box thumb-md align-self-center me-2">
                                                    <span class="thumb-md justify-content-center d-flex align-items-center bg-soft-pink rounded-circle me-2">
                                                        <i class="fab fa-react"></i>
                                                    </span>
                                                </div>
                                            </div><!-- media-left -->
                                            <div class="media-body">
                                                <div>
                                                    <h6>React Developers</h6>
                                                    <p>How are you Friends...</p>
                                                </div>
                                                <div>
                                                    <span>10 Feb</span>
                                                </div>
                                            </div><!-- end media-body -->
                                        </a><!--end media-->
                                        <a href="" class="media">
                                            <div class="media-left">
                                                <div class="avatar-box thumb-md align-self-center me-2">
                                                    <span class="thumb-md justify-content-center d-flex align-items-center bg-soft-info rounded-circle me-2">
                                                        <i class="fas fa-globe"></i>
                                                    </span>
                                                </div>
                                            </div><!-- media-left -->
                                            <div class="media-body">
                                                <div>
                                                    <h6>Marketing Group</h6>
                                                    <p>How are you Friends...</p>
                                                </div>
                                                <div>
                                                    <span>10 Feb</span>
                                                </div>
                                            </div><!-- end media-body -->
                                        </a><!--end media-->
                                    </div><!--end group chat-->



                                </div><!--end tab-content-->
                            </div>
                        </div><!--end chat-box-left -->

                        <div class="chat-box-right">


                            <div class="chat-header">
                                <a href="" class="media">
                                    <div class="media-left">
                                        <img src="" alt="user" class="rounded-circle thumb-sm">
                                    </div><!-- media-left -->
                                    <div class="media-body">
                                        <div>
                                            <h6 class="m-0"></h6>
                                            <p class="mb-0">Last seen: 2 hours ago</p>
                                        </div>
                                    </div><!-- end media-body -->
                                </a><!--end media-->
                                <div class="chat-features">
                                    <div class="d-none d-sm-inline-block">
                                        <a href=""><i class="la la-phone"></i></a>
                                        <a href=""><i class="la la-video"></i></a>
                                        <a href=""><i class="la la-trash-alt"></i></a>
                                        <a href=""><i class="la la-ellipsis-v"></i></a>
                                    </div>
                                </div><!-- end chat-features -->
                            </div><!-- end chat-header -->


                            <div class="chat-body" data-simplebar>
                                <img src="<?= base_url('webimage/chatvide.png') ?>" alt="">
                                <h2 class="text-center my-2">Bienvenue dans l'espace chat</h2>
                                <h2 class="text-center my-2">Selectionner un utilisateur</h2>
                                <p class="text-center my-2">Connect to your device via Internet. Remember that you <br> must have a stable Internet Connection for a<br> greater experience.</p>
                            </div><!-- end chat-body -->



                        </div><!--end chat-box-right -->
                    </div> <!-- end col -->
                </div><!-- end row -->

            </div><!-- container -->



            <!--Start Rightbar-->
            <?= $this->include('layouts/right-sidebar.php');  ?>
            <!--end Rightbar-->

            <!--Start Footer-->
            <?= $this->include('layouts/footer.php');  ?>
            <!--end footer-->
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->




    <!-- javascript  -->
    <!-- App js -->
    <script src="<?= base_url('public/assets/js/app.js'); ?>"></script>

</body>

</html>