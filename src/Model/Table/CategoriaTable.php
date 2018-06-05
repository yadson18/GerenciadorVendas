<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Categoria Model
 *
 * @property |\Cake\ORM\Association\BelongsTo $Categoria
 *
 * @method \App\Model\Entity\Categorium get($primaryKey, $options = [])
 * @method \App\Model\Entity\Categorium newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Categorium[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Categorium|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Categorium|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Categorium patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Categorium[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Categorium findOrCreate($search, callable $callback = null, $options = [])
 */
class CategoriaTable extends Table
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

        $this->setTable('categoria');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Tree', [
            'parent' => 'categoria_pai_id', 
            'left' => 'esquerda', 
            'right' => 'direita'
        ]);
        $this->belongsTo('Categoria', [
            'foreignKey' => 'categoria_pai_id'
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
            ->maxLength('descricao', 30)
            ->requirePresence('descricao', 'create')
            ->notEmpty('descricao');

        $validator
            ->integer('direita')
            ->notEmpty('direita');

        $validator
            ->integer('esquerda')
            ->notEmpty('esquerda');

        $validator
            ->dateTime('data_criacao')
            ->notEmpty('data_criacao');

        $validator
            ->dateTime('data_alteracao')
            ->notEmpty('data_alteracao');

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
        $rules->add($rules->existsIn(['categoria_pai_id'], 'Categoria'));

        return $rules;
    }

    public function findProdutosPorCategoria(Query $consulta)
    {
        return $consulta->select([
            'id' => 'Categoria.id',
            'descricao' => $consulta->func()->concat([
                'Categoria.descricao' => 'identifier', 
                ' (', $consulta->func()->count('Produto.id'), ')'
            ])
        ])
        ->leftJoin(['Produto' => 'produto'], 'Produto.categoria_id = Categoria.id')
        ->group(['Categoria.id']);
    }
}
