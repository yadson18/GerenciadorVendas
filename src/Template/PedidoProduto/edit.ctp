<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PedidoProduto $pedidoProduto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pedidoProduto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pedidoProduto->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Pedido Produto'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Pedido'), ['controller' => 'Pedido', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pedido'), ['controller' => 'Pedido', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Produto'), ['controller' => 'Produto', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Produto'), ['controller' => 'Produto', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pedidoProduto form large-9 medium-8 columns content">
    <?= $this->Form->create($pedidoProduto) ?>
    <fieldset>
        <legend><?= __('Edit Pedido Produto') ?></legend>
        <?php
            echo $this->Form->control('quantidade');
            echo $this->Form->control('pedido_id', ['options' => $pedido]);
            echo $this->Form->control('produto_id', ['options' => $produto]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
