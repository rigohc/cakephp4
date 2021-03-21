<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proveedor[]|\Cake\Collection\CollectionInterface $proveedor
 */
?>
<div class="proveedor index content">
    <?= $this->Html->link(__('Nuevo Proveedor'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Proveedores Registrados') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('razon_social') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('telefono') ?></th>
                    <th><?= $this->Paginator->sort('codigo_postal') ?></th>
                    <th><?= $this->Paginator->sort('direccion') ?></th>
                    <th><?= $this->Paginator->sort('sitio_web') ?></th>
                    <th class="actions"><?= __('Opciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($proveedor as $proveedor): ?>
                <tr>
                    <td><?= $this->Number->format($proveedor->id) ?></td>
                    <td><?= h($proveedor->razon_social) ?></td>
                    <td><?= h($proveedor->email) ?></td>
                    <td><?= h($proveedor->telefono) ?></td>
                    <td><?= h($proveedor->codigo_postal) ?></td>
                    <td><?= h($proveedor->direccion) ?></td>
                    <td><?= h($proveedor->sitio_web) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $proveedor->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $proveedor->id]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $proveedor->id], ['confirm' => __('Está seguro de querer eliminar # {0}?', $proveedor->razon_social)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, mostrando {{current}} registro(s) de {{count}} totales')) ?></p>
    </div>
</div>
