<div id='produto-index' class='container-fluid'>
    <div class='message-box'><?= $this->Flash->render() ?></div>
    <div class='page-header'>
        <div class='row'> 
            <div class='col-sm-3 form-group'>
                <?= $this->Html->link(
                    __('Novo Produto') . ' <i class="fas fa-plus-circle"></i>', 
                    ['action' => 'add', '_full' => true], 
                    ['class' => 'btn btn-success', 'escape' => false]
                ) ?>
            </div>
            <div class='col-md-5 col-sm-9'>
                <div class='search input-group'>
                    <?= $this->Form->control('busca', [
                        'value' => (isset($filtro['busca'])) ? $filtro['busca'] : '', 
                        'placeholder' => 'Digite sua busca aqui...',
                        'class' => 'form-control',
                        'type' => 'search',
                        'label' => false
                    ]) ?>
                    <span class='input-group-btn'>
                        <?= $this->Form->button(
                            __('Buscar') . ' <i class="fas fa-search"></i>', [
                                'class' => 'btn btn-primary',
                                'type' => 'button',
                                'escape' => false,
                                'label' => false
                            ]
                        ) ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class='row'>
        <div class='filter col-sm-3 hidden-xs'>
            <?php if ($categoria->count() > 0): ?>
                <div class='filter-header'>
                    <h3 class='text-center'><?= __('Categorias') ?></h3>
                </div>
                <div class='filter-body'>
                    <div class='checkbox'>
                        <?php foreach ($categoria as $id => $descricao): ?>
                            <?php 
                                $delimitador = strrpos($descricao, ';');
                                $tabulacao = substr($descricao, 0, $delimitador);
                                if ($delimitador) {
                                    $descricao = substr($descricao, ($delimitador + 1));
                                }
                            ?>
                            <div class='input checkbox'>
                                <label for=categoria-<?= $id ?>> 
                                    <?= $tabulacao ?>
                                    <?php if (isset($filtro['categoria']) && in_array($id, $filtro['categoria'])): ?>
                                        <input type='checkbox' name='categoria[]' value=<?= $id ?> id=categoria-<?= $id ?> checked>
                                    <?php else: ?>
                                        <input type='checkbox' name='categoria[]' value=<?= $id ?> id=categoria-<?= $id ?>>
                                    <?php endif ?>
                                    <?php if ($delimitador): ?>
                                        <?= $descricao ?>
                                    <?php else: ?>
                                        <i class='fas fa-angle-down'></i>
                                        <strong><?= $descricao ?></strong>
                                    <?php endif ?>
                                </label>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif ?>
        </div>
        <div class='col-sm-9'>
            <ul class='list-inline sort'>
                <li><strong>Ordernar por:</strong></li>
                <li class='form-group'>
                    <?= $this->Paginator->sort('valor_venda', 
                        $this->Form->button(
                            '<i class="fas fa-dollar-sign"></i> ' . __('Maior preço'), [
                                'class' => 'btn btn-info btn-sm',
                                'type' => 'button',
                                'escape' => false
                            ]
                        ), ['direction' => 'desc', 'escape' => false, 'lock' => true]
                    ) ?>
                </li>
                <li class='form-group'>
                    <?= $this->Paginator->sort('valor_venda', 
                        $this->Form->button(
                            '<i class="fas fa-dollar-sign"></i> ' . __('Menor preço'), [
                                'class' => 'btn btn-info btn-sm',
                                'type' => 'button',
                                'escape' => false
                            ]
                        ), ['direction' => 'asc', 'escape' => false, 'lock' => true]
                    ) ?>
                </li>
                <li class='form-group'>
                    <?= $this->Paginator->sort('nome', 
                        $this->Form->button(
                            '<i class="fas fa-long-arrow-alt-up"></i> ' . __('A-Z'), [
                                'class' => 'btn btn-info btn-sm',
                                'type' => 'button',
                                'escape' => false
                            ]
                        ), ['direction' => 'desc', 'escape' => false, 'lock' => true]
                    ) ?>
                </li>
                <li class='form-group'>
                    <?= $this->Paginator->sort('nome', 
                        $this->Form->button(
                            '<i class="fas fa-long-arrow-alt-down"></i> ' . __('A-Z'), [
                                'class' => 'btn btn-info btn-sm',
                                'type' => 'button',
                                'escape' => false
                            ]
                        ), ['direction' => 'asc', 'escape' => false, 'lock' => true]
                    ) ?>
                </li>
            </ul>
            <div class='row'>
                <?php if (sizeof($produto) > 0): ?>
                    <?php foreach ($produto as $produto): ?>
                        <div class='col-md-4 col-sm-6'>
                            <div class='card-product'>
                                <div class='product-image'> 
                                    <?php if (is_file(WWW_ROOT . 'img' . DS . $produto->caminho_imagem)): ?>
                                        <?= $this->Html->image($produto->caminho_imagem, [
                                            'class' => 'img-responsive'
                                        ]) ?>
                                    <?php else: ?>
                                        <?= $this->Html->image('produtos/sem-imagem.gif', [
                                            'class' => 'img-responsive'
                                        ]) ?>
                                    <?php endif ?>
                                </div>
                                <div class='product-info'>
                                    <ul class='text-center'>
                                        <li class='product-name'>
                                            <?= ucfirst(h($produto->nome)) ?>
                                        </li>
                                        <li class='product-description'>
                                            <?= h($produto->descricao) ?>
                                        </li>
                                        <li class='product-price'>
                                            <?= $this->Number->currency($produto->valor_venda) ?>
                                        </li>
                                        <li class='product-quantity'>
                                            <?= __('Disponíveis:') ?> 
                                            <span class=<?= ($produto->quantidade_estoque < 4) ? 'low-quantity' : '' ?>>
                                                <?= $this->Number->format($produto->quantidade_estoque) ?>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <div class='product-actions'>
                                    <?= $this->Html->link(
                                        __('Detalhes') . ' <i class="fas fa-angle-double-right"></i>', 
                                        ['action' => 'view', $produto->id, '_full' => true], 
                                        ['class' => 'btn btn-primary btn-block', 'escape' => false]
                                    ) ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class='col-sm-8 nothing-found text-center'>
                        <i class='far fa-frown fa-lg'></i>
                        <p><?= __('Nenhum produto encontrado.') ?></p>
                    </div>
                <?php endif ?>
            </div>
        </div>
    </div>
    <div class='paginator pull-right'>
        <ul class='pagination'>
            <?= $this->Paginator->first(
                '<i class="fas fa-angle-double-left"></i> ' . __('Início'), ['escape' => false]) 
            ?>
            <?= $this->Paginator->prev(
                '<i class="fas fa-angle-left"></i> ' . __('Anterior'), ['escape' => false]) 
            ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(
                __('Próximo') . ' <i class="fas fa-angle-right"></i>', ['escape' => false]) 
            ?>
            <?= $this->Paginator->last(
                __('Fim') . ' <i class="fas fa-angle-double-right"></i>', ['escape' => false]) 
            ?>
        </ul>
        <p>
            <?= $this->Paginator->counter([
                'escape' => false, 
                'format' => __(
                    'Exibindo <strong>{{current}}</strong> produto(s) de <strong>{{count}}</strong>.'
                )
            ]) ?>
        </p>
    </div>
</div>