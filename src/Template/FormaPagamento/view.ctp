<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FormaPagamento $formaPagamento
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Forma Pagamento'), ['action' => 'edit', $formaPagamento->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Forma Pagamento'), ['action' => 'delete', $formaPagamento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $formaPagamento->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Forma Pagamento'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Forma Pagamento'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pedido'), ['controller' => 'Pedido', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pedido'), ['controller' => 'Pedido', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="formaPagamento view large-9 medium-8 columns content">
    <h3><?= h($formaPagamento->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($formaPagamento->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($formaPagamento->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Juros') ?></th>
            <td><?= $this->Number->format($formaPagamento->juros) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Pedido') ?></h4>
        <?php if (!empty($formaPagamento->pedido)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Data Pedido') ?></th>
                <th scope="col"><?= __('Valor Pedido') ?></th>
                <th scope="col"><?= __('Forma Pagamento Id') ?></th>
                <th scope="col"><?= __('Encomendado Por') ?></th>
                <th scope="col"><?= __('Despachado Por') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($formaPagamento->pedido as $pedido): ?>
            <tr>
                <td><?= h($pedido->id) ?></td>
                <td><?= h($pedido->data_pedido) ?></td>
                <td><?= h($pedido->valor_pedido) ?></td>
                <td><?= h($pedido->forma_pagamento_id) ?></td>
                <td><?= h($pedido->encomendado_por) ?></td>
                <td><?= h($pedido->despachado_por) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Pedido', 'action' => 'view', $pedido->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Pedido', 'action' => 'edit', $pedido->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Pedido', 'action' => 'delete', $pedido->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedido->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
