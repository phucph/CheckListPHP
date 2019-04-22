<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TabTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TabTable Test Case
 */
class TabTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TabTable
     */
    public $Tab;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::getTableLocator()->exists('Tab') ? [] : ['className' => TabTable::class];
        $this->Tab = TableRegistry::getTableLocator()->get('Tab', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tab);

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
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
