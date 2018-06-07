<div id='produto-add' class='container-fluid'>
    <div class='col-md-8 col-md-offset-2'>    
        <?= $this->Form->create($produto, ['type' => 'file']) ?>
            <div class='form-header text-center'>
                <h2 class='page-header'><?= __('Novo Produto') ?></h2>
            </div>
            <div class='form-body row'>
                <div class='message-box col-sm-12'><?= $this->Flash->render() ?></div>
                <div class='form-group col-sm-5'>
                    <label>
                        <?= __('Código referência') ?><span class='required'> *</span>
                    </label> 
                    <?= $this->Form->control('produto[codigo_produto]', [
                            'value' => h($produto->codigo_produto),
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
                    <?= $this->Form->control('produto[nome]', [
                            'placeholder' => 'Ex: Empire Intense (100ml)',
                            'value' => h($produto->nome),
                            'class' => 'form-control',
                            'label' => false
                        ]) 
                    ?>
                </div>
                <div class='form-group col-sm-3'>
                    <label>
                        <?= __('Preço compra (R$)') ?><span class='required'> *</span>
                    </label> 
                    <?= $this->Form->control('produto[valor_compra]', [
                            'value' => $this->Number->format($produto->valor_compra, [
                                'precision' => 2,
                                'places' => 2
                            ]),
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
                    <?= $this->Form->control('produto[valor_venda]', [
                            'value' => $this->Number->format($produto->valor_venda, [
                                'precision' => 2,
                                'places' => 2
                            ]),
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
                    <?= $this->Form->control('produto[quantidade_estoque]', [
                            'value' => h($produto->quantidade_estoque),
                            'class' => 'form-control',
                            'placeholder' => 'Ex: 15',
                            'label' => false
                        ]) 
                    ?>
                </div>
                <div class='form-group col-sm-4'>
                    <label>
                        <?= __('Categoria') ?><span class='required'> *</span>
                    </label>
                    <div class='input-group'>
                        <?= $this->Form->control('produto[categoria_id]', [
                                'empty' => ($categoria->count() > 0) ? false : '-- Selecione --',
                                'value' => h($produto->categoria_id),
                                'class' => 'form-control',
                                'options' => $categoria,
                                'required' => true,
                                'escape' => false,
                                'label' => false
                            ]) 
                        ?>
                        <span class='input-group-btn'>
                            <?= $this->Form->button('<i class="fas fa-plus"></i>', [
                                'data-target' => '#categoria-add',
                                'class' => 'btn btn-success',
                                'data-toggle' => 'modal',
                                'type' => 'button',
                                'escape' => false,
                            ]) ?>
                        </span>
                    </div>
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
                        <?= $this->Form->control('arquivo_nome', [
                            'placeholder' => 'Selecione um arquivo',
                            'class' => 'form-control file-name',
                            'disabled' => true,
                            'label' => false,
                            'name' => false
                        ]) ?>
                        <span class='input-group-btn'>
                            <?= $this->Form->button(
                                '<i class="far fa-folder-open"></i> ' . __('Buscar'), [
                                    'class' => 'browse btn btn-primary',
                                    'type' => 'button',
                                    'escape' => false,
                                    'label' => false
                                ]
                            ) ?>
                        </span>
                    </div>
                </div>
                <div class='form-group col-sm-12'>
                    <label><?= __('Descrição do produto') ?></label>
                    <?= $this->Form->textArea('produto[descricao]', [
                            'placeholder' => 'Digite uma descrição...',
                            'value' => h($produto->descricao),
                            'class' => 'form-control',
                            'maxlength' => 1100,
                            'label' => false
                        ]) 
                    ?>
                </div>
            </div>
            <div class='form-footer row'>
                <div class='form-group col-sm-3 col-sm-offset-5'>
                    <?= $this->Html->link(
                        '<i class="fas fa-angle-double-left"></i> ' . __('Retornar'), 
                        ['action' => 'index', '_full' => true], 
                        ['class' => 'btn btn-primary btn-block', 'escape' => false]
                    ) ?>
                </div>
                <div class='form-group col-sm-4'>
                    <?= $this->Form->button(
                        __('Salvar') . ' <i class="fas fa-save"></i>', [
                            'class' => 'btn btn-success btn-block',
                            'escape' => false,
                            'label' => false
                        ]
                    ) ?>
                </div>
            </div>
        <?= $this->Form->end() ?>
    </div>
</div>
<!-- Modal Adicionar Categoria -->
<div id='categoria-add' class='modal fade' role='dialog'>
    <div class='modal-dialog'>
        <div class='modal-content'>
            <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal'>&times;</button>
                <h4 class='modal-title text-center'><?= __('Nova Categoria') ?></h4>
            </div>
            <div class='modal-body'>
                <?= $this->Form->create('', [
                    'id' => 'form-categoria',
                    'url' => [
                        'controller' => 'categoria',
                        'action' => 'add'
                    ]
                ]) ?>
                    <div class='row'>
                        <div class='form-group col-sm-5'>
                            <?= $this->Form->control('categoria_pai_id', [
                                    'empty' => '-- Sem categoria --',
                                    'label' => 'Categoria (Pai)',
                                    'class' => 'form-control',
                                    'options' => $categoria,
                                    'escape' => false
                                ]) 
                            ?>
                        </div>
                        <div class='form-group col-sm-7'>
                            <label>
                                <?= __('Descrição') ?><span class='required'> *</span>
                            </label>
                            <?= $this->Form->control('descricao', [
                                    'placeholder' => 'Ex: Perfumaria',
                                    'class' => 'form-control',
                                    'required' => true,
                                    'label' => false
                                ]) 
                            ?>
                        </div>
                    </div>
                <?= $this->Form->end() ?>
            </div>
            <div class='modal-footer'>
                <?= $this->Form->button(
                    __('Fechar') . ' <i class="fas fa-times"></i>', [
                        'class' => 'btn btn-danger',
                        'data-dismiss' => 'modal',
                        'escape' => false,
                        'label' => false
                    ]
                ) ?>
                <?= $this->Form->button(
                    __('Salvar') . ' <i class="fas fa-save"></i>', [
                        'class' => 'btn btn-success',
                        'form' => 'form-categoria',
                        'escape' => false,
                        'label' => false
                    ]
                ) ?>
            </div>
        </div>
    </div>
</div>