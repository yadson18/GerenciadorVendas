<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Estado Model
 *
 * @property \App\Model\Table\PaisTable|\Cake\ORM\Association\BelongsTo $Pais
 * @property \App\Model\Table\CidadeTable|\Cake\ORM\Association\HasMany $Cidade
 * @property \App\Model\Table\EnderecoTable|\Cake\ORM\Association\HasMany $Endereco
 *
 * @method \App\Model\Entity\Estado get($primaryKey, $options = [])
 * @method \App\Model\Entity\Estado newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Estado[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Estado|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Estado|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Estado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Estado[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Estado findOrCreate($search, callable $callback = null, $options = [])
 */
class EstadoTable extends Table
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

        $this->setTable('estado');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Pais', [
            'foreignKey' => 'pais_id'
        ]);
        $this->hasMany('Cidade', [
            'foreignKey' => 'estado_id'
        ]);
        $this->hasMany('Endereco', [
            'foreignKey' => 'estado_id'
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
            ->scalar('sigla')
            ->maxLength('sigla', 2)
            ->requirePresence('sigla', 'create')
            ->notEmpty('sigla');

        $validator
            ->scalar('nome')
            ->maxLength('nome', 30)
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->integer('cod_estado')
            ->requirePresence('cod_estado', 'create')
            ->notEmpty('cod_estado');

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
        $rules->add($rules->existsIn(['pais_id'], 'Pais'));

        return $rules;
    }
}
