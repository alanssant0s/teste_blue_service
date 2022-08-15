<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category[]|\Cake\Collection\CollectionInterface $categories
 */
?>

<div class="page-content">
    <div class="container-fluid">

        <?= $this->element('page-title', array('controller_title' => 'Minhas Compras', 'action_title' => 'Listagem de Compras', )) ?>

        <?= $this->element('CRUD/index', ['model_name' => 'Compra', 'models' => $requests]) ?>

    </div>
    <!-- container-fluid -->
</div>
