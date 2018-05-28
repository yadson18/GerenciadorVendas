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
        <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Montserrat'>
        <title>Gerenciador Vendas</title>

        <?= $this->Html->meta('icon') ?>

        <?= $this->Html->script('jquery.min.js') ?>
        <?= $this->Html->script('bootstrap.min.js') ?>
        <?= $this->Html->css('bootstrap.min.css') ?>
        <?= $this->Html->css('fontawesome.min.css') ?>

        <link rel='stylesheet/less' type='text/css' href='/less/mixin.less'>
        <link rel='stylesheet/less' type='text/css' href='/less/styles.less'>
        
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
                                    <i class='fas fa-home'></i> Início
                                </a>
                            </li>
                            <li>
                                <a href='/cliente/index'>
                                    <i class='fas fa-users'></i> Cliente
                                </a>
                            </li>
                            <li>
                                <a href='/produto/index'>
                                    <i class='fas fa-dolly-flatbed'></i> Produto
                                </a>
                            </li>
                            <li>
                                <a href='/colaborador/index'>
                                    <i class='fas fa-user-tie'></i> Colaborador
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
                                            <i class='fas fa-key'></i> Alterar Senha
                                        </a>
                                    </li>
                                    <li>
                                        <a href='/Usuario/logout'>
                                            <i class='fas fa-sign-out-alt'></i> Sair
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                <?php endif ?>
            </div>
        </nav>
        <div class='container'>
            <?= $this->fetch('content') ?>
        </div>
    </body>
</html>