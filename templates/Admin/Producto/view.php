<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Producto $producto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Opciones') ?></h4>
            <?= $this->Html->link(__('Inicio'), ['controller' => 'users', 'action' => 'inicio'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Editar Producto'), ['action' => 'edit', $producto->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Eliminar Producto'), ['action' => 'delete', $producto->id], ['confirm' => __('Está seguro de querer eliminar este producto: {0}?', $producto->nombre), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Lista de Productos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Nuevo Producto'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="producto view content">
            <h3><?= h($producto->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($producto->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Precio') ?></th>
                    <td><?= h($producto->precio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo Bicicleta') ?></th>
                    <td><?= h($producto->tipo_bicicleta) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marca') ?></th>
                    <td><?= h($producto->marca) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rodada') ?></th>
                    <td><?= h($producto->rodada) ?></td>
                </tr>
                <tr>
                    <th><?= __('Material Cuadro') ?></th>
                    <td><?= h($producto->material_cuadro) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo Suspencion') ?></th>
                    <td><?= h($producto->tipo_suspencion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo Frenos') ?></th>
                    <td><?= h($producto->tipo_frenos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Transmision') ?></th>
                    <td><?= h($producto->transmision) ?></td>
                </tr>
                <tr>
                    <th><?= __('Image') ?></th>
                    <td><?= h($producto->image) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($producto->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Proveedor') ?></th>
                    <td><?= $this->Number->format($producto->proveedor) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
