<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Endereco Model
 *
 * @property \App\Model\Table\PaisTable|\Cake\ORM\Association\BelongsTo $Pais
 * @property \App\Model\Table\EstadoTable|\Cake\ORM\Association\BelongsTo $Estado
 * @property \App\Model\Table\CidadeTable|\Cake\ORM\Association\BelongsTo $Cidade
 * @property \App\Model\Table\PessoaTable|\Cake\ORM\Association\HasMany $Pessoa
 *
 * @method \App\Model\Entity\Endereco get($primaryKey, $options = [])
 * @method \App\Model\Entity\Endereco newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Endereco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Endereco|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Endereco|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Endereco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Endereco[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Endereco findOrCreate($search, callable $callback = null, $options = [])
 */
class EnderecoTable extends Table
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

        $this->setTable('endereco');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Pais', [
            'foreignKey' => 'pais_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Estado', [
            'foreignKey' => 'estado_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Cidade', [
            'foreignKey' => 'cidade_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Pessoa', [
            'foreignKey' => 'endereco_id'
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
            ->scalar('cep')
            ->maxLength('cep', 8)
            ->requirePresence('cep', 'create')
            ->notEmpty('cep');

        $validator
            ->scalar('bairro')
            ->maxLength('bairro', 45)
            ->requirePresence('bairro', 'create')
            ->notEmpty('bairro');

        $validator
            ->scalar('endereco')
            ->maxLength('endereco', 55)
            ->requirePresence('endereco', 'create')
            ->notEmpty('endereco');

        $validator
            ->scalar('numero')
            ->maxLength('numero', 6)
            ->allowEmpty('numero');

        $validator
            ->scalar('complemento')
            ->maxLength('complemento', 60)
            ->allowEmpty('complemento');

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
        $rules->add($rules->existsIn(['estado_id'], 'Estado'));
        $rules->add($rules->existsIn(['cidade_id'], 'Cidade'));

        return $rules;
    }
}
