<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Feature[]|\Cake\Collection\CollectionInterface $features
 */
?>
<div class="features index content">
    <?= $this->Html->link(__('New Feature'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Features') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('deleted') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($features as $feature): ?>
                <tr>
                    <td><?= $this->Number->format($feature->id) ?></td>
                    <td><?= h($feature->name) ?></td>
                    <td><?= h($feature->created) ?></td>
                    <td><?= h($feature->modified) ?></td>
                    <td><?= h($feature->deleted) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $feature->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $feature->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $feature->id], ['confirm' => __('Are you sure you want to delete # {0}?', $feature->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
