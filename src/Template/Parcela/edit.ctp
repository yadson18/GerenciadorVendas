<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Parcela $parcela
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $parcela->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $parcela->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Parcela'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Pedido'), ['controller' => 'Pedido', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pedido'), ['controller' => 'Pedido', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="parcela form large-9 medium-8 columns content">
    <?= $this->Form->create($parcela) ?>
    <fieldset>
        <legend><?= __('Edit Parcela') ?></legend>
        <?php
            echo $this->Form->control('data_vencimento');
            echo $this->Form->control('data_pagamento', ['empty' => true]);
            echo $this->Form->control('pedido_id', ['options' => $pedido]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
