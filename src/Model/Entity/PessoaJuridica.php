<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PessoaJuridica Entity
 *
 * @property int $id
 * @property string $cnpj
 * @property string $razao_social
 * @property string $fantasia
 * @property string $inscricao_estadual
 * @property int $pessoa_id
 *
 * @property \App\Model\Entity\Pessoa $pessoa
 */
class PessoaJuridica extends Entity
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
        'cnpj' => true,
        'razao_social' => true,
        'fantasia' => true,
        'inscricao_estadual' => true,
        'pessoa_id' => true,
        'pessoa' => true
    ];
}
