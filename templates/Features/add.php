<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Feature $feature
 */
?>
<div class="page-content">
    <div class="container-fluid">

        <?= $this->element('page-title', array('controller_title' => 'Caracteristicas', 'action_title' => 'Adicionar Caracteristica', )) ?>

        <?= $this->element('CRUD/form', array('action' => 'Adicionar', 'model_name' => 'Caracteristica', 'model' => $feature)) ?>
    </div>
</div>