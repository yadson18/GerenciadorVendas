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
                <h3>Login</h3>
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
                        __('Entrar'). ' <i class="fas fa-sign-in-alt"></i>', 
                        ['class' => 'btn btn-warning btn-block', 'escape' => false]
                    ) ?>
                </div>
                <div class='form-group'>
                    <?= $this->Html->link(
                        '<i class="fas fa-angle-double-left"></i> ' . __('Retornar'), 
                        ['controller' => 'pages', 'action' => 'home', '_full' => true], 
                        ['class' => 'btn btn-danger btn-block', 'escape' => false]
                    ) ?>
                </div>
            </div>
        <?= $this->Form->end() ?>
    </div>
</div>
