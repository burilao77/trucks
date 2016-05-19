<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Vehicles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="vehicles form large-9 medium-8 columns content">
    <?= $this->Form->create($vehicle, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Add Vehicle') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('photo', ['type' => 'file']);

            echo $this->Form->input('description');
            echo $this->Form->input('price');
            echo $this->Form->input('type_id', ['options' => $types]);
            echo $this->Form->input('orders._ids', ['options' => $orders, 'type' => 'hidden']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
