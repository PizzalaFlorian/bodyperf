<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Client'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="clients index large-9 medium-8 columns content">
    <h3><?= __('Clients') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('login') ?></th>
                <th><?= $this->Paginator->sort('nom') ?></th>
                <th><?= $this->Paginator->sort('prenom') ?></th>
                <th><?= $this->Paginator->sort('credit_sceance') ?></th>
                <th><?= $this->Paginator->sort('credit_duo') ?></th>
                <th><?= $this->Paginator->sort('fin_abonnement') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clients as $client): ?>
            <tr>
                <td><?= $this->Number->format($client->id) ?></td>
                <td><?= h($client->login) ?></td>
                <td><?= h($client->nom) ?></td>
                <td><?= h($client->prenom) ?></td>
                <td><?= $this->Number->format($client->credit_sceance) ?></td>
                <td><?= $this->Number->format($client->credit_duo) ?></td>
                <td><?= h($client->fin_abonnement) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $client->client_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $client->client_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $client->client_id], ['confirm' => __('Are you sure you want to delete # {0}?', $client->client_id)]) ?>
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
