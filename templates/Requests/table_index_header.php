<thead class="table-light text-muted">
<tr>
    <th><?= $this->Paginator->sort('id', 'ID') ?></th>
    <th><?= $this->Paginator->sort('qtd', 'Quantidade de Itens') ?></th>
    <th><?= $this->Paginator->sort('total', 'Total') ?></th>
    <th class="actions"><?= __('Actions') ?></th>
</tr>
</thead>