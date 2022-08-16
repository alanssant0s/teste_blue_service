<tr>
    <td>#<?= $this->Number->format($model->id) ?></td>
    <?php if($logged_user['role_id'] <= \App\Model\Entity\User::$_LAST_ADMIN):?>
        <td><?= $model->user->name ?></td>
    <?php endif;?>
    <td><?= $model->created ?></td>
    <td><?= sizeof($model->request_products) ?></td>
    <td><?= number_format($model->total ,2,',', '.')?></td>
    <td class="actions">
        <ul class="list-inline hstack gap-2 mb-0">
            <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Visualizar">
                <?= $this->Html->link(__('<i class="ri-eye-fill fs-16"></i>'),
                    ['action' => 'view', $model->id],
                    [
                        'class' => 'text-primary d-inline-block edit-item-btn',
                        'escape' => false
                    ]) ?>
            </li>
        </ul>

    </td>
</tr>