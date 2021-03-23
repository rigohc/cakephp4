<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $producto
 * @var \App\Model\Entity\Producto $producto
 * @var \App\Model\Entity\Proveedor $proveedor
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Opciones') ?></h4>
            <?= $this->Html->link(__('Inicio'), ['controller' => 'users', 'action' => 'inicio'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Lista de Productos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="producto form content">
        <?= $this->Form->create($producto,['type'=>'file',['novalidate']]) ?>
            <fieldset>
                <legend><?= __('Registro de Productos') ?></legend>
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
                    echo $this->Form->control('image_file',['type'=>'file']);
                    echo $this->Form->control('proveedor');
                ?>
            
            </fieldset>
            <?= $this->Form->button(__('Guardar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
