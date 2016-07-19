<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Indisponibilites'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="indisponibilites form large-9 medium-8 columns content">
    <?= $this->Form->create($indisponibilite) ?>
    <fieldset>
        <legend><?= __('Add Indisponibilite') ?></legend>
        <?php
            echo $this->Form->input('date_debut');
            echo $this->Form->input('date_fin');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
