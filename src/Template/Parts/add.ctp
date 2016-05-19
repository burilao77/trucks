<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Parts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="parts form large-9 medium-8 columns content">
    <?= $this->Form->create($part, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Add Part') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('photo', ['type' => 'file']);
            echo $this->Form->input('description');
            echo $this->Form->input('price');
            echo $this->Form->input('category_id', ['options' => $categories]);
            echo $this->Form->input('orders._ids', ['options' => $orders, 'type' => 'hidden']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
