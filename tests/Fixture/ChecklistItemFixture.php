<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ChecklistItemFixture
 *
 */
class ChecklistItemFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'checklist_item';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'checklist_item_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'checklist_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'checked' => ['type' => 'integer', 'length' => 1, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'checklist_id' => ['type' => 'index', 'columns' => ['checklist_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['checklist_item_id'], 'length' => []],
            'checklist_item_ibfk_1' => ['type' => 'foreign', 'columns' => ['checklist_id'], 'references' => ['checklist', 'checklist_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_unicode_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'checklist_item_id' => 1,
                'checklist_id' => 1,
                'checked' => 1
            ],
        ];
        parent::init();
    }
}
