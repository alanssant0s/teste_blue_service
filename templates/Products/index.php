<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 */
?>

<div class="page-content">
    <div class="container-fluid">

        <?= $this->element('page-title', array('controller_title' => 'Produtos', 'action_title' => 'Listagem de Produtos', )) ?>

        <?= $this->element('CRUD/index', ['model_name' => 'Produto', 'models' => $products]) ?>

    </div>
    <!-- container-fluid -->
</div>
