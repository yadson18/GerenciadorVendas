<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pedido Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime $data_pedido
 * @property float $valor_pedido
 * @property int $forma_pagamento_id
 * @property int $encomendado_por
 * @property int $despachado_por
 *
 * @property \App\Model\Entity\FormaPagamento $forma_pagamento
 * @property \App\Model\Entity\Parcela[] $parcela
 * @property \App\Model\Entity\Produto[] $produto
 */
class Pedido extends Entity
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
        'data_pedido' => true,
        'valor_pedido' => true,
        'forma_pagamento_id' => true,
        'encomendado_por' => true,
        'despachado_por' => true,
        'forma_pagamento' => true,
        'parcela' => true,
        'produto' => true
    ];
}
