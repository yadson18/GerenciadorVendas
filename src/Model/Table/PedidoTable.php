<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pedido Model
 *
 * @property \App\Model\Table\FormaPagamentoTable|\Cake\ORM\Association\BelongsTo $FormaPagamento
 * @property \App\Model\Table\ParcelaTable|\Cake\ORM\Association\HasMany $Parcela
 * @property \App\Model\Table\ProdutoTable|\Cake\ORM\Association\BelongsToMany $Produto
 *
 * @method \App\Model\Entity\Pedido get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pedido newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Pedido[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pedido|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pedido|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pedido patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pedido[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pedido findOrCreate($search, callable $callback = null, $options = [])
 */
class PedidoTable extends Table
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

        $this->setTable('pedido');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('FormaPagamento', [
            'foreignKey' => 'forma_pagamento_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Parcela', [
            'foreignKey' => 'pedido_id'
        ]);
        $this->belongsToMany('Produto', [
            'foreignKey' => 'pedido_id',
            'targetForeignKey' => 'produto_id',
            'joinTable' => 'pedido_produto'
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
            ->dateTime('data_pedido')
            ->requirePresence('data_pedido', 'create')
            ->notEmpty('data_pedido');

        $validator
            ->decimal('valor_pedido')
            ->requirePresence('valor_pedido', 'create')
            ->notEmpty('valor_pedido');

        $validator
            ->integer('encomendado_por')
            ->requirePresence('encomendado_por', 'create')
            ->notEmpty('encomendado_por');

        $validator
            ->integer('despachado_por')
            ->requirePresence('despachado_por', 'create')
            ->notEmpty('despachado_por');

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
        $rules->add($rules->existsIn(['forma_pagamento_id'], 'FormaPagamento'));

        return $rules;
    }
}
