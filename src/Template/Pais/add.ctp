<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pai $pai
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Pais'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="pais form large-9 medium-8 columns content">
    <?= $this->Form->create($pai) ?>
    <fieldset>
        <legend><?= __('Add Pai') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('cod_pais');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
