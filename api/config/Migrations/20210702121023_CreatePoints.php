<?php
use Migrations\AbstractMigration;

class CreatePoints extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('points');
        $table->addColumn("male", "boolean", [
            "default" => true,
            "null" => true
        ]);
        $table->addColumn("initialPoints", "integer", [
            "default" => 0,
            "null" => true
        ]);
        $table->addColumn("sendMessage", "integer", [
            "default" => 0,
            "null" => true
        ]);
        $table->addColumn("readMessage", "integer", [
            "default" => 0,
            "null" => true
        ]);
        $table->addColumn("sendImage", "integer", [
            "default" => 0,
            "null" => true
        ]);
        $table->create();
    }
}
