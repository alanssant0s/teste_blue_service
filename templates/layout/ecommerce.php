<?php
use Cake\View\View;
?>


<?= $this->element('ecommerce/main') ?>

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

    <?= $this->element('ecommerce/menu') ?>

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

<?php echo $this->fetch('scriptBottom'); ?>

<!-- App js -->
<script src="/js/app.js"></script>
<script src="/js/custom.js"></script>
</body>

</html>