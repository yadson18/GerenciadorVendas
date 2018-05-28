<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Parcela Model
 *
 * @property \App\Model\Table\PedidoTable|\Cake\ORM\Association\BelongsTo $Pedido
 *
 * @method \App\Model\Entity\Parcela get($primaryKey, $options = [])
 * @method \App\Model\Entity\Parcela newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Parcela[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Parcela|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Parcela|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Parcela patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Parcela[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Parcela findOrCreate($search, callable $callback = null, $options = [])
 */
class ParcelaTable extends Table
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

        $this->setTable('parcela');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Pedido', [
            'foreignKey' => 'pedido_id',
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
            ->date('data_vencimento')
            ->requirePresence('data_vencimento', 'create')
            ->notEmpty('data_vencimento');

        $validator
            ->date('data_pagamento')
            ->allowEmpty('data_pagamento');

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
        $rules->add($rules->existsIn(['pedido_id'], 'Pedido'));

        return $rules;
    }
}
