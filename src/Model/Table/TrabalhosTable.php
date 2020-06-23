<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Trabalhos Model
 *
 * @property \App\Model\Table\FormatosTable&\Cake\ORM\Association\BelongsTo $Formatos
 * @property \App\Model\Table\AlunosTable&\Cake\ORM\Association\BelongsTo $Alunos
 * @property \App\Model\Table\HistoricosTable&\Cake\ORM\Association\BelongsToMany $Historicos
 *
 * @method \App\Model\Entity\Trabalho newEmptyEntity()
 * @method \App\Model\Entity\Trabalho newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Trabalho[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Trabalho get($primaryKey, $options = [])
 * @method \App\Model\Entity\Trabalho findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Trabalho patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Trabalho[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Trabalho|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Trabalho saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Trabalho[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Trabalho[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Trabalho[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Trabalho[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class TrabalhosTable extends Table
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

        $this->setTable('trabalhos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Formatos', [
            'foreignKey' => 'formato_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Alunos', [
            'foreignKey' => 'aluno_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsToMany('Historicos', [
            'foreignKey' => 'trabalho_id',
            'targetForeignKey' => 'historico_id',
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
            ->scalar('titulo')
            ->maxLength('titulo', 200)
            ->allowEmptyString('titulo');

        $validator
            ->date('entrega_anteprojeto')
            ->allowEmptyDate('entrega_anteprojeto');

        $validator
            ->date('previsao')
            ->allowEmptyDate('previsao');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['formato_id'], 'Formatos'));
        $rules->add($rules->existsIn(['aluno_id'], 'Alunos'));

        return $rules;
    }
}
