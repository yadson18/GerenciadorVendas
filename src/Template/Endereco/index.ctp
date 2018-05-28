<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Endereco[]|\Cake\Collection\CollectionInterface $endereco
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Endereco'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pais'), ['controller' => 'Pais', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pai'), ['controller' => 'Pais', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Estado'), ['controller' => 'Estado', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estado', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cidade'), ['controller' => 'Cidade', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cidade'), ['controller' => 'Cidade', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pessoa'), ['controller' => 'Pessoa', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pessoa'), ['controller' => 'Pessoa', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="endereco index large-9 medium-8 columns content">
    <h3><?= __('Endereco') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cep') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bairro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('endereco') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero') ?></th>
                <th scope="col"><?= $this->Paginator->sort('complemento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pais_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estado_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cidade_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($endereco as $endereco): ?>
            <tr>
                <td><?= $this->Number->format($endereco->id) ?></td>
                <td><?= h($endereco->cep) ?></td>
                <td><?= h($endereco->bairro) ?></td>
                <td><?= h($endereco->endereco) ?></td>
                <td><?= h($endereco->numero) ?></td>
                <td><?= h($endereco->complemento) ?></td>
                <td><?= $endereco->has('pai') ? $this->Html->link($endereco->pai->id, ['controller' => 'Pais', 'action' => 'view', $endereco->pai->id]) : '' ?></td>
                <td><?= $endereco->has('estado') ? $this->Html->link($endereco->estado->id, ['controller' => 'Estado', 'action' => 'view', $endereco->estado->id]) : '' ?></td>
                <td><?= $endereco->has('cidade') ? $this->Html->link($endereco->cidade->id, ['controller' => 'Cidade', 'action' => 'view', $endereco->cidade->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $endereco->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $endereco->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $endereco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $endereco->id)]) ?>
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
