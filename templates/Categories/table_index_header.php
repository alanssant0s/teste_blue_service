<thead class="table-light text-muted">
<tr>
    <th><?= $this->Paginator->sort('id', 'ID') ?></th>
    <th><?= $this->Paginator->sort('name', 'Nome') ?></th>
    <th><?= $this->Paginator->sort('created', 'Data de Cadastro') ?></th>
    <th class="actions"><?= __('Actions') ?></th>
</tr>
</thead>