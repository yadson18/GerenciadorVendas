<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PessoaFisica $pessoaFisica
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pessoaFisica->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pessoaFisica->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Pessoa Fisica'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Pessoa'), ['controller' => 'Pessoa', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pessoa'), ['controller' => 'Pessoa', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pessoaFisica form large-9 medium-8 columns content">
    <?= $this->Form->create($pessoaFisica) ?>
    <fieldset>
        <legend><?= __('Edit Pessoa Fisica') ?></legend>
        <?php
            echo $this->Form->control('rg');
            echo $this->Form->control('cpf');
            echo $this->Form->control('nome');
            echo $this->Form->control('data_nascimento');
            echo $this->Form->control('pessoa_id', ['options' => $pessoa]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
