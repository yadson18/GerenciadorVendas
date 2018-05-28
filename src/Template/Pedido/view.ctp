<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pedido $pedido
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pedido'), ['action' => 'edit', $pedido->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pedido'), ['action' => 'delete', $pedido->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedido->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pedido'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pedido'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Forma Pagamento'), ['controller' => 'FormaPagamento', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Forma Pagamento'), ['controller' => 'FormaPagamento', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Parcela'), ['controller' => 'Parcela', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Parcela'), ['controller' => 'Parcela', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Produto'), ['controller' => 'Produto', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Produto'), ['controller' => 'Produto', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pedido view large-9 medium-8 columns content">
    <h3><?= h($pedido->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Forma Pagamento') ?></th>
            <td><?= $pedido->has('forma_pagamento') ? $this->Html->link($pedido->forma_pagamento->id, ['controller' => 'FormaPagamento', 'action' => 'view', $pedido->forma_pagamento->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pedido->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valor Pedido') ?></th>
            <td><?= $this->Number->format($pedido->valor_pedido) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Encomendado Por') ?></th>
            <td><?= $this->Number->format($pedido->encomendado_por) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Despachado Por') ?></th>
            <td><?= $this->Number->format($pedido->despachado_por) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Pedido') ?></th>
            <td><?= h($pedido->data_pedido) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Produto') ?></h4>
        <?php if (!empty($pedido->produto)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Codigo Produto') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Quantidade Estoque') ?></th>
                <th scope="col"><?= __('Valor Compra') ?></th>
                <th scope="col"><?= __('Valor Venda') ?></th>
                <th scope="col"><?= __('Caminho Imagem') ?></th>
                <th scope="col"><?= __('Criado Por') ?></th>
                <th scope="col"><?= __('Data Criacao') ?></th>
                <th scope="col"><?= __('Alterado Por') ?></th>
                <th scope="col"><?= __('Data Alteracao') ?></th>
                <th scope="col"><?= __('Categoria Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($pedido->produto as $produto): ?>
            <tr>
                <td><?= h($produto->id) ?></td>
                <td><?= h($produto->codigo_produto) ?></td>
                <td><?= h($produto->nome) ?></td>
                <td><?= h($produto->descricao) ?></td>
                <td><?= h($produto->quantidade_estoque) ?></td>
                <td><?= h($produto->valor_compra) ?></td>
                <td><?= h($produto->valor_venda) ?></td>
                <td><?= h($produto->caminho_imagem) ?></td>
                <td><?= h($produto->criado_por) ?></td>
                <td><?= h($produto->data_criacao) ?></td>
                <td><?= h($produto->alterado_por) ?></td>
                <td><?= h($produto->data_alteracao) ?></td>
                <td><?= h($produto->categoria_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Produto', 'action' => 'view', $produto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Produto', 'action' => 'edit', $produto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Produto', 'action' => 'delete', $produto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produto->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Parcela') ?></h4>
        <?php if (!empty($pedido->parcela)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Data Vencimento') ?></th>
                <th scope="col"><?= __('Data Pagamento') ?></th>
                <th scope="col"><?= __('Pedido Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($pedido->parcela as $parcela): ?>
            <tr>
                <td><?= h($parcela->id) ?></td>
                <td><?= h($parcela->data_vencimento) ?></td>
                <td><?= h($parcela->data_pagamento) ?></td>
                <td><?= h($parcela->pedido_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Parcela', 'action' => 'view', $parcela->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Parcela', 'action' => 'edit', $parcela->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Parcela', 'action' => 'delete', $parcela->id], ['confirm' => __('Are you sure you want to delete # {0}?', $parcela->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
