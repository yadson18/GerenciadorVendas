<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Categorium $categorium
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Categorium'), ['action' => 'edit', $categorium->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Categorium'), ['action' => 'delete', $categorium->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categorium->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Categoria'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categorium'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="categoria view large-9 medium-8 columns content">
    <h3><?= h($categorium->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($categorium->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($categorium->id) ?></td>
        </tr>
    </table>
</div>
