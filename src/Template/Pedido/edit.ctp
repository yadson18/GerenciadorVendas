<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pedido $pedido
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pedido->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pedido->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Pedido'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Forma Pagamento'), ['controller' => 'FormaPagamento', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Forma Pagamento'), ['controller' => 'FormaPagamento', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Parcela'), ['controller' => 'Parcela', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Parcela'), ['controller' => 'Parcela', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Produto'), ['controller' => 'Produto', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Produto'), ['controller' => 'Produto', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pedido form large-9 medium-8 columns content">
    <?= $this->Form->create($pedido) ?>
    <fieldset>
        <legend><?= __('Edit Pedido') ?></legend>
        <?php
            echo $this->Form->control('data_pedido');
            echo $this->Form->control('valor_pedido');
            echo $this->Form->control('forma_pagamento_id', ['options' => $formaPagamento]);
            echo $this->Form->control('encomendado_por');
            echo $this->Form->control('despachado_por');
            echo $this->Form->control('produto._ids', ['options' => $produto]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
