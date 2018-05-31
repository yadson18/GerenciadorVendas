<div id='produto-add' class='container-fluid'>
    <div class='col-md-8 col-md-offset-2'>    
        <?= $this->Form->create($produto, ['type' => 'file']) ?>
            <div class='form-header text-center'>
                <h2 class='page-header'><?= __('Novo Produto') ?></h2>
            </div>
            <div class='form-body row'>
                <div class='message-box col-sm-12'>
                    <?= $this->Flash->render() ?>  
                </div>
                <div class='form-group col-sm-5'>
                    <label>
                        <?= __('Código de barras') ?><span class='required'> *</span>
                    </label> 
                    <?= $this->Form->control('codigo_produto', [
                            'placeholder' => 'Ex: 0171825',
                            'class' => 'form-control',
                            'required' => true,
                            'label' => false
                        ]) 
                    ?>
                </div>
                <div class='form-group col-sm-7'>
                    <label>
                        <?= __('Nome') ?><span class='required'> *</span>
                    </label>
                    <?= $this->Form->control('nome', [
                            'placeholder' => 'Ex: Empire Intense (100ml)',
                            'class' => 'form-control',
                            'label' => false
                        ]) 
                    ?>
                </div>
                <div class='form-group col-sm-3'>
                    <label>
                        <?= __('Preço compra (R$)') ?><span class='required'> *</span>
                    </label> 
                    <?= $this->Form->control('valor_compra', [
                            'class' => 'form-control money',
                            'placeholder' => 'Ex: 40,00',
                            'id' => 'preco-compra',
                            'label' => false,
                            'type' => 'text'
                        ]) 
                    ?>
                </div>
                <div class='form-group col-sm-3'>
                    <label><?= __('Lucro (%)') ?></label>
                    <?= $this->Form->control('lucro', [
                            'class' => 'form-control percent',
                            'placeholder' => 'Ex: 50.00',
                            'label' => false,
                            'name' => false,
                            'id' => 'lucro'
                        ]) 
                    ?>
                </div>
                <div class='form-group col-sm-3'>
                    <label><?= __('Preço sugerido (R$)') ?></label>
                    <?= $this->Form->control('preco_sugerido', [
                            'class' => 'form-control money',
                            'placeholder' => 'Ex: 60,00',
                            'id' => 'preco-sugerido',
                            'disabled' => true,
                            'label' => false,
                            'name' => false
                        ]) 
                    ?>
                </div>
                <div class='form-group col-sm-3'>
                    <label>
                        <?= __('Preço venda (R$)') ?><span class='required'> *</span>
                    </label>
                    <?= $this->Form->control('valor_venda', [
                            'class' => 'form-control money',
                            'placeholder' => 'Ex: 60,00',
                            'label' => false,
                            'type' => 'text'
                        ]) 
                    ?>
                </div>
                <div class='form-group col-sm-2'>
                    <label>
                        <?= __('Estoque') ?><span class='required'> *</span>
                    </label>
                    <?= $this->Form->control('quantidade_estoque', [
                            'class' => 'form-control',
                            'placeholder' => 'Ex: 15',
                            'label' => false
                        ]) 
                    ?>
                </div>
                <div class='form-group col-sm-4'>
                    <?= $this->Form->control('categoria_id', [
                            'class' => 'form-control',
                            'options' => $categoria
                        ]) 
                    ?>
                </div>
                <div class='form-group col-sm-6'>
                    <label><?= __('Imagem do produto') ?></label>
                    <?= $this->Form->file('imagem', [
                            'class' => 'form-control hidden file',
                            'accept' => 'image/*'
                        ]) 
                    ?>
                    <div class='input-group col-sm-12'>
                        <span class='input-group-addon'>
                            <i class='far fa-image'></i>
                        </span>
                        <input type='text' class='form-control file-name' disabled placeholder='Selecione um arquivo'>
                        <span class='input-group-btn'>
                            <button class='browse btn btn-primary' type='button'>
                                <i class='far fa-folder-open'></i> Buscar
                            </button>
                        </span>
                    </div>

                </div>
                <div class='form-group col-sm-12'>
                    <label>Descrição do produto</label>
                    <?= $this->Form->textArea('descricao', [
                            'placeholder' => 'Digite uma descrição...',
                            'class' => 'form-control',
                            'label' => false
                        ]) 
                    ?>
                </div>
            </div>
            <div class='form-footer row'>
                <div class='form-group col-sm-5'>
                    <a href='/produto/index' class='btn btn-primary btn-block'>
                        <i class='fas fa-angle-double-left'></i> <?= __('Retornar') ?>
                    </a>
                </div>
                <div class='form-group col-sm-7'>
                    <button class='btn btn-success btn-block' type='submit'>
                        <?= __('Salvar') ?> <i class='fas fa-save'></i>
                    </button>
                </div>
            </div>
        <?= $this->Form->end() ?>
    </div>
</div>