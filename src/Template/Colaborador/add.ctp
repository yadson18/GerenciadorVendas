<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Colaborador $colaborador
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Colaborador'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Pessoa'), ['controller' => 'Pessoa', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pessoa'), ['controller' => 'Pessoa', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="colaborador form large-9 medium-8 columns content">
    <?= $this->Form->create($colaborador) ?>
    <fieldset>
        <legend><?= __('Add Colaborador') ?></legend>
        <?php
            echo $this->Form->control('criado_por');
            echo $this->Form->control('data_criacao');
            echo $this->Form->control('alterado_por');
            echo $this->Form->control('data_alteracao');
            echo $this->Form->control('pessoa_id', ['options' => $pessoa]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
