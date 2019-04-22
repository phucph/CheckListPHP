<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsertabTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsertabTable Test Case
 */
class UsertabTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UsertabTable
     */
    public $Usertab;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Usertab',
        'app.Users',
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
        $config = TableRegistry::getTableLocator()->exists('Usertab') ? [] : ['className' => UsertabTable::class];
        $this->Usertab = TableRegistry::getTableLocator()->get('Usertab', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Usertab);

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
