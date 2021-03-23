<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Producto[]|\Cake\Collection\CollectionInterface $producto
 */
?>
<div class="producto index content">
    <h3><?= __('Producto') ?></h3>
    <?= $this->Html->link(__('Ir a inicio'), ['controller' => 'users', 'action' => 'cliente'], ['class' => 'side-nav-item']) ?>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('precio') ?></th>
                    <th><?= $this->Paginator->sort('tipo_bicicleta') ?></th>
                    <th><?= $this->Paginator->sort('marca') ?></th>
                    <th><?= $this->Paginator->sort('rodada') ?></th>
                    <th><?= $this->Paginator->sort('image') ?></th>
                    <th class="actions"><?= __('Opciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($producto as $producto): ?>
                <tr>
                    <td><?= h($producto->nombre) ?></td>
                    <td><?= h($producto->precio) ?></td>
                    <td><?= h($producto->tipo_bicicleta) ?></td>
                    <td><?= h($producto->marca) ?></td>
                    <td><?= h($producto->rodada) ?></td>
                    <td><?= @$this->Html->image($producto->image, ['style' => 'max-width:50px;height:50px;border-radius:50%;']) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Detalles'), ['action' => 'viewcliente', $producto->id]) ?>
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
