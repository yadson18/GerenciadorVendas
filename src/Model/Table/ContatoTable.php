<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Contato Model
 *
 * @property \App\Model\Table\PessoaTable|\Cake\ORM\Association\HasMany $Pessoa
 *
 * @method \App\Model\Entity\Contato get($primaryKey, $options = [])
 * @method \App\Model\Entity\Contato newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Contato[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Contato|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contato|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contato patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Contato[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Contato findOrCreate($search, callable $callback = null, $options = [])
 */
class ContatoTable extends Table
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

        $this->setTable('contato');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Pessoa', [
            'foreignKey' => 'contato_id'
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
            ->scalar('telefone')
            ->maxLength('telefone', 10)
            ->allowEmpty('telefone');

        $validator
            ->scalar('celular')
            ->maxLength('celular', 11)
            ->requirePresence('celular', 'create')
            ->notEmpty('celular');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email')
            ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->isUnique(['id']));

        return $rules;
    }
}
