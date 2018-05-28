<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PessoaJuridica[]|\Cake\Collection\CollectionInterface $pessoaJuridica
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pessoa Juridica'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pessoa'), ['controller' => 'Pessoa', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pessoa'), ['controller' => 'Pessoa', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pessoaJuridica index large-9 medium-8 columns content">
    <h3><?= __('Pessoa Juridica') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cnpj') ?></th>
                <th scope="col"><?= $this->Paginator->sort('razao_social') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fantasia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('inscricao_estadual') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pessoa_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pessoaJuridica as $pessoaJuridica): ?>
            <tr>
                <td><?= $this->Number->format($pessoaJuridica->id) ?></td>
                <td><?= h($pessoaJuridica->cnpj) ?></td>
                <td><?= h($pessoaJuridica->razao_social) ?></td>
                <td><?= h($pessoaJuridica->fantasia) ?></td>
                <td><?= h($pessoaJuridica->inscricao_estadual) ?></td>
                <td><?= $pessoaJuridica->has('pessoa') ? $this->Html->link($pessoaJuridica->pessoa->id, ['controller' => 'Pessoa', 'action' => 'view', $pessoaJuridica->pessoa->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pessoaJuridica->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pessoaJuridica->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pessoaJuridica->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pessoaJuridica->id)]) ?>
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
