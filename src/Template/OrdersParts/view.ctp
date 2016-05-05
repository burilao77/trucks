<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Orders Part'), ['action' => 'edit', $ordersPart->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Orders Part'), ['action' => 'delete', $ordersPart->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ordersPart->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Orders Parts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Orders Part'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Parts'), ['controller' => 'Parts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Part'), ['controller' => 'Parts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ordersParts view large-9 medium-8 columns content">
    <h3><?= h($ordersPart->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Order') ?></th>
            <td><?= $ordersPart->has('order') ? $this->Html->link($ordersPart->order->id, ['controller' => 'Orders', 'action' => 'view', $ordersPart->order->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Part') ?></th>
            <td><?= $ordersPart->has('part') ? $this->Html->link($ordersPart->part->name, ['controller' => 'Parts', 'action' => 'view', $ordersPart->part->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($ordersPart->id) ?></td>
        </tr>
    </table>
</div>
