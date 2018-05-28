<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Parcela $parcela
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Parcela'), ['action' => 'edit', $parcela->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Parcela'), ['action' => 'delete', $parcela->id], ['confirm' => __('Are you sure you want to delete # {0}?', $parcela->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Parcela'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Parcela'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pedido'), ['controller' => 'Pedido', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pedido'), ['controller' => 'Pedido', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="parcela view large-9 medium-8 columns content">
    <h3><?= h($parcela->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Pedido') ?></th>
            <td><?= $parcela->has('pedido') ? $this->Html->link($parcela->pedido->id, ['controller' => 'Pedido', 'action' => 'view', $parcela->pedido->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($parcela->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Vencimento') ?></th>
            <td><?= h($parcela->data_vencimento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Pagamento') ?></th>
            <td><?= h($parcela->data_pagamento) ?></td>
        </tr>
    </table>
</div>
