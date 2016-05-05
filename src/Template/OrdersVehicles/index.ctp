<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Orders Vehicle'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vehicles'), ['controller' => 'Vehicles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vehicle'), ['controller' => 'Vehicles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ordersVehicles index large-9 medium-8 columns content">
    <h3><?= __('Orders Vehicles') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('order_id') ?></th>
                <th><?= $this->Paginator->sort('vehicle_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ordersVehicles as $ordersVehicle): ?>
            <tr>
                <td><?= $this->Number->format($ordersVehicle->id) ?></td>
                <td><?= $ordersVehicle->has('order') ? $this->Html->link($ordersVehicle->order->id, ['controller' => 'Orders', 'action' => 'view', $ordersVehicle->order->id]) : '' ?></td>
                <td><?= $ordersVehicle->has('vehicle') ? $this->Html->link($ordersVehicle->vehicle->name, ['controller' => 'Vehicles', 'action' => 'view', $ordersVehicle->vehicle->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ordersVehicle->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ordersVehicle->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ordersVehicle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ordersVehicle->id)]) ?>
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
