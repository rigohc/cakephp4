<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Producto[]|\Cake\Collection\CollectionInterface $producto
 */
?>
<div class="producto index content">
    <?= $this->Html->link(__('Nuevo Producto'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Producto') ?></h3>
    <?= $this->Html->link(__('Ir a inicio'), ['controller' => 'users', 'action' => 'inicio'], ['class' => 'side-nav-item']) ?>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('precio') ?></th>
                    <th><?= $this->Paginator->sort('tipo_bicicleta') ?></th>
                    <th><?= $this->Paginator->sort('marca') ?></th>
                    <th><?= $this->Paginator->sort('rodada') ?></th>
                    <th><?= $this->Paginator->sort('material_cuadro') ?></th>
                    <th><?= $this->Paginator->sort('tipo_suspencion') ?></th>
                    <th><?= $this->Paginator->sort('tipo_frenos') ?></th>
                    <th><?= $this->Paginator->sort('transmision') ?></th>
                    <th><?= $this->Paginator->sort('image') ?></th>
                    <th><?= $this->Paginator->sort('proveedor') ?></th>
                    <th class="actions"><?= __('Opciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($producto as $producto): ?>
                <tr>
                    <td><?= $this->Number->format($producto->id) ?></td>
                    <td><?= h($producto->nombre) ?></td>
                    <td><?= h($producto->precio) ?></td>
                    <td><?= h($producto->tipo_bicicleta) ?></td>
                    <td><?= h($producto->marca) ?></td>
                    <td><?= h($producto->rodada) ?></td>
                    <td><?= h($producto->material_cuadro) ?></td>
                    <td><?= h($producto->tipo_suspencion) ?></td>
                    <td><?= h($producto->tipo_frenos) ?></td>
                    <td><?= h($producto->transmision) ?></td>
                    <td><?= @$this->Html->image($producto->image, ['style' => 'max-width:50px;height:50px;border-radius:50%;']) ?></td>
                    <td><?= $this->Number->format($producto->proveedor) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $producto->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $producto->id]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $producto->id], ['confirm' => __('¿Está seguro de querer eliminar este producto: {0}?', $producto->nombre)]) ?>
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
