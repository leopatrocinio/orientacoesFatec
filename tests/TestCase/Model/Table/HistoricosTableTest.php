<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HistoricosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HistoricosTable Test Case
 */
class HistoricosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\HistoricosTable
     */
    protected $Historicos;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Historicos',
        'app.Trabalhos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Historicos') ? [] : ['className' => HistoricosTable::class];
        $this->Historicos = TableRegistry::getTableLocator()->get('Historicos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Historicos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
