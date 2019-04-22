<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ChecklistItemTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ChecklistItemTable Test Case
 */
class ChecklistItemTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ChecklistItemTable
     */
    public $ChecklistItem;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ChecklistItem',
        'app.Checklist'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ChecklistItem') ? [] : ['className' => ChecklistItemTable::class];
        $this->ChecklistItem = TableRegistry::getTableLocator()->get('ChecklistItem', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ChecklistItem);

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
