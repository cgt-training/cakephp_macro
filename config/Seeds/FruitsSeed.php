<?php
use Migrations\AbstractSeed;

/**
 * Fruits seed.
 */
class FruitsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [   
                    [  'id' => 'Abc1',
                       'name' => 'test1', 
                       'description' => 'This is a products table', 
                       'created' => '2016-05-13 13:06:18',
                       'modified' => '2016-05-13 13:06:18'
                    ],
                    [  'id' => 'Abc2',
                       'name' => 'test2', 
                       'description' => 'This is a products table', 
                       'created' => '2016-05-13 13:06:18',
                       'modified' => '2016-05-13 13:06:18'
                    ],
                    [  'id' => 'Abc3',
                       'name' => 'test3', 
                       'description' => 'This is a products table', 
                       'created' => '2016-05-13 13:06:18',
                       'modified' => '2016-05-13 13:06:18'
                    ],
                ];

        $table = $this->table('fruits');
        $table->insert($data)->save();
    }
}

