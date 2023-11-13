<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableUser extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>[
                'type'=> 'int',
                'constraint'=> 5,
                'unsigned'=> true,
                'auto_increment'=> true,
            ],
            'email'=>[
                'type'=> 'VARCHAR',
                'constraint'=> '50',
            ],
            'username'=>[
                'type'=> 'VARCHAR',
                'constraint'=> '10',
            ],
            'password'=>[
                'type'=> 'VARCHAR',
                'constraint'=> '10',
            ],
        ]);
        $this->forge->addKey('id', true, true);
        $this->forge->createTable('user');
    }

    public function down()
    {
        $this->forge->dropTable('user', true);
    }
}
