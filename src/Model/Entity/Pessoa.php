<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pessoa Entity
 *
 * @property int $id
 * @property int $contato_id
 * @property int $endereco_id
 *
 * @property \App\Model\Entity\Contato $contato
 * @property \App\Model\Entity\Endereco $endereco
 * @property \App\Model\Entity\Cliente[] $cliente
 * @property \App\Model\Entity\Colaborador[] $colaborador
 * @property \App\Model\Entity\PessoaFisica[] $pessoa_fisica
 * @property \App\Model\Entity\PessoaJuridica[] $pessoa_juridica
 * @property \App\Model\Entity\Usuario[] $usuario
 */
class Pessoa extends Entity
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
        'contato_id' => true,
        'endereco_id' => true,
        'contato' => true,
        'endereco' => true,
        'cliente' => true,
        'colaborador' => true,
        'pessoa_fisica' => true,
        'pessoa_juridica' => true,
        'usuario' => true
    ];
}
