
<div class="types view large-9 medium-8 columns content">
    <h3>Categoria <?= h($type->title) ?></h3>
   <table class="vertical-table">
        <tr>
            <th><?= __('Title') ?></th>
            <td><?= h($type->title) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($type->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($type->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($type->modified) ?></td>
        </tr>
    </table>
    <div class="related">

        <?php if (!empty($type->vehicles)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Photo') ?></th>
                <th><?= __('Description') ?></th>
                <th><?= __('Price') ?></th>
                <th><?= __('Type Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($type->vehicles as $vehicles): ?>
            <tr>
                <td><?= h($vehicles->id) ?></td>
                <td><?= h($vehicles->name) ?></td>
                <td><?= h($vehicles->photo) ?></td>
                <td><?= h($vehicles->description) ?></td>
                <td><?= h($vehicles->price) ?></td>
                <td><?= h($vehicles->type_id) ?></td>
                <td><?= h($vehicles->created) ?></td>
                <td><?= h($vehicles->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Vehicles', 'action' => 'view', $vehicles->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Vehicles', 'action' => 'edit', $vehicles->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Vehicles', 'action' => 'delete', $vehicles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vehicles->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
