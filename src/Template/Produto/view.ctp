<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produto $produto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Produto'), ['action' => 'edit', $produto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Produto'), ['action' => 'delete', $produto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Produto'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Produto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categoria'), ['controller' => 'Categoria', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categorium'), ['controller' => 'Categoria', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pedido'), ['controller' => 'Pedido', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pedido'), ['controller' => 'Pedido', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="produto view large-9 medium-8 columns content">
    <h3><?= h($produto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Codigo Produto') ?></th>
            <td><?= h($produto->codigo_produto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($produto->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Caminho Imagem') ?></th>
            <td><?= h($produto->caminho_imagem) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Categorium') ?></th>
            <td><?= $produto->has('categorium') ? $this->Html->link($produto->categorium->id, ['controller' => 'Categoria', 'action' => 'view', $produto->categorium->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($produto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantidade Estoque') ?></th>
            <td><?= $this->Number->format($produto->quantidade_estoque) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valor Compra') ?></th>
            <td><?= $this->Number->format($produto->valor_compra) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valor Venda') ?></th>
            <td><?= $this->Number->format($produto->valor_venda) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Criado Por') ?></th>
            <td><?= $this->Number->format($produto->criado_por) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Alterado Por') ?></th>
            <td><?= $this->Number->format($produto->alterado_por) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Criacao') ?></th>
            <td><?= h($produto->data_criacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Alteracao') ?></th>
            <td><?= h($produto->data_alteracao) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descricao') ?></h4>
        <?= $this->Text->autoParagraph(h($produto->descricao)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Pedido') ?></h4>
        <?php if (!empty($produto->pedido)): ?>
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
            <?php foreach ($produto->pedido as $pedido): ?>
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
