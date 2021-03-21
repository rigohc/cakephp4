<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proveedor $proveedor
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Proveedor'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="proveedor form content">
            <?= $this->Form->create($proveedor) ?>
            <fieldset>
                <legend><?= __('Add Proveedor') ?></legend>
                <?php
                    echo $this->Form->control('razon_social');
                    echo $this->Form->control('email');
                    echo $this->Form->control('telefono');
                    echo $this->Form->control('codigo_postal');
                    echo $this->Form->control('direccion');
                    echo $this->Form->control('sitio_web');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
