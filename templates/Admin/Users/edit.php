<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Opciones') ?></h4>
            <?= $this->Form->postLink(
                __('Eliminar Usuarios'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Esta seguro de eliminar a # {0}?', $user->username), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Lista de Usuarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user,['type' => 'file']) ?>
            <fieldset>
                <legend><?= __('Editar Usuario') ?></legend>
                <?php
                    echo $this->Form->control('username');
                    echo $this->Form->control('email');
                    echo $this->Form->control('change_image',['type'=>'file']);
                    // debug($user->image);
                    echo $this->Form->control('profile.mobile');

                    //echo $this->Form->control('skills.0.name');
                    //echo $this->Form->control('skills.1.name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Guardar Cambios')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
