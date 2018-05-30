<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Gerenciador Vendas</title>

        <?= $this->Html->meta('icon') ?>
        <?= $this->Html->css(['bootstrap.min','fontawesome.min']) ?>
        <?= $this->Html->script([
            'jquery.min',
            'bootstrap.min',
            'mask-money.min',
            'mask.min',
            'scripts'
        ]) ?>
        <?= $this->Html->meta([
            'link' => '/less/styles.less',
            'rel' => 'stylesheet/less',
            'type' => 'text/css'
        ]); ?>
        <?= $this->Html->script('less.min.js') ?>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
    </head>
    <body>
        <nav class='navbar navbar-default' id='main-menu'>
            <div class='container-fluid'>
                <div class='navbar-header'>
                    <?php if ($this->template !== 'login'): ?>
                        <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#menu' aria-expanded='false'>
                            <span class='sr-only'>Toggle navigation</span>
                            <span class='icon-bar'></span>
                            <span class='icon-bar'></span>
                            <span class='icon-bar'></span>
                        </button>
                    <?php endif ?>
                    <a class='navbar-brand' href='#'>GV</a>
                </div>
                <?php if ($this->template !== 'login'): ?>
                    <div class='collapse navbar-collapse' id='menu'>
                        <ul class='nav navbar-nav'>
                            <li>
                                <a href='/sistema/home'>
                                    <i class='fas fa-home'></i> <?= __('Início') ?>
                                </a>
                            </li>
                            <li>
                                <a href='/cliente/index'>
                                    <i class='fas fa-users'></i> <?= __('Cliente') ?>
                                </a>
                            </li>
                            <li>
                                <a href='/produto/index'>
                                    <i class='fas fa-dolly-flatbed'></i> <?= __('Produto') ?>
                                </a>
                            </li>
                            <li>
                                <a href='/colaborador/index'>
                                    <i class='fas fa-user-tie'></i> <?= __('Colaborador') ?>
                                </a>
                            </li>
                        </ul>
                        <ul class='nav navbar-nav navbar-right'>
                            <li class='dropdown'>
                                <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>
                                    <i class='fas fa-user-circle fa-lg'></i>
                                    <?= ucfirst($usuario['login']) ?> 
                                    <span class='caret'></span>
                                </a>
                                <ul class='dropdown-menu'>
                                    <li>
                                        <a href='#'>
                                            <i class='fas fa-key'></i> <?= __('Alterar Senha') ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href='/Usuario/logout'>
                                            <i class='fas fa-sign-out-alt'></i> <?= __('Sair') ?>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                <?php endif ?>
            </div>
        </nav>
        <div class='container-fluid'>
            <?= $this->fetch('content') ?>
        </div>
    </body>
</html>