<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->include('layouts-prosante/title-meta.php'); ?>

    <?= $this->include('layouts-prosante/head-css.php'); ?>
</head>

<body id="body" class="dark-sidebar">

    <?= $this->include('layouts-prosante/left-sidebar'); ?>
    <?= $this->include('layouts-prosante/topbar'); ?>

    <div class="page-wrapper">

        <!-- Page Content-->
        <div class="page-content-tab">

            <div class="container-fluid">
                <!-- Page-Title -->
                <?=
                $page_title = "Chat";
                $sub_title = "Projects";
                $this->include('layouts-prosante/page-title.php');  ?>
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
                                        <button type="button" class="btn btn-outline-light shadow-none"><i class="la la-search"></i></button>
                                    </div>
                                </div>
                            </div><!--end chat-search-->

                            <div class="chat-body-left" data-simplebar>
                                <div class="tab-content chat-list" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="general_chat">
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
                                        <a href="" class="media new-message">
                                            <div class="media-left">
                                                <img src="<?= base_url('assets/images/users/user-2.jpg'); ?>" alt="user" class="rounded-circle thumb-md">
                                                <span class="round-10 bg-success"></span>
                                            </div><!-- media-left -->
                                            <div class="media-body">
                                                <div>
                                                    <h6>Robert Jefferson</h6>
                                                    <p>Congratulations Friend...</p>
                                                </div>
                                                <div>
                                                    <span>20 Feb</span>
                                                    <span>1</span>
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
                                                    <h6>Jesse Ross</h6>
                                                    <p>How are you Friend...</p>
                                                </div>
                                                <div>
                                                    <span>15 Feb</span>
                                                </div>
                                            </div><!-- end media-body -->
                                        </a> <!--end media-->
                                        <a href="" class="media">
                                            <div class="media-left">
                                                <img src="<?= base_url('assets/images/users/user-5.jpg'); ?>" alt="user" class="rounded-circle thumb-md">
                                                <span class="round-10 bg-secondary"></span>
                                            </div><!-- media-left -->
                                            <div class="media-body">
                                                <div>
                                                    <h6>Mary Schneider</h6>
                                                    <p>Have A Nice day...</p>
                                                </div>
                                                <div>
                                                    <span>14 Feb</span>
                                                </div>
                                            </div><!-- end media-body -->
                                        </a> <!--end media-->
                                        <a href="" class="media">
                                            <div class="media-left">
                                                <img src="<?= base_url('assets/images/users/user-5.jpg'); ?>" alt="user" class="rounded-circle thumb-md">
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
                                        </a> <!--end media-->
                                        <a href="" class="media">
                                            <div class="media-left">
                                                <img src="<?= base_url('assets/images/users/user-6.jpg'); ?>" alt="user" class="rounded-circle thumb-md">
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
                                        </a> <!--end media-->
                                        <a href="" class="media">
                                            <div class="media-left">
                                                <img src="<?= base_url('assets/images/users/user-7.jpg'); ?>" alt="user" class="rounded-circle thumb-md">
                                                <span class="round-10 bg-secondary"></span>
                                            </div><!-- media-left -->
                                            <div class="media-body">
                                                <div>
                                                    <h6>Rita Duarte</h6>
                                                    <p>Have A Nice day...</p>
                                                </div>
                                                <div>
                                                    <span>30 Jan</span>
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

                                    <div class="tab-pane fade" id="personal_chat">
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
                                        </a><!--end media-->
                                        <a href="" class="media new-message">
                                            <div class="media-left">
                                                <img src="<?= base_url('assets/images/users/user-2.jpg'); ?>" alt="user" class="rounded-circle thumb-md">
                                                <span class="round-10 bg-success"></span>
                                            </div><!-- media-left -->
                                            <div class="media-body">
                                                <div>
                                                    <h6>Robert Jefferson</h6>
                                                    <p>Congratulations Friend...</p>
                                                </div>
                                                <div>
                                                    <span>20 Feb</span>
                                                    <span>1</span>
                                                </div>
                                            </div><!-- end media-body -->
                                        </a><!--end media-->
                                        <a href="" class="media">
                                            <div class="media-left">
                                                <img src="<?= base_url('assets/images/users/user-8.jpg'); ?>" alt="user" class="rounded-circle thumb-md">
                                                <span class="round-10 bg-secondary"></span>
                                            </div><!-- media-left -->
                                            <div class="media-body">
                                                <div>
                                                    <h6>Jesse Ross</h6>
                                                    <p>How are you Friend...</p>
                                                </div>
                                                <div>
                                                    <span>15 Feb</span>
                                                </div>
                                            </div><!-- end media-body -->
                                        </a><!--end media-->
                                        <a href="" class="media">
                                            <div class="media-left">
                                                <img src="<?= base_url('assets/images/users/user-4.jpg'); ?>" alt="user" class="rounded-circle thumb-md">
                                                <span class="round-10 bg-secondary"></span>
                                            </div><!-- media-left -->
                                            <div class="media-body">
                                                <div>
                                                    <h6>Mary Schneider</h6>
                                                    <p>Have A Nice day...</p>
                                                </div>
                                                <div>
                                                    <span>14 Feb</span>
                                                </div>
                                            </div><!-- end media-body -->
                                        </a><!--end media-->
                                        <a href="" class="media">
                                            <div class="media-left">
                                                <img src="<?= base_url('assets/images/users/user-5.jpg'); ?>" alt="user" class="rounded-circle thumb-md">
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
                                                <img src="<?= base_url('assets/images/users/user-6.jpg'); ?>" alt="user" class="rounded-circle thumb-md">
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
                                        <a href="" class="media">
                                            <div class="media-left">
                                                <img src="<?= base_url('assets/images/users/user-7.jpg'); ?>" alt="user" class="rounded-circle thumb-md">
                                                <span class="round-10 bg-secondary"></span>
                                            </div><!-- media-left -->
                                            <div class="media-body">
                                                <div>
                                                    <h6>Rita Duarte</h6>
                                                    <p>Have A Nice day...</p>
                                                </div>
                                                <div>
                                                    <span>30 Jan</span>
                                                </div>
                                            </div><!-- end media-body -->
                                        </a><!--end media-->
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
                                        </a><!--end media-body-->
                                    </div><!--end personal chat-->
                                </div><!--end tab-content-->
                            </div>
                        </div><!--end chat-box-left -->

                        <div class="chat-box-right">
                            <div class="chat-header">
                                <a href="" class="media">
                                    <div class="media-left">
                                        <img src="<?= base_url('assets/images/users/user-4.jpg'); ?>" alt="user" class="rounded-circle thumb-sm">
                                    </div><!-- media-left -->
                                    <div class="media-body">
                                        <div>
                                            <h6 class="m-0">Mary Schneider</h6>
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
                                <div class="chat-detail">
                                    <div class="media">
                                        <div class="media-img">
                                            <img src="<?= base_url('assets/images/users/user-4.jpg'); ?>" alt="user" class="rounded-circle thumb-sm">
                                        </div>
                                        <div class="media-body">
                                            <div class="chat-msg">
                                                <p>Good Morning !</p>
                                            </div>
                                            <div class="chat-msg">
                                                <p>There are many variations of passages of Lorem Ipsum available.</p>
                                            </div>
                                            <div class="chat-time">9:02am</div>
                                        </div><!--end media-body-->
                                    </div><!--end media-->

                                    <div class="media">
                                        <div class="media-body reverse">
                                            <div class="chat-msg">
                                                <p>Good Morning !</p>
                                            </div>
                                            <div class="chat-msg">
                                                <p>There are many variations of passages of Lorem Ipsum available.</p>
                                            </div>
                                        </div><!--end media-body-->
                                        <div class="media-img">
                                            <img src="<?= base_url('assets/images/users/user-8.jpg'); ?>" alt="user" class="rounded-circle thumb-sm">
                                        </div>
                                    </div><!--end media-->

                                    <div class="media">
                                        <div class="media-img">
                                            <img src="<?= base_url('assets/images/users/user-4.jpg'); ?>" alt="user" class="rounded-circle thumb-sm">
                                        </div>
                                        <div class="media-body">
                                            <div class="chat-msg">
                                                <p>There are many variations of passages of Lorem Ipsum available.</p>
                                            </div>
                                        </div><!--end media-body-->
                                    </div><!--end media-->

                                    <div class="media">
                                        <div class="media-body reverse">
                                            <div class="chat-msg">
                                                <p>Good Morning !</p>
                                            </div>
                                            <div class="chat-msg">
                                                <p>It is a long established fact that a reader will be distracted by
                                                    the readable content of a page when looking at its layout.
                                                    The point of using Lorem Ipsum is that it has a more-or-less normal
                                                    distribution of letters, as opposed to using 'Content here.
                                                </p>
                                            </div>
                                        </div><!--end media-body-->
                                        <div class="media-img">
                                            <img src="<?= base_url('assets/images/users/user-8.jpg'); ?>" alt="user" class="rounded-circle thumb-sm">
                                        </div>
                                    </div><!--end media-->

                                    <div class="media">
                                        <div class="media-img">
                                            <img src="<?= base_url('assets/images/users/user-4.jpg'); ?>" alt="user" class="rounded-circle thumb-sm">
                                        </div>
                                        <div class="media-body">
                                            <div class="chat-msg">
                                                <p>Good Morning !</p>
                                            </div>
                                            <div class="chat-msg">
                                                <p>It is a long established fact that a reader will be distracted by
                                                    the readable content of a page when looking at its layout.
                                                    The point of using Lorem Ipsum is that it has a more-or-less normal
                                                    distribution of letters, as opposed to using 'Content here.
                                                </p>
                                            </div>
                                            <div class="chat-msg">
                                                <p>Ok</p>
                                            </div>
                                        </div><!--end media-body-->
                                    </div> <!--end media-->

                                    <div class="media">
                                        <div class="media-body reverse">
                                            <div class="chat-msg">
                                                <p>Good Morning !</p>
                                            </div>
                                            <div class="chat-msg">
                                                <p>There are many variations of passages of Lorem Ipsum available.</p>
                                            </div>
                                            <div class="chat-msg">
                                                <p>There are many variations of passages.</p>
                                            </div>
                                            <div class="chat-msg">
                                                <p>By</p>
                                            </div>
                                        </div><!--end media-body-->
                                        <div class="media-img">
                                            <img src="<?= base_url('assets/images/users/user-8.jpg'); ?>" alt="user" class="rounded-circle thumb-sm">
                                        </div>
                                    </div> <!--end media-->
                                </div> <!-- end chat-detail -->
                            </div><!-- end chat-body -->
                            <div class="chat-footer">
                                <form action="<?= base_url('/Prosante/chat-save'); ?>" method="post">
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
                                        </div><!-- col-8 -->
                                        <div class="col-3 text-end">
                                            <div class="d-none d-sm-inline-block chat-features">
                                                <button type="submit">Envoyer</button>
                                                <!-- <a href=""><i class="la la-camera"></i></a>
                                                <a href=""><i class="la la-paperclip"></i></a>
                                                <a href=""><i class="la la-microphone"></i></a> -->
                                            </div>
                                        </div><!-- end col -->
                                    </div><!-- end row -->
                                </form>
                            </div><!-- end chat-footer -->
                        </div><!--end chat-box-right -->
                    </div> <!-- end col -->
                </div><!-- end row -->

            </div><!-- container -->

            <!--Start Rightbar-->
            <?= $this->include('layouts-prosante/right-sidebar.php');  ?>
            <!--end Rightbar-->

            <!--Start Footer-->
            <?= $this->include('layouts-prosante/footer.php');  ?>
            <!--end footer-->
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->

    <!-- Javascript  -->
    <!-- App js -->
    <script src="<?= base_url('assets/js/app.js'); ?>"></script>

<<<<<<< HEAD
=======

    <script>
        $(document).ready(function() {
            function getMessages() {
                $.ajax({
                    url: '/chat/getMessages',
                    method: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        displayMessages(response.messages);
                    },
                    error: function(error) {
                        console.error('Error getting messages:', error);
                    }
                });
            }

            function displayMessages(messages) {
                var messagesContainer = $('#messages-container');
                messagesContainer.empty();

                $.each(messages, function(index, message) {
                    var formattedMessage = '[' + message.timestamp + '] ' + message.sender + ': ' + message.message;
                    messagesContainer.append('<div>' + formattedMessage + '</div>');
                });
            }

            function sendMessage(message) {
                $.ajax({
                    url: '/chat/sendMessage',
                    method: 'POST',
                    data: { message: message },
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
                sendMessage(message);
                $('#message-input').val('');
            });

            // Initial load of messages
            getMessages();

            // Polling for new messages every 5 seconds
            setInterval(function() {
                getMessages();
            }, 5000);
        });
    </script>

>>>>>>> origin/angelo
</body>
<!--end body-->

</html>