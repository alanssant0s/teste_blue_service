<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="page-content">
    <div class="container-fluid">

        <?= $this->element('page-title', array('controller_title' => 'Categorias', 'action_title' => 'Adicionar Categoria', )) ?>

        <?= $this->element('CRUD/form', array('action' => 'Adicionar', 'model_name' => 'Categoria', 'model' => $category)) ?>
    </div>
</div>