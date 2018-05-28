<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contato[]|\Cake\Collection\CollectionInterface $contato
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Contato'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pessoa'), ['controller' => 'Pessoa', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pessoa'), ['controller' => 'Pessoa', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contato index large-9 medium-8 columns content">
    <h3><?= __('Contato') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('celular') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contato as $contato): ?>
            <tr>
                <td><?= $this->Number->format($contato->id) ?></td>
                <td><?= h($contato->telefone) ?></td>
                <td><?= h($contato->celular) ?></td>
                <td><?= h($contato->email) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $contato->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contato->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contato->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contato->id)]) ?>
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
