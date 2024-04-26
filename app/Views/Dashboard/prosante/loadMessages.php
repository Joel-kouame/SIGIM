<?php $this->include('Function/Timer') ; ?>

    <div class="chat-detail">

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

    </div> <!-- end chat-detail -->