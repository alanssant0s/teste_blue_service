<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category[]|\Cake\Collection\CollectionInterface $categories
 */
?>

<div class="page-content">
    <div class="container-fluid">

        <?= $this->element('page-title', array('controller_title' => 'Usuários', 'action_title' => 'Listagem de Usuários', )) ?>

        <?= $this->element('CRUD/index', ['model_name' => 'Usuário', 'models' => $users]) ?>

    </div>
    <!-- container-fluid -->
</div>
