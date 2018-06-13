<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produto $produto
 */
?>
<div id='produto-view'>
    <div class='view container'>
        <div class='view-header text-right form-group'>
            <?= $this->Html->link(
                __('Excluir') . ' <i class="fas fa-trash-alt"></i>', 
                ['action' => 'delete', $produto->id, '_full' => true], 
                ['class' => 'btn btn-danger', 'escape' => false]
            ) ?>
            <?= $this->Html->link(
                __('Editar') . ' <i class="fas fa-pencil-alt"></i>', 
                ['action' => 'edit', $produto->id, '_full' => true], 
                ['class' => 'btn btn-primary', 'escape' => false]
            ) ?>
        </div>
        <div class='view-body'>
            <div class='row'>
                <div class='col-sm-4 text-center'>
                    <div class='view-image'>
                        <?php if (is_file(WWW_ROOT . 'img' . DS . $produto->caminho_imagem)): ?>
                            <?= $this->Html->image($produto->caminho_imagem) ?>
                        <?php else: ?>
                            <?= $this->Html->image('produtos/sem-imagem.gif') ?>
                        <?php endif ?>
                    </div>
                </div>
                <div class='col-sm-8'>
                    <div class='view-content'>
                        <h3 class='view-content-header'><?= h($produto->nome) ?></h3>
                        <ul class='list-group list-unstyled'>
                            <li class='list-group-item'>
                                <strong><?= __('Categoria') ?></strong>
                                <span class='badge'><?= h($produto->categoria->descricao) ?></span>
                            </li>
                            <li class='list-group-item'>
                                <strong><?= __('Código do produto') ?></strong>
                                <span class='badge'><?= h($produto->codigo_produto) ?></span>
                            </li>
                            <li class='list-group-item'>
                                <strong><?= __('Criado por') ?></strong>
                                <span class='badge'><?= h($produto->criado_por->login) ?></span>
                            </li>
                            <li class='list-group-item'>
                                <strong><?= __('Data de criação') ?></strong>
                                <span class='badge'><?= h($produto->data_criacao) ?></span>
                            </li>
                            <li class='list-group-item'>
                                <strong><?= __('Alterado por') ?></strong>
                                <span class='badge'><?= h($produto->alterado_por->login) ?></span>
                            </li>
                            <li class='list-group-item'>
                                <strong><?= __('Data de alteração') ?></strong>
                                <span class='badge'><?= h($produto->data_alteracao) ?></span>
                            </li>
                            <li class='list-group-item'>
                                <strong><?= __('Quantidade em estoque') ?></strong>
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
        </div>
        <div class='view-footer'>
            <div class='description'>
                <h3 class='text-center'><?= __('Descrição') ?></h3>
                <?= $this->Text->autoParagraph(h($produto->descricao)); ?>
            </div>
        </div>
    </div>
</div>