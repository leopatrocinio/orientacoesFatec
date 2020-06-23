<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TrabalhosHistoricosFixture
 */
class TrabalhosHistoricosFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'trabalho_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'historico_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_trabalhos_has_historicos_historicos1_idx' => ['type' => 'index', 'columns' => ['historico_id'], 'length' => []],
            'fk_trabalhos_has_historicos_trabalhos1_idx' => ['type' => 'index', 'columns' => ['trabalho_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['trabalho_id', 'historico_id'], 'length' => []],
            'fk_trabalhos_has_historicos_historicos1' => ['type' => 'foreign', 'columns' => ['historico_id'], 'references' => ['historicos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_trabalhos_has_historicos_trabalhos1' => ['type' => 'foreign', 'columns' => ['trabalho_id'], 'references' => ['trabalhos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_general_ci'
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'trabalho_id' => 1,
                'historico_id' => 1,
            ],
        ];
        parent::init();
    }
}
