<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Produto Entity
 *
 * @property int $id
 * @property string $codigo_produto
 * @property string $nome
 * @property string $descricao
 * @property int $quantidade_estoque
 * @property float $valor_compra
 * @property float $valor_venda
 * @property string $caminho_imagem
 * @property int $criado_por
 * @property \Cake\I18n\FrozenTime $data_criacao
 * @property int $alterado_por
 * @property \Cake\I18n\FrozenTime $data_alteracao
 * @property int $categoria_id
 *
 * @property \App\Model\Entity\Categorium $categorium
 * @property \App\Model\Entity\Pedido[] $pedido
 */
class Produto extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'codigo_produto' => true,
        'nome' => true,
        'descricao' => true,
        'quantidade_estoque' => true,
        'valor_compra' => true,
        'valor_venda' => true,
        'caminho_imagem' => true,
        'criado_por' => true,
        'data_criacao' => true,
        'alterado_por' => true,
        'data_alteracao' => true,
        'categoria_id' => true,
        'categorium' => true,
        'pedido' => true
    ];
}
