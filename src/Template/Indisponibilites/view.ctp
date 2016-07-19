<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Indisponibilite'), ['action' => 'edit', $indisponibilite->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Indisponibilite'), ['action' => 'delete', $indisponibilite->id], ['confirm' => __('Are you sure you want to delete # {0}?', $indisponibilite->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Indisponibilites'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Indisponibilite'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="indisponibilites view large-9 medium-8 columns content">
    <h3><?= h($indisponibilite->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($indisponibilite->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Date Debut') ?></th>
            <td><?= h($indisponibilite->date_debut) ?></td>
        </tr>
        <tr>
            <th><?= __('Date Fin') ?></th>
            <td><?= h($indisponibilite->date_fin) ?></td>
        </tr>
    </table>
</div>
