<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Orders Part'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Parts'), ['controller' => 'Parts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Part'), ['controller' => 'Parts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ordersParts index large-9 medium-8 columns content">
    <h3><?= __('Orders Parts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('order_id') ?></th>
                <th><?= $this->Paginator->sort('part_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ordersParts as $ordersPart): ?>
            <tr>
                <td><?= $this->Number->format($ordersPart->id) ?></td>
                <td><?= $ordersPart->has('order') ? $this->Html->link($ordersPart->order->id, ['controller' => 'Orders', 'action' => 'view', $ordersPart->order->id]) : '' ?></td>
                <td><?= $ordersPart->has('part') ? $this->Html->link($ordersPart->part->name, ['controller' => 'Parts', 'action' => 'view', $ordersPart->part->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ordersPart->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ordersPart->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ordersPart->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ordersPart->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
