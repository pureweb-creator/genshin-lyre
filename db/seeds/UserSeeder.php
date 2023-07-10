<?php

use Phinx\Seed\AbstractSeed;

class UserSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run(): void
    {
        $data = [
            [
                'name'=>'Radiant Dreams',
                'notes'=>'sfghg / hgfdndd / sfghg / hgfddqq / wqhsh / gfdandd / sfghg / hgda / snsdndfnfgng / gfdsa / snsdndfnfg'
            ],
            [
                'name'=>'Never Gonna Give you up',
                'notes'=>'hjqqwjhg / hhjqhgttw / hjqqwjhg / hhjqhgwwwew / ghqheew / ghqhwwq / ghqhqwjhgwq / ghqheew / ghqhtjq / ghqhqwjhgwq'
            ],
            [
                'name'=>'Dawn Vinery',
                'notes'=>'dh / ee / wqw / jg / hjq / qqjhj / gd / dh / ee / wqw / jg / hjqjhjhgh / hjqfwqjqwg / jqwgejwqjq / hjqfwqjqwg / jqwgejw / q'
            ],
            [
                'name'=>'Tokyo Ghoul',
                'notes'=>'JWQJH / WQJH / HGFFGD / DDDDEW / QJJJQQ / QWQJHWQJH / HGFFGD DDDDEW / QJJJQQ / JQQQ / QEEWW / QWQJGD / JQQQ / QEEWWQ / EWWJQ / GDGG / DDSS / DDGG / DDSS / DDGG / DDSSDD / DEW / EWWWQJQJ / GEWWWQJQTJ / QYTEQJQJHJQ / QJQJG / DEWWQJQJGG / EWWQJQTJ / QYTEQJQJHJQ'
            ]
        ];

        $this->table('melodies')
            ->insert($data)
            ->save();
    }
}