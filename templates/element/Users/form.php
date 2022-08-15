<fieldset class="mb-4">
    <div class="row gy-4">
        <?= $this->Form->hidden('id')?>
        <div class="col-xl-4 col-md-6"><?=$this->Form->control('name',['label' => 'Nome*', 'require']); ?></div>
        <div class="col-xl-4 col-md-6"><?=$this->Form->control('email',['label' => 'Email*']); ?></div>
        <div class="col-xl-4 col-md-6"><?=$this->Form->control('password',['label' => 'Senha*']); ?></div>
        <div class="col-xl-4 col-md-6"><?=$this->Form->control('role_id',['label' => 'Função*', 'options' => \App\Model\Entity\User::$_ROLES]); ?></div>
    </div>
</fieldset>