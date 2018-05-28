<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Estado Entity
 *
 * @property int $id
 * @property string $sigla
 * @property string $nome
 * @property int $cod_estado
 * @property int $pais_id
 *
 * @property \App\Model\Entity\Pai $pai
 * @property \App\Model\Entity\Cidade[] $cidade
 * @property \App\Model\Entity\Endereco[] $endereco
 */
class Estado extends Entity
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
        'sigla' => true,
        'nome' => true,
        'cod_estado' => true,
        'pais_id' => true,
        'pais' => true,
        'cidade' => true,
        'endereco' => true
    ];
}
