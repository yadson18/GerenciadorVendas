<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Endereco Entity
 *
 * @property int $id
 * @property string $cep
 * @property string $bairro
 * @property string $endereco
 * @property string $numero
 * @property string $complemento
 * @property int $pais_id
 * @property int $estado_id
 * @property int $cidade_id
 *
 * @property \App\Model\Entity\Pai $pai
 * @property \App\Model\Entity\Estado $estado
 * @property \App\Model\Entity\Cidade $cidade
 * @property \App\Model\Entity\Pessoa[] $pessoa
 */
class Endereco extends Entity
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
        'cep' => true,
        'bairro' => true,
        'endereco' => true,
        'numero' => true,
        'complemento' => true,
        'pais_id' => true,
        'estado_id' => true,
        'cidade_id' => true,
        'pai' => true,
        'estado' => true,
        'cidade' => true,
        'pessoa' => true
    ];
}
