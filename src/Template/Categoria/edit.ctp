<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Categorium $categorium
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $categorium->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $categorium->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Categoria'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="categoria form large-9 medium-8 columns content">
    <?= $this->Form->create($categorium) ?>
    <fieldset>
        <legend><?= __('Edit Categorium') ?></legend>
        <?php
            echo $this->Form->control('descricao');
            echo $this->Form->control('direita');
            echo $this->Form->control('esquerda');
            echo $this->Form->control('data_criacao');
            echo $this->Form->control('data_alteracao');
            echo $this->Form->control('categoria_pai_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
