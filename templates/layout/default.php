<?php
use Cake\View\View;
?>


<?= $this->element('main') ?>

<?php
$controller = View::getRequest()->getAttribute('params')['controller'];
$action = View::getRequest()->getAttribute('params')['action'];
?>

<head>

    <?= $this->element('title-meta', array('title' => 'SYS Ecomerce - '. $controller)) ?>

    <!-- jsvectormap css -->
    <link href="/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <?= $this->element('head-css') ?>

</head>

<body>

<!-- Begin page -->
<div id="layout-wrapper">

    <?= $this->element('menu') ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <?= $this->fetch('content') ?>

        <?= $this->element('footer') ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<?= $this->element('vendor-scripts') ?>

<!-- apexcharts -->
<script src="/libs/apexcharts/apexcharts.min.js"></script>

<!-- Vector map-->
<script src="/libs/jsvectormap/js/jsvectormap.min.js"></script>
<script src="/libs/jsvectormap/maps/world-merc.js"></script>

<!--Swiper slider js-->
<script src="/libs/swiper/swiper-bundle.min.js"></script>

<!-- Dashboard init -->
<script src="/js/pages/dashboard-ecommerce.init.js"></script>

<?php echo $this->fetch('scriptBottom'); ?>

<!-- App js -->
<script src="/js/app.js"></script>
</body>

</html>