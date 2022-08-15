<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>

<fieldset class="mb-4">
    <div class="row gy-4">
        <?= $this->Form->hidden('id')?>
        <div class="col-xl-6 col-md-6"><?=$this->Form->control('name',['label' => 'Nome*', 'required']); ?></div>
        <div class="col-xl-6 col-md-6"><?=$this->Form->control('price',['label' => 'Preço*', 'required']); ?></div>
        <div class="col-xl-6 col-md-6">
            <label for="choices-multiple-remove-button" class="form-label">Categoria *</label>
            <?=$this->Form->select('categories', $categories, ['id' => 'category_id' ,'label' => 'Categorias*', 'require', 'style' => 'width: 100%;', 'multiple'=>'multiple', 'class' => 'mult_select', 'style' => 'width: 100%;', 'multiple'=>'multiple', 'class' => 'select_sys_ecommerce']); ?>
        </div>
        <div class="col-xl-6 col-md-6">
            <label for="choices-multiple-remove-button" class="form-label">Características *</label>
            <?=$this->Form->select('features', $features, ['id' => 'feature_id', 'label' => 'Características*', 'require', 'style' => 'width: 100%;', 'multiple'=>'multiple', 'class' => 'select_sys_ecommerce']); ?>
        </div>
        <div class="col-xl-12"><?=$this->Form->control('description',['label' => 'Descrição*', 'required']); ?></div>
        <div class="col-xl-12">
            <?=$this->Form->control('imagem_upload', ['type' => 'file', 'label' => 'Foto do Produto', 'accept'=>'image/*']);?>
        </div>
    </div>
</fieldset>




<?php $this->append('scriptBottom'); ?>
<!--jquery cdn-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!--select2 cdn-->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $('.select_sys_ecommerce').select2({
    });

    $('#category_id').val([<?php if($product->product_categories) foreach ($product->product_categories as $product_category) {echo "'$product_category->category_id',";}?>]);
    $('#category_id').trigger('change');

    $('#feature_id').val([<?php if($product->product_features) foreach ($product->product_features as $product_feature) {echo "'$product_feature->feature_id',";}?>]);
    $('#feature_id').trigger('change');
</script>

<?php $this->end(); ?>
