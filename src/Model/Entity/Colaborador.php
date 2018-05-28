<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Colaborador Entity
 *
 * @property int $id
 * @property int $criado_por
 * @property \Cake\I18n\FrozenTime $data_criacao
 * @property int $alterado_por
 * @property \Cake\I18n\FrozenTime $data_alteracao
 * @property int $pessoa_id
 *
 * @property \App\Model\Entity\Pessoa $pessoa
 */
class Colaborador extends Entity
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
        'criado_por' => true,
        'data_criacao' => true,
        'alterado_por' => true,
        'data_alteracao' => true,
        'pessoa_id' => true,
        'pessoa' => true
    ];
}
