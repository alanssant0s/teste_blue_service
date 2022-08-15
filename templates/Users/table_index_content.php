<tr>
    <td><?= $this->Number->format($model->id) ?></td>
    <td><?= h($model->name) ?></td>
    <td><?= h($model->email) ?></td>
    <td>
        <span class="badge badge-soft-<?= \App\Model\Entity\User::$_ROLES_COLORS[$model->role_id] ?> text-uppercase"><?= \App\Model\Entity\User::$_ROLES[$model->role_id] ?></span>
    </td>
    <td><?= h($model->created) ?></td>
    <td class="actions">
        <ul class="list-inline hstack gap-2 mb-0">
            <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Editar">
                <?= $this->Html->link(__('<i class="ri-eye-fill fs-16"></i>'),
                    ['action' => 'view', $model->id],
                    [
                        'class' => 'text-primary d-inline-block edit-item-btn',
                        'escape' => false
                    ]) ?>
            </li>
            <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Editar">
                <?= $this->Html->link(__('<i class="ri-pencil-fill fs-16"></i>'),
                    ['action' => 'edit', $model->id],
                    [
                        'class' => 'text-primary d-inline-block edit-item-btn',
                        'escape' => false
                    ]) ?>
            </li>
            <li class="list-inline-item delete" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remover">
                <?= $this->Form->postLink(__('<i class="ri-delete-bin-5-fill fs-16"></i>'),
                    ['action' => 'delete', $model->id],
                    [
                        'confirm' => __('Realmente deseja deletar o #{0} {1}?', $model->id, $model->name),
                        'class' => 'text-danger d-inline-block remove-item-btn',
                        'escape' => false
                    ]) ?>
            </li>
        </ul>

    </td>
</tr>