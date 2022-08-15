<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row gx-lg-5">
                                <div class="col-xl-4 col-md-8 mx-auto">
                                    <div class="product-img-slider sticky-side-div">
                                        <div class="swiper product-nav-slider mt-2">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <?php if($product->has('imagem')):?>
                                                        <div class="nav-slide-item">
                                                            <img src="<?=$product->imagem?>" alt="" class="img-fluid d-block" />
                                                        </div>
                                                    <?php endif;?>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end swiper nav slide -->
                                    </div>
                                </div>
                                <!-- end col -->

                                <div class="col-xl-8">
                                    <div class="mt-xl-0 mt-5">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <h4><?=$product->name?></h4>
                                                <div class="hstack gap-3 flex-wrap">
                                                    <?php foreach ($product->product_categories as $key => $product_category):?>
                                                        <div>
                                                            <?= $this->Html->link(__($product_category->category->name),
                                                                [
                                                                    'controller' => 'products',
                                                                    'action' => 'home',
                                                                    '?' => ['category_id' => $product_category->category_id]],
                                                                [
                                                                    'class' => 'text-primary d-block',
                                                                ]) ?>
                                                        </div>
                                                        <?php if ($key != array_key_last($product->product_categories)):?>
                                                            <div class="vr"></div>
                                                        <?php endif;?>
                                                    <?php endforeach;?>

                                                </div>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-lg-3 col-sm-6">
                                                <div class="p-2 border border-dashed rounded">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-sm me-2">
                                                            <div class="avatar-title rounded bg-transparent text-success fs-24">
                                                                <i class="ri-money-dollar-circle-fill"></i>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <p class="text-muted mb-1">Preço :</p>
                                                            <h5 class="mb-0">R$ <?=$product->price?></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 header-item">
                                                <button onclick="addToCart(<?=$product->id?>,'<?=$product->name?>',1,<?=$product->price?>, 'products/view/<?=$product->id?>')" class="btn btn-success w-100"><i class=" ri-shopping-cart-2-fill align-bottom me-1"></i> Adicionar ao Carrinho</button>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 header-item">
                                                <?= $this->Html->link(__('<i class="ri-shopping-bag-fill align-bottom me-1"></i> Comprar'),
                                                    [
                                                        'controller' => 'carts',
                                                        'action' => 'finsh', $product->id],
                                                    [
                                                        'class' => 'btn btn-primary w-100',
                                                        'escape' => false
                                                    ]) ?>
                                            </div>



                                        </div>


                                        <div class="mt-4 text-muted">
                                            <h5 class="fs-14">Descrição :</h5>
                                            <p><?=$product->description?></p>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="mt-3">
                                                    <h5 class="fs-14">Características :</h5>
                                                    <ul class="list-unstyled">
                                                        <?php foreach ($product->product_features as $product_feature):?>
                                                            <li class="py-1">

                                                                <?= $this->Html->link(__("<i class='mdi mdi-circle-medium me-1 text-muted align-middle'></i> ".$product_feature->feature->name),
                                                                    [
                                                                        'controller' => 'products',
                                                                        'action' => 'home',
                                                                        '?' => ['feature_id' => $product_feature->feature_id]],
                                                                    [
                                                                        'class' => 'text-primary d-block',
                                                                        'escape' => false
                                                                    ]) ?>
                                                            </li>
                                                        <?php endforeach;?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
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

<?php $this->append('scriptBottom'); ?>
<!--jquery cdn-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!--select2 cdn-->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $('.ecommerce_select').select2({
    });

</script>

<?php $this->end(); ?>
