<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FormaPagamento $formaPagamento
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $formaPagamento->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $formaPagamento->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Forma Pagamento'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Pedido'), ['controller' => 'Pedido', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pedido'), ['controller' => 'Pedido', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="formaPagamento form large-9 medium-8 columns content">
    <?= $this->Form->create($formaPagamento) ?>
    <fieldset>
        <legend><?= __('Edit Forma Pagamento') ?></legend>
        <?php
            echo $this->Form->control('descricao');
            echo $this->Form->control('juros');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
