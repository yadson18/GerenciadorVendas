<div id='produto-index' class='container-fluid'>
    <div class='page-header'>
        <a href='/produto/add' class='btn btn-success'>
             Novo Produto <i class='fas fa-plus-circle'></i>
        </a>
    </div>
    <div class='row'>
        <div class='filter col-sm-3 hidden-xs'>
            <div class='filter-header'>
                <h3 class='text-center'>Categorias</h3>
            </div>
            <div class='filter-body'>
                <div class='checkbox'>
                    <?php foreach ($categoria as $categoria): ?>
                        <div class='checkbox'>
                            <label>
                                <?= $this->Form->control($categoria->descricao, [
                                    'value' => $categoria->id,
                                    'name' => 'categoria[]',
                                    'type' => 'checkbox',
                                    'checked' => (isset($filtro['categoria']) && in_array($categoria->id, $filtro['categoria'])) ? true : false
                                ]) ?>
                            </label>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class='col-sm-9 col-xs-12'>
            <div class='row'>
                <div class='message-box col-sm-12'>
                    <?= $this->Flash->render() ?>  
                </div>
                <?php foreach ($produto as $produto): ?>
                    <div class='col-md-4 col-sm-6'>
                        <div class='card-product'>
                            <div class='product-image'> 
                                <?php if (is_file(WWW_ROOT . 'img' . DS . $produto->caminho_imagem)): ?>
                                    <?= $this->Html->image($produto->caminho_imagem, [
                                            'class' => 'img-responsive'
                                        ]) 
                                    ?>
                                <?php else: ?>
                                    <?= $this->Html->image('produtos/sem-imagem.gif', [
                                            'class' => 'img-responsive'
                                        ]) 
                                    ?>
                                <?php endif ?>
                            </div>
                            <div class='product-content text-center'>
                                <p class='product-name'>
                                    <?= ucfirst(h($produto->nome)) ?>
                                </p>
                                <p class='product-description'>
                                    <?= h($produto->descricao) ?>
                                </p>
                                <p class='product-price'>
                                    <?= $this->Number->currency($produto->valor_venda) ?>
                                </p>
                                <p class='product-quantity'>
                                    <?= __('Disponíveis:') ?> 
                                    <span class=<?= ($produto->quantidade_estoque < 4) ? 'low-quantity' : '' ?>>
                                        <?= $this->Number->format($produto->quantidade_estoque) ?>
                                    </span>
                                </p>
                            </div>
                            <div>
                                <a href=/produto/view/<?= $produto->id ?> class='btn btn-primary btn-block'>
                                    <?= __('Detalhes') ?> <i class='fas fa-angle-double-right'></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
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