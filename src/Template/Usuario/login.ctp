<div id='usuario-login' class='container-fluid'>
    <div class='col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3'>
        <?= $this->Form->create() ?>
            <?= $this->Flash->render() ?>   
            <?= $this->Flash->render('auth') ?>
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
            <div class='form-group'>
                <?= $this->Form->button(__('Entrar'), [
                        'class' => 'btn btn-success btn-block'
                    ]) 
                ?>
            </div>
        <?= $this->Form->end() ?>
    </div>
</div>