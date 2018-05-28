<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PessoaJuridica $pessoaJuridica
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Pessoa Juridica'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Pessoa'), ['controller' => 'Pessoa', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pessoa'), ['controller' => 'Pessoa', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pessoaJuridica form large-9 medium-8 columns content">
    <?= $this->Form->create($pessoaJuridica) ?>
    <fieldset>
        <legend><?= __('Add Pessoa Juridica') ?></legend>
        <?php
            echo $this->Form->control('cnpj');
            echo $this->Form->control('razao_social');
            echo $this->Form->control('fantasia');
            echo $this->Form->control('inscricao_estadual');
            echo $this->Form->control('pessoa_id', ['options' => $pessoa]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
