<?php
use Migrations\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;

class PurposeMarriage extends AbstractMigration
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
        $table = $this->table('accounts');
        $table->addColumn('purpose', 'string', [
            'null' => true,
            'limit' => 255,
            'after' => 'avatar_status'
        ]);
        $table->addColumn('marriage', 'string', [
            'null' => true,
            'limit' => MysqlAdapter::TEXT_SMALL,
            'after' => 'avatar_status'
        ]);
        $table->update();
    }
}
