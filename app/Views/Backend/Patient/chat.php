<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->include('layouts/title-meta.php'); ?>

    <?= $this->include('layouts/head-css.php'); ?>
    <?= $this->include('function/Timer'); ?>
</head>

<body id="body" class="dark-sidebar">

    <?= $this->include('layouts/left-sidebarp'); ?>
    <?= $this->include('layouts/topbarp'); ?>

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
                                        <?php foreach ($prosantes as $prosante) : ?>
                                            <?php
                                            $unreadCount = 0;
                                            $lastMessage = '';
                                            $lastMessageDate = '';

                                            foreach ($chat as $chats) :
                                                if ($chats['receiver_id'] == $prosante['id']) {
                                                    if ($chats['status'] == 0) {
                                                        $unreadCount++;
                                                    }
                                                    $lastMessage = $chats['message'];
                                                    $lastMessageDate = $chats['created_at'];
                                                }
                                            endforeach;
                                            ?>
                                            <a href="<?= base_url('Patient/chat/' . $prosante['id']); ?>" class="media <?php if ($unreadCount > 0) echo 'new-message'; ?>">
                                                <div class="media-left">
                                                    <img src="<?php if (isset($prosante['photo'])) {
                                                                    echo base_url($prosante['photo']);
                                                                } ?>" alt="user" class="rounded-circle thumb-md">
                                                    <?php //if ($unreadCount > 0) : 
                                                    ?>
                                                    <span class="round-10 bg-success"></span>
                                                    <?php //endif; 
                                                    ?>
                                                </div><!-- media-left -->
                                                <div class="media-body">
                                                    <div class="d-inline-block">
                                                        <h6><?= $prosante['nom']; ?></h6>
                                                        <p><?= substr($lastMessage, 0, 25) . ' ...';  ?></p>
                                                    </div>
                                                    <div>
                                                        <span><?= dateSince($lastMessageDate); ?></span>
                                                        <?php if ($unreadCount > 0) : ?>
                                                            <span class="round-10 bg-success"><?= $unreadCount; ?></span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <!-- end media-body -->
                                            </a><!--end media-->
                                        <?php endforeach; ?>
                                    </div><!--end personal chat-->

                                    <div class="tab-pane fade" id="general_chat">
                                        <a href="" class="media new-message">
                                            <div class="media-left">
                                                <img src="<?= base_url('assets/images/users/user-1.jpg'); ?>" alt="user" class="rounded-circle thumb-md">
                                                <span class="round-10 bg-success"></span>
                                            </div><!-- media-left -->
                                            <div class="media-body">
                                                <div class="d-inline-block">
                                                    <h6>Daniel Madsen</h6>
                                                    <p>Good morning! Congratulations Friend...</p>
                                                </div>
                                                <div>
                                                    <span>20 Feb</span>
                                                    <span>3</span>
                                                </div>
                                            </div><!-- end media-body -->
                                        </a> <!--end media-->
                                        <a href="" class="media">
                                            <div class="media-left">
                                                <img src="<?= base_url('assets/images/users/user-8.jpg'); ?>" alt="user" class="rounded-circle thumb-md">
                                                <span class="round-10 bg-secondary"></span>
                                            </div><!-- media-left -->
                                            <div class="media-body">
                                                <div>
                                                    <h6>Dennis Wilson</h6>
                                                    <p>Good morning! How are you?</p>
                                                </div>
                                                <div>
                                                    <span>26 Jan</span>
                                                </div>
                                            </div><!-- end media-body -->
                                        </a> <!--end media-->
                                    </div><!--end general chat-->

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
                        <div class="response">c'est ici la reponse !!!</div>
                        <div class="chat-box-right">
                            <?php foreach ($entete_info as $entete_infos) : ?>

                                <div class="chat-header">
                                    <a href="" class="media">
                                        <div class="media-left">
                                            <img src="<?php if (isset($entete_infos['photo'])) {
                                                            echo base_url($entete_infos['photo']);
                                                        } ?>" alt="user" class="rounded-circle thumb-sm">
                                        </div><!-- media-left -->
                                        <div class="media-body">
                                            <div>
                                                <h6 class="m-0"><?= $entete_infos['nom']; ?></h6>
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

                            <?php endforeach; ?>
                            <div class="chat-body" data-simplebar>
                                <div class="chat-detail">

                                    <?php foreach ($conversations as $conversation) :  ?>

                                        <?php if ($conversation['sender_id'] == session('patient')['id']) : ?>
                                            <div class="media">
                                                <div class="media-img">
                                                    <img style="border: 2px solid white;" src="<?php if (isset($prosante['photo'])) {
                                                                                                    echo base_url($prosante['photo']);
                                                                                                } ?>" alt="user" class="rounded-circle thumb-sm">
                                                </div>
                                                <div class="media-body">
                                                    <div class="chat-msg">
                                                        <p class="bg-secondary text-light"><?= $conversation['message']; ?></p>
                                                    </div>
                                                    <div class="chat-msg">
                                                        <p style="font-size: xx-small;" class="chat-time bg-secondary text-light"><?= dateSince($conversation['created_at']); ?></p>
                                                    </div>
                                                    <?php if ($conversation['status'] == 1) {  ?>
                                                        <div class="chat-msg">
                                                            <p style="font-size: xx-small;" class="chat-time bg-secondary text-light">vu</p>
                                                        </div>
                                                    <?php } ?>
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        <?php else : ?>
                                            <div class="media">
                                                <div class="media-body reverse">
                                                    <div class="chat-msg">
                                                        <p><?= $conversation['message']; ?></p>
                                                    </div>
                                                    <div class="chat-msg">
                                                        <p style="font-size: xx-small;" class="chat-time"><?= dateSince($conversation['created_at']); ?></p>
                                                    </div>
                                                </div><!--end media-body-->
                                                <div class="media-img">
                                                    <img src="<?php if (isset($prosante['photo'])) {
                                                                    echo base_url($prosante['photo']);
                                                                } ?>" alt="user" class="rounded-circle thumb-sm">
                                                </div>
                                            </div><!--end media-->

                                        <?php endif; ?>


                                    <?php endforeach; ?>


                                </div> <!-- end chat-detail -->
                            </div><!-- end chat-body -->

                            <div class="chat-footer">
