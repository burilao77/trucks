<?= $this->element('menu/navar_index') ?>
<div class="about-top">
<div class="container">
<div class="about-info wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
<?= $this->Flash->render('auth') ?>
<h3>Vehiculos y Maquinaria</h3>

</div>

<div class="col-md-6">
        <div id="custom-search-input">
            <div class="input-group col-md-12">



       <?=
         $this->Form->create(' ',['url' => ['controller' => 'Vehicles','action' => 'index'],
        'type' => 'get']);?>

     <?= $this->Form->input('V', ['class'=>'form-control input-lg','placeholder' => 'Buscar...', 'label' => false]);?>

          </div>
        </div>
          </div>
    <div class="large-10 ">
     <?= $this->Form->submit(__('Buscar'),['class' => 'btn btn-info btn-lg']);?>


     <?= $this->Html->link('Reset', ['action' => 'index'],['class' => 'btn btn-info btn-lg']);?>

     <?= $this->Form->end();?>
</div>


<div class="vehicles index large-12 medium-8 columns ">
<table class="table table-bordered">
    <thead>
            <tr>

                <th><?= $this->Paginator->sort('Nombre') ?></th>
                <th><?= $this->Paginator->sort('Foto') ?></th>
                <th><?= $this->Paginator->sort('Precio') ?></th>
                <th><?= $this->Paginator->sort('Descripcion') ?></th>


                <th><?= $this->Paginator->sort('Categoria') ?></th>


                <th class="actions"><?= __('Acciones') ?></th>
            </tr>
    </thead>
    <tbody>
            <?php foreach ($vehicles as $vehicle): ?>
            <tr>

                <td><?= h($vehicle->name) ?></td>
                <td><?= $this->Html->image('../files/Vehicles/photo/' .  '/' . $vehicle->photo) ?></td>
                <td><?= $this->Number->format($vehicle->price) ?></td>
                <td><?= $this->Text->autoParagraph(h($vehicle->description)); ?></td>

                <td><?= $vehicle->has('type') ? $this->Html->link($vehicle->type->title, ['controller' => 'Types', 'action' => 'view', $vehicle->type->id]) : '' ?></td>

                <td class="actions">
                   
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $vehicle->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $vehicle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vehicle->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
    </tbody>
</table>

<nav>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('Atras')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
        </ul>
    </div>
</nav>

</div>
</div>
</div>
<?= $this->element('menu/footer') ?>

