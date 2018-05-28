<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Colaborador Model
 *
 * @property \App\Model\Table\PessoaTable|\Cake\ORM\Association\BelongsTo $Pessoa
 *
 * @method \App\Model\Entity\Colaborador get($primaryKey, $options = [])
 * @method \App\Model\Entity\Colaborador newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Colaborador[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Colaborador|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Colaborador|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Colaborador patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Colaborador[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Colaborador findOrCreate($search, callable $callback = null, $options = [])
 */
class ColaboradorTable extends Table
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

        $this->setTable('colaborador');
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
            ->integer('criado_por')
            ->requirePresence('criado_por', 'create')
            ->notEmpty('criado_por');

        $validator
            ->dateTime('data_criacao')
            ->requirePresence('data_criacao', 'create')
            ->notEmpty('data_criacao');

        $validator
            ->integer('alterado_por')
            ->requirePresence('alterado_por', 'create')
            ->notEmpty('alterado_por');

        $validator
            ->dateTime('data_alteracao')
            ->requirePresence('data_alteracao', 'create')
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
        $rules->add($rules->existsIn(['pessoa_id'], 'Pessoa'));

        return $rules;
    }
}
