<?php $this->include('Function/Timer'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'partial1/title-meta.php'; ?>

    <?php include 'partial1/head-css.php'; ?>
</head>

<body id="body" class="dark-sidebar">
    <?php include 'partial1/menu.php';  ?>

    <div class="page-wrapper">

        <!-- Page Content-->
        <div class="page-content-tab">

            <div class="container-fluid">
                <!-- Page-Title -->
                <?php
                $page_title = "Chat";
                $sub_title = "Apps";
                include 'partial1/page-title.php';  ?>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="chat-box-left">
                            <ul class="nav nav-tabs mb-3 nav-justified" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="general_chat_tab" data-bs-toggle="tab" href="#general_chat" role="tab">General</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="group_chat_tab" data-bs-toggle="tab" href="#group_chat" role="tab">Groups</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="personal_chat_tab" data-bs-toggle="tab" href="#personal_chat" role="tab">Personal</a>
                                </li>
                            </ul>
                            <div class="chat-search mb-3">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" id="chat-search" name="chat-search" class="form-control" placeholder="Search">
                                        <button type="button" class="btn btn-de-primary shadow-none"><i class="la la-search"></i></button>
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
                                            <a href="<?= base_url('prosante/chat/' . $contact['id_patient']); ?>" class="media <?php  if($contact['conversations'] != NULL){ if (($contact['conversations']['sender_id'] !== session()->get('id')) and ($contact['conversations']['last_message_status'] == 0)) {
                                                                                                                                    echo 'new-message';
                                                                                                                                } } ?>">
                                                <div class="media-left">
                                                    <img src="<?php if (!empty($contact['photo'])) {
                                                                    echo base_url($contact['photo']);
                                                                } ?>" alt="user" class="rounded-circle thumb-md">
                                                    <?php if ($contact['user_status'] == 1) {  ?>
                                                        <span class="round-10 bg-success"></span>
                                                    <?php } ?>
                                                </div><!-- media-left -->

                                                <div class="media-body">


                                                <?php if ($contact['conversations']  == NULL) { ?>


                                                    <div class="d-inline-block">
                                                        <h6><?= $contact['nom'] ?></h6>
                                                        <p><?= substr('Aucun Message', 0, 30); ?></p>
                                                    </div>
                                                 

                                                    <?php }else{ ?> 

                                                    <div class="d-inline-block">
                                                        <h6><?= $contact['nom'] ?></h6>
                                                        <p <?php if (($contact['conversations']['sender_id'] !== session()->get('id')) and ($contact['conversations']['last_message_status'] == 0)) { ?> style="font-weight:bold" <?php  } ?>><?= substr($contact['conversations']['last_message'], 0, 30); ?></p>
                                                    </div>
                                                    <div>
                                                        <span><?= dateSince($contact['conversations']['last_message_time']); ?></span>
                                                        <?php if (($contact['conversations']['sender_id'] !== session()->get('id')) and ($contact['conversations']['last_message_status'] == 0)) { ?><div class="new-message-dot new-message-blink"></div><?php } else if (($contact['conversations']['sender_id'] == session()->get('id')) and ($contact['conversations']['last_message_status'] == 1)) { ?><i style="font-size: smaller;" class="text-success">vue</i><?php } ?>
                                                    </div>


                                                    <?php }  ?>

                                                </div><!-- end media-body -->

                                            </a> <!--end media-->
                                        <?php endforeach; ?>

                                    </div><!--end general chat-->


                                    <div class="tab-pane fade" id="personal_chat">
                                        <a href="" class="media">
                                            <div class="media-left">
                                                <img src="<?= base_url('public/assets/images/users/user-5.jpg'); ?>" alt="user" class="rounded-circle thumb-md">
                                                <span class="round-10 bg-success"></span>
                                            </div><!-- media-left -->
                                            <div class="media-body">
                                                <div>
                                                    <h6>David Herrmann</h6>
                                                    <p>Good morning! How are you?</p>
                                                </div>
                                                <div>
                                                    <span>10 Feb</span>
                                                </div>
                                            </div><!-- end media-body -->
                                        </a><!--end media-->
                                        <a href="" class="media">
                                            <div class="media-left">
                                                <img src="<?= base_url('public/assets/images/users/user-6.jpg'); ?>" alt="user" class="rounded-circle thumb-md">
                                                <span class="round-10 bg-secondary"></span>
                                            </div><!-- media-left -->
                                            <div class="media-body">
                                                <div>
                                                    <h6>Mary Hayes</h6>
                                                    <p>How are you Friend...</p>
                                                </div>
                                                <div>
                                                    <span>1 Feb</span>
                                                </div>
                                            </div><!-- end media-body -->
                                        </a><!--end media-->
                                    </div><!--end personal chat-->
                                </div><!--end tab-content-->
                            </div>
                        </div><!--end chat-box-left -->

                        <div class="chat-box-right">
                            <div class="chat-header">


                                <?php if (isset($get_my_users)) : ?>

                                    <a href="" class="media">
                                        <div class="media-left">
                                            <img src="<?php if (isset($get_my_users['photo'])) {
                                                            echo base_url($get_my_users['photo']);
                                                        } ?>" alt="user" <?php if ($get_my_users['user_status'] == 1) { ?>style="border: 2px solid #00db1b" <?php } ?> class="rounded-circle thumb-sm">
                                            <!-- <span class="round-10 bg-success"></span>-->
                                        </div><!-- media-left -->
                                        <div class="media-body">
                                            <div>
                                                <h6 class="m-0"><?= $get_my_users['nom']; ?></h6>
                                                <p class="mb-0"><?php if ($get_my_users['user_status'] == 1) {
                                                                    echo 'En Ligne';
                                                                } else {
                                                                    echo dateSince($get_my_users['updated_at']);;
                                                                } ?></p>
                                            </div>
                                        </div><!-- end media-body -->
                                    </a><!--end media-->

                                <?php endif; ?>



                                <!-- <div class="chat-features">
                                    <div class="d-none d-sm-inline-block">
                                        <a href=""><i class="la la-phone"></i></a>
                                        <a href=""><i class="la la-video"></i></a>
                                        <a href=""><i class="la la-trash-alt"></i></a>
                                        <a href=""><i class="la la-ellipsis-v"></i></a>
                                    </div>
                                </div> -->
                                <!-- end chat-features -->
                            </div><!-- end chat-header -->
                            <div class="chat-body" data-simplebar>
                                <div class="messages-container">
                                    <div class="chat-detail">
                                        <?php if (isset($conversations)) : ?>
                                            <?php foreach ($conversations as $conversation) :  ?>
                                                <?php if ($conversation->sender_id == session('users')['id']) { ?>
                                                    <div class="media">
                                                        <div class="media-img">
                                                            <img src="<?= base_url($conversation->prosante_photo); ?>" alt="user" class="rounded-circle thumb-sm">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="chat-msg">
                                                                <p class="bg-secondary text-white"><?= $conversation->message; ?></p>
                                                                <br><?php if ($conversation->status == 1) { ?><i style="font-size: xx-small;">vue</i><?php } ?>
                                                            </div>
                                                            <div class="chat-time" style="font-size: xx-small;"><?= dateSince($conversation->updated_at); ?></div>
                                                        </div><!--end media-body-->
                                                    </div><!--end media-->
                                                <?php } else {  ?>
                                                    <div class="media">
                                                        <div class="media-body reverse">
                                                            <div class="chat-msg">
                                                                <p><?= $conversation->message; ?></p>
                                                            </div>
                                                            <div class="chat-time" style="font-size: xx-small;"><?= dateSince($conversation->updated_at); ?></div>
                                                        </div><!--end media-body-->
                                                        <div class="media-img">
                                                            <img src="<?= base_url($conversation->patient_photo); ?>" alt="user" class="rounded-circle thumb-sm">
                                                        </div>

                                                    </div> <!--end media-->
                                                <?php }  ?>
                                            <?php endforeach; ?>
                                        <?php endif; ?>

                                    </div> <!-- end chat-detail -->
                                </div>
                            </div><!-- end chat-body -->

                            <div class="chat-footer">
                                <div class="row">
                                    <div class="col-12 col-md-9">
                                        <!--<span class="chat-admin"><img src="<?= base_url('public/assets/images/users/user-8.jpg'); ?>" alt="user" class="rounded-circle thumb-sm"></span>-->
                                        <input id="message-input" type="text" name="message" data-session="<?= session()->get('users')['id'] ?>" data-receiver="<?= $get_my_users['id']; ?>" class="form-control" placeholder="Type something here...">
                                    </div><!-- col-8 -->
                                    <div class="col-3 text-end">
                                        <div class="d-none d-sm-inline-block chat-features">
                                            <button class="btn btn-primary" id="send-button">Envoyer</button>
                                            <!-- <a href=""><i class="la la-camera"></i></a>
                                            <a href=""><i class="la la-paperclip"></i></a>
                                            <a href=""><i class="la la-microphone"></i></a>
                                            -->
                                        </div>
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div><!-- end chat-footer -->
                        </div><!--end chat-box-right -->
                    </div> <!-- end col -->
                </div><!-- end row -->

            </div><!-- container -->

            <!--Start Rightbar-->
            <?php include 'partial1/right-sidebar.php';  ?>
            <!--end Rightbar-->

            <!--Start Footer-->
            <?php include 'partial1/footer.php';  ?>
            <!--end footer-->



            <script>
                $(document).ready(function() {
                    var messagesContainer = $('.messages-container');
                    var sender_id = $('#message-input').data('session');
                    var receiver_id = $('#message-input').data('receiver');

                    function getMessages() {
                        var message = $('#message-input').val(); // Récupérer la valeur du message à l'intérieur de la fonction

                        $.ajax({
                            url: '/prosante/loadMessages',
                            method: 'POST',
                            data: {
                                message: message,
                                sender_id: sender_id,
                                receiver_id: receiver_id
                            },
                            dataType: 'html',
                            success: function(response) {
                                $('.messages-container').html(response);
                            },
                            error: function(error) {
                                console.error('Error getting messages:', error);
                            }
                        });
                    }

                    //   function displayMessages(messages) {
                    //        var messagesContainer = $('#messages-container');
                    //        messagesContainer.empty();

                    //        $.each(messages, function(index, message) {
                    //            var formattedMessage = '[' + message.timestamp + '] ' + message.sender + ': ' + message.message;
                    //            messagesContainer.append('<div>' + formattedMessage + '</div>');
                    //        });
                    //    }

                    function sendMessage(message, sender_id, receiver_id) {
                        $.ajax({
                            url: '/prosante/chat-save',
                            method: 'POST',
                            data: {
                                message: message,
                                sender_id: sender_id,
                                receiver_id: receiver_id
                            },
                            dataType: 'json',
                            success: function(response) {
                                // Handle success if needed
                            },
                            error: function(error) {
                                console.error('Error sending message:', error);
                            }
                        });
                    }

                    $('#send-button').click(function() {
                        var message = $('#message-input').val();
                        var sender_id = $('#message-input').data('session');
                        var receiver_id = $('#message-input').data('receiver');
                        sendMessage(message, sender_id, receiver_id);
                        $('#message-input').val('');
                    });

                    // Initial load of messages
                    getMessages();

                    // Polling for new messages every 5 seconds
                    setInterval(function() {
                        getMessages();
                    }, 2000); // Increased the interval to 5000 milliseconds (5 seconds)
                });
            </script>

        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->




    <!-- javascript  -->
    <!-- App js -->
    <script src="<?= base_url('public/assets/js/app.js'); ?>"></script>

</body>

</html>