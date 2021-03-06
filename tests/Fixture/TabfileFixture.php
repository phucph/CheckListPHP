<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TabfileFixture
 *
 */
class TabfileFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'tabfile';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'file_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tab_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'tab_id' => ['type' => 'index', 'columns' => ['tab_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['file_id', 'tab_id'], 'length' => []],
            'tabfile_ibfk_1' => ['type' => 'foreign', 'columns' => ['file_id'], 'references' => ['file', 'file_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'tabfile_ibfk_2' => ['type' => 'foreign', 'columns' => ['tab_id'], 'references' => ['tab', 'tab_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'file_id' => 1,
                'tab_id' => 1
            ],
        ];
        parent::init();
    }
}
