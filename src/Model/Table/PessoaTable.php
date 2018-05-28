<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pessoa Model
 *
 * @property \App\Model\Table\ContatoTable|\Cake\ORM\Association\BelongsTo $Contato
 * @property \App\Model\Table\EnderecoTable|\Cake\ORM\Association\BelongsTo $Endereco
 * @property \App\Model\Table\ClienteTable|\Cake\ORM\Association\HasMany $Cliente
 * @property \App\Model\Table\ColaboradorTable|\Cake\ORM\Association\HasMany $Colaborador
 * @property \App\Model\Table\PessoaFisicaTable|\Cake\ORM\Association\HasMany $PessoaFisica
 * @property \App\Model\Table\PessoaJuridicaTable|\Cake\ORM\Association\HasMany $PessoaJuridica
 * @property \App\Model\Table\UsuarioTable|\Cake\ORM\Association\HasMany $Usuario
 *
 * @method \App\Model\Entity\Pessoa get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pessoa newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Pessoa[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pessoa|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pessoa|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pessoa patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pessoa[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pessoa findOrCreate($search, callable $callback = null, $options = [])
 */
class PessoaTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('pessoa');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Contato', [
            'foreignKey' => 'contato_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Endereco', [
            'foreignKey' => 'endereco_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Cliente', [
            'foreignKey' => 'pessoa_id'
        ]);
        $this->hasMany('Colaborador', [
            'foreignKey' => 'pessoa_id'
        ]);
        $this->hasMany('PessoaFisica', [
            'foreignKey' => 'pessoa_id'
        ]);
        $this->hasMany('PessoaJuridica', [
            'foreignKey' => 'pessoa_id'
        ]);
        $this->hasMany('Usuario', [
            'foreignKey' => 'pessoa_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create')
            ->add('id', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['id']));
        $rules->add($rules->existsIn(['contato_id'], 'Contato'));
        $rules->add($rules->existsIn(['endereco_id'], 'Endereco'));

        return $rules;
    }
}
