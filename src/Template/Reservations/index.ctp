<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Reservation'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="reservations index large-9 medium-8 columns content">
    <h3><?= __('Reservations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('reservation_id') ?></th>
                <th><?= $this->Paginator->sort('client_id') ?></th>
                <th><?= $this->Paginator->sort('date') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($reservations as $reservation): ?>
            <tr>
                <td><?= $reservation->has('reservation') ? $this->Html->link($reservation->reservation->reservation_id, ['controller' => 'Reservations', 'action' => 'view', $reservation->reservation->reservation_id]) : '' ?></td>
                <td><?= $reservation->has('client') ? $this->Html->link($reservation->client->client_id, ['controller' => 'Clients', 'action' => 'view', $reservation->client->client_id]) : '' ?></td>
                <td><?= h($reservation->date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $reservation->reservation_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $reservation->reservation_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $reservation->reservation_id], ['confirm' => __('Are you sure you want to delete # {0}?', $reservation->reservation_id)]) ?>
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
