<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pessoa $pessoa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Pessoa'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Contato'), ['controller' => 'Contato', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contato'), ['controller' => 'Contato', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Endereco'), ['controller' => 'Endereco', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Endereco'), ['controller' => 'Endereco', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cliente'), ['controller' => 'Cliente', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Cliente', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Colaborador'), ['controller' => 'Colaborador', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Colaborador'), ['controller' => 'Colaborador', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pessoa Fisica'), ['controller' => 'PessoaFisica', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pessoa Fisica'), ['controller' => 'PessoaFisica', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pessoa Juridica'), ['controller' => 'PessoaJuridica', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pessoa Juridica'), ['controller' => 'PessoaJuridica', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuario'), ['controller' => 'Usuario', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuario', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pessoa form large-9 medium-8 columns content">
    <?= $this->Form->create($pessoa) ?>
    <fieldset>
        <legend><?= __('Add Pessoa') ?></legend>
        <?php
            echo $this->Form->control('contato_id', ['options' => $contato]);
            echo $this->Form->control('endereco_id', ['options' => $endereco]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
