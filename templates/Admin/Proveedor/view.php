<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proveedor $proveedor
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Opciones') ?></h4>
            <?= $this->Html->link(__('Inicio'), ['controller' => 'users', 'action' => 'inicio'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Editar Proveedor'), ['action' => 'edit', $proveedor->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Eliminar Proveedor'), ['action' => 'delete', $proveedor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proveedor->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Lista de Proveedores'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Nuevo Proveedor'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="proveedor view content">
            <h3><?= h($proveedor->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($proveedor->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Razon Social') ?></th>
                    <td><?= h($proveedor->razon_social) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($proveedor->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telefono') ?></th>
                    <td><?= h($proveedor->telefono) ?></td>
                </tr>
                <tr>
                    <th><?= __('Codigo Postal') ?></th>
                    <td><?= h($proveedor->codigo_postal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Direccion') ?></th>
                    <td><?= h($proveedor->direccion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sitio Web') ?></th>
                    <td><?= h($proveedor->sitio_web) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
