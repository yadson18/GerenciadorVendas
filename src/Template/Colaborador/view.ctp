<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Colaborador $colaborador
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Colaborador'), ['action' => 'edit', $colaborador->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Colaborador'), ['action' => 'delete', $colaborador->id], ['confirm' => __('Are you sure you want to delete # {0}?', $colaborador->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Colaborador'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Colaborador'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pessoa'), ['controller' => 'Pessoa', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pessoa'), ['controller' => 'Pessoa', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="colaborador view large-9 medium-8 columns content">
    <h3><?= h($colaborador->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Pessoa') ?></th>
            <td><?= $colaborador->has('pessoa') ? $this->Html->link($colaborador->pessoa->id, ['controller' => 'Pessoa', 'action' => 'view', $colaborador->pessoa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($colaborador->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Criado Por') ?></th>
            <td><?= $this->Number->format($colaborador->criado_por) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Alterado Por') ?></th>
            <td><?= $this->Number->format($colaborador->alterado_por) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Criacao') ?></th>
            <td><?= h($colaborador->data_criacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Alteracao') ?></th>
            <td><?= h($colaborador->data_alteracao) ?></td>
        </tr>
    </table>
</div>
