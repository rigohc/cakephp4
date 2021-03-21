<?php

/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $users
 */
?>

<div class="users index content">
    <?php echo $userCount['count']; //exit; ?>
    <?= $this->Html->link(__('Nuevo Usuario'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Usuarios Registrados') ?></h3>

    <?= $this->Form->create(null, ['type' => 'get']) ?>
    <?= $this->Form->control('key', ['label' => 'Busqueda de Usuario', 'value' => $this->request->getQuery('key'), 'autocomplete' => 'off']) ?>
    <?= $this->Form->submit('Buscar') ?>
    <?= $this->Form->end() ?>

    <div class="table-responsive">
        <?= $this->Form->create(null, ['url' => ['action' => 'deleteAll']]) ?>
        <button>Borrar Seleccionados</button>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('username') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('image') ?></th>
                    <th><?= $this->Paginator->sort('phone') ?></th>
                    <th><?= $this->Paginator->sort('Cambiar status') ?></th>
                    <th class="actions"><?= __('Opciones') ?></th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td><?= $this->Form->checkbox('ids[]', ['value' => $user->id]) ?></td>

                        <td><?= $this->Number->format($user->id) ?></td>
                        <td><?= h($user->username) ?></td>
                        <td><?= h($user->email) ?></td>
                        <td><?= @$this->Html->image($user->image, ['style' => 'max-width:50px;height:50px;border-radius:50%;']) ?></td>
                        <td><?= h($user->phone) ?></td>
                        
                        <!-- <td>
                           <?php 
                                foreach ($user->skills as $key => $skill) {
                                    echo $skill->name." ";
                                }
                           ?>
                        </td> -->

                        <td>

                            <?php if ($user->status == 1) : ?>
                                <?= $this->Form->postLink(__('Desactivar'), ['action' => 'userStatus', $user->id, $user->status], ['block' => true, 'confirm' => __('Está seguro de querer desactivar # {0}?', $user->username)]) ?>
                            <?php else : ?>
                                <?= $this->Form->postLink(__('Activar'), ['action' => 'userStatus', $user->id, $user->status], ['block' => true, 'confirm' => __('Está seguro de querer activar # {0}?', $user->username)]) ?>
                            <?php endif; ?>

                        </td>

                        <td class="actions">
                            <?= $this->Html->link(__('Ver'), ['action' => 'view', $user->id]) ?>
                            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id]) ?>
                            <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $user->id], ['block' => true, 'confirm' => __('Esta seguro de querer eliminar # {0}?', $user->username)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
        <?= $this->Form->end() ?>
        <?= $this->fetch('postLink'); ?>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, mostrando {{current}} registro(s) de {{count}} totales')) ?></p>
    </div>
</div>