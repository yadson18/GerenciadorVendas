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
        <title>Multi+</title>
        
        <?= $this->Html->charset() ?>
        <?= $this->Html->meta('icon') ?>
        <?= $this->Html->meta([
            'name' => 'viewport', 
            'content' => 'width=device-width, initial-scale=1.0'
        ]) ?>

        <?= $this->Html->css(['bootstrap.min','fontawesome.min']) ?>
        <?= $this->Html->script(['jquery.min', 'bootstrap.min']) ?>
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
    <body data-spy='scroll' data-target='.navbar' data-offset='50'>
        <nav class='navbar' id='menu-principal'>
            <div class='container-fluid'>
                <div class='navbar-header'>
                    <?php if ($this->template !== 'login'): ?>
                        <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#menu' aria-expanded='false'>
                            <span class='sr-only'>Toggle navigation</span>
                            <span class='icon-bar'></span>
                            <span class='icon-bar'></span>
                            <span class='icon-bar'></span>
                        </button>
                        <a class='navbar-brand' href='#topo'>
                            <?= $this->Html->image('logo.png', ['width' => 140]) ?>
                        </a>
                    <?php endif; ?>
                </div>
                <div class='collapse navbar-collapse' id='menu'>
                    <?php if ($this->template === 'display'): ?>
                        <?= $this->element('Home/menu') ?>
                    <?php endif ?>
                </div>
            </div>
        </nav>
        <div class='content'>
            <?= $this->fetch('content') ?>
        </div>
    </body>
</html>