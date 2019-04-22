<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TabfileTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TabfileTable Test Case
 */
class TabfileTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TabfileTable
     */
    public $Tabfile;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Tabfile',
        'app.File',
        'app.Tab'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Tabfile') ? [] : ['className' => TabfileTable::class];
        $this->Tabfile = TableRegistry::getTableLocator()->get('Tabfile', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tabfile);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
