<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TrabalhosHistoricosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TrabalhosHistoricosTable Test Case
 */
class TrabalhosHistoricosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TrabalhosHistoricosTable
     */
    protected $TrabalhosHistoricos;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.TrabalhosHistoricos',
        'app.Trabalhos',
        'app.Historicos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TrabalhosHistoricos') ? [] : ['className' => TrabalhosHistoricosTable::class];
        $this->TrabalhosHistoricos = TableRegistry::getTableLocator()->get('TrabalhosHistoricos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->TrabalhosHistoricos);

        parent::tearDown();
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
