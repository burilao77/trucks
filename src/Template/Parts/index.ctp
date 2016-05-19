<?php echo $this->element('menu/navar_parts') ?>
<div class="about-top">
<div class="container">
<div class="about-info wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
<h3>Repuestos y Partes</h3>

</div>
    <div class="col-md-6">
        <div id="custom-search-input">
            <div class="input-group col-md-12">
                <span class="input-group-btn">
        <?= $this->Util->search($this->Form) ?>
                </span>

        <?php
           if($search = $this->request->query('q')){
               echo 'Filtrando por: '.$search.' - '.$this->Html->link(__('Ver todos'), ['action' => 'index']);
           }
        ?>
            </div>
        </div>
    </div>



<div class="vehicles index large-12 medium-8 columns ">
    <table class="table table-bordered">
        <thead>
            <tr>

                <th><?= $this->Paginator->sort('Nombre') ?></th>
                <th><?= $this->Paginator->sort('Foto') ?></th>
                <th><?= $this->Paginator->sort('Precio') ?></th>
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
                <td><?= $part->has('category') ? $this->Html->link($part->category->title, ['controller' => 'Categories', 'action' => 'view', $part->category->id]) : '' ?></td>

                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $part->id]) ?>
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