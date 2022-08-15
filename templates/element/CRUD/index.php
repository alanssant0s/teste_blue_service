<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<?php
$controller_default = \Cake\View\View::getRequest()->getAttribute('params')['controller'];
?>

<div class="row">
    <div class="col-lg-12">
        <?= $this->Flash->render() ?>
        <div class="card">
            <div class="card-header border-bottom-dashed">

                <div class="row g-4 align-items-center">
                    <div class="col-sm">
                        <div>
                            <h5 class="card-title mb-0">Listagem de <?=$model_name?>s</h5>
                        </div>
                    </div>
                    <div class="col-sm-auto">
                        <div>
                            <a href="/<?=$controller_default?>/add" class="btn btn-success add-btn" id="create-btn"><i class="ri-add-line align-bottom me-1"></i> Adicionar <?=$model_name?></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body border-bottom-dashed border-bottom">
                <form>
                    <div class="row g-3">
                        <div class="col-xl-8">
                            <div class="search-box">
                                <input type="text" class="form-control search" placeholder="Pesquisa...">
                                <i class="ri-search-line search-icon"></i>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-xl-4">
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="">
                                        <input type="text" class="form-control flatpickr-input" id="datepicker-range" data-provider="flatpickr" data-date-format="d M, Y" data-range-date="true" placeholder="Select date" readonly="readonly">
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-sm-6">
                                    <div>
                                        <button type="button" class="btn btn-primary w-100" onclick="SearchData();"> <i class="ri-equalizer-fill me-2 align-bottom"></i>Filtrar</button>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </form>
            </div>
            <div class="card-body">
                <div>
                    <div class="table-responsive table-card mb-1">
                        <table class="table align-middle" id="customerTable">
                            <?= $this->element('../'.$controller_default.'/table_index_header') ?>
                            <tbody class="list form-check-all">
                            <?php foreach ($models as $model): ?>
                                <?= $this->element('../'.$controller_default.'/table_index_content', ['model' => $model]) ?>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-end">
                        <ul class="pagination">
                            <?= $this->Paginator->first('<< ' . __('Primeiro'), ['class' => 'mx-2']) ?>
                            <?= $this->Paginator->prev('< ' . __('ant')) ?>
                            <?= $this->Paginator->numbers() ?>
                            <?= $this->Paginator->next(__('prox') . ' >') ?>
                            <?= $this->Paginator->last(__('Último') . ' >>') ?>
                        </ul>
                    </div>
                    <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, mostrando {{current}} registro(s) de {{count}} no total')) ?></p>

                </div>

            </div>
        </div>

    </div>
    <!--end col-->
</div>
<!--end row-->