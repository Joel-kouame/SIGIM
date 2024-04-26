
<!DOCTYPE html>
<html lang="en">
<head>

<?= $this->include('layouts-fablab/title-meta.php'); ?>
<?= $this->include('layouts-fablab/head-css.php'); ?>
</head>

<body id="body" class="dark-sidebar">

<?= $this->include('layouts-fablab/left-sidebar'); ?>
<?= $this->include('layouts-fablab/topbar'); ?>





<div class="page-wrapper">

    <!-- Page Content-->
    <div class="page-content-tab">

        <?= $this->include('layouts-fablab/home'); ?>

        <!--end Rightbar-->



        <!--Start Footer-->

        <?= $this->include('layouts-fablab/footer'); ?>
        <!-- end Footer -->
        
    </div>
    <!-- end page content -->
</div>
<!-- end page-wrapper -->

<!-- Javascript  -->

<script src="<?= base_url('public/assets/plugins/apexcharts/apexcharts.min.js') ?>"></script>
<script src="<?= base_url('public/assets/pages/analytics-index.init.js') ?>"></script>


<!-- App js -->
<script src="<?= base_url('public/assets/js/app.js') ?>"></script>

</body>
<!--end body-->
</html>