
<div class="users form">
<?= $this->Flash->render('auth') ?>
<?= $this->Form->create() ?>
<div class="login center">
    <fieldset>
        <legend><?= __("Merci de rentrer vos nom d'utilisateur et mot de passe") ?></legend>
        <?= $this->Form->input('login') ?>
        <?= $this->Form->input('password') ?>
    </fieldset>
<div class="login-btn">
<?= $this->Form->button(__('Se Connecter')); ?>
</div>
</div>
<?= $this->Form->end() ?>
</div>