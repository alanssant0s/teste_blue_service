<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category[]|\Cake\Collection\CollectionInterface $categories
 */
?>

<div class="page-content">
    <div class="container-fluid">

        <?= $this->element('page-title', array('controller_title' => 'Categorias', 'action_title' => 'Listagem de Categorias', )) ?>

        <?= $this->element('CRUD/index', ['model_name' => 'Categoria', 'models' => $categories]) ?>

    </div>
    <!-- container-fluid -->
</div>
