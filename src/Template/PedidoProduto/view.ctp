<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PedidoProduto $pedidoProduto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pedido Produto'), ['action' => 'edit', $pedidoProduto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pedido Produto'), ['action' => 'delete', $pedidoProduto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedidoProduto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pedido Produto'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pedido Produto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pedido'), ['controller' => 'Pedido', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pedido'), ['controller' => 'Pedido', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Produto'), ['controller' => 'Produto', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Produto'), ['controller' => 'Produto', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pedidoProduto view large-9 medium-8 columns content">
    <h3><?= h($pedidoProduto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Pedido') ?></th>
            <td><?= $pedidoProduto->has('pedido') ? $this->Html->link($pedidoProduto->pedido->id, ['controller' => 'Pedido', 'action' => 'view', $pedidoProduto->pedido->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Produto') ?></th>
            <td><?= $pedidoProduto->has('produto') ? $this->Html->link($pedidoProduto->produto->id, ['controller' => 'Produto', 'action' => 'view', $pedidoProduto->produto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pedidoProduto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantidade') ?></th>
            <td><?= $this->Number->format($pedidoProduto->quantidade) ?></td>
        </tr>
    </table>
</div>
