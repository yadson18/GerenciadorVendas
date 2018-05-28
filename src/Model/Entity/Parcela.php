<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Parcela Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate $data_vencimento
 * @property \Cake\I18n\FrozenDate $data_pagamento
 * @property int $pedido_id
 *
 * @property \App\Model\Entity\Pedido $pedido
 */
class Parcela extends Entity
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
        'data_vencimento' => true,
        'data_pagamento' => true,
        'pedido_id' => true,
        'pedido' => true
    ];
}
