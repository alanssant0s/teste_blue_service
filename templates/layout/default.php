<?= $this->element('main') ?>

<head>

    <?= $this->element('title-meta', array('title' => 'Dashboard')) ?>

    <!-- jsvectormap css -->
    <link href="/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

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

        <div class="page-content">
            <div class="container-fluid">

                <?= $this->element('page-title', array('pagetitle' => 'Dashboards', 'title' => 'Dashboard')) ?>

                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>

        <?= $this->element('footer') ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<?= $this->element('customizer') ?>

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

<!-- App js -->
<script src="/js/app.js"></script>
</body>

</html>