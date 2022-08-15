<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $produto
 */
?>
<div class="page-content">
    <div class="container-fluid">

        <?= $this->element('page-title', array('controller_title' => 'Produtos', 'action_title' => 'Editar Produto', )) ?>

        <?= $this->element('CRUD/form', array('action' => 'Cadastrar', 'model_name' => 'Produto', 'model' => $product, 'upload' => true)) ?>
    </div>
</div>