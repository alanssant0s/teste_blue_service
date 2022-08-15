<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Feature[]|\Cake\Collection\CollectionInterface $features
 */
?>

<div class="page-content">
    <div class="container-fluid">

        <?= $this->element('page-title', array('controller_title' => 'Caracteristicas', 'action_title' => 'Listagem de Caracteristicas', )) ?>

        <?= $this->element('CRUD/index', ['model_name' => 'Caracteristica', 'models' => $features]) ?>

    </div>
    <!-- container-fluid -->
</div>
