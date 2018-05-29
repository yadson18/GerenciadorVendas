<div id='produto-index'>
    <div class="page-header">
        <a href='/produto/add' class='btn btn-success btn-lg'>
            Novo Produto <i class='fas fa-plus-circle'></i>
        </a>
    </div>
    <div class='row'>
        <?php foreach ($produto as $produto): ?>
            <div class='col-md-3 col-sm-4'>
                <div class='card-product'>
                    <div class='product-image'> 
                        <?php if (!empty($produto->caminho_imagem) &&
                                file_exists(WWW_ROOT . $produto->caminho_imagem)
                            ): 
                        ?>
                            <img src=<?= h($produto->caminho_imagem) ?> class='img-responsive'>
                        <?php else: ?>
                            <img src='/img/produtos/sem-imagem.gif' class='img-responsive'>
                        <?php endif; ?>
                    </div>
                    <div class='product-content text-center'>
                        <p class='product-name'>
                            <?= h($produto->nome) ?>
                        </p>
                        <p class='product-description'>
                            <?= h($produto->descricao) ?>
                        </p>
                        <p class='product-price'>
                            <?= $this->Number->currency($produto->valor_venda) ?>
                        </p>
                        <p class='product-quantity'>
                            Disponíveis: 
                            <span class=<?= ($produto->quantidade_estoque < 4) ? 'low-quantity' : '' ?>>
                                <?= $this->Number->format($produto->quantidade_estoque) ?>
                            </span>
                        </p>
                    </div>
                    <div>
                        <a href=/produto/view/<?= $produto->id ?> class='btn btn-primary btn-block'>
                            Detalhes <i class='fas fa-angle-double-right'></i>
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class='col-md-12 col-sm-12 col-xs-12'>
        <div class='paginator'>
            <ul class='pagination'>
                <?= $this->Paginator->first('<< ' . __('Início')) ?>
                <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('Próximo') . ' >') ?>
                <?= $this->Paginator->last(__('Fim') . ' >>') ?>
            </ul>
            <p>
                <?= $this->Paginator->counter([
                    'format' => __('Página {{page}} de {{pages}}, exibindo {{current}} registro(s) de um total de {{count}}')
                    ]) 
                ?>
            </p>
        </div>
    </div>
</div>