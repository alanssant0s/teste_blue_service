<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cart $cart
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $products
 */
?>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <?= $this->Form->create($user) ?>
            <div class="row mb-3">
                <div class="col-xl-7">
                    <div class="row align-items-center gy-3 mb-3">
                        <div class="col-sm">
                            <div>
                                <h5 class="fs-14 mb-0">Seu Carrinho (<?=sizeof($user->carts)?> itens)</h5>
                            </div>
                        </div>
                        <div class="col-sm-auto">
                            <a href="/" class="link-primary text-decoration-underline">Continuar comprando</a>
                        </div>
                    </div>

                    <?php $total = 0; foreach ($user->carts as $i => $cart): $total += $cart->total;?>
                        <div class="card product">
                            <div class="card-body">
                                <div class="row gy-3">
                                    <div class="col-sm-auto">
                                        <div class="avatar-lg bg-light rounded p-1">
                                            <?php if($cart->product->has('imagem')):?>
                                                <img src="<?= $cart->product->imagem?>" alt="" class="img-fluid d-block">
                                            <?php endif;?>
                                        </div>

                                    </div>
                                    <div class="col-sm">
                                        <h5 class="fs-14 text-truncate">
                                            <?= $this->Html->link(__($cart->product->name),
                                                [
                                                    'controller' => 'products',
                                                    'action' => 'view',
                                                    '?' => ['category_id' => $cart->product_id]],
                                                [
                                                    'class' => 'text-dark',
                                                ]) ?>
                                        </h5>
                                        <ul class="list-inline text-muted mb-1">
                                            <li class="list-inline-item"><b>Quantidade:</b> <?=$cart->qtd?></li>
                                        </ul>
                                        <ul class="list-inline text-muted mb-1">
                                            <li class="list-inline-item"><b>Categorias:</b></li>
                                            <?php foreach ($cart->product->product_categories as $key => $product_category):?>
                                                <li class="list-inline-item"><?=$product_category->category->name . ($key != array_key_last($cart->product->product_categories)?',':'')?></li>
                                            <?php endforeach;?>
                                        </ul>
                                        <ul class="list-inline text-muted">
                                            <li class="list-inline-item"><b>Características:</b></li>
                                            <?php foreach ($cart->product->product_features as $key => $product_feature):?>
                                                <li class="list-inline-item"><?=$product_feature->feature->name . ($key != array_key_last($cart->product->product_features)?',':'')?></li>
                                            <?php endforeach;?>
                                        </ul>


                                        <div class="">
                                            <?= $this->Form->hidden("carts.$i.product_id")?>
                                            <?= $this->Form->hidden("carts.$i.price")?>
                                            <?= $this->Form->hidden("carts.$i.qtd")?>
                                            <?= $this->Form->hidden("carts.$i.total")?>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto">
                                        <div class="text-lg-end">
                                            <p class="text-muted mb-1">Valor Unitário:</p>
                                            <h5 class="fs-14">R$<span id="ticket_price" class="product-price"><?=number_format($cart->price,2,',', '.')?></span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- card body -->
                            <div class="card-footer">
                                <div class="row align-items-center gy-3">
                                    <div class="col-sm">
                                        <div class="d-flex flex-wrap my-n1">
                                            <div>
                                                <a href="#" class="d-block text-body p-1 px-2" data-bs-toggle="modal" data-bs-target="#removeItemModal"><i class="ri-delete-bin-fill text-muted align-bottom me-1"></i> Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto">
                                        <div class="d-flex align-items-center gap-2 text-muted">
                                            <div>Total :</div>
                                            <h5 class="fs-14 mb-0">R$<span class="product-line-price"><?= number_format($cart->total,2,',', '.')?></span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card footer -->
                        </div>
                        <!-- end card -->
                    <?php endforeach;?>


                    <div class="text-end mb-4">
                        <button type="submit" class="btn btn-success btn-label right ms-auto"><i class="ri-arrow-right-line label-icon align-bottom fs-16 ms-2"></i> Finalizar Pedido</button>
                    </div>

                </div>
                <!-- end col -->

                <div class="col-xl-5">
                    <div class="sticky-side-div">
                        <div class="card">
                            <div class="card-header border-bottom-dashed">
                                <h5 class="card-title mb-0">Resumo do Pedido</h5>
                            </div>
                            <div class="card-body pt-2">
                                <div class="table-responsive">
                                    <table class="table table-borderless mb-0">
                                        <tbody>
                                        <tr>
                                            <td>Sub Total :</td>
                                            <td class="text-end" id="cart-subtotal">R$ <?= number_format($total,2,',', '.')?></td>
                                        </tr>
                                        <tr>
                                            <td>Frete :</td>
                                            <td class="text-end" id="cart-shipping">R$ 00,00</td>
                                        </tr>
                                        <tr class="table-active">
                                            <th>Total :</th>
                                            <td class="text-end">
                                                            <span class="fw-semibold" id="cart-total">
                                                                R$ <?= number_format($total,2,',', '.')?>
                                                            </span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- end table-responsive -->
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header border-bottom-dashed">
                                <h5 class="card-title mb-0">Dados de Entrega</h5>
                            </div>
                            <div class="card-body pt-2">
                                <div class="row">
                                    <div class="col-md-9 col-sm-12 mb-3">
                                        <?=$this->Form->control('rua',['label' => 'Rua*', 'required']); ?>
                                    </div>

                                    <div class="col-md-3 col-sm-12 mb-3">
                                        <?=$this->Form->control('numero',['label' => 'Número*', 'required']); ?>
                                    </div>
                                    <div class="col-md-6 col-sm-12 mb-3">
                                        <?=$this->Form->control('bairro',['label' => 'Bairro*', 'required']); ?>
                                    </div>
                                    <div class="col-md-6 col-sm-12 mb-3">
                                        <?=$this->Form->control('cidade',['label' => 'Cidade*', 'required']); ?>
                                    </div>
                                    <div class="col-md-6 col-sm-12 mb-3">
                                        <?=$this->Form->control('cep',['label' => 'CEP*', 'required']); ?>
                                    </div>
                                    <div class="col-md-6 col-sm-12 mb-3">
                                        <?=$this->Form->control('estado',['label' => 'ESTADO*', 'required', 'options' => \App\Model\Entity\User::$_ESTADOS]); ?>
                                    </div>
                                </div>
                                <!-- end table-responsive -->
                            </div>
                        </div>
                    </div>
                    <!-- end stickey -->

                </div>
            </div>
            <?= $this->Form->end() ?>
            <!-- end row -->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <?= $this->element('footer') ?>
</div>