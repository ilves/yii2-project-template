<?php

use yii\db\Migration;

class m161009_061455_init extends Migration
{
    public function up()
    {
        $this->createTable('cache', [
            'id' => 'char(128) NOT NULL PRIMARY KEY',
            'expire' => 'INT(11)',
            'data' => 'LONGBLOB'
        ]);
    }

    public function down()
    {
        $this->dropTable('cache');
    }
}
