<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Client'), ['action' => 'edit', $client->client_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Client'), ['action' => 'delete', $client->client_id], ['confirm' => __('Are you sure you want to delete # {0}?', $client->client_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Reservations'), ['controller' => 'Reservations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Reservation'), ['controller' => 'Reservations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="clients view large-9 medium-8 columns content">
    <h3><?= h($client->client_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nom') ?></th>
            <td><?= h($client->nom) ?></td>
        </tr>
        <tr>
            <th><?= __('Prenom') ?></th>
            <td><?= h($client->prenom) ?></td>
        </tr>
        <tr>
            <th><?= __('Code') ?></th>
            <td><?= $this->Number->format($client->code) ?></td>
        </tr>
        <tr>
            <th><?= __('Credit Solo') ?></th>
            <td><?= $this->Number->format($client->credit_solo) ?></td>
        </tr>
        <tr>
            <th><?= __('Credit Duo') ?></th>
            <td><?= $this->Number->format($client->credit_duo) ?></td>
        </tr>
        <tr>
            <th><?= __('Fin Abonnement') ?></th>
            <td><?= h($client->fin_abonnement) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Reservations') ?></h4>
        <?php if (!empty($client->reservations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Code Client') ?></th>
                <th><?= __('Date') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($client->reservations as $reservations): ?>
            <tr>
                <td><?= h($reservations->id) ?></td>
                <td><?= h($reservations->code_client) ?></td>
                <td><?= h($reservations->date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Reservations', 'action' => 'view', $reservations->reservation_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Reservations', 'action' => 'edit', $reservations->reservation_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Reservations', 'action' => 'delete', $reservations->reservation_id], ['confirm' => __('Are you sure you want to delete # {0}?', $reservations->reservation_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
