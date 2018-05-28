<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PessoaFisica Model
 *
 * @property \App\Model\Table\PessoaTable|\Cake\ORM\Association\BelongsTo $Pessoa
 *
 * @method \App\Model\Entity\PessoaFisica get($primaryKey, $options = [])
 * @method \App\Model\Entity\PessoaFisica newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PessoaFisica[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PessoaFisica|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PessoaFisica|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PessoaFisica patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PessoaFisica[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PessoaFisica findOrCreate($search, callable $callback = null, $options = [])
 */
class PessoaFisicaTable extends Table
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

        $this->setTable('pessoa_fisica');
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
            ->scalar('rg')
            ->maxLength('rg', 9)
            ->requirePresence('rg', 'create')
            ->notEmpty('rg')
            ->add('rg', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('cpf')
            ->maxLength('cpf', 11)
            ->requirePresence('cpf', 'create')
            ->notEmpty('cpf')
            ->add('cpf', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('nome')
            ->maxLength('nome', 60)
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->date('data_nascimento')
            ->requirePresence('data_nascimento', 'create')
            ->notEmpty('data_nascimento');

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
        $rules->add($rules->isUnique(['cpf']));
        $rules->add($rules->existsIn(['pessoa_id'], 'Pessoa'));
        $rules->add($rules->isUnique(['rg']));

        return $rules;
    }
}
