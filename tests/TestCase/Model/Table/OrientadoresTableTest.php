<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrientadoresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrientadoresTable Test Case
 */
class OrientadoresTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OrientadoresTable
     */
    protected $Orientadores;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Orientadores',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Orientadores') ? [] : ['className' => OrientadoresTable::class];
        $this->Orientadores = TableRegistry::getTableLocator()->get('Orientadores', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Orientadores);

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
