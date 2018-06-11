<div id='produto-view'>
    <div class='view container'>
        <div class='view-header'>
            <ul class='list-inline text-right'>
                <li>
                    <?= $this->Html->link(
                        __('Excluir') . ' <i class="fas fa-trash-alt"></i>', 
                        ['action' => 'delete', $produto->id, '_full' => true], 
                        ['class' => 'btn btn-danger', 'escape' => false]
                    ) ?>
                </li>
                <li>
                    <?= $this->Html->link(
                        __('Editar') . ' <i class="fas fa-pencil-alt"></i>', 
                        ['action' => 'edit', $produto->id, '_full' => true], 
                        ['class' => 'btn btn-primary', 'escape' => false]
                    ) ?>
                </li>
            </ul>
        </div>
        <div class='view-body'>
            <div class='row'>
                <div class='view-image col-sm-4 text-center'>
                    <?php if (is_file(WWW_ROOT . 'img' . DS . $produto->caminho_imagem)): ?>
                        <?= $this->Html->image($produto->caminho_imagem, ['class' => 'img-']) ?>
                    <?php else: ?>
                        <?= $this->Html->image('produtos/sem-imagem.gif', ['class' => 'img-']) ?>
                    <?php endif ?>
                </div>
                <div class='view-content col-sm-8'>
                    <h3 class='view-content-header text-center'><?= h($produto->nome) ?></h3>
                    <ul class='list-group list-unstyled'>
                        <li class='list-group-item'>
                            <strong>Categoria</strong>
                            <span class='badge'><?= h($produto->categoria->descricao) ?></span>
                        </li>
                        <li class='list-group-item'>
                            <strong>Código do produto</strong>
                            <span class='badge'><?= h($produto->codigo_produto) ?></span>
                        </li>
                        <li class='list-group-item'>
                            <strong>Criado por</strong>
                            <span class='badge'><?= h($produto->criado_por->login) ?></span>
                        </li>
                        <li class='list-group-item'>
                            <strong>Data de criação</strong>
                            <span class='badge'><?= h($produto->data_criacao) ?></span>
                        </li>
                        <li class='list-group-item'>
                            <strong>Alterado por</strong>
                            <span class='badge'><?= h($produto->alterado_por->login) ?></span>
                        </li>
                        <li class='list-group-item'>
                            <strong>Data de alteração</strong>
                            <span class='badge'><?= h($produto->data_alteracao) ?></span>
                        </li>
                        <li class='list-group-item'>
                            <strong>Quantidade em estoque</strong>
                            <span class='badge'>
                                <?= $this->Number->format($produto->quantidade_estoque) ?>
                            </span>
                        </li>
                        <li>
                            <ul class='list-inline text-center'>
                                <li>
                                    <p><?= __('Preço de compra') ?></p>
                                    <p class='product-price'>
                                        <strong>
                                            <?= $this->Number->currency($produto->valor_compra) ?>
                                        </strong>
                                    </p>
                                </li>
                                <li class='hidden-xs'><i class='fas fa-arrow-right'></i></li>
                                <li>
                                    <p><?= __('Preço de venda') ?></p>
                                    <p class='product-price'>
                                        <strong>
                                            <?= $this->Number->currency($produto->valor_venda) ?>
                                        </strong>
                                    </p>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class='view-footer'>
            <div class='description'>
                <h3 class='text-center'><?= __('Descrição') ?></h3>
                <?= $this->Text->autoParagraph(h($produto->descricao)); ?>
            </div>
        </div>
    </div>
</div>