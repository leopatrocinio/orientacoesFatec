<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FormatosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FormatosTable Test Case
 */
class FormatosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FormatosTable
     */
    protected $Formatos;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Formatos',
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
        $config = TableRegistry::getTableLocator()->exists('Formatos') ? [] : ['className' => FormatosTable::class];
        $this->Formatos = TableRegistry::getTableLocator()->get('Formatos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Formatos);

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
