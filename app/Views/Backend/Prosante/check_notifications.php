<?= $this->include('Function/Timer'); ?>

<h6 class="dropdown-item-text font-15 m-0 py-3 border-bottom d-flex justify-content-between align-items-center">
  Notifications <span class="badge bg-soft-primary badge-pill"><?= count($alert_notif);  ?></span>
</h6>


<?php

if (count($alert_notif)) {

  foreach ($alert_notif as $notify) {

    if ($notify['vue_notif'] == 0) {

?>

      <audio id="notificationSound" autoplay="true">
        <source src="emergency-alarm.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
      </audio>
     

<?php

}

?>



    <div class="notification-menu" <?php if ($notify['vue_notif'] == 0) { ?> style="background-color:#f8f9fa;" <?php } ?> data-simplebar>
      <!-- item-->
      <a href="#" class="dropdown-item py-3">
        <small class="float-end text-muted ps-2">
          <?= dateSince($notify['date_notif']); ?><br>
          <?php if ($notify['vue_notif'] == 1) { ?> <i style="font-size: xx-small;margin-top:10px;" class="float-end text-muted ps-2">vue</i> <?php } ?>
        </small>
        <div class="media">
          <div class="avatar-md bg-soft-primary">
            <i class="ti ti-chart-arcs"></i>
          </div>
          <div class="media-body align-self-center ms-2 text-truncate">
            <h6 class="my-0 fw-normal text-dark"><?= $notify['message']; ?></h6>
            <small class="text-muted mb-0"><?= $notify['message']; ?></small>
          </div><!--end media-body-->
        </div><!--end media-->
      </a><!--end-item-->
    </div>
    <!-- All-->



<?php

    // echo json_encode($notify);
  }
}

?>