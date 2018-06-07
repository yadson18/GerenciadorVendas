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
                <div class='view-image col-sm-4'>
                    <?php if (is_file(WWW_ROOT . 'img' . DS . $produto->caminho_imagem)): ?>
                        <?= $this->Html->image($produto->caminho_imagem, ['class' => 'img-responsive']) ?>
                    <?php else: ?>
                        <?= $this->Html->image('produtos/sem-imagem.gif', ['class' => 'img-responsive']) ?>
                    <?php endif ?>
                </div>
                <div class='view-content col-sm-8'>
                    <h3 class='view-content-header text-center'><?= h($produto->nome) ?></h3>
                    <ul class='list-unstyled'>
                        <li>
                            <strong>Código do produto: </strong>
                            <?= h($produto->codigo_produto) ?>
                        </li>
                        <li><?= h($produto->data_criacao) ?></li>
                        <li><?= h($produto->data_alteracao) ?></li>
                        <li><?= $this->Number->format($produto->quantidade_estoque) ?></li>
                        <li><?= $produto->categoria_id ?></li>
                        <li><?= $produto->alterado_por ?></li>
                        <li><?= $produto->criado_por ?></li>
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