<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pai[]|\Cake\Collection\CollectionInterface $pais
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pai'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pais index large-9 medium-8 columns content">
    <h3><?= __('Pais') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cod_pais') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pais as $pai): ?>
            <tr>
                <td><?= $this->Number->format($pai->id) ?></td>
                <td><?= h($pai->nome) ?></td>
                <td><?= $this->Number->format($pai->cod_pais) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pai->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pai->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pai->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pai->id)]) ?>
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
