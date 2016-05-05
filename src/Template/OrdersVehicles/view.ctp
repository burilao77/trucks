<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Orders Vehicle'), ['action' => 'edit', $ordersVehicle->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Orders Vehicle'), ['action' => 'delete', $ordersVehicle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ordersVehicle->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Orders Vehicles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Orders Vehicle'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vehicles'), ['controller' => 'Vehicles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vehicle'), ['controller' => 'Vehicles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ordersVehicles view large-9 medium-8 columns content">
    <h3><?= h($ordersVehicle->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Order') ?></th>
            <td><?= $ordersVehicle->has('order') ? $this->Html->link($ordersVehicle->order->id, ['controller' => 'Orders', 'action' => 'view', $ordersVehicle->order->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Vehicle') ?></th>
            <td><?= $ordersVehicle->has('vehicle') ? $this->Html->link($ordersVehicle->vehicle->name, ['controller' => 'Vehicles', 'action' => 'view', $ordersVehicle->vehicle->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($ordersVehicle->id) ?></td>
        </tr>
    </table>
</div>
