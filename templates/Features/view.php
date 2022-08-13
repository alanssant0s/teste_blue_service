<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Feature $feature
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Feature'), ['action' => 'edit', $feature->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Feature'), ['action' => 'delete', $feature->id], ['confirm' => __('Are you sure you want to delete # {0}?', $feature->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Features'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Feature'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="features view content">
            <h3><?= h($feature->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($feature->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($feature->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($feature->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($feature->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= h($feature->deleted) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Product Features') ?></h4>
                <?php if (!empty($feature->product_features)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Producty Id') ?></th>
                            <th><?= __('Feature Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($feature->product_features as $productFeatures) : ?>
                        <tr>
                            <td><?= h($productFeatures->producty_id) ?></td>
                            <td><?= h($productFeatures->feature_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ProductFeatures', 'action' => 'view', $productFeatures->producty_id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ProductFeatures', 'action' => 'edit', $productFeatures->producty_id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProductFeatures', 'action' => 'delete', $productFeatures->producty_id], ['confirm' => __('Are you sure you want to delete # {0}?', $productFeatures->producty_id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