<<<<<<< HEAD:app/Views/Backend/Patient/chat.php
                                <form action="<?= base_url('/Patient/chat-save'); ?>" method="post">
=======
                                <form id="chat-form" data-url="<?= base_url('/Patient/chat-save') ?>" method="POST">
>>>>>>> origin/angelo:app/Views/Frontend/Patient/chat.php
                                    <?php csrf_field(); ?>
                                    <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                                        <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                                    <?php endif ?>
                                    <div class="row">
                                        <div class="col-12 col-md-9">
                                            <span class="chat-admin"><img src="<?= base_url('assets/images/users/user-8.jpg'); ?>" alt="user" class="rounded-circle thumb-sm"></span>
                                            <input type="text" name="message" class="form-control" placeholder="Type something here..." value="<?= set_value('message'); ?>">
                                            <span class="text-danger text-sm">
                                                <?= isset($validation) ? display_form_errors($validation, 'message') : '' ?>
                                            </span>
<<<<<<< HEAD:app/Views/Backend/Patient/chat.php
                                        </div><!-- col-8 -->
                                        <div class="col-3 text-end">
                                            <div class="d-none d-sm-inline-block chat-features">
                                                <button type="submit">Envoyer</button>
                                                <!-- <a href=""><i class="la la-camera"></i></a>
                                                <a href=""><i class="la la-paperclip"></i></a>
                                                <a href=""><i class="la la-microphone"></i></a> -->
=======
                                            <input type="text" name="id_user" value="<?= $entete_infos['id']; ?>" hidden>
                                        </div><!-- col-8 -->
                                        <div class="col-3 text-end">
                                            <div class="d-none d-sm-inline-block chat-features">
                                                <button class="btn btn-primary" type="button" id="send-message">Envoyer</button>
>>>>>>> origin/angelo:app/Views/Frontend/Patient/chat.php
                                            </div>
                                        </div><!-- end col -->
                                    </div><!-- end row -->
                                </form>
                            </div><!-- end chat-footer -->
                        </div><!--end chat-box-right -->
                    </div> <!-- end col -->
                </div><!-- end row -->

            </div><!-- container -->

            <script>
                $(document).ready(function() {
                    $('#send-message').on('submit', function(e) {
                        e.preventDefault();


                        // Récupérer l'URL et les données du formulaire
                        /*  var url = $('#chat-form').attr('action'); */
                        var formData = $('#chat-form').serialize();
                        var data_url = $('#chat-form').data('url');

                        $.ajax({
                            url: data_url,
                            type: 'post',
                            data: formData,
                            success: function(response) {
                                // Gérez la réponse ici, par exemple, affichez un message de succès
                                $('.response').html(response);

                            },
                            error: function(error) {
                                // Gérez les erreurs ici, par exemple, affichez un message d'erreur
                                console.error(error);
                            }
                        });



                    });
                });
            </script>

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



    <!-- Javascript  -->
    <!-- App js -->
    <script src="<?= base_url('assets/js/app.js'); ?>"></script>

</body>
<!--end body-->

</html>