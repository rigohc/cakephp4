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
            <?= $this->Form->postLink(
                __('Eliminar Producto'),
                ['action' => 'delete', $producto->id],
                ['confirm' => __('¿Está seguro de querer eliminar este producto: {0}?', $producto->nombre), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Lista de Productos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="producto form content">
            <?= $this->Form->create($producto) ?>
            <fieldset>
                <legend><?= __('Editar Producto') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('precio');
                    echo $this->Form->control('tipo_bicicleta');
                    echo $this->Form->control('marca');
                    echo $this->Form->control('rodada');
                    echo $this->Form->control('material_cuadro');
                    echo $this->Form->control('tipo_suspencion');
                    echo $this->Form->control('tipo_frenos');
                    echo $this->Form->control('transmision');
                    echo $this->Form->control('image');
                    echo $this->Form->control('proveedor');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Guardar Cambios')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
