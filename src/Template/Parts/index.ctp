<?php echo $this->element('menu/navar_parts') ?>
<div class="about-top">
<div class="container">
<div class="about-info wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
<?= $this->Flash->render('auth') ?>
<h3>Repuestos y Partes</h3>

<div class="col-md-6">
        <div id="custom-search-input">
            <div class="input-group col-md-12">



       <?=
         $this->Form->create(' ',['url' => ['controller' => 'Parts','action' => 'index'],
        'type' => 'get']);?>

     <?= $this->Form->input('P', ['class'=>'form-control input-lg','placeholder' => 'Buscar...', 'label' => false]);?>

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
            <?php foreach ($parts as $part): ?>
            <tr>

                <td><?= h($part->name) ?></td>
                <td><?= $this->Html->image('../files/Parts/photo/' .  '/' . $part->photo) ?></td>
                <td><?= $this->Number->format($part->price) ?></td>
                <td><?= $this->Text->autoParagraph(h($part->description)); ?></td>
                <td><?= $part->has('category') ? $this->Html->link($part->category->title, ['controller' => 'Categories', 'action' => 'view', $part->category->id]) : '' ?></td>

                <td class="actions">
                    
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $part->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $part->id], ['confirm' => __('Are you sure you want to delete # {0}?', $part->id)]) ?>
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