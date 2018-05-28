<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PessoaFisica[]|\Cake\Collection\CollectionInterface $pessoaFisica
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pessoa Fisica'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pessoa'), ['controller' => 'Pessoa', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pessoa'), ['controller' => 'Pessoa', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pessoaFisica index large-9 medium-8 columns content">
    <h3><?= __('Pessoa Fisica') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rg') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cpf') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_nascimento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pessoa_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pessoaFisica as $pessoaFisica): ?>
            <tr>
                <td><?= $this->Number->format($pessoaFisica->id) ?></td>
                <td><?= h($pessoaFisica->rg) ?></td>
                <td><?= h($pessoaFisica->cpf) ?></td>
                <td><?= h($pessoaFisica->nome) ?></td>
                <td><?= h($pessoaFisica->data_nascimento) ?></td>
                <td><?= $pessoaFisica->has('pessoa') ? $this->Html->link($pessoaFisica->pessoa->id, ['controller' => 'Pessoa', 'action' => 'view', $pessoaFisica->pessoa->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pessoaFisica->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pessoaFisica->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pessoaFisica->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pessoaFisica->id)]) ?>
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
