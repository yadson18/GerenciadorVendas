<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PessoaJuridica $pessoaJuridica
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pessoa Juridica'), ['action' => 'edit', $pessoaJuridica->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pessoa Juridica'), ['action' => 'delete', $pessoaJuridica->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pessoaJuridica->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pessoa Juridica'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pessoa Juridica'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pessoa'), ['controller' => 'Pessoa', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pessoa'), ['controller' => 'Pessoa', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pessoaJuridica view large-9 medium-8 columns content">
    <h3><?= h($pessoaJuridica->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Cnpj') ?></th>
            <td><?= h($pessoaJuridica->cnpj) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Razao Social') ?></th>
            <td><?= h($pessoaJuridica->razao_social) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fantasia') ?></th>
            <td><?= h($pessoaJuridica->fantasia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Inscricao Estadual') ?></th>
            <td><?= h($pessoaJuridica->inscricao_estadual) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pessoa') ?></th>
            <td><?= $pessoaJuridica->has('pessoa') ? $this->Html->link($pessoaJuridica->pessoa->id, ['controller' => 'Pessoa', 'action' => 'view', $pessoaJuridica->pessoa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pessoaJuridica->id) ?></td>
        </tr>
    </table>
</div>
