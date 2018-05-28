<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pessoa[]|\Cake\Collection\CollectionInterface $pessoa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pessoa'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contato'), ['controller' => 'Contato', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contato'), ['controller' => 'Contato', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Endereco'), ['controller' => 'Endereco', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Endereco'), ['controller' => 'Endereco', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cliente'), ['controller' => 'Cliente', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Cliente', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Colaborador'), ['controller' => 'Colaborador', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Colaborador'), ['controller' => 'Colaborador', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pessoa Fisica'), ['controller' => 'PessoaFisica', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pessoa Fisica'), ['controller' => 'PessoaFisica', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pessoa Juridica'), ['controller' => 'PessoaJuridica', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pessoa Juridica'), ['controller' => 'PessoaJuridica', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuario'), ['controller' => 'Usuario', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuario', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pessoa index large-9 medium-8 columns content">
    <h3><?= __('Pessoa') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contato_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('endereco_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pessoa as $pessoa): ?>
            <tr>
                <td><?= $this->Number->format($pessoa->id) ?></td>
                <td><?= $pessoa->has('contato') ? $this->Html->link($pessoa->contato->id, ['controller' => 'Contato', 'action' => 'view', $pessoa->contato->id]) : '' ?></td>
                <td><?= $pessoa->has('endereco') ? $this->Html->link($pessoa->endereco->id, ['controller' => 'Endereco', 'action' => 'view', $pessoa->endereco->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pessoa->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pessoa->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pessoa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pessoa->id)]) ?>
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
