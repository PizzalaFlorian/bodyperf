<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Client'), ['action' => 'edit', $client->client_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Client'), ['action' => 'delete', $client->client_id], ['confirm' => __('Are you sure you want to delete # {0}?', $client->client_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="clients view large-9 medium-8 columns content">
    <h3><?= h($client->client_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Login') ?></th>
            <td><?= h($client->login) ?></td>
        </tr>
        <tr>
            <th><?= __('Nom') ?></th>
            <td><?= h($client->nom) ?></td>
        </tr>
        <tr>
            <th><?= __('Prenom') ?></th>
            <td><?= h($client->prenom) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($client->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Credit Sceance') ?></th>
            <td><?= $this->Number->format($client->credit_sceance) ?></td>
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
</div>
