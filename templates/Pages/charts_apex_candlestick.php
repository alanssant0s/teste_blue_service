<?= $this->element('main') ?>

<head>

    <?= $this->element('title-meta', array('title' => 'Apex Candlestick Charts')) ?>

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

                    <?= $this->element('page-title', array('pagetitle' => 'Apexcharts', 'title' => 'Candlestick Charts')) ?>

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Basic Candlestick Chart</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="basic_candlestick" data-colors='["--vz-success", "--vz-danger"]' class="apex-charts" dir="ltr"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Candlestick Synced with Brush Chart (Combo)</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div>
                                        <div id="combo_candlestick" data-colors='["--vz-info", "--vz-danger"]' class="apex-charts" dir="ltr"></div>
                                        <div id="combo_candlestick_chart" data-colors='["--vz-warning", "--vz-danger"]' class="apex-charts" dir="ltr"></div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Category X-Axis</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="category_candlestick" data-colors='["--vz-success", "--vz-danger"]' class="apex-charts" dir="ltr"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Candlestick with line</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="candlestick_with_line" data-colors='["--vz-success", "--vz-danger", "--vz-info", "--vz-warning"]' class="apex-charts" dir="ltr"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <?= $this->element('footer') ?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <?= $this->element('customizer') ?>

    <?= $this->element('vendor-scripts') ?>

    <!-- apexcharts -->
    <script src="/libs/apexcharts/apexcharts.min.js"></script>

    <script src="https://apexcharts.com/samples/assets/ohlc.js"></script>
    <!-- for Category x-axis chart -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.8.17/dayjs.min.js"></script>

    <!-- candlestick charts init -->
    <script src="/js/pages/apexcharts-candlestick.init.js"></script>

    <!-- App js -->
    <script src="/js/app.js"></script>
</body>

</html>