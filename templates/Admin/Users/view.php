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
            <?= $this->Html->link(__('Editar Usuario'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Eliminar Usuario'), ['action' => 'delete', $user->id], ['confirm' => __('Está seguro de querer eliminar # {0}?', $user->username), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Lista de Usuarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Nuevo Usuario'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nombre de usuario') ?></th>
                    <td><?= h($user->username) ?></td>
                </tr>
                <tr>
                    <th><?= __('Correo Electrónico') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contraseña') ?></th>
                    <td><?= h($user->password) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numero Telefónico') ?></th>
                    <td><?= h($user->phone) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
