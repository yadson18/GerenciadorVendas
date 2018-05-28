<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PedidoProduto[]|\Cake\Collection\CollectionInterface $pedidoProduto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pedido Produto'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pedido'), ['controller' => 'Pedido', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pedido'), ['controller' => 'Pedido', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Produto'), ['controller' => 'Produto', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Produto'), ['controller' => 'Produto', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pedidoProduto index large-9 medium-8 columns content">
    <h3><?= __('Pedido Produto') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pedido_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('produto_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pedidoProduto as $pedidoProduto): ?>
            <tr>
                <td><?= $this->Number->format($pedidoProduto->id) ?></td>
                <td><?= $this->Number->format($pedidoProduto->quantidade) ?></td>
                <td><?= $pedidoProduto->has('pedido') ? $this->Html->link($pedidoProduto->pedido->id, ['controller' => 'Pedido', 'action' => 'view', $pedidoProduto->pedido->id]) : '' ?></td>
                <td><?= $pedidoProduto->has('produto') ? $this->Html->link($pedidoProduto->produto->id, ['controller' => 'Produto', 'action' => 'view', $pedidoProduto->produto->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pedidoProduto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pedidoProduto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pedidoProduto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedidoProduto->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
