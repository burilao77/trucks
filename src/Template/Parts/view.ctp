<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Part'), ['action' => 'edit', $part->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Part'), ['action' => 'delete', $part->id], ['confirm' => __('Are you sure you want to delete # {0}?', $part->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Parts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Part'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="parts view large-9 medium-8 columns content">
    <h3><?= h($part->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($part->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Photo') ?></th>
            <td><?= $this->Html->link('../files/Parts/photo/' . '/' . $part->photo) ?></td>
        </tr>
        <tr>
            <th><?= __('Category') ?></th>
            <td><?= $part->has('category') ? $this->Html->link($part->category->title, ['controller' => 'Categories', 'action' => 'view', $part->category->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($part->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Price') ?></th>
            <td><?= $this->Number->format($part->price) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($part->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($part->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($part->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Orders') ?></h4>
        <?php if (!empty($part->orders)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Customer') ?></th>
                <th><?= __('Email') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($part->orders as $orders): ?>
            <tr>
                <td><?= h($orders->id) ?></td>
                <td><?= h($orders->customer) ?></td>
                <td><?= h($orders->email) ?></td>
                <td><?= h($orders->user_id) ?></td>
                <td><?= h($orders->created) ?></td>
                <td><?= h($orders->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Orders', 'action' => 'view', $orders->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Orders', 'action' => 'edit', $orders->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Orders', 'action' => 'delete', $orders->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orders->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
