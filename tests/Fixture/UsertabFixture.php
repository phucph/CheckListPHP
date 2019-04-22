<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsertabFixture
 *
 */
class UsertabFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'usertab';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'user_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tab_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        '_indexes' => [
            'tab_id' => ['type' => 'index', 'columns' => ['tab_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['user_id', 'tab_id'], 'length' => []],
            'usertab_ibfk_1' => ['type' => 'foreign', 'columns' => ['user_id'], 'references' => ['users', 'user_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'usertab_ibfk_2' => ['type' => 'foreign', 'columns' => ['tab_id'], 'references' => ['tab', 'tab_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'user_id' => 1,
                'tab_id' => 1
            ],
        ];
        parent::init();
    }
}
