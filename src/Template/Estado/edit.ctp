<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estado $estado
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $estado->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $estado->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Estado'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Pais'), ['controller' => 'Pais', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pai'), ['controller' => 'Pais', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cidade'), ['controller' => 'Cidade', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cidade'), ['controller' => 'Cidade', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Endereco'), ['controller' => 'Endereco', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Endereco'), ['controller' => 'Endereco', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="estado form large-9 medium-8 columns content">
    <?= $this->Form->create($estado) ?>
    <fieldset>
        <legend><?= __('Edit Estado') ?></legend>
        <?php
            echo $this->Form->control('sigla');
            echo $this->Form->control('nome');
            echo $this->Form->control('cod_estado');
            echo $this->Form->control('pais_id', ['options' => $pais, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
