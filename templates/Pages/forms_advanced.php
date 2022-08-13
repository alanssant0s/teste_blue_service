<?= $this->element('main') ?>

<head>

    <?= $this->element('title-meta', array('title' => 'Form Advanced')) ?>

    <!-- multi.js css -->
    <link rel="stylesheet" type="text/css" href="/libs/multi.js/multi.min.css" />
    <!-- autocomplete css -->
    <link rel="stylesheet" href="/libs/@tarekraafat/autocomplete.js/css/autoComplete.css">

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

                    <?= $this->element('page-title', array('pagetitle' => 'Forms', 'title' => 'Form Advanced')) ?>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Form Input Spin</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div>
                                        <div class="row gy-4">
                                            <div class="col-sm-6">
                                                <div>
                                                    <h5 class="fs-13 fw-medium text-muted">Default</h5>

                                                    <div class="input-step">
                                                        <button type="button" class="minus">–</button>
                                                        <input type="number" class="product-quantity" value="2" min="0" max="100" readonly>
                                                        <button type="button" class="plus">+</button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div>
                                                    <h5 class="fs-13 fw-medium text-muted">Light</h5>
                                                    <div class="input-step light">
                                                        <button type="button" class="minus">–</button>
                                                        <input type="number" class="product-quantity" value="5" min="0" max="100" readonly>
                                                        <button type="button" class="plus">+</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end row -->

                                        <div class="mt-4 pt-2">
                                            <div class="row gy-4">
                                                <div class="col-sm-6">
                                                    <div>
                                                        <h5 class="fs-13 fw-medium text-muted">Default (Full width)</h5>
                                                        <div class="input-step full-width">
                                                            <button type="button" class="minus">–</button>
                                                            <input type="number" class="product-quantity" value="4" min="0" max="100" readonly>
                                                            <button type="button" class="plus">+</button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div>
                                                        <h5 class="fs-13 fw-medium text-muted">Light (Full width)</h5>
                                                        <div class="input-step full-width light">
                                                            <button type="button" class="minus">–</button>
                                                            <input type="number" class="product-quantity" value="6" min="0" max="100" readonly>
                                                            <button type="button" class="plus">+</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end row -->
                                        </div>

                                        <div class="row mt-4 pt-2">
                                            <h5 class="fs-13 fw-medium text-muted">Colored</h5>
                                            <div class="d-flex flex-wrap align-items-start gap-2">
                                                <div class="input-step step-primary">
                                                    <button type="button" class="minus">–</button>
                                                    <input type="number" class="product-quantity" value="6" min="0" max="100" readonly>
                                                    <button type="button" class="plus">+</button>
                                                </div>
                                                <div class="input-step step-secondary">
                                                    <button type="button" class="minus">–</button>
                                                    <input type="number" class="product-quantity" value="1" min="0" max="100" readonly>
                                                    <button type="button" class="plus">+</button>
                                                </div>
                                                <div class="input-step step-success">
                                                    <button type="button" class="minus">–</button>
                                                    <input type="number" class="product-quantity" value="3" min="0" max="100" readonly>
                                                    <button type="button" class="plus">+</button>
                                                </div>
                                                <div class="input-step step-info">
                                                    <button type="button" class="minus">–</button>
                                                    <input type="number" class="product-quantity" value="1" min="0" max="100" readonly>
                                                    <button type="button" class="plus">+</button>
                                                </div>
                                                <div class="input-step step-warning">
                                                    <button type="button" class="minus">–</button>
                                                    <input type="number" class="product-quantity" value="4" min="0" max="100" readonly>
                                                    <button type="button" class="plus">+</button>
                                                </div>
                                                <div class="input-step step-danger">
                                                    <button type="button" class="minus">–</button>
                                                    <input type="number" class="product-quantity" value="5" min="0" max="100" readonly>
                                                    <button type="button" class="plus">+</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Auto Complete</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div>
                                        <div class="row g-3">
                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="autoCompleteFruit" class="text-muted">Search Result of Fruit Names</label>
                                                    <input id="autoCompleteFruit" type="text" dir="ltr" spellcheck=false autocomplete="off" autocapitalize="off">
                                                </div>
                                            </div>
                                            <!-- end col -->
                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="autoCompleteCars" class="text-muted">Search Result of Car Names</label>
                                                    <input id="autoCompleteCars" type="text" dir="ltr" spellcheck=false autocomplete="off" autocapitalize="off">
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Multi Select</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div>
                                                <h5 class="fs-14 mb-1">Basic Example</h5>
                                                <p class="text-muted">Example of Multi Select Basic </p>
                                                <form>
                                                    <select required multiple="multiple" name="favorite_fruits" id="multiselect-basic">
                                                        <option selected>Apple</option>
                                                        <option>Banana</option>
                                                        <option selected>Blueberry</option>
                                                        <option selected>Cherry</option>
                                                        <option>Coconut</option>
                                                        <option>Grapefruit</option>
                                                        <option>Kiwi</option>
                                                        <option>Lemon</option>
                                                        <option>Lime</option>
                                                        <option>Mango</option>
                                                        <option>Orange</option>
                                                        <option>Papaya</option>
                                                    </select>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- end col -->

                                        <div class="col-lg-6">
                                            <div class="mt-4 mt-lg-0">
                                                <h5 class="fs-14 mb-1">Headers</h5>
                                                <p class="text-muted">Example of Multi Select Headers </p>
                                                <form>
                                                    <select required multiple="multiple" name="favorite_cars" id="multiselect-header">
                                                        <option>Chevrolet</option>
                                                        <option>Fiat</option>
                                                        <option>Ford</option>
                                                        <option>Honda</option>
                                                        <option selected>Hyundai</option>
                                                        <option>Kia</option>
                                                        <option>Mahindra</option>
                                                        <option>Maruti</option>
                                                        <option>Mitsubishi</option>
                                                        <option>MG</option>
                                                        <option>Nissan</option>
                                                        <option>Renault</option>
                                                        <option selected>Skoda</option>
                                                        <option selected>Tata</option>
                                                        <option selected>Toyato</option>
                                                        <option>Volkswagen</option>
                                                    </select>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mt-4">
                                                <h5 class="fs-14 mb-1">Option Groups</h5>
                                                <p class="text-muted">Example of Multi Select Option Groups</p>
                                                <form>
                                                    <select multiple="multiple" name="favorite_cars" id="multiselect-optiongroup">
                                                        <optgroup label="Skoda">
                                                            <option>Kushaq</option>
                                                            <option>Superb</option>
                                                            <option>Octavia</option>
                                                            <option>Rapid</option>
                                                        </optgroup>
                                                        <optgroup label="Volkswagen">
                                                            <option>Polo</option>
                                                            <option>Taigun</option>
                                                            <option>Vento</option>
                                                        </optgroup>
                                                    </select>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->
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

    <!-- multi.js -->
    <script src="/libs/multi.js/multi.min.js"></script>
    <!-- autocomplete js -->
    <script src="/libs/@tarekraafat/autocomplete.js/autoComplete.min.js"></script>

    <!-- init js -->
    <script src="/js/pages/form-advanced.init.js"></script>
    <!-- input spin init -->
    <script src="/js/pages/form-input-spin.init.js"></script>

    <!-- App js -->
    <script src="/js/app.js"></script>

</body>

</html>