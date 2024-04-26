
<?= $this->include('Function/Timer'); ?>

<?php if(isset($alert_contacts) AND $alert_contacts ==! NULL){ ?>
    <style>
    .alert-badge.new_message{
        visibility: visible;
    }
    .badge:empty{
        display: block;
    }
    #count_new_msg::before{

        content: '<?= "25" ; ?>';
    }
</style>


<?php foreach ($alert_contacts as $alert_contact) : ?>


    <a href="<?= base_url('prosante/chat/' . $alert_contact['id_prosante']); ?>" class="dropdown-item py-3 <?php if ($alert_contact['alert_conversations'] !== NULL) {
                                                                                                        if (($alert_contact['alert_conversations']['sender_id'] !== session()->get('id')) and ($alert_contact['alert_conversations']['last_message_status'] == 0)) {
                                                                                                            echo 'alert_new-message';
                                                                                                        }
                                                                                                    } ?>">
        <?php if ($alert_contact['alert_conversations'] !== NULL) { ?>
            <small class="float-end text-muted ps-2"><?= dateSince($alert_contact['alert_conversations']['last_message_time']); ?></small>
           <br><small class="float-end text-muted ps-2">
                <?php if (($alert_contact['alert_conversations']['sender_id'] !== session()->get('id')) and ($alert_contact['alert_conversations']['last_message_status'] == 0)) { ?>
                    <div class="alert_new-message-dot new-message-blink"></div>

                <?php } else if (($alert_contact['alert_conversations']['sender_id'] == session()->get('id')) and ($alert_contact['alert_conversations']['last_message_status'] == 1)) { ?>
                    <i style="font-size: smaller;" class="text-success">vue</i>
                <?php } ?>
                </small>

        <?php } ?>

        <div class="media">
            <div class="avatar-md bg-soft-primary">
                <img src="<?php if (!empty($alert_contact['photo'])) {
                                echo base_url($alert_contact['photo']);
                            } ?>" alt="" class="thumb-sm rounded-circle"
                <?php if ($alert_contact['user_status'] == 1) {  ?>
                    style="border: 2px solid #00db1b"
                <?php } ?>>
            </div>
            <div class="media-body align-self-center ms-2 text-truncate">
                <h6 class="my-0 fw-normal text-dark"><?= $alert_contact['nom'] ?></h6>
                <?php if ($alert_contact['alert_conversations']  == NULL) { ?>
                    <small><?= substr('Aucun Message', 0, 30); ?></small>
                <?php } else { ?>

                    <small <?php if (($alert_contact['alert_conversations']['sender_id'] !== session()->get('id')) and ($alert_contact['alert_conversations']['last_message_status'] == 0)) { ?>
                     style="font-weight:bold" <?php  } ?> class="text-muted mb-0">
                    <?= substr($alert_contact['alert_conversations']['last_message'], 0, 30).$alert_contact['alert_conversations']['total_messages']; ?>
                    </small>


                <?php } ?>
            </div><!--end media-body-->
        </div><!--end media-->
    </a><!--end-item-->


<?php endforeach; ?>
<?php }else{ ?>


    <style>
         .alert-badge.new_message{
        visibility: hidden;
    }
    .badge:empty{
        display: block;
    }
    #count_new_msg::before{

content: '<?= "0" ; ?>';
}
    </style>
    
<p class="text-center"><small class="text-center">aucun nouveau message</small></p>


<?php } ?>