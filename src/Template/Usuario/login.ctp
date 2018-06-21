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
<div id='login-conteudo'>
    <div class='logo text-center'>
         <?= $this->Html->image('logo.png', ['width' => 200]) ?>
    </div>               
    <div class='container'>
        <?= $this->Form->create('', [
            'class' => 'col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3',
            'id' => 'formulario-login'
        ]) ?>
            <div class='titulo text-center'>
                <h3><?= __('Entrar') ?></h3>
            </div>
            <div class='formulario-conteudo'>
                <div class='message-box'>
                    <?= $this->Flash->render() ?>   
                    <?= $this->Flash->render('auth') ?>
                </div>
                <div class='form-group icon-right'>
                    <?= $this->Form->control('login', [
                            'class' => 'form-control',
                            'placeholder' => 'Digite seu usuário',
                            'autofocus' => true,
                            'required' => true,
                            'label' => false
                        ]) 
                    ?>
                    <i class='fas fa-user icon'></i>
                </div>
                <div class='form-group icon-right'>
                    <?= $this->Form->password('senha', [
                            'class' => 'form-control',
                            'placeholder' => 'Digite sua senha',
                            'required' => true,
                            'label' => false
                        ]) 
                    ?>
                    <i class='fas fa-key icon'></i>
                </div>
            </div>
            <div class='formulario-rodape'>
                <div class='form-group'>
                    <?= $this->Form->button(
                        __('Entrar {0}', '<i class="fas fa-sign-in-alt"></i>'), 
                        ['class' => 'btn btn-warning btn-block', 'escape' => false]
                    ) ?>
                </div>
                <div class='form-group'>
                    <?= $this->Html->link(
                        __('{0} Retornar', '<i class="fas fa-angle-double-left"></i>'), 
                        ['controller' => 'pages', 'action' => 'home', '_full' => true], 
                        ['class' => 'btn btn-danger btn-block', 'escape' => false]
                    ) ?>
                </div>
            </div>
        <?= $this->Form->end() ?>
    </div>
</div>
