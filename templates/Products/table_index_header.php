<thead class="table-light text-muted">
<tr>
    <th><?= $this->Paginator->sort('id', 'ID', ['class' => 'gridjs-th gridjs-th-sort']) ?></th>
    <th><?= $this->Paginator->sort('name', 'Nome') ?></th>
    <th><?= $this->Paginator->sort('price', 'Preço') ?></th>
    <th><?= $this->Paginator->sort('created', 'Data de Cadastro') ?></th>
    <th class="actions"><?= __('Actions') ?></th>
</tr>
</thead>