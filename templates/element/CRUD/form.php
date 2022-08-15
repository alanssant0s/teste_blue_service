<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<?php
$controller = \Cake\View\View::getRequest()->getAttribute('params')['controller'];
?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header border-bottom-dashed">

                <div class="row g-4 align-items-center">
                    <div class="col-sm">
                        <div>
                            <h5 class="card-title mb-0"><?=$action?> <?=$model_name?></h5>
                        </div>
                    </div>
                    <div class="col-sm-auto">
                        <div>
                        </div>
                    </div>
                </div>
            </div>
            <?= $this->Flash->render() ?>
            <div class="card-body border-bottom-dashed border-bottom">

                <div class="users form content">
                    <?= $this->Form->create($model,['type' => (isset($upload) && $upload) ? 'file' : '']) ?>
                    <?= $this->element('../'.$controller.'/form') ?>
                    <?= $this->Form->button(__($action)) ?>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</div>