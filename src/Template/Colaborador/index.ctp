<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Colaborador[]|\Cake\Collection\CollectionInterface $colaborador
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Colaborador'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pessoa'), ['controller' => 'Pessoa', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pessoa'), ['controller' => 'Pessoa', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="colaborador index large-9 medium-8 columns content">
    <h3><?= __('Colaborador') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('criado_por') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_criacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('alterado_por') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_alteracao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pessoa_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($colaborador as $colaborador): ?>
            <tr>
                <td><?= $this->Number->format($colaborador->id) ?></td>
                <td><?= $this->Number->format($colaborador->criado_por) ?></td>
                <td><?= h($colaborador->data_criacao) ?></td>
                <td><?= $this->Number->format($colaborador->alterado_por) ?></td>
                <td><?= h($colaborador->data_alteracao) ?></td>
                <td><?= $colaborador->has('pessoa') ? $this->Html->link($colaborador->pessoa->id, ['controller' => 'Pessoa', 'action' => 'view', $colaborador->pessoa->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $colaborador->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $colaborador->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $colaborador->id], ['confirm' => __('Are you sure you want to delete # {0}?', $colaborador->id)]) ?>
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
