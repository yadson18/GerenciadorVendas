<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pedido[]|\Cake\Collection\CollectionInterface $pedido
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pedido'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Forma Pagamento'), ['controller' => 'FormaPagamento', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Forma Pagamento'), ['controller' => 'FormaPagamento', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Parcela'), ['controller' => 'Parcela', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Parcela'), ['controller' => 'Parcela', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Produto'), ['controller' => 'Produto', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Produto'), ['controller' => 'Produto', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pedido index large-9 medium-8 columns content">
    <h3><?= __('Pedido') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_pedido') ?></th>
                <th scope="col"><?= $this->Paginator->sort('valor_pedido') ?></th>
                <th scope="col"><?= $this->Paginator->sort('forma_pagamento_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('encomendado_por') ?></th>
                <th scope="col"><?= $this->Paginator->sort('despachado_por') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pedido as $pedido): ?>
            <tr>
                <td><?= $this->Number->format($pedido->id) ?></td>
                <td><?= h($pedido->data_pedido) ?></td>
                <td><?= $this->Number->format($pedido->valor_pedido) ?></td>
                <td><?= $pedido->has('forma_pagamento') ? $this->Html->link($pedido->forma_pagamento->id, ['controller' => 'FormaPagamento', 'action' => 'view', $pedido->forma_pagamento->id]) : '' ?></td>
                <td><?= $this->Number->format($pedido->encomendado_por) ?></td>
                <td><?= $this->Number->format($pedido->despachado_por) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pedido->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pedido->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pedido->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedido->id)]) ?>
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
