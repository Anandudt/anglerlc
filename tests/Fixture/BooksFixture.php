<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BooksFixture
 *
 */
class BooksFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'book_name' => ['type' => 'string', 'length' => 200, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'pub_id' => ['type' => 'integer', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'aut_id' => ['type' => 'integer', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'volume' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'category' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'subcategory' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'price' => ['type' => 'float', 'length' => 20, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => '0.00', 'comment' => ''],
        'pub_date' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'aut_id' => ['type' => 'index', 'columns' => ['aut_id'], 'length' => []],
            'pub_id' => ['type' => 'index', 'columns' => ['pub_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'books_ibfk_1' => ['type' => 'foreign', 'columns' => ['aut_id'], 'references' => ['author', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'books_ibfk_2' => ['type' => 'foreign', 'columns' => ['pub_id'], 'references' => ['publishers', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'book_name' => 'Lorem ipsum dolor sit amet',
            'pub_id' => 1,
            'aut_id' => 1,
            'volume' => 'Lorem ip',
            'category' => 'Lorem ipsum dolor sit amet',
            'subcategory' => 'Lorem ipsum dolor sit amet',
            'price' => 1,
            'pub_date' => '2021-10-27'
        ],
    ];
}
