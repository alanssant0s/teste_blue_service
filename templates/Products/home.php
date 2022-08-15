<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 */
?>
<div class="main-content">
    <?= $this->Flash->render() ?>
    <div class="page-content">
        <div class="container-fluid">


            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex align-items-center">
                                <h5 class="card-title mb-0 flex-grow-1">Listagem de Produtos</h5>
                                <div>
                                    <a class="btn btn-success" data-bs-toggle="collapse" href="#collapseExample"><i class="ri-filter-2-line align-bottom"></i> Filters</a>
                                </div>
                            </div>
                            <div class="collaps show" id="collapseExample">
                                <?= $this->Form->create($q, ['method' => 'GET']) ?>
                                <div class="row mt-3 g-3">
                                    <div class="col">
                                        <h6 class="text-uppercase fs-12 mb-2">Buscar</h6>
                                        <input name="name" type="text" value="<?= $q->name?>" class="form-control" placeholder="Search product name" autocomplete="off" id="searchProductList">
                                    </div>
                                    <div class="col">
                                        <h6 for="choices-multiple-remove-button" class="form-label">Selecione uma Categoria</h6>
                                        <?=$this->Form->select('category_id', $categories,
                                            ['id' => 'category_id', 'require', 'class' => 'ecommerce_select form-select', 'style' => 'width: 100%;', 'empty' => 'Selecione uma categoria']
                                        ); ?>
                                    </div>
                                    <div class="col">
                                        <h6 for="choices-multiple-remove-button" class="form-label">Selecione uma Característica</h6>
                                        <?=$this->Form->select('feature_id', $features,
                                            ['id' => 'feature_id' ,'require', 'class' => 'ecommerce_select form-select', 'style' => 'width: 100%;', 'empty' => 'Selecione uma característica']
                                        ); ?>
                                    </div>
                                    <div class="col">
                                        <?= $this->Form->button(__("Pesquisar"), ['class' => 'btn btn-primary header-item']) ?>
                                    </div>
                                </div>
                                <?= $this->Form->end() ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row row-cols-xxl-5 row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-1" id="explorecard-list">
                <?php foreach ($products as $product): ?>
                    <div class="col list-element">
                        <div class="card explore-box card-animate">
                            <div class="explore-place-bid-img">
                                <img src="assets/images/nft/gif/img-3.gif" alt="" class="card-img-top explore-img">
                                <div class="bg-overlay"></div>
                                <div class="place-bid-btn my-2">
                                    <?= $this->Html->link(__('<i class="ri-eye-fill align-bottom me-1"></i> Ver Detallhes'),
                                        ['action' => 'view', $product->id],
                                        [
                                            'class' => 'btn btn-primary',
                                            'escape' => false
                                        ]) ?>
                                    <button onclick="addToCart(<?=$product->id?>,'<?=$product->name?>',1,<?=$product->price?>, 'products/home/')" class="btn btn-success mt-2"><i class=" ri-shopping-cart-2-fill align-bottom me-1"></i> Adicionar ao Carrinho</button>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="mb-1">
                                    <?= $this->Html->link(__($product->name),
                                        ['action' => 'view', $product->id]) ?>
                                </h5>
                                <p class="text-muted mb-0">
                                    <?php if(isset($product->product_categories)) foreach ($product->product_categories as $key => $product_category):?>
                                        <?=$product_category->category->name . ($key != array_key_last($product->product_categories)?', ':'')?>
                                    <?php endforeach;?>
                                </p>
                            </div>
                            <div class="card-footer border-top border-top-dashed">
                                <div class="d-flex align-items-center">
                                    <h5 class="flex-shrink-0 fs-14 text-primary mb-0">R$ <?= number_format($product->price,2,'.', '.')?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <!-- end row -->
            <div class="d-flex justify-content-end">
                <ul class="pagination">
                    <?= $this->Paginator->first('<< ' . __('Primeiro'), ['class' => 'mx-2']) ?>
                    <?= $this->Paginator->prev('< ' . __('ant')) ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next(__('prox') . ' >') ?>
                    <?= $this->Paginator->last(__('Último') . ' >>') ?>
                </ul>
            </div>
            <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, mostrando {{current}} registro(s) de {{count}} no total')) ?></p>
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <?= $this->element('footer') ?>
</div>

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
