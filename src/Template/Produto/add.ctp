<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produto $produto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Produto'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categoria'), ['controller' => 'Categoria', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categorium'), ['controller' => 'Categoria', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pedido'), ['controller' => 'Pedido', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pedido'), ['controller' => 'Pedido', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="produto form large-9 medium-8 columns content">
    <?= $this->Form->create($produto) ?>
    <fieldset>
        <legend><?= __('Add Produto') ?></legend>
        <?php
            echo $this->Form->control('codigo_produto');
            echo $this->Form->control('nome');
            echo $this->Form->control('descricao');
            echo $this->Form->control('quantidade_estoque');
            echo $this->Form->control('valor_compra');
            echo $this->Form->control('valor_venda');
            echo $this->Form->control('caminho_imagem');
            echo $this->Form->control('criado_por');
            echo $this->Form->control('data_criacao');
            echo $this->Form->control('alterado_por');
            echo $this->Form->control('data_alteracao');
            echo $this->Form->control('categoria_id', ['options' => $categoria]);
            echo $this->Form->control('pedido._ids', ['options' => $pedido]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
