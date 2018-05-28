<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PedidoProduto Model
 *
 * @property \App\Model\Table\PedidoTable|\Cake\ORM\Association\BelongsTo $Pedido
 * @property \App\Model\Table\ProdutoTable|\Cake\ORM\Association\BelongsTo $Produto
 *
 * @method \App\Model\Entity\PedidoProduto get($primaryKey, $options = [])
 * @method \App\Model\Entity\PedidoProduto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PedidoProduto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PedidoProduto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PedidoProduto|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PedidoProduto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PedidoProduto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PedidoProduto findOrCreate($search, callable $callback = null, $options = [])
 */
class PedidoProdutoTable extends Table
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

        $this->setTable('pedido_produto');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Pedido', [
            'foreignKey' => 'pedido_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Produto', [
            'foreignKey' => 'produto_id',
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
            ->requirePresence('quantidade', 'create')
            ->notEmpty('quantidade');

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
        $rules->add($rules->existsIn(['produto_id'], 'Produto'));

        return $rules;
    }
}
