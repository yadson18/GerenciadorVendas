<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Categorium[]|\Cake\Collection\CollectionInterface $categoria
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Categorium'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="categoria index large-9 medium-8 columns content">
    <h3><?= __('Categoria') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('direita') ?></th>
                <th scope="col"><?= $this->Paginator->sort('esquerda') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_criacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_alteracao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categoria_pai_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categoria as $categorium): ?>
            <tr>
                <td><?= $this->Number->format($categorium->id) ?></td>
                <td><?= h($categorium->descricao) ?></td>
                <td><?= $this->Number->format($categorium->direita) ?></td>
                <td><?= $this->Number->format($categorium->esquerda) ?></td>
                <td><?= h($categorium->data_criacao) ?></td>
                <td><?= h($categorium->data_alteracao) ?></td>
                <td><?= $this->Number->format($categorium->categoria_pai_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $categorium->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $categorium->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $categorium->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categorium->id)]) ?>
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
