<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FormaPagamento Model
 *
 * @property \App\Model\Table\PedidoTable|\Cake\ORM\Association\HasMany $Pedido
 *
 * @method \App\Model\Entity\FormaPagamento get($primaryKey, $options = [])
 * @method \App\Model\Entity\FormaPagamento newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FormaPagamento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FormaPagamento|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FormaPagamento|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FormaPagamento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FormaPagamento[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FormaPagamento findOrCreate($search, callable $callback = null, $options = [])
 */
class FormaPagamentoTable extends Table
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

        $this->setTable('forma_pagamento');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Pedido', [
            'foreignKey' => 'forma_pagamento_id'
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
            ->scalar('descricao')
            ->maxLength('descricao', 45)
            ->requirePresence('descricao', 'create')
            ->notEmpty('descricao');

        $validator
            ->requirePresence('juros', 'create')
            ->notEmpty('juros');

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
