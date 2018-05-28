<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produto[]|\Cake\Collection\CollectionInterface $produto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Produto'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categoria'), ['controller' => 'Categoria', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categorium'), ['controller' => 'Categoria', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pedido'), ['controller' => 'Pedido', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pedido'), ['controller' => 'Pedido', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="produto index large-9 medium-8 columns content">
    <h3><?= __('Produto') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('codigo_produto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantidade_estoque') ?></th>
                <th scope="col"><?= $this->Paginator->sort('valor_compra') ?></th>
                <th scope="col"><?= $this->Paginator->sort('valor_venda') ?></th>
                <th scope="col"><?= $this->Paginator->sort('caminho_imagem') ?></th>
                <th scope="col"><?= $this->Paginator->sort('criado_por') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_criacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('alterado_por') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_alteracao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categoria_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produto as $produto): ?>
            <tr>
                <td><?= $this->Number->format($produto->id) ?></td>
                <td><?= h($produto->codigo_produto) ?></td>
                <td><?= h($produto->nome) ?></td>
                <td><?= $this->Number->format($produto->quantidade_estoque) ?></td>
                <td><?= $this->Number->format($produto->valor_compra) ?></td>
                <td><?= $this->Number->format($produto->valor_venda) ?></td>
                <td><?= h($produto->caminho_imagem) ?></td>
                <td><?= $this->Number->format($produto->criado_por) ?></td>
                <td><?= h($produto->data_criacao) ?></td>
                <td><?= $this->Number->format($produto->alterado_por) ?></td>
                <td><?= h($produto->data_alteracao) ?></td>
                <td><?= $produto->has('categorium') ? $this->Html->link($produto->categorium->id, ['controller' => 'Categoria', 'action' => 'view', $produto->categorium->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $produto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $produto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $produto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produto->id)]) ?>
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
