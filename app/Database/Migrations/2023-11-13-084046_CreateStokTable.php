<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateStokTable extends Migration
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
            'nama'=>[
                'type'=> 'VARCHAR',
                'constraint'=> '50',
            ],
            'stok'=>[
                'type'=> 'int',
                'constraint'=> '10',
            ]
        ]);
        $this->forge->addKey('id', true, true);
        $this->forge->createTable('stok');
    }

    public function down()
    {
        $this->forge->dropTable('stok', true);
    }
}
