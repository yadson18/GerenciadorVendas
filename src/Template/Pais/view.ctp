<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pai $pai
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pai'), ['action' => 'edit', $pai->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pai'), ['action' => 'delete', $pai->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pai->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pais'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pai'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pais view large-9 medium-8 columns content">
    <h3><?= h($pai->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($pai->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pai->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cod Pais') ?></th>
            <td><?= $this->Number->format($pai->cod_pais) ?></td>
        </tr>
    </table>
</div>
