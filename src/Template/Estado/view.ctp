<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estado $estado
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Estado'), ['action' => 'edit', $estado->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Estado'), ['action' => 'delete', $estado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estado->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Estado'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estado'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pais'), ['controller' => 'Pais', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pai'), ['controller' => 'Pais', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cidade'), ['controller' => 'Cidade', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cidade'), ['controller' => 'Cidade', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Endereco'), ['controller' => 'Endereco', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Endereco'), ['controller' => 'Endereco', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="estado view large-9 medium-8 columns content">
    <h3><?= h($estado->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Sigla') ?></th>
            <td><?= h($estado->sigla) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($estado->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pai') ?></th>
            <td><?= $estado->has('pai') ? $this->Html->link($estado->pai->id, ['controller' => 'Pais', 'action' => 'view', $estado->pai->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($estado->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cod Estado') ?></th>
            <td><?= $this->Number->format($estado->cod_estado) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Cidade') ?></h4>
        <?php if (!empty($estado->cidade)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Cod Cidade') ?></th>
                <th scope="col"><?= __('Estado Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($estado->cidade as $cidade): ?>
            <tr>
                <td><?= h($cidade->id) ?></td>
                <td><?= h($cidade->nome) ?></td>
                <td><?= h($cidade->cod_cidade) ?></td>
                <td><?= h($cidade->estado_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Cidade', 'action' => 'view', $cidade->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Cidade', 'action' => 'edit', $cidade->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cidade', 'action' => 'delete', $cidade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cidade->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Endereco') ?></h4>
        <?php if (!empty($estado->endereco)): ?>
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
            <?php foreach ($estado->endereco as $endereco): ?>
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
