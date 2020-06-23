<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TrabalhosHistoricos Model
 *
 * @property \App\Model\Table\TrabalhosTable&\Cake\ORM\Association\BelongsTo $Trabalhos
 * @property \App\Model\Table\HistoricosTable&\Cake\ORM\Association\BelongsTo $Historicos
 *
 * @method \App\Model\Entity\TrabalhosHistorico newEmptyEntity()
 * @method \App\Model\Entity\TrabalhosHistorico newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\TrabalhosHistorico[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TrabalhosHistorico get($primaryKey, $options = [])
 * @method \App\Model\Entity\TrabalhosHistorico findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\TrabalhosHistorico patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TrabalhosHistorico[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\TrabalhosHistorico|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TrabalhosHistorico saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TrabalhosHistorico[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TrabalhosHistorico[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\TrabalhosHistorico[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TrabalhosHistorico[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class TrabalhosHistoricosTable extends Table
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

        $this->setTable('trabalhos_historicos');
        $this->setDisplayField('trabalho_id');
        $this->setPrimaryKey(['trabalho_id', 'historico_id']);

        $this->belongsTo('Trabalhos', [
            'foreignKey' => 'trabalho_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Historicos', [
            'foreignKey' => 'historico_id',
            'joinType' => 'INNER',
        ]);
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
        $rules->add($rules->existsIn(['trabalho_id'], 'Trabalhos'));
        $rules->add($rules->existsIn(['historico_id'], 'Historicos'));

        return $rules;
    }
}
