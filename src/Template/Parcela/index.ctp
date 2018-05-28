<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Parcela[]|\Cake\Collection\CollectionInterface $parcela
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Parcela'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pedido'), ['controller' => 'Pedido', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pedido'), ['controller' => 'Pedido', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="parcela index large-9 medium-8 columns content">
    <h3><?= __('Parcela') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_vencimento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_pagamento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pedido_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($parcela as $parcela): ?>
            <tr>
                <td><?= $this->Number->format($parcela->id) ?></td>
                <td><?= h($parcela->data_vencimento) ?></td>
                <td><?= h($parcela->data_pagamento) ?></td>
                <td><?= $parcela->has('pedido') ? $this->Html->link($parcela->pedido->id, ['controller' => 'Pedido', 'action' => 'view', $parcela->pedido->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $parcela->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $parcela->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $parcela->id], ['confirm' => __('Are you sure you want to delete # {0}?', $parcela->id)]) ?>
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
