<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pais Model
 *
 * @method \App\Model\Entity\Pai get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pai newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Pai[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pai|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pai|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pai patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pai[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pai findOrCreate($search, callable $callback = null, $options = [])
 */
class PaisTable extends Table
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

        $this->setTable('pais');
        $this->entityClass('App\Model\Entity\Pais');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->scalar('nome')
            ->maxLength('nome', 55)
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->integer('cod_pais')
            ->requirePresence('cod_pais', 'create')
            ->notEmpty('cod_pais');

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

        return $rules;
    }
}
