

<tr class="gridjs-tr">
    <td class="gridjs-td"><span><?=$model->id?></span></td>
    <td data-column-id="product" class="gridjs-td">
      <span>
         <div class="d-flex align-items-center">
            <div class="flex-shrink-0 me-3">
               <div class="avatar-sm bg-light rounded p-1">
                   <?php if(isset($model->imagem)):?>
                        <img src="<?=$model->imagem?>" alt="" class="img-fluid d-block">
                   <?php endif;?>
               </div>
            </div>
            <div class="flex-grow-1">
               <h5 class="fs-14 mb-1"><a href="apps-ecommerce-product-details.html" class="text-dark"><?=$model->name?></a></h5>
                <?php if($model->has('ProductCategories')):?>
                    <p class="text-muted mb-0">Category : <span class="fw-medium">Fashion</span></p>
                <?php endif;?>
            </div>
         </div>
      </span>
    </td>
    <td class="gridjs-td"><span>R$ <?=$model->price?></span></td>
    <td class="gridjs-td"><span><?=$model->created?></span></td>
    <td class="actions gridjs-td">
        <ul class="list-inline hstack gap-2 mb-0">
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