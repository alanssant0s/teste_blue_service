<thead class="table-light text-muted">
<tr>
    <th><?= $this->Paginator->sort('id', 'ID') ?></th>
    <th><?= $this->Paginator->sort('created', 'Data') ?></th>
    <?php if($logged_user['role_id'] <= \App\Model\Entity\User::$_LAST_ADMIN):?>
        <th><?= $this->Paginator->sort('user_id', 'Cliente') ?></th>
    <?php endif;?>
    <th><?= $this->Paginator->sort('qtd', 'Quantidade de Itens') ?></th>
    <th><?= $this->Paginator->sort('total', 'Total') ?></th>
    <th class="actions"><?= __('Actions') ?></th>
</tr>
</thead>