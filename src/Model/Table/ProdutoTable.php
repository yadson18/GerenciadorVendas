<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Filesystem\File;

/**
 * Produto Model
 *
 * @property \App\Model\Table\CategoriaTable|\Cake\ORM\Association\BelongsTo $Categoria
 * @property \App\Model\Table\PedidoTable|\Cake\ORM\Association\BelongsToMany $Pedido
 *
 * @method \App\Model\Entity\Produto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Produto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Produto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Produto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Produto|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Produto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Produto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Produto findOrCreate($search, callable $callback = null, $options = [])
 */
class ProdutoTable extends Table
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

        $this->setTable('produto');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Categoria', [
            'foreignKey' => 'categoria_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsToMany('Pedido', [
            'foreignKey' => 'produto_id',
            'targetForeignKey' => 'pedido_id',
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
            ->scalar('codigo_produto')
            ->maxLength('codigo_produto', 25)
            ->requirePresence('codigo_produto', 'create')
            ->notEmpty('codigo_produto');

        $validator
            ->scalar('nome')
            ->maxLength('nome', 50)
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->scalar('descricao')
            ->allowEmpty('descricao');

        $validator
            ->requirePresence('quantidade_estoque', 'create')
            ->notEmpty('quantidade_estoque');

        $validator
            ->decimal('valor_compra')
            ->requirePresence('valor_compra', 'create')
            ->notEmpty('valor_compra');

        $validator
            ->decimal('valor_venda')
            ->requirePresence('valor_venda', 'create')
            ->notEmpty('valor_venda');

        $validator
            ->scalar('caminho_imagem')
            ->maxLength('caminho_imagem', 200)
            ->allowEmpty('caminho_imagem');

        $validator
            ->integer('criado_por')
            ->requirePresence('criado_por', 'create')
            ->notEmpty('criado_por');

        $validator
            ->dateTime('data_criacao')
            ->allowEmpty('data_criacao');

        $validator
            ->integer('alterado_por')
            ->requirePresence('alterado_por', 'create')
            ->notEmpty('alterado_por');

        $validator
            ->dateTime('data_alteracao')
            ->allowEmpty('data_alteracao');

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
        $rules->add($rules->existsIn(['categoria_id'], 'Categoria'));

        return $rules;
    }

    public function findEstatisticaBasica(Query $consulta)
    {
        return $consulta->select([
            'cadastradosTotal' => $consulta->func()->count('id'),
            'cadastradosHoje' => $consulta->func()->count(
                $consulta->newExpr()->addCase(
                    $consulta->newExpr()->add(['date(data_criacao)' => date('Y-m-d')])
                )
            )
        ]);
    }

    public function validarImagem(array $imagem)
    {
        if (isset($imagem['error']) && $imagem['error'] === 0) {
            $imagem = new File($imagem['tmp_name']);

            if ($imagem->exists()) {
                if ($imagem->size() <= 300000) {  
                    $mime = explode('/', $imagem->mime());

                    if (array_shift($mime) === 'image') {
                        $ext = array_shift($mime);
                        
                        return [
                            'erro' => false,
                            'nome' => rand() . '-' . date('dmY-His') . '.' . $ext,
                            'destino' =>  'produtos' . DS,
                            'imagem_tmp' => $imagem
                        ];
                    }
                    return [
                        'erro' => true,
                        'mensagem' => 'Por favor, selecione uma imagem válida.'
                    ];
                }
                return [
                    'erro' => true,
                    'mensagem' => 'O tamanho da imagem, não pode ser superior a (3Mb).'
                ];
            }
            return [
                'erro' => false,
                'nome_imagem' => 'sem-imagem',
                'destino' =>  'produtos' . DS . '.gif'
            ];
        }
        return [
            'erro' => true,
            'mensagem' => 'O tipo do arquivo é inválido ou o tamanho do arquivo é superior a (3Mb).'
        ];
    }

    public function uploadImagem(array $imagem)
    {
        $destino = WWW_ROOT . 'img' . DS . $imagem['destino'];

        if (is_dir($destino)) {
            $imagem_tmp = $imagem['imagem_tmp']->path;
            $destino .= $imagem['nome'];

            if (move_uploaded_file($imagem_tmp,  $destino)) {
                return true;
            }
        }
        return false;
    }
}
