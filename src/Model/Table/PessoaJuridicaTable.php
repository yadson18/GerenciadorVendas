<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PessoaJuridica Model
 *
 * @property \App\Model\Table\PessoaTable|\Cake\ORM\Association\BelongsTo $Pessoa
 *
 * @method \App\Model\Entity\PessoaJuridica get($primaryKey, $options = [])
 * @method \App\Model\Entity\PessoaJuridica newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PessoaJuridica[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PessoaJuridica|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PessoaJuridica|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PessoaJuridica patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PessoaJuridica[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PessoaJuridica findOrCreate($search, callable $callback = null, $options = [])
 */
class PessoaJuridicaTable extends Table
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

        $this->setTable('pessoa_juridica');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Pessoa', [
            'foreignKey' => 'pessoa_id',
            'joinType' => 'INNER'
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

        $validator
            ->scalar('cnpj')
            ->maxLength('cnpj', 14)
            ->requirePresence('cnpj', 'create')
            ->notEmpty('cnpj')
            ->add('cnpj', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('razao_social')
            ->maxLength('razao_social', 50)
            ->requirePresence('razao_social', 'create')
            ->notEmpty('razao_social');

        $validator
            ->scalar('fantasia')
            ->maxLength('fantasia', 50)
            ->requirePresence('fantasia', 'create')
            ->notEmpty('fantasia');

        $validator
            ->scalar('inscricao_estadual')
            ->maxLength('inscricao_estadual', 9)
            ->requirePresence('inscricao_estadual', 'create')
            ->notEmpty('inscricao_estadual');

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
        $rules->add($rules->isUnique(['cnpj']));
        $rules->add($rules->existsIn(['pessoa_id'], 'Pessoa'));

        return $rules;
    }
}
