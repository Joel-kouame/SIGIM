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

            <?= $this->include('layouts-prosante/home'); ?>

            <!--end Rightbar--> 



            <!--Start Footer-->

            <?= $this->include('layouts-prosante/footer'); ?>
            <!-- end Footer -->

        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->

    <!-- Javascript  -->

    <script src="assets/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="assets/pages/analytics-index.init.js"></script>


    <!-- App js -->
    <script src="assets/js/app.js"></script>

</body>
<!--end body-->

</html>