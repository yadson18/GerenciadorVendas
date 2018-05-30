<div id='usuario-login' class='container'>
    <div class='col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3'>
        <?= $this->Form->create() ?>
            <div class='form-header'>
                <h3 class='text-center'>Login</h3>
            </div>
            <div class='form-body'>
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
            <div class='form-footer'>
                <div class='form-group'>
                    <button class='btn btn-success btn-block'>
                        Entrar <i class='fas fa-sign-in-alt'></i>
                    </button>
                </div>
            </div>
        <?= $this->Form->end() ?>
    </div>
</div>