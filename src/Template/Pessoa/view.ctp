<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pessoa $pessoa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pessoa'), ['action' => 'edit', $pessoa->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pessoa'), ['action' => 'delete', $pessoa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pessoa->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pessoa'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pessoa'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contato'), ['controller' => 'Contato', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contato'), ['controller' => 'Contato', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Endereco'), ['controller' => 'Endereco', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Endereco'), ['controller' => 'Endereco', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cliente'), ['controller' => 'Cliente', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Cliente', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Colaborador'), ['controller' => 'Colaborador', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Colaborador'), ['controller' => 'Colaborador', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pessoa Fisica'), ['controller' => 'PessoaFisica', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pessoa Fisica'), ['controller' => 'PessoaFisica', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pessoa Juridica'), ['controller' => 'PessoaJuridica', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pessoa Juridica'), ['controller' => 'PessoaJuridica', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuario'), ['controller' => 'Usuario', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuario', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pessoa view large-9 medium-8 columns content">
    <h3><?= h($pessoa->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Contato') ?></th>
            <td><?= $pessoa->has('contato') ? $this->Html->link($pessoa->contato->id, ['controller' => 'Contato', 'action' => 'view', $pessoa->contato->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Endereco') ?></th>
            <td><?= $pessoa->has('endereco') ? $this->Html->link($pessoa->endereco->id, ['controller' => 'Endereco', 'action' => 'view', $pessoa->endereco->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pessoa->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Cliente') ?></h4>
        <?php if (!empty($pessoa->cliente)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Criado Por') ?></th>
                <th scope="col"><?= __('Data Criacao') ?></th>
                <th scope="col"><?= __('Alterado Por') ?></th>
                <th scope="col"><?= __('Data Alteracao') ?></th>
                <th scope="col"><?= __('Pessoa Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($pessoa->cliente as $cliente): ?>
            <tr>
                <td><?= h($cliente->id) ?></td>
                <td><?= h($cliente->criado_por) ?></td>
                <td><?= h($cliente->data_criacao) ?></td>
                <td><?= h($cliente->alterado_por) ?></td>
                <td><?= h($cliente->data_alteracao) ?></td>
                <td><?= h($cliente->pessoa_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Cliente', 'action' => 'view', $cliente->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Cliente', 'action' => 'edit', $cliente->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cliente', 'action' => 'delete', $cliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Colaborador') ?></h4>
        <?php if (!empty($pessoa->colaborador)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Criado Por') ?></th>
                <th scope="col"><?= __('Data Criacao') ?></th>
                <th scope="col"><?= __('Alterado Por') ?></th>
                <th scope="col"><?= __('Data Alteracao') ?></th>
                <th scope="col"><?= __('Pessoa Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($pessoa->colaborador as $colaborador): ?>
            <tr>
                <td><?= h($colaborador->id) ?></td>
                <td><?= h($colaborador->criado_por) ?></td>
                <td><?= h($colaborador->data_criacao) ?></td>
                <td><?= h($colaborador->alterado_por) ?></td>
                <td><?= h($colaborador->data_alteracao) ?></td>
                <td><?= h($colaborador->pessoa_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Colaborador', 'action' => 'view', $colaborador->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Colaborador', 'action' => 'edit', $colaborador->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Colaborador', 'action' => 'delete', $colaborador->id], ['confirm' => __('Are you sure you want to delete # {0}?', $colaborador->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Pessoa Fisica') ?></h4>
        <?php if (!empty($pessoa->pessoa_fisica)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Rg') ?></th>
                <th scope="col"><?= __('Cpf') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Data Nascimento') ?></th>
                <th scope="col"><?= __('Pessoa Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($pessoa->pessoa_fisica as $pessoaFisica): ?>
            <tr>
                <td><?= h($pessoaFisica->id) ?></td>
                <td><?= h($pessoaFisica->rg) ?></td>
                <td><?= h($pessoaFisica->cpf) ?></td>
                <td><?= h($pessoaFisica->nome) ?></td>
                <td><?= h($pessoaFisica->data_nascimento) ?></td>
                <td><?= h($pessoaFisica->pessoa_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'PessoaFisica', 'action' => 'view', $pessoaFisica->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'PessoaFisica', 'action' => 'edit', $pessoaFisica->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'PessoaFisica', 'action' => 'delete', $pessoaFisica->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pessoaFisica->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Pessoa Juridica') ?></h4>
        <?php if (!empty($pessoa->pessoa_juridica)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Cnpj') ?></th>
                <th scope="col"><?= __('Razao Social') ?></th>
                <th scope="col"><?= __('Fantasia') ?></th>
                <th scope="col"><?= __('Inscricao Estadual') ?></th>
                <th scope="col"><?= __('Pessoa Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($pessoa->pessoa_juridica as $pessoaJuridica): ?>
            <tr>
                <td><?= h($pessoaJuridica->id) ?></td>
                <td><?= h($pessoaJuridica->cnpj) ?></td>
                <td><?= h($pessoaJuridica->razao_social) ?></td>
                <td><?= h($pessoaJuridica->fantasia) ?></td>
                <td><?= h($pessoaJuridica->inscricao_estadual) ?></td>
                <td><?= h($pessoaJuridica->pessoa_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'PessoaJuridica', 'action' => 'view', $pessoaJuridica->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'PessoaJuridica', 'action' => 'edit', $pessoaJuridica->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'PessoaJuridica', 'action' => 'delete', $pessoaJuridica->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pessoaJuridica->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Usuario') ?></h4>
        <?php if (!empty($pessoa->usuario)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Login') ?></th>
                <th scope="col"><?= __('Senha') ?></th>
                <th scope="col"><?= __('Data Criacao') ?></th>
                <th scope="col"><?= __('Data Alteracao') ?></th>
                <th scope="col"><?= __('Pessoa Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($pessoa->usuario as $usuario): ?>
            <tr>
                <td><?= h($usuario->id) ?></td>
                <td><?= h($usuario->login) ?></td>
                <td><?= h($usuario->senha) ?></td>
                <td><?= h($usuario->data_criacao) ?></td>
                <td><?= h($usuario->data_alteracao) ?></td>
                <td><?= h($usuario->pessoa_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Usuario', 'action' => 'view', $usuario->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Usuario', 'action' => 'edit', $usuario->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Usuario', 'action' => 'delete', $usuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
