<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PessoaFisica $pessoaFisica
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pessoa Fisica'), ['action' => 'edit', $pessoaFisica->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pessoa Fisica'), ['action' => 'delete', $pessoaFisica->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pessoaFisica->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pessoa Fisica'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pessoa Fisica'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pessoa'), ['controller' => 'Pessoa', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pessoa'), ['controller' => 'Pessoa', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pessoaFisica view large-9 medium-8 columns content">
    <h3><?= h($pessoaFisica->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Rg') ?></th>
            <td><?= h($pessoaFisica->rg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cpf') ?></th>
            <td><?= h($pessoaFisica->cpf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($pessoaFisica->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pessoa') ?></th>
            <td><?= $pessoaFisica->has('pessoa') ? $this->Html->link($pessoaFisica->pessoa->id, ['controller' => 'Pessoa', 'action' => 'view', $pessoaFisica->pessoa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pessoaFisica->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Nascimento') ?></th>
            <td><?= h($pessoaFisica->data_nascimento) ?></td>
        </tr>
    </table>
</div>
