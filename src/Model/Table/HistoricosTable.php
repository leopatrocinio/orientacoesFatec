<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Historicos Model
 *
 * @property \App\Model\Table\TrabalhosTable&\Cake\ORM\Association\BelongsToMany $Trabalhos
 *
 * @method \App\Model\Entity\Historico newEmptyEntity()
 * @method \App\Model\Entity\Historico newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Historico[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Historico get($primaryKey, $options = [])
 * @method \App\Model\Entity\Historico findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Historico patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Historico[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Historico|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Historico saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Historico[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Historico[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Historico[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Historico[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class HistoricosTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('historicos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsToMany('Trabalhos', [
            'foreignKey' => 'historico_id',
            'targetForeignKey' => 'trabalho_id',
            'joinTable' => 'trabalhos_historicos',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->date('atualizacao')
            ->allowEmptyDate('atualizacao');

        $validator
            ->integer('conclusao')
            ->allowEmptyString('conclusao');

        return $validator;
    }
}
