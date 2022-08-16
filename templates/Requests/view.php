<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Request $request
 */
?>

<div class="page-content">
    <div class="container-fluid">
        <?php if($logged_user['role_id'] <= \App\Model\Entity\User::$_LAST_ADMIN):?>
            <?= $this->element('page-title', array('controller_title' => 'Pedidos', 'action_title' => 'Detalhes do Pedido', )) ?>
        <?php endif;?>
        <div class="row">
            <div class="col-xl-9">
                <?= $this->Flash->render() ?>
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h5 class="card-title flex-grow-1 mb-0">Pedido #<?=$request->id?>
                                <?php if($logged_user['role_id'] <= \App\Model\Entity\User::$_LAST_ADMIN):?>
                                    - <?=$request->user->name?>
                                <?php endif;?>
                            </h5>
                            <div class="flex-shrink-0">
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive table-card">
                            <table class="table table-nowrap align-middle table-borderless mb-0">
                                <thead class="table-light text-muted">
                                <tr>
                                    <th scope="col">Detalhe do Produto</th>
                                    <th scope="col">Preço Unitário</th>
                                    <th scope="col">Quantidade</th>
                                    <th scope="col" class="text-end">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($request->request_products as $request_product):?>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 avatar-md bg-light rounded p-1">
                                                    <?php if($request_product->product->has('imagem')):?>
                                                        <img src="<?= $request_product->product->imagem?>" alt="" class="img-fluid d-block">
                                                    <?php endif;?>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h5 class="fs-15"><a href="apps-ecommerce-product-details.html" class="link-primary"> <?=$request_product->product->name?></a></h5>
                                                    <li class="list-inline-item"><b>Categorias:</b></li>
                                                    <?php foreach ($request_product->product->product_categories as $key => $product_category):?>
                                                        <li class="list-inline-item"><?=$product_category->category->name . ($key != array_key_last($request_product->product->product_categories)?',':'')?></li>
                                                    <?php endforeach;?>
                                                    <br>
                                                    <li class="list-inline-item"><b>Características:</b></li>
                                                    <?php foreach ($request_product->product->product_features as $key => $product_feature):?>
                                                        <li class="list-inline-item"><?=$product_feature->feature->name . ($key != array_key_last($request_product->product->product_features)?',':'')?></li>
                                                    <?php endforeach;?>
                                                </div>
                                            </div>
                                        </td>
                                        <td>R$ <?= number_format($request_product->price,2,',', '.')?></td>
                                        <td><?=$request_product->qtd?></td>
                                        <td class="fw-medium text-end">
                                            R$ <?= number_format($request_product->total,2,',', '.')?>
                                        </td>
                                    </tr>
                                <?php endforeach;?>
                                <tr class="border-top border-top-dashed">
                                    <td colspan="2"></td>
                                    <td colspan="2" class="fw-medium p-0">
                                        <table class="table table-borderless mb-0">
                                            <tbody>
                                            <tr>
                                                <td>Sub Total :</td>
                                                <td class="text-end">R$ <?= number_format($request->total,2,',', '.')?></td>
                                            </tr>
                                            <tr>
                                                <td>Frete :</td>
                                                <td class="text-end">R$ 0,00</td>
                                            </tr>
                                            <tr class="border-top border-top-dashed">
                                                <th scope="row">Total :</th>
                                                <th class="text-end">R$ <?= number_format($request->total,2,',', '.')?></th>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--end card-->
            </div>
            <!--end col-->
            <div class="col-xl-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0"><i class="ri-map-pin-line align-middle me-1 text-muted"></i> Endereço de Entrega</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled vstack gap-2 fs-13 mb-0">
                            <?php if($logged_user['role_id'] <= \App\Model\Entity\User::$_LAST_ADMIN):?>
                                <li> <?=$request->user->name?> </li>
                            <?php endif;?>
                            <li><?= $request->rua?>, <?= $request->numero?></li>
                            <li><?= $request->bairro?>, <?= $request->cidade?>-<?= $request->cidade?></li>
                            <li><?= $request->cep?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->

    </div><!-- container-fluid -->
</div><!-- End Page-content -->

<?= $this->element('footer') ?>
</div>