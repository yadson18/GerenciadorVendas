<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Usuario Entity
 *
 * @property int $id
 * @property string $login
 * @property string $senha
 * @property \Cake\I18n\FrozenDate $data_criacao
 * @property \Cake\I18n\FrozenDate $data_alteracao
 * @property int $pessoa_id
 *
 * @property \App\Model\Entity\Pessoa $pessoa
 */
class Usuario extends Entity
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
        'login' => true,
        'senha' => true,
        'data_criacao' => true,
        'data_alteracao' => true,
        'pessoa_id' => true,
        'pessoa' => true
    ];
}
