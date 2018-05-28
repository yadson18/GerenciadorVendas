<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente $cliente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cliente'), ['action' => 'edit', $cliente->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cliente'), ['action' => 'delete', $cliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cliente'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cliente'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pessoa'), ['controller' => 'Pessoa', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pessoa'), ['controller' => 'Pessoa', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cliente view large-9 medium-8 columns content">
    <h3><?= h($cliente->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Pessoa') ?></th>
            <td><?= $cliente->has('pessoa') ? $this->Html->link($cliente->pessoa->id, ['controller' => 'Pessoa', 'action' => 'view', $cliente->pessoa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cliente->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Criado Por') ?></th>
            <td><?= $this->Number->format($cliente->criado_por) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Alterado Por') ?></th>
            <td><?= $this->Number->format($cliente->alterado_por) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Criacao') ?></th>
            <td><?= h($cliente->data_criacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Alteracao') ?></th>
            <td><?= h($cliente->data_alteracao) ?></td>
        </tr>
    </table>
</div>
