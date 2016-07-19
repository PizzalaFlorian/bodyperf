<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Reservation'), ['action' => 'edit', $reservation->reservation_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Reservation'), ['action' => 'delete', $reservation->reservation_id], ['confirm' => __('Are you sure you want to delete # {0}?', $reservation->reservation_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Reservations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Reservation'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Reservations'), ['controller' => 'Reservations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Reservation'), ['controller' => 'Reservations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="reservations view large-9 medium-8 columns content">
    <h3><?= h($reservation->reservation_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Reservation') ?></th>
            <td><?= $reservation->has('reservation') ? $this->Html->link($reservation->reservation->reservation_id, ['controller' => 'Reservations', 'action' => 'view', $reservation->reservation->reservation_id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Client') ?></th>
            <td><?= $reservation->has('client') ? $this->Html->link($reservation->client->client_id, ['controller' => 'Clients', 'action' => 'view', $reservation->client->client_id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Date') ?></th>
            <td><?= h($reservation->date) ?></td>
        </tr>
    </table>
</div>
