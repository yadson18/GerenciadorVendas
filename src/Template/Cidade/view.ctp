<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cidade $cidade
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cidade'), ['action' => 'edit', $cidade->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cidade'), ['action' => 'delete', $cidade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cidade->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cidade'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cidade'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Estado'), ['controller' => 'Estado', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estado', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Endereco'), ['controller' => 'Endereco', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Endereco'), ['controller' => 'Endereco', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cidade view large-9 medium-8 columns content">
    <h3><?= h($cidade->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($cidade->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= $cidade->has('estado') ? $this->Html->link($cidade->estado->id, ['controller' => 'Estado', 'action' => 'view', $cidade->estado->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cidade->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cod Cidade') ?></th>
            <td><?= $this->Number->format($cidade->cod_cidade) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Endereco') ?></h4>
        <?php if (!empty($cidade->endereco)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Cep') ?></th>
                <th scope="col"><?= __('Bairro') ?></th>
                <th scope="col"><?= __('Endereco') ?></th>
                <th scope="col"><?= __('Numero') ?></th>
                <th scope="col"><?= __('Complemento') ?></th>
                <th scope="col"><?= __('Pais Id') ?></th>
                <th scope="col"><?= __('Estado Id') ?></th>
                <th scope="col"><?= __('Cidade Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($cidade->endereco as $endereco): ?>
            <tr>
                <td><?= h($endereco->id) ?></td>
                <td><?= h($endereco->cep) ?></td>
                <td><?= h($endereco->bairro) ?></td>
                <td><?= h($endereco->endereco) ?></td>
                <td><?= h($endereco->numero) ?></td>
                <td><?= h($endereco->complemento) ?></td>
                <td><?= h($endereco->pais_id) ?></td>
                <td><?= h($endereco->estado_id) ?></td>
                <td><?= h($endereco->cidade_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Endereco', 'action' => 'view', $endereco->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Endereco', 'action' => 'edit', $endereco->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Endereco', 'action' => 'delete', $endereco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $endereco->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
