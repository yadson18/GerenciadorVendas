<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Endereco $endereco
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Endereco'), ['action' => 'edit', $endereco->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Endereco'), ['action' => 'delete', $endereco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $endereco->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Endereco'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Endereco'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pais'), ['controller' => 'Pais', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pai'), ['controller' => 'Pais', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Estado'), ['controller' => 'Estado', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estado', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cidade'), ['controller' => 'Cidade', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cidade'), ['controller' => 'Cidade', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pessoa'), ['controller' => 'Pessoa', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pessoa'), ['controller' => 'Pessoa', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="endereco view large-9 medium-8 columns content">
    <h3><?= h($endereco->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Cep') ?></th>
            <td><?= h($endereco->cep) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bairro') ?></th>
            <td><?= h($endereco->bairro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Endereco') ?></th>
            <td><?= h($endereco->endereco) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero') ?></th>
            <td><?= h($endereco->numero) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Complemento') ?></th>
            <td><?= h($endereco->complemento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pai') ?></th>
            <td><?= $endereco->has('pai') ? $this->Html->link($endereco->pai->id, ['controller' => 'Pais', 'action' => 'view', $endereco->pai->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= $endereco->has('estado') ? $this->Html->link($endereco->estado->id, ['controller' => 'Estado', 'action' => 'view', $endereco->estado->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cidade') ?></th>
            <td><?= $endereco->has('cidade') ? $this->Html->link($endereco->cidade->id, ['controller' => 'Cidade', 'action' => 'view', $endereco->cidade->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($endereco->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Pessoa') ?></h4>
        <?php if (!empty($endereco->pessoa)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Contato Id') ?></th>
                <th scope="col"><?= __('Endereco Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($endereco->pessoa as $pessoa): ?>
            <tr>
                <td><?= h($pessoa->id) ?></td>
                <td><?= h($pessoa->contato_id) ?></td>
                <td><?= h($pessoa->endereco_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Pessoa', 'action' => 'view', $pessoa->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Pessoa', 'action' => 'edit', $pessoa->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Pessoa', 'action' => 'delete', $pessoa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pessoa->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
