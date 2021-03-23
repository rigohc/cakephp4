<?= $this->Form->create() ?>
<?= $this->Form->control('username'); ?>
<?= $this->Form->control('password'); ?>
<?= $this->Form->submit('Iniciar Sesión') ?>
<?= $this->Html->link(__('Registrarme'), ['controller' => 'users','action' => 'registro']) ?>
<?= $this->Form->end() ?>
