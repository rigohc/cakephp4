<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Producto $producto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Producto'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="producto form content">
            <?= $this->Form->create($producto) ?>
            <fieldset>
                <legend><?= __('Add Producto') ?></legend>
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
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
