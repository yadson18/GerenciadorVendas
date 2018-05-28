<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contato $contato
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Contato'), ['action' => 'edit', $contato->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contato'), ['action' => 'delete', $contato->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contato->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contato'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contato'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pessoa'), ['controller' => 'Pessoa', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pessoa'), ['controller' => 'Pessoa', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contato view large-9 medium-8 columns content">
    <h3><?= h($contato->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Telefone') ?></th>
            <td><?= h($contato->telefone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Celular') ?></th>
            <td><?= h($contato->celular) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($contato->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($contato->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Pessoa') ?></h4>
        <?php if (!empty($contato->pessoa)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Contato Id') ?></th>
                <th scope="col"><?= __('Endereco Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($contato->pessoa as $pessoa): ?>
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
