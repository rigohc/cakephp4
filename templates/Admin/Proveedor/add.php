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
            <?= $this->Html->link(__('Lista de Proveedores'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="proveedor form content">
            <?= $this->Form->create($proveedor,['novalidate']) ?>
            <fieldset>
                <legend><?= __('Registro de Proveedores') ?></legend>
                <?php
                    echo $this->Form->control('razon_social');
                    echo $this->Form->control('email');
                    echo $this->Form->control('telefono');
                    echo $this->Form->control('codigo_postal');
                    echo $this->Form->control('direccion');
                    echo $this->Form->control('sitio_web');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Guardar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
