<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="page-content">
    <div class="container-fluid">

        <?= $this->element('page-title', array('controller_title' => 'Usuários', 'action_title' => 'Adicionar Usuário', )) ?>

        <?= $this->element('CRUD/form', array('action' => 'Adicionar', 'model_name' => 'Usuário', 'model' => $user)) ?>
    </div>
</div>