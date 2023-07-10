<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class InitialMigration extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        if (!$this->hasTable('melodies')){
            $this->table('melodies')
                ->addColumn('name', 'string', ['null'=>false, 'limit'=>'30'])
                ->addColumn('notes', 'string', ['null'=>false])
                ->create();
        }
    }
}
