<?php
use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class PointsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 0,
                'male' => true,
                'initialPoints' => 0,
                'sendMessage' => 0,
                'readMessage' => 0,
                'sendImage' => 0
            ],
            [
                'id' => 1,
                'male' => false,
                'initialPoints' => 0,
                'sendMessage' => 0,
                'readMessage' => 0,
                'sendImage' => 0
            ],
        ];

        $table = $this->table('points');
        $table->insert($data)->save();
    }
}
